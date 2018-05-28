<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 11; $i++ ) {
            $currentTimestamp = time();
            $time10daysBefore = $currentTimestamp - (24 * 60 * 60 * 10);
            $randomDayTimestamp = mt_rand($time10daysBefore, $currentTimestamp);
            DB::table('comments')->insert([
            'title'         => str_random(10),
            'content'       => str_random(100),
            'created_at'    => $date = date('Y-m-d H:i:s', 
            $randomDayTimestamp),
            'updated_at'    => $date = date('Y-m-d H:i:s', 
            $randomDayTimestamp),
        ]);

        }
      
    }
}
