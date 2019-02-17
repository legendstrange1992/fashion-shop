<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
    }
    
}
class bannerSeeder extends Seeder{
    public function run()
    {
        DB::table('banner')->insert([
            ['hinh'=> 'banner-01.jpg'],
            ['hinh'=> 'banner-02.jpg'],
            ['hinh'=> 'banner-03.jpg']
        ]);
    }
}
class UserSeeder extends Seeder{
    public function run()
    {
        DB::table('users')->insert([
            [
                'username'=> 'thoaiky',
                'email'=>'thoaiky@gmail.com',
                'password' => hash::make(123),
                'token' => 'a98asdgfsd23sdfsd987'
            ]
        ]);
    }
}
