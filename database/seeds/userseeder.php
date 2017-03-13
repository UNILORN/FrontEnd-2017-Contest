<?php

use App\Group;
use App\User;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::insert([
            "id"=>1,
            "name"=>"家族１"
        ]);

        User::insert([
            "name"=>"unilorn",
            "email"=>"admin@admin.admin",
            "password"=>bcrypt("masakage77"),
            "toggle"=>false,
            "rfid"=>"8BE157C12020101",
            "groupID"=>1
        ]);
    }
}
