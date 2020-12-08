<?php

use Illuminate\Database\Seeder;

class sakeCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sake_categories')->insert([
            ['name' => 'Beer/ビール'],
            ['name' => 'Whiskey/ウイスキー'],
            ['name' => 'Wine/ワイン'],
            ['name' => 'Sake/日本酒'],
            ['name' => 'Shochu/焼酎'],
            ['name' => 'Plum wine/梅酒'],
            ['name' => 'Chuhai/チューハイ'],
            ['name' => 'Liqueur/リキュール'],
            ['name' => 'Spirits/スピリッツ'],
            ['name' => 'Non alchol/ノンアルコール'],
            ['name' => 'Other/その他']
        ]);
    }
}
