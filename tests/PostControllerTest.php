<?php
/**
 * Created by PhpStorm.
 * User: Glebec
 * Date: 20.09.2015
 * Time: 23:39
 */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostControllerTest extends TestCase
{
    public function testIndex()
    {
        $this->call('GET', 'post');

        $this->assertRedirectedTo('categories');
    }

    public function testCreate()
    {
        $response = $this->call('GET', 'post/create');

        $this->assertEquals(200, $response->status());
    }

    public function testCreate_passing_variables_to_view()
    {
        $response = $this->call('GET', 'post/create');
        $this->assertViewHas('categories');
        $categories = $response->original->getData()['categories'];
        $this->assertInstanceOf('Illuminate\Support\Collection', $categories);
    }
}
