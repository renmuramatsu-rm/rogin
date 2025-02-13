<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'age' => '10代以下',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'age' => '20代以下',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'age' => '30代以下',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'age' => '40代以下',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'age' => '50代以下',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'age' => '60代以上',
        ];
        DB::table('ages')->insert($param);
    }
}
