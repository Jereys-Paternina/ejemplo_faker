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
        $users = factory(App\User::class, 20)
            ->create()
            ->each(function ($user) {
                $user->blogs()->save(factory(App\Blog::class)->make());
            });
    }
}
