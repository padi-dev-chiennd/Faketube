<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class FaketubeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('channels')->insert([
                'ChannelID' => $faker->uuid,
                'ChannelName' => $faker->word,
                'Description' => $faker->paragraph,
                'SubscribersCount' => $faker->numberBetween(0, 100000),
                'URL' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
