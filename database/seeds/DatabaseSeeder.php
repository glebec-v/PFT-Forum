<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('CategoriesTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('UsersTableSeeder');

        \App\Models\User::findOrNew(1)->roles()->attach(1);
        \App\Models\User::findOrNew(1)->roles()->attach(4);
        \App\Models\User::findOrNew(2)->roles()->attach(2);
        \App\Models\User::findOrNew(2)->roles()->attach(4);
        \App\Models\User::findOrNew(3)->roles()->attach(4);
        \App\Models\User::findOrNew(4)->roles()->attach(5);
        \App\Models\User::findOrNew(5)->roles()->attach(6);

        $this->call('PostsTableSeeder');
        $this->call('ContentsTableSeeder');
        $this->call('PicturesTableSeeder');

        Model::reguard();
    }
}
