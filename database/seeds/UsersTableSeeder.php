<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            [
                'email'           => '123@qq.com',
                'password'        => bcrypt('123456'),
                'password_before' => null,
            ],
            [
                'email'           => 'abc@126.com',
                'password'        => null,
                'password_before' => 'abc' . md5('123456') . 'abc',
            ],
        ]);
    }
}
