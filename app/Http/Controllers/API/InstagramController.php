<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoLists = $this->_videoLists('@ICEVidaNovacuiaba');
        return view('painel.mideas.index', compact('videoLists'));
    }
    //rota watch detalhe do video
    public function watch($id)
    {
        $video = $this->_videoLists($id);
        return view('painel.mideas.watch', compact('video'));
    }
    //funcao para listar os videos
    public function _videoLists($keywords)
    {
        $part = 'snippet';
        $countrey = 'BR';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 8;
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        $type = 'video, playlist, channel';

        $url = $youTubeEndPoint . '?part=' . $part . '&q=' . $keywords . '&type=' . $type . '&maxResults=' . $maxResults . '&key=' . $apiKey . '&regionCode=' . $countrey;
        $response = Http::get($url);
        $results = json_decode($response);
        File::put(storage_path() . '/app/public/results.json', $response->body());

        return $results;
    }
}
