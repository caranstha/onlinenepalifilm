<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name'=>'ram',
        							'email'=>'caran@gmail.com',
        							'password'=>Hash::make('12345')
        							]);
    }
}
