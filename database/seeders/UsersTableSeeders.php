<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'Juan',
        //     'email' => 'juampi1732@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);
        // for ($i=0; $i < 10; $i++) { 
        //     DB::table('users')->insert([
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'password' => bcrypt(Str::random(10)),
        //     ]);
        // }
        
        User::factory(10)->create();
    }
}
