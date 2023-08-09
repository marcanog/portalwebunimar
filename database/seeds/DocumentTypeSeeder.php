<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents_type')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Reglamento',
        ]);
        DB::table('documents_type')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Normativa',
        ]);
        DB::table('documents_type')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Manual',
        ]);
        DB::table('documents_type')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Gaceta',
        ]);
        DB::table('documents_type')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Pensum',
        ]);
        DB::table('documents_type')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Lineamiento',
        ]);
        DB::table('documents_type')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Planilla',
        ]);
    }
}
