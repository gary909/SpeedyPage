<?php

namespace App\Http\Controllers;

use Database\Seeders\FakeContentSeeder;
use Illuminate\Support\Facades\Cache;

class HomeController
{
    public function index()
    {
        $ttl = (int) config('cache.public_page_ttl_seconds', 300);

        $payload = Cache::remember('page:home', $ttl, function () {
            return [
                'deals' => FakeContentSeeder::deals(),
                'categories' => FakeContentSeeder::categories(),
            ];
        });

        return view('pages.home', [
            'title' => 'SpeedyPage Deals',
            'deals' => $payload['deals'],
            'categories' => $payload['categories'],
        ]);
    }
}
