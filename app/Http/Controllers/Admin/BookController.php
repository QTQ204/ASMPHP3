<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;


class BookController extends Controller
{
    public function index(){
        $moives = Book::orderByDesc('id')->paginate(10);

       
        
        return view('admin.books.index', compact('moives'));
    }

    public function create(){
        $genes = Category::all();
        return view('admin.books.create', compact('genes'));
    }

    public function store(Request $request)
    {
        // Validate dữ liệu nhập vào
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'thumbnail' => ['nullable', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Cho phép thumbnail có thể null
            'author' => ['required', 'string', 'max:255'],
            'publisher' => ['required', 'string', 'max:255'],
            'Publication' => ['required', 'date'], // Kiểm tra định dạng ngày tháng
            'Price' => ['required', 'numeric'], // Giá phải là số
            'Quantity' => ['required', 'integer'], // Số lượng phải là số nguyên
            'Category_id' => ['required', 'exists:categories,id'], // Đảm bảo Category_id tồn tại trong bảng categories
        ]);
    
        // Nếu có ảnh được upload, lưu file vào thư mục avatars và cập nhật đường dẫn trong $data
        if ($request->hasFile('thumbnail')) {
            $path_thumbnail = $request->file('thumbnail')->store('avatars');
            $data['thumbnail'] = $path_thumbnail;
        }
    
        // Lưu sách vào cơ sở dữ liệu
        Book::query()->create($data);
    
        // Chuyển hướng về trang danh sách sách kèm theo thông báo
        return redirect()->route('admin.books.index')->with('message', 'Thêm sách thành công');
    }
    


    public function destroy(Book $post){
        $post->delete();
        return redirect()->route('admin.books.index')->with('message', 'Xóa dữ liệu thành công');
    }

    public function edit(Book $post){
        $genes = Category::all();
        return view('admin.books.edit', compact('post', 'genes'));
    }

    public function update(Request $request, Book $post) {
        // Xác thực dữ liệu đầu vào
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'thumbnail' => ['nullable', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Cho phép thumbnail có thể null
            'author' => ['required', 'string', 'max:255'],
            'publisher' => ['required', 'string', 'max:255'],
            'Publication' => ['required', 'date'], // Kiểm tra định dạng ngày tháng
            'Price' => ['required', 'numeric'], // Giá phải là số
            'Quantity' => ['required', 'integer'], // Số lượng phải là số nguyên
            'Category_id' => ['required', 'exists:categories,id'], // Đảm bảo Category_id tồn tại trong bảng categories
        ]);
    
        // Loại bỏ dữ liệu ảnh khỏi $data
        $data = $request->except('thumbnail');
    
        // Lấy ảnh cũ để xử lý
        $thumbnail_old = $post->thumbnail;
        $data['thumbnail'] = $thumbnail_old;
    
        // Nếu có file ảnh mới được tải lên
        if ($request->hasFile('thumbnail')) {
            // Lưu file ảnh mới vào thư mục 'thumbnails'
            $path_image = $request->file('thumbnail')->store('thumbnails');
    
            // Cập nhật đường dẫn ảnh mới vào mảng $data
            $data['thumbnail'] = $path_image;
    
            // Xóa ảnh cũ nếu có
            if ($thumbnail_old && file_exists(storage_path('app/public/' . $thumbnail_old))) {
                unlink(storage_path('app/public/' . $thumbnail_old));
            }
        }
        
        // Cập nhật dữ liệu của sách trong database
        $post->update($data);
    
        // Chuyển hướng về trang danh sách sách với thông báo thành công
        return redirect()->route('admin.books.index')->with('message', 'Cập nhật sách thành công');
    }
    

    public function detail(Book $post)
    {
        $post->load('category'); // Eager load quan hệ 'category'
        return view('admin.books.detail', ['books' => $post]);
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Thực hiện tìm kiếm phim
        $moives = Book::where('title', 'like', "%{$query}%")->paginate(5);
    
        return view('admin.books.search', compact('moives', 'query'));
    }
     
    

}
