<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DeanerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deaneries')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Ingeniería y Afines',
        ]);
        DB::table('deaneries')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Estudios Generales',
        ]);
        DB::table('deaneries')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Humanidades, Artes y Educación',
        ]);
        DB::table('deaneries')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Ciencias Económicas y Sociales',
        ]);
        DB::table('deaneries')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Ciencias Jurídicas  y Políticas',
        ]);
        DB::table('deaneries')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Comunicación Social(UCSAR)',
        ]);
    }
}
