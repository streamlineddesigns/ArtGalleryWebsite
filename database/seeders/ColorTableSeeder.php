<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Red Branding Color */
        Color::create([
            'name' => 'Red',
            'hex_value' => '#D72702',
        ]);

        /* Orange Branding Color */
        Color::create([
            'name' => 'Orange',
            'hex_value' => '#DE6B00',
        ]);

        /* Yellow Branding Color */
        Color::create([
            'name' => 'Yellow',
            'hex_value' => '#C58D51',
        ]);

        /* Green Branding Color */
        Color::create([
            'name' => 'Green',
            'hex_value' => '#7E8B0F',
        ]);

        /* Blue Branding Color */
        Color::create([
            'name' => 'Blue',
            'hex_value' => '#47597F',
        ]);

        /* Purple Branding Color */
        Color::create([
            'name' => 'Purple',
            'hex_value' => '#705899',
        ]);

        /* Violet Branding Color */
        Color::create([
            'name' => 'Violet',
            'hex_value' => '#D27BB0',
        ]);

        /* Black Branding Color */
        Color::create([
            'name' => 'Black',
            'hex_value' => '#0A0A0A',
        ]);
    }
}