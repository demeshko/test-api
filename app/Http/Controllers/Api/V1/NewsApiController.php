<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Dto\NewsPatchDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsPatchRequest;
use App\Http\Resources\Api\V1\NewsApiResource;
use App\Services\NewsService;
use App\Services\NewsState;

class NewsApiController extends Controller
{
    public function __construct(protected NewsService $newsService)
    {
    }

    public function getAllNews(): NewsApiResource
    {
        $news = $this->newsService->getAllNews();

        return NewsApiResource::make($news);
    }

    public function changeNewsState(NewsPatchRequest $request): NewsApiResource
    {
        $state = $request->validated('news_state');

        $dto = new NewsPatchDto(
            $request->validated('id'),
            (bool) NewsState::{$state}->value,
        );

        $news = $this->newsService->changeNewsState($dto);

        return NewsApiResource::make($news);
    }

    public function getNews(int $id): NewsApiResource
    {
        $news = $this->newsService->getNewsById($id);

        return NewsApiResource::make($news);
    }
}
