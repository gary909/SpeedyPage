<?php

namespace App\Http\Controllers;

use Database\Seeders\FakeContentSeeder;
use Illuminate\Support\Facades\Cache;

class CategoryController
{
    public function show(string $slug)
    {
        $ttl = (int) config('cache.public_page_ttl_seconds', 300);

        $payload = Cache::remember("page:category:{$slug}", $ttl, function () use ($slug) {
            $categories = collect(FakeContentSeeder::categories());
            $deals = collect(FakeContentSeeder::deals())
                ->where('category', $slug)
                ->values()
                ->all();

            return [
                'category' => $categories->firstWhere('slug', $slug),
                'deals' => $deals,
            ];
        });

        abort_unless($payload['category'], 404);

        return view('pages.category', [
            'title' => $payload['category']['name'] . ' Deals',
            'category' => $payload['category'],
            'deals' => $payload['deals'],
        ]);
    }
}
