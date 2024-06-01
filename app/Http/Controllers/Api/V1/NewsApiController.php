<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\NewsService;
use Illuminate\Http\Request;
class NewsApiController extends Controller
{

    public function __construct(protected NewsService $newsService)
    {
    }

    public function getAllNews()
    {

    }

    public function changeNewsState(Request $request)
    {

    }

    public function getNews(Request $request, string $id)
    {

    }
}
