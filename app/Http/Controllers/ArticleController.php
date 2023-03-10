<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{


    public function index()
    {
        $articleRepository = new ArticleRepository();

        $filters = [
            'page' => 0,
            'post_per_page' => 30,
            'language_id' => App::currentLocale()=='fr'?2:1
        ];
        $result = $articleRepository->list($filters);
        //return $result['result'];
        return view('components.pages.articles', [
            "articles" => $result['result'],
            "total" => $result['total']
        ]);
    }
    /**
     * Array filters
     * page
     * post_per_page
     * language_id
     */
    public function show($lang, $slug)
    {

        $filters = [
            'intro_slug' => $slug,
            'lang' => $lang ?? 'fr'
        ];
        $articleRepository = new ArticleRepository();
        $result = $articleRepository->find($filters);
        //return json_decode($response->getBody(), true);
        return view('components.pages.article', [
            "article" => $result
        ]);
    }
}
