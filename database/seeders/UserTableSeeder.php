<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =User::create([
            'name'=>'Administrador',
            'document_type' => 'CC',
            'document_number' => '0998890',
            'full_name' => 'Pepito Perez',
            'city'=> 'Bogota',
            'state'=>'Cundinamarca',
            'address' =>'Bogota',
            'age'=>'40',
            'gender'=>'M',
            'phone' => '888888',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('password')
        ]);
        $user->assignRole('admin');

       /*$user =User::create([
            'name'=>'Comerciante',
            'email'=>'merchant@gmail.com',
            'password'=>Hash::make('password')
        ]);
        $user->assignRole('farmer');
        $user =User::create([
            'name'=>'Campesino',
            'email'=>'farmer@gmail.com',
            'password'=>Hash::make('password')
        ]);
        $user->assignRole('courier');

        $user =User::create([
            'name'=>'Transportador',
            'email'=>'courier@gmail.com',
            'password'=>Hash::make('password')
        ]);
        $user->assignRole('admin');*/


    }
}
