<?php

use Illuminate\Database\Seeder;

class sakeCaptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sake_captions')->insert([
            ['name' => '面面'],
            ['name' => '裏面'],
            ['name' => 'ラベル'],
            ['name' => 'その他 1'],
            ['name' => 'その他 2']
        ]);
    }
}
