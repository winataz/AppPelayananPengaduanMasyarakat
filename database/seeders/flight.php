<?php

namespace Database\Seeders;

use App\Models\Flight as Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class flight extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat data dummy
           $flight =[
               [
                 'id'  => 1,
                 'name'=>'Domestik'
                 'type'=>0
               ],
               // 'id' => 2,
               'name'  =>'Bisnis'
               'type'  => 1
               [],
        //memanggil nama class flight
        flight::insert ($flight);

    }
}
