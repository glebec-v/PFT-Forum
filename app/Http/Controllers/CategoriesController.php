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
        $categories = Category::all();
        return view('categories.index')->with('categories', $categories);
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
        return redirect('categories')->with('message', 'Категория "'.$oldname.'" успешно изменена на "'.$category->name.'"');
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
