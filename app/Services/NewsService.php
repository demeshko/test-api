<?php

namespace App\Services;
use App\Dto\NewsPatchDto;
use App\Models\News;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class NewsService
{
    public function getAllNews(): Collection {

        return DB::table('news')
            ->select(['id', 'title','short_description', 'url', 'created_at', 'updated_at', 'isActive'])
            ->get();
    }

    public function getNewsById(int $id) {
        return News::findOrFail($id);
    }

    public function changeNewsState(NewsPatchDto $dto) {

        $news = News::findOrFail($dto->id);

        if($news) {
            $news->isActive = $dto->state;
            $news->save();
            return $news;
        }
        return null;
    }
}
