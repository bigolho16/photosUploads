<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersApp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Leandro",
            "email" => "bigoio9@gmail.com",
            "password" => password_hash("36236722a",PASSWORD_DEFAULT)

        ]);
    }
}
