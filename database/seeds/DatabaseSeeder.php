<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VendorDatabaseSeeder::class);
        factory(App\Category::class, 7)->create();
        factory(App\Product::class, 50)->create();
    }
}


class VendorDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Vendor::class, 7)->create();
        // Init vendor list.
        $vendors = [
            [
                'name' => 'Dose of Colors',
                'logo' => 'dose_of_colors.png',
                'background_color' => '#000',
                'foreground_color' => '#fff'
            ],

            [
                'name' => 'Colour Pop',
                'logo' => 'color_pop.png',
                'background_color' => '#9dd2e2',
                'foreground_color' => '#fff'
            ],

            [
                'name' => 'Amaira',
                'logo' => 'amaira.png',
                'background_color' => '#f2f2f2',
                'foreground_color' => '#79a936'
            ],

            [
                'name' => 'Anastasia Beverly Hills',
                'logo' => 'anastasia_beverly_hills.png',
                'background_color' => '#fff',
                'foreground_color' => '#000'
            ],

            [
                'name' => 'NYX',
                'logo' => 'nyx.png',
                'background_color' => '#e9168c',
                'foreground_color' => '#fff'
            ]
        ];

        // Create or update the various records.
        foreach ($vendors as $vendor) {
            (new \App\Vendor)->updateOrCreate(array_only($vendor, ['name']), $vendor);
        }
    }
}