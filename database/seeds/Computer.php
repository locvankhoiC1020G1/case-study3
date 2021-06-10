<?php

use Illuminate\Database\Seeder;

class Computer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $computer = new \App\Computer();
        $computer->name = 'hp 4430s';
        $computer->price = '4.300.000';
        $computer->des='cấu hình i3 2320m, 8Gb ram ddr3 bus 1600, màn hd 14.inch, ổ ssd 120gb';
        $computer->save();
        $computer = new \App\Computer();
        $computer->name = 'hp 4430s';
        $computer->price = '4.300.000';
        $computer->des='cấu hình i3 2320m, 8Gb ram ddr3 bus 1600, màn hd 14.inch, ổ ssd 120gb';
        $computer->save();
        $computer = new \App\Computer();
        $computer->name = 'hp 4430s';
        $computer->price = '4.300.000';
        $computer->des='cấu hình i3 2320m, 8Gb ram ddr3 bus 1600, màn hd 14.inch, ổ ssd 120gb';
        $computer->save();
        $computer = new \App\Computer();
        $computer->name = 'hp 4430s';
        $computer->price = '4.300.000';
        $computer->des='cấu hình i3 2320m, 8Gb ram ddr3 bus 1600, màn hd 14.inch, ổ ssd 120gb';
        $computer->save();
    }
}
