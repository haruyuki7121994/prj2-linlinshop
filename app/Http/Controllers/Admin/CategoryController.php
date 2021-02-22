<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Category\CreateRequest;
use App\Http\Requests\Cms\Category\UpdateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(5);
        return view('cms.category.index', compact('categories'));
    }

    public function create()
    {
        return view('cms.category.create');
    }

    public function store(CreateRequest $request)
    
    {
        return Category::create($request->validated())
            ? redirect()->route('cms.category.index')->withSuccess('Create new category is successful')
            : redirect()->route('cms.category.index')->withErrors('Cannot create new category');
    }

    public function edit(Category $category)
    {
        return view('cms.category.edit', compact('category'));
    }

    public function update(Category $category, UpdateRequest $request)
    {
        return $category->update($request->validated())
            ? redirect()->route('cms.category.index')->withSuccess('Update category is successful')
            : redirect()->route('cms.category.index')->withErrors('Cannot update category');
    }

    public function destroy(Category $category)
    {
        return $category->delete()
            ? redirect()->route('cms.category.index')->withSuccess('Delete category is successful')
            : redirect()->route('cms.category.index')->withErrors('Cannot delete category');
    }
}
