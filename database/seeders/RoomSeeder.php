<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoomSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();
        DB::table('rooms')->insert([
            ['number' => 101, 'room_type_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 102, 'room_type_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 103, 'room_type_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 104, 'room_type_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 105, 'room_type_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 201, 'room_type_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 202, 'room_type_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 203, 'room_type_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 204, 'room_type_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 301, 'room_type_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 302, 'room_type_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 403, 'room_type_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['number' => 404, 'room_type_id' => 4, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
