<?php

use Illuminate\Database\Seeder;

class TypesQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typesQuestions')->insert([
            'type'=>'global'
        ]);
        DB::table('typesQuestions')->insert([
            'type'=>'voyage'
        ]);
        DB::table('typesQuestions')->insert([
            'type'=>'autres'
        ]);

    }
}
