<?php

use Illuminate\Database\Seeder;

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
        $this->call(bannerSeeder::class);
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
