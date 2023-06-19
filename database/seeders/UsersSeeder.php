<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User();
        $user1->name = 'Maira';
        $user1->email = 'maira19@hotmail.com';
        $user1->id_user = '2';
        $user1->password = 'maira19';
        $user1->save();

        $user2 = new User();
        $user2->name = 'Felipe';
        $user2->email = 'felipe19@hotmail.com';
        $user1->id_user = '1';
        $user2->password = 'maira19';
        $user2->save();

        $user3 = new User();
        $user3->name = 'pepito';
        $user3->email = 'pepito@hotmail.com';
        $user1->id_user = '1';
        $user3->password = 'hola123';
        $user3->save();


    }
}
