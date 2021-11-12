<?php

namespace Database\Seeders;

use App\Models\Farmer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FarmerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $farmer = Farmer::create([
            'address'=>'Cra 543',
            'crops'=>'Zanahoria',
            'land_type'=> 'parcela',
            'user_id'=> 1
        ]);
    }
}
