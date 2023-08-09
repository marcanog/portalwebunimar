<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Ingeniería de Sistemas',
            'deanery_id' => '1',
        ]);
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Artes Mención Diseño Gráfico',
            'deanery_id' => '3',
        ]);
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Idiomas Modernos',
            'deanery_id' => '3',
        ]);
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Administración',
            'deanery_id' => '4',
        ]);
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Contaduría Pública',
            'deanery_id' => '4',
        ]);
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Derecho',
            'deanery_id' => '5',
        ]);
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Idiomas Mención Turismo',
            'deanery_id' => '3',
        ]);
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Comunicación Social',
            'deanery_id' => '6',
        ]);
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Educación Integral',
            'deanery_id' => '3',
        ]);
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Psicología Mención Intervención Social',
            'deanery_id' => '3',
        ]);
        DB::table('career')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Administración Mención Criptomonedas y Sistemas Financieros',
            'deanery_id' => '4',
        ]);
    }
}
