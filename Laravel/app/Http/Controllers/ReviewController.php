<?php
// date jakarta timezone

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Konsultasi;
use App\Models\User;

class ReviewController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
    }
    
    public function index()
    {
        // piloh konsultasi yang sudah melampaui tanggal dan waktu 
        $konsultasi = Konsultasi::where('tanggal','<=' ,date('Y-m-d'))->with('review')->get();

        $reviews = [];
        foreach($konsultasi as $k) {
            if($k->tanggal == date('Y-m-d') && $k->waktu >= date('H:i:s')) {
                $review[] = $k;
            }else if($k->tanggal < date('Y-m-d')) {
                $reviews[] = $k;
            }
        }

        foreach($reviews as $r) {
            $r->client_id = User::where('id', $r->client_id)->first();
            $r->psikolog_id = User::where('id', $r->psikolog_id)->first();
        }


        return view('user.review', compact('reviews'));
    }

}
