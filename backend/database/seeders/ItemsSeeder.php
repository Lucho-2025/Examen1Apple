<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('items')->insert([
            [
                'nombre'=> 'Iphone 15PRO',
                'precio'=>'10700.00',
                'marca_id'=>'1',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=> 'Airpods 2',
                'precio'=>'1800.00',
                'marca_id'=>'2',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]

        ]);
    }
}
