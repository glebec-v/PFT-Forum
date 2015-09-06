<?php
/**
 * Created by PhpStorm.
 * User: glebec
 * Date: 06.09.15
 * Time: 14:49
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'PHP']);
        Category::create(['name' => 'Фреймворки']);
        Category::create(['name' => 'Курсы']);
        Category::create(['name' => 'Курилка']);
        Category::create(['name' => 'Книги']);
        Category::create(['name' => 'Вебинары']);
        Category::create(['name' => 'SQL и Базы Данных']);
    }
}