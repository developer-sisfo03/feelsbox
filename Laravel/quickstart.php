<?php

require __DIR__ . '/vendor/autoload.php';

if (php_sapi_name() != 'cli') {
    throw new Exception('This application must be run on the command line.');
}

use Carbon\Carbon;
use Google\Client;
use Google\Service\Calendar;

/**
 * Returns an authorized API client.
 * @return Client the authorized client object
 */
function getClient()
{
    $client = new Client();
    $client->setApplicationName('Google Calendar API PHP Quickstart');
    $client->setScopes('https://www.googleapis.com/auth/calendar');
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = 'token.json';
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
}


// Get the API client and construct the service object.
$client = getClient();
$service = new Calendar($client);

$calendarId = 'ttj3fh1pdlnp1qhtni1hhc132k@group.calendar.google.com';
// Refer to the PHP quickstart on how to setup the environment:
// https://developers.google.com/calendar/quickstart/php
// Change the scope to Google_Service_Calendar::CALENDAR and delete any stored
// credentials.

$event = new Google_Service_Calendar_Event(array(
    'summary' => 'Feelsbox',
    'location' => 'online',
    'description' => 'Stress',
    'start' => array(
        // besok jam 7 - 10 pagi
      'dateTime' => Carbon::now()->addDay(3)->addHours(7)->addMinutes(30)->toRfc3339String(),
      'timeZone' => 'America/Los_Angeles',
    ),
    'end' => array(
        // besok jam 7 - 10 pagi
    'dateTime' => Carbon::now()->addDay(3)->addHours(10)->addMinutes(30)->toRfc3339String(),
      'timeZone' => 'America/Los_Angeles',
    ),
    'attendees' => array(
        array(
            'email' => 'eriscapricron@gmail.com',
            'responseStatus' => 'accepted',
        ),
        array(
            'email' => 'maidsisfo@gmail.com',
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
  
  $event = $service->events->insert($calendarId, $event, ['conferenceDataVersion' => 1]);
  printf('Event created: %s\n', $event->htmlLink);
  var_dump($event);