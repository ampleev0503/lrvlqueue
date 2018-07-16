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
        // закомментировал, так как сиды запускаю в миграции (чтобы не было дубликатов)
         //$this->call(TasksSeeder::class);
    }
}
