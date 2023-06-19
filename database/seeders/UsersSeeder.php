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
        $user2->id_user = '1';
        $user2->password = 'maira19';
        $user2->save();

        $user3 = new User();
        $user3->name = 'pepito';
        $user3->email = 'pepito@hotmail.com';
        $user3->id_user = '2';
        $user3->password = 'hola123';
        $user3->save();

        $user4 = new User();
        $user4->name = 'isa';
        $user4->email = 'isa@hotmail.com';
        $user4->id_user = '1';
        $user4->password = 'hola123';
        $user4->save();

        $user5 = new User();
        $user5->name = 'jip';
        $user5->email = 'jip@hotmail.com';
        $user5->id_user = '1';
        $user5->password = 'hola123';
        $user5->save();

        $user6 = new User();
        $user6->name = 'smith';
        $user6->email = 'smith@hotmail.com';
        $user6->id_user = '1';
        $user6->password = 'hola123';
        $user6->save();

    }
}
