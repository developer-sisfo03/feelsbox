<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Google\Client;
use Google\Service\Calendar;
use Google\Service\Calendar\Event;
use App\Models\konsultasi;

use Illuminate\Http\Request;

class GoogleCalenderController extends Controller
{

    private $calendarId = 'ttj3fh1pdlnp1qhtni1hhc132k@group.calendar.google.com';
    
    function getClient()
    {
        $client = new Client();
        $client->setApplicationName('Google Calendar API PHP Quickstart');
        $client->setScopes('https://www.googleapis.com/auth/calendar');
        $client->setAuthConfig(storage_path('app/google-calendar/credentials.json'));
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');
    
        // Load previously authorized token from a file, if it exists.
        // The file token.json stores the user's access and refresh tokens, and is
        // created automatically when the authorization flow completes for the first
        // time.
        $tokenPath = storage_path('app/google-calendar/token.json');
        if (file_exists($tokenPath)) {
            $accessToken = json_decode(file_get_contents($tokenPath), true);
            $client->setAccessToken($accessToken);
        }
    
        // If there is no previous token or it's expired.
        if ($client->isAccessTokenExpired()) {
            if ($client->getRefreshToken()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            }
            file_put_contents($tokenPath, json_encode($client->getAccessToken()));
        }
        return $client;
    }

    public function createEvent($konsultasi){
        $client = $this->getClient();
        $service = new Calendar($client);

        $event = new Event(array(
            'summary' => 'Feelsbox',
            'location' => 'online',
            'description' => 'Stress',
            'start' => array(
                // gabungkan data tanggal dan waktu dengan format yyyy-mm-ddThh:mm:ss+07:00
                'dateTime' => $konsultasi->tanggal . 'T' . $konsultasi->waktu . '+07:00',
                'timeZone' => 'Asia/Jakarta',
            ),
            'end' => array(
                // gabungkan data tanggal dan waktu kemudian tambah sejam dengan format yyyy-mm-ddThh:mm:ss+07:00
                'dateTime' => Carbon::parse($konsultasi->tanggal . 'T' . $konsultasi->waktu . '+07:00')->addHour(1)->format('Y-m-d\TH:i:s\+07:00'),
                'timeZone' => 'Asia/Jakarta',
            ),
            'attendees' => array(
                array(
                    'email' => $konsultasi->user->email,
                    'responseStatus' => 'accepted',
                ),
                array(
                    'email' => $konsultasi->psikolog[0]->user->email,
                    'responseStatus' => 'accepted',
                ),
            ),
            'conferenceData' => [
                // gmeet not ask
                'conferenceSolution' => 'hangoutsMeet',
                'createRequest' => [
                    'requestId' => 'feelsbox',
                    'conferenceSolutionKey' => [
                        'type' => 'hangoutsMeet',
                        'serverResponse' => [
                            'createRequest' => [
                                'requestId' => 'feelsbox',
                            ],
                        ],
                    ],
                ],
            ],
        ));

        $event = $service->events->insert($this->calendarId, $event, ['conferenceDataVersion' => 1]);

        $dataKonsultasi = konsultasi::find($konsultasi->id);
        $dataKonsultasi->calendar_id = $event->id;
        $dataKonsultasi->link = $event->hangoutLink;
        $dataKonsultasi->update();
    }

    public function updateEvent($konsultasi){
        $client = $this->getClient();
        $service = new Calendar($client);

        // update
        $event = new Event(array(
            'summary' => 'Feelsbox',
            'location' => 'online',
            'description' => 'Stress',
            'start' => array(
                // gabungkan data tanggal dan waktu dengan format yyyy-mm-ddThh:mm:ss+07:00
                'dateTime' => $konsultasi->tanggal . 'T' . $konsultasi->waktu . '+07:00',
                'timeZone' => 'Asia/Jakarta',
            ),
            'end' => array(
                // gabungkan data tanggal dan waktu kemudian tambah sejam dengan format yyyy-mm-ddThh:mm:ss+07:00
                'dateTime' => Carbon::parse($konsultasi->tanggal . 'T' . $konsultasi->waktu . '+07:00')->addHour(1)->format('Y-m-d\TH:i:s\+07:00'),
                'timeZone' => 'Asia/Jakarta',
            ),
            'attendees' => array(
                array(
                    'email' => $konsultasi->user->email,
                    'responseStatus' => 'accepted',
                ),
                array(
                    'email' => $konsultasi->psikolog[0]->user->email,
                    'responseStatus' => 'accepted',
                ),
            ),
            'conferenceData' => [
                'createRequest' => [
                    'requestId' => '123456789',
                    'conferenceSolution' => [
                        'key' => [
                            'type' => 'hangout',
                            'serverKey' => 'server_key',
                        ],
                    ],
                    'status' => [
                        'statusCode' => 'success',
                    ],
                ],
            ],
        ));

        $event = $service->events->update($this->calendarId, $konsultasi->google_event_id, $event, ['conferenceDataVersion' => 1]);
    }

    public function deleteEvent($konsultasi){
        $client = $this->getClient();
        $service = new Calendar($client);

        $service->events->delete($this->calendarId, $konsultasi->calendar_id);
    }
}
