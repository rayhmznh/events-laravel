<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Iqbal",
            'username' => "Iqbal",
            'email' => "iqbalux@gmail.com",
            'phone' => "0822",
            'email' => "iqbalux@gmail.com",
            'password' => bcrypt('iqbal123')
        ]);
    }
}