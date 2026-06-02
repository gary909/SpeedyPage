<?php

namespace App\Http\Controllers;

use Database\Seeders\FakeContentSeeder;
use Illuminate\Support\Facades\Cache;

class DealController
{
    public function show(string $slug)
    {
        $ttl = (int) config('cache.public_page_ttl_seconds', 300);

        $deal = Cache::remember("page:deal:{$slug}", $ttl, function () use ($slug) {
            return collect(FakeContentSeeder::deals())->firstWhere('slug', $slug);
        });

        abort_unless($deal, 404);

        return view('pages.deal', [
            'title' => $deal['title'],
            'deal' => $deal,
        ]);
    }
}
