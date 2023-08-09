<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_permissions')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'user_id' => 1,
            'permission_id' => 1,
        ]);
        DB::table('users_permissions')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'user_id' => 2,
            'permission_id' => 2,
        ]);
    }
}
