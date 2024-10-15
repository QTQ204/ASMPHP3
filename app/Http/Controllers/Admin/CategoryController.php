<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    // Hiển thị danh sách categories
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    // Hiển thị form tạo category mới
    public function create()
    {
        return view('admin.category.create');
    }

    // Lưu category mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        Category::create($request->all());

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    // Hiển thị form chỉnh sửa category
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    // Cập nhật category
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $category->update($request->all());

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    // Xóa category
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}