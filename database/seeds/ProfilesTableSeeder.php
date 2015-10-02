<?php

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'skype' => 'glebec-v',
            'city' => 'Москва',
            'user_id' => 1,
        ]);
        Profile::create([
            'skype' => '',
            'city' => 'Sydney',
            'user_id' => 2,
        ]);
    }
}
