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
        \Illuminate\Database\Eloquent\Model::unguard();
        // $this->call(UsersTableSeeder::class);
        $this->call([
            \Encore\Admin\Auth\Database\AdminTablesSeeder::class,

            QuestionsTableSeeder::class,
            UsersTableSeeder::class,
        ]);
        \Illuminate\Database\Eloquent\Model::reguard();

    }
}
