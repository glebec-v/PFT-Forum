<?php
/**
 * Created by PhpStorm.
 * User: glebec
 * Date: 06.09.15
 * Time: 16:24
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'God', 'code' => 777]);
        Role::create(['name' => 'CategoryEditor', 'code' => 666]);
        Role::create(['name' => 'PostEditor', 'code' => 664]);
        Role::create(['name' => 'Writer', 'code' => 644]);
        Role::create(['name' => 'Guest', 'code' => 444]);
        Role::create(['name' => 'Banned', 'code' => 0]);
    }
}