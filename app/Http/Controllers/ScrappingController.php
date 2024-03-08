<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

class ScrappingController extends Controller
{
    public function scrape()
    {
        $browser = new HttpBrowser(HttpClient::create());
        $crawler = $browser->request('GET', 'https://example.com');
        $title = $crawler->filter('title')->text();
        $h1 = $crawler->filter('h1')->text();
        $p = $crawler->filter('p')->text();

        //retorno para api
        return response()->json([
            'title' => $title,
            'h1' => $h1,
            'p' => $p
        ]);
    }
}
