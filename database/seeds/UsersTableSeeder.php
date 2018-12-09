<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate([
            "email" => "adam.troll@levoolabs.com",
        ],[
            "username" => "trolladam",
            "firstname" => "Ádám",
            "lastname" => "Troll",
            "password" => Hash::make('jelszoo')
        ]);

        $user = new User([
            "email" => "jozsef@gmail.com",
            "username" => "jozsef",
            "firstname" => "József",
            "lastname" => "Kasnya",
            "password" => Hash::make('jelszoo')
        ]);
        $user->save();

        $user = User::create([
            "email" => "balint@gmail.com",
            "username" => "balint",
            "firstname" => "Bálint",
            "lastname" => "Dancsa",
            "password" => Hash::make('jelszoo')
        ]);

        $user = User::create([
            "email" => "somahundt@gmail.com",
            "username" => "soma",
            "firstname" => "Soma",
            "lastname" => "Hundt",
            "password" => Hash::make('sajtosteszta24')
        ]);
    }
}
