<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Carbon\Carbon;

class ArticleController extends Controller
{
    
    
    public function article()
    {
        $currentDate = new Carbon();
        $year = $currentDate->year;
        $month = $currentDate->month;
        $day = $currentDate->day;
        return view('article', [
            "year"=>$year,
            "month"=>$month,
            "day"=>$day,
            "articles" =>  Article::latest()->get()
        ]);
    }

    public function content(Article $article)
    {
        return view('content', [
            "article" => $article
        ]);
    }
}
