<?php

use App\Group;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('group')->delete();

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
        User::insert([
            "name"=>"Family A",
            "email"=>"a@a.a",
            "password"=>bcrypt("pass"),
            "toggle"=>false,
            "rfid"=>"1788168E10031001",
            "groupID"=>1
        ]);
        User::insert([
            "name"=>"Family B",
            "email"=>"b@b.b",
            "password"=>bcrypt("pass"),
            "toggle"=>false,
            "rfid"=>"C617171A00B83401",
            "groupID"=>1
        ]);
    }
}
