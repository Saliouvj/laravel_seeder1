<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('membres')->insert(
            [
                [
                    'nom'=>'kakashi',
                    'age'=>42,
                    'mail'=>'kakashi_atake@hotmail.com',
                    'telephone'=>'0466363114'
                ],
                [
                    'nom'=>'Albert',
                    'age'=>50,
                    'mail'=>'retraite_albert@hotmail.com',
                    'telephone'=>'0486333157'
                ],
                [
                    'nom'=>'Amir',
                    'age'=>60,
                    'mail'=>'veuf_amir@hotmail.com',
                    'telephone'=>'0426453156'
                ],
                [
                    'nom'=>'Lol',
                    'age'=>34,
                    'mail'=>'lol_jeu@hotmail.com',
                    'telephone'=>'0456493171'
                ],
            ]
        );
    }
}
