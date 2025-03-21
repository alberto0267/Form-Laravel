<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name='Victo chao';
        $user->email='victorianos@gmail.com';
        $user->password=bcrypt('2672670');
        $user->save();



        $user = new User();

        $user->name='Victo hola';
        $user->email='victor@gmail.com';
        $user->password=bcrypt('2672670');
        $user->save();

        $user = new User();

        $user->name='Victo';
        $user->email='victorian@gmail.com';
        $user->password=bcrypt('2672670');
        $user->save();
    }
}
