<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Goutte\Client;

class ScrapperController extends Controller
{
    private $results = array();

    public function scrapper()
    {
        $client = new Client();
        $url = 'https://ge.globo.com/futebol/brasileirao-serie-a/';
        $page = $client->request('GET', $url);

        echo $page->filter('.tabela__head')->text();

        //return view('scrapper');
    }
}
