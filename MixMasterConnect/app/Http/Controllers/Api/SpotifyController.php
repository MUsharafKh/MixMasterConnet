<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spotify;
use SpotifySeed;

class SpotifyController extends Controller
{
    //
    public function index(){
        $seed = SpotifySeed::setGenres(['gospel', 'pop', 'funk'])
            ->setTargetValence(1.00)
            ->setSpeechiness(0.3, 0.9)
            ->setLiveness(0.3, 1.0);
            $data = Spotify::recommendations($seed)->get();
            dd($data);
     /*   $list = Spotify::searchTracks('Closed on Sunday')->limit(50)->offset(50)->get();
      // $list = Spotify::album('7uOrqaTRMVCdVD310nDIWk')->get();
      //  dd($list);
        foreach($list['tracks'] as $element){
            print_r($element);
            print_r('</br>');
            break;
            // foreach($element['items'] as $item){
            //     print_r($item);
            //     print_r('</br>');
            //     //break;
            // }
        }
        dd($list);
        */
    }
}
