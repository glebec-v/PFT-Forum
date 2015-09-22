<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Http\Requests\CategoryFormRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    $city_id=27947; // id города
    $data_file="http://export.yandex.ru/weather-ng/forecasts/$city_id.xml"; // адрес xml файла

              $xml = simplexml_load_file($data_file); // раскладываем xml на массив

    // выбираем требуемые параметры (город, температура, пиктограмма и тип погоды текстом (облачно, ясно)

    $city=$xml->fact->station;
    $temp=$xml->fact->temperature;
    $pic=$xml->fact->image;
    $type=$xml->fact->weather_type;

    // Если значение температуры положительно, для наглядности добавляем "+"
    if ($temp>0) {
        $temp='+'.$temp;
    }

        $categories = Category::all();
        return view('categories.index')->with(
            [
                'categories' => $categories,
                'city' => $city,
                'city_id' => $city_id,
                'temp' => $temp,
                'pic' => $pic,
                'type' => $type
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CategoryFormRequest $request)
    {
        $category = new Category(['name' => $request->get('name')]);
        $category->save();
        return redirect('categories')->with('message', 'категория успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CategoryFormRequest $request, $id)
    {
        $category = Category::find($id);
        $oldname = $category->name;
        $category->update(['name' => $request->get('name')]);
        return redirect('categories')->with('message', 'Категория "'.$oldname.'" успешно изменено на "'.$category->name.'"');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $name = Category::find($id)->name;
        Category::destroy($id);
        return redirect('categories')->with('message', 'категория "'.$name.'" успешно удалена!');
    }
}
