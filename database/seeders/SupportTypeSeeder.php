<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('support_types')->insert([
            ['name' => 'Финансовая поддержка'],
            ['name' => 'Имущественная поддержка'],
            ['name' => 'Административная поддержка'],
        ]);
    }
}
