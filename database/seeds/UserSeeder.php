<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'document_id' => 'J-30660040-0',
            'name' => 'Master Portal Web',
            'email' => 'master@portalweb.com',
            'birth'=> '1998-11-20',
            'phone' => '+58 295-2871722',
            'password' => Hash::make('master123'),
        ]);
        DB::table('users')->insert([
            'document_id' => 'V3234373',
            'name' => 'Abigail Valero De Grazian',
            'email' => 'abigail.valero@unimar.edu.ve',
            'birth'=> '1949-05-01',
            'phone' => '04145632230',
            'password' => '$2y$10$ZuYeJe6vh3uQzqNRNTotuOx/SR729/zQf6V4klMlgSpTye/wxUomK',
        ]);
    }
}
