<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PrepopulateSeeder extends Seeder
{
    public function run(): void
    {
        $path = database_path('sql/reusemart.sql'); // path to your .sql file

        if (File::exists($path)) {
            $sql = File::get($path);
            DB::unprepared($sql);

            $this->command->info('Database prepopulated successfully.');
        } else {
            $this->command->error('SQL file not found.');
        }
    }
}
