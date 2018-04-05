<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 11; $i++ ) {
            // Generate date
            $currentTimestamp = time();
            $time10daysBefore = $currentTimestamp - (24 * 60 * 60 * 10); //24h * 60min * 60s = 1 journée * 10
            $randomDayTimestamp = mt_rand($time10daysBefore, $currentTimestamp);

            DB::table('articles')->insert([
                'title' => str_random(10),
                'content' => str_random(100),
                'is_enabled' => (bool)random_int(0,1),
                'created_at' => $date = date('Y-m-d H:i:s', $randomDayTimestamp)
            ]);
        }
    
    }
}
