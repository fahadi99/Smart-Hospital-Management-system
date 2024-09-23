<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminUserSeeder;
use Database\Seeders\TruncateDummyDataSeeder;
use Database\Seeders\DefaultDepartmentsSeeder;
use Database\Seeders\AddServiceCategoriesSeeder;
use Database\Seeders\DefaultRolesCreationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            DefaultRolesCreationSeeder::class,
            DefaultDepartmentsSeeder::class,
            TruncateDummyDataSeeder::class,
            AddServiceCategoriesSeeder::class,
            CreatePamentStatusesSeeder::class
        ]);
    }
}
