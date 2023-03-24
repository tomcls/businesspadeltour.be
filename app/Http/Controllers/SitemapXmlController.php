<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    //
    public function index() {
        $urls = [
            [
                "loc"=>'https://businesspadeltour.be/fr',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'monthly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/nl',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'monthly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/en',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'monthly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/fr/tarif',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'monthly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/nl/price',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'monthly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/fr/articles',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'monthly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/nl/news',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'monthly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/en/news',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'weekly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/fr/inscription',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'weekly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/nl/register',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'weekly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/en/register',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'weekly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/fr/article/padel-3-faits-insolites-a-savoir-sur-le-padel',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'weekly',
                "priority"=>'0.8',
            ],
            [
                "loc"=>'https://businesspadeltour.be/fr/article/le-business-padel-tour-un-tournoi-de-padel-interentreprises-en-belgique',
                "lastmod"=>date('Y-m-d'),
                "changefreq"=>'weekly',
                "priority"=>'0.8',
            ],
        ];
        return response()->view('sitemap', [
            'urls' => $urls
        ])->header('Content-Type', 'text/xml');
      }
}
