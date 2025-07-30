<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MlbTheShowService
{
    protected string $URL = 'https://mlb25.theshow.com/apis/listings.json';

    public function getList(array $data = []): array
    {
        return Http::get($this->URL, $data)->json();
    }

    public function getDetails(): array
    {
        $response = Http::get($this->URL)->json();

        return ['currentPage' => $response['page'], 'totalPages' => $response['total_pages']];

    }
}
