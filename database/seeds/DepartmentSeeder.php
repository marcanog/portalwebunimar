<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'recursos humanos',
        ]);
        DB::table('departments')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'decanato x',
        ]);
    }
}
