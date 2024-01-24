<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "Gilang",
            "no_hp"=>"628996982837",
            "password"=> bcrypt("123321"),
            "id_role"=> "1",
            "remember_token"=> str::random(5),
        ]);
        User::create([
            "name"=> "ramad",
            "no_hp"=>"6289656034973",
            "password"=> bcrypt("123456"),
            "id_role"=> "2",
            "remember_token"=> str::random(5),
        ]);
    }
}
