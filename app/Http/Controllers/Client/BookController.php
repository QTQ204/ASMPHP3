<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class BookController extends Controller
{
     public function home(){
        // 8 sản phẩm có giá cao nhất 
        $bookdesc = DB::table('books')
            ->orderByDesc('Price')
            ->limit(4)
            ->get();
        // 8 sản phẩm có giá thấp nhất
        $books =  DB::table('books')
            ->orderBy('Price')
            ->limit(4)
            ->get();
        // hiển thị ra view
        return view('client.home', compact('bookdesc','books'));
    }    
    public function booksByCategory($categoryId) {
        // Lấy thông tin của category theo ID
        $category = DB::table('categories')->where('id', $categoryId)->first();
    
        // Kiểm tra nếu category tồn tại
        if (!$category) {
            abort(404, 'Category not found');
        }
    
        // Lấy sách thuộc category với id tương ứng
        $books = DB::table('books')->where('category_id', $categoryId)->get();
    
        // Trả về view hiển thị sách theo loại
        return view('client.list-book', compact('category', 'books'));
    }
    //Hiển thị danh sách bài viết theo danh mục categories
    public function list($id)
    {
        // Lấy tên của danh mục theo ID
        $category = DB::table('categories')
            ->where('id', $id)
            ->first();
    
        // Lấy danh sách sách thuộc danh mục đó
        $books = DB::table('books')
            ->where('category_id', $id)
            ->orderByDesc('Price')
            ->limit(12)
            ->get();
    
        // Trả về view, bao gồm cả 'category' và 'books'
        return view('client.list-book', compact('category', 'books'));
    }
    
       //Hiển thị chi tiết bài viết
       public function detail($id)
       {
           $book = DB::table('books')
               ->where('id', $id)
               ->first();
           $bookdesc = DB::table('books')
               ->orderByDesc('Price')
               ->limit(4)
               ->get(); 
   
           return view('client.detail', compact('book','bookdesc'));
       }
       public function shop(){
           // 8 sản phẩm có giá cao nhất 
           $bookdesc = DB::table('books')
           ->orderByDesc('Price')
           ->limit(12)
           ->get();
           // 8 sản phẩm có giá thấp nhất
           $books =  DB::table('books')
           ->orderBy('Price')
           ->limit(3)
           ->get();
           // hiển thị ra view
           return view('client.shop', compact('bookdesc','books'));
        }
       public function about(){
          return view('client.about');
       } 
       public function contact(){
         return view('client.contact');
       }

       public function index(User $user){
        $user = Auth::user();
        return view("client.index",compact("user"));
    }
    public function edit(User $user){

        return view('client.edit',compact('user'));
    }
    public function update(Request $request, User $user){
        $data = $request->validate([
            'fullname' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users'],
            'avatar'=> ['mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);
        $data = $request->except('avatar');
        $avatar_old = $user->avatar;
        $data['avatar'] = $avatar_old;
        // Kiểm tra xem có file hình ảnh không
        if ($request->hasFile('avatar')) {
            // Lưu file hình ảnh vào thư mục 'products' và lưu đường dẫn vào mảng $data
            $files_avatars = $request->file('avatar')->store('avatars');
            $data['avatar'] = $files_avatars;
                        // $data['image'] = $request->file('image')->store('products', 'public');
        }
        $user->update($data);
        return redirect()->back()->with('message', 'Cập nhập thành công');
    }
    public function showChange(User $user){
        
        return view('client.changepassword',compact('user'));
    }
  
   

    // Xử lý yêu cầu đổi mật khẩu
    public function changePassword(Request $request, User $user){
    
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        // Kiểm tra xem mật khẩu hiện tại có khớp không
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không chính xác.']);
        }
        /**
         * @var \App\Models\User $user
         */
        // Cập nhật mật khẩu mới cho người dùng
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Mật khẩu đã được đổi thành công.');
    }
}
