<?php

class PollsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('polls')->delete();

        \Poll::create(array('question' => 'Which is your favourite team?', 'active' => 1, 'public' => 1));
    }

}