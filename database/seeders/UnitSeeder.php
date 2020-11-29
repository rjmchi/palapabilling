<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [101,102,103,104,201,202,203,301,302,303,401,402,403,501,502,601,602,701,702,703,801,802,803,901,902,903,1001,1002,1003,1101,1102,1201];

        foreach ($units as $unit) {
            Unit::create(['unit'=>$unit]);
        }
    }
}
