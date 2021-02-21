<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()       // Функция автоматического заполнения таблицы notes
    {
        for ($i=1; $i<=10; $i++)
        {
            DB::table('notes')->insert([
                'name' => 'Название '.$i,
                'price' => rand(1,100000)/100,
                'created_at' => Carbon::now(),  // где Carbon это функция для работы со временем
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
