<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'name' => 'Logo',
                'type' => 'main-logo',
                'value' => 'images/steelsong-logo.png',
            ],
            [
                'name' => 'Welcome to Steelsong Miniatures',
                'type' => 'main-banner',
                'value' => '',
            ],
            [
                'name' => 'Steelsong Miniatures',
                'type' => 'shop-banner',
                'value' => '',
            ],
        ];

        foreach($settings as $setting){
            Setting::create([
                'name' => $setting['name'],
                'type' => $setting['type'],
                'value' => $setting['value'],
            ]);
        }
    }
}
