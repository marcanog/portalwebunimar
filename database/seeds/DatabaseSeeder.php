<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserPermissionSeeder::class);
        //$this->call(EventSeeder::class);
        //$this->call(TagSeeder::class);
        //$this->call(NewSeeder::class);
        $this->call(DepartmentSeeder::class);
        //$this->call(NotificationSeeder::class);
        $this->call(DocumentTypeSeeder::class);
        $this->call(DeanerySeeder::class);
        $this->call(CareerSeeder::class);
        $this->call(SpecialVarSeeder::class);
    }
}
