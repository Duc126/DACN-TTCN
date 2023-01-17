<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'created_at' =>  date("Y-m-d H:i:s")
        ]);

        $user = \App\User::where('email','admin@gmail.com')->first();
        $user->assignRole('administrator');

        DB::table('users')->insert([
            'name' => 'Staff',
            'email' => 'nhanvien@gmail.com',
            'password' => bcrypt('admin123'),
            'created_at' =>  date("Y-m-d H:i:s")
        ]);
        $user = \App\User::where('email','nhanvien@gmail.com')->first();
        $user->assignRole('vendor');

        DB::table('users')->insert([
            'name' => 'client ',
            'email' => 'client@gmail.com',
            'password' => bcrypt('admin123'),
            'created_at' =>  date("Y-m-d H:i:s")
        ]);

        $user = \App\User::where('email','client@gmail.com')->first();
        $user->assignRole('customer');


        DB::table('users')->insert([
            'name' => 'Duc Bui',
            'email' => 'duc@gmail.com',
            'password' => bcrypt('admin123'),
            'created_at' =>  date("Y-m-d H:i:s")
        ]);
        $user = \App\User::where('email','duc@gmail.com')->first();
        $user->assignRole('administrator');
    }
}