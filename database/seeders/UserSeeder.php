<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{

public function run()
{
    User::create([
        'name' => 'Budi',
        'email' => 'budi@mail.com'
    ]);

    User::create([
        'name' => 'Andi',
        'email' => 'andi@mail.com'
    ]);
}
}
