<?php

namespace Database\Seeders;

class FakeContentSeeder
{
    public static function deals(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'sony-wh1000xm5-noise-cancelling-headphones',
                'title' => 'Sony WH-1000XM5 Noise Cancelling Headphones',
                'merchant' => 'AudioHub',
                'category' => 'electronics',
                'price' => '299.00',
                'badge' => 'Top Deal',
                'cta_label' => 'View Offer',
                'description' => 'Premium over-ear ANC headphones with long battery life and fast charging.',
                'updated_at' => '2026-06-01',
            ],
            [
                'id' => 2,
                'slug' => 'philips-airfryer-xxl-30-off',
                'title' => 'Philips Airfryer XXL 30% Off',
                'merchant' => 'KitchenPlanet',
                'category' => 'home-kitchen',
                'price' => '189.00',
                'badge' => 'Limited',
                'cta_label' => 'Check Price',
                'description' => 'Large-capacity air fryer ideal for families; includes preset cooking programs.',
                'updated_at' => '2026-05-31',
            ],
            [
                'id' => 3,
                'slug' => 'nintendo-switch-oled-bundle',
                'title' => 'Nintendo Switch OLED Bundle',
                'merchant' => 'GameDock',
                'category' => 'gaming',
                'price' => '349.00',
                'badge' => 'Trending',
                'cta_label' => 'Open Deal',
                'description' => 'Switch OLED with bonus game voucher and carrying case bundle.',
                'updated_at' => '2026-06-02',
            ],
        ];
    }

    public static function categories(): array
    {
        return [
            ['slug' => 'electronics', 'name' => 'Electronics'],
            ['slug' => 'home-kitchen', 'name' => 'Home & Kitchen'],
            ['slug' => 'gaming', 'name' => 'Gaming'],
        ];
    }
}
