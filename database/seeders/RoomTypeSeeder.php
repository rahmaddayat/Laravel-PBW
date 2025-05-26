<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('room_types')->insert([
            ['id' => 1, 'name' => 'Single Room'],
            ['id' => 2, 'name' => 'Double Room'],
        ]);
    }
}
