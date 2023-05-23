<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Category;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('name', 'ASC')->get();

        return view('pages.admin.category.index', compact(
            'category'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)

        ]);

        if ($category) {
            return redirect()->route('dashboard.category.index')->with([
                'success' => 'Data Berhasil Disimpan!'
            ]);
        } else {
            return redirect()->route('dashboard.category.index')->with([
                'error' => 'Data Gagal Disimpan!'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view('pages.admin.category.show', compact([
            'category'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('pages.admin.category.edit', compact([
            'category'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        if ($category) {
            return redirect()->route('dashboard.category.index')->with([
                'success' => 'Data Berhasil Di Update'
            ]);
        } else {
            return redirect()->route('dashboard.category.index')->with([
                'error' => 'Data Gagal Di Update'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        if ($category) {
            return redirect()->route('dashboard.category.index')->with([
                'success' => 'Data Berhasil Dihapus!'
            ]);
        } else {
            return redirect()->route('dashboard.category.index')->with([
                'error' => 'Data Gagal Dihapus!'
            ]);
        }
    }
}
