<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::paginate(10);
        $index = 1;
        return view("admin.users.index",compact("users","index"));
    }
    public function create(){
        return view("admin.users.create");
    }
    public function store(Request $request ){
        $data = $request->validate([
            'fullname' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:5'],
            'confirm_password' => ['required', 'same:password'],
            'avatar'=> ['required','mimes:jpeg,png,jpg,gif', 'max:2048'],
            'role' => ['required', 'in:user,admin'],  // Thêm vai trò: user, admin
            'active' => ['required', 'boolean'],      // Thêm trạng thái kích hoạt
        ]);
        $data = $request->except('avatar');

        // Kiểm tra xem có file hình ảnh không
        if ($request->hasFile('avatar')) {
            // Lưu file hình ảnh vào thư mục 'products' và lưu đường dẫn vào mảng $data
            $files_avatars = $request->file('avatar')->store('avatars');
            $data['avatar'] = $files_avatars;
                        // $data['image'] = $request->file('image')->store('products', 'public');
        }
        User::query()->create($data);
        return redirect()->route('admin.users.index')->with('message', 'Đăng ký thành công');
    }
    public function edit(User $user){
        return view('admin.users.edit',compact('user'));
    }
    public function update(Request $request, User $user){
        $data = $request->validate([
            'fullname' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'min:5'],
            'confirm_password' => ['required', 'same:password'],
            'avatar'=> ['mimes:jpeg,png,jpg,gif', 'max:2048'],
            'role' => ['required', 'in:user,admin'],  // Thêm vai trò: user, admin
            'active' => ['required', 'boolean'],      // Thêm trạng thái kích hoạt
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
        return redirect()->route('admin.users.index')->with('message', 'Cập nhập thành công');
    }
    public function destroy(User $user){ 
        $user->delete();
        return redirect()->back()->with("messagee","Xóa thành công");
    }

    public function home(){

        // Tổng số sách
       $totalBooks = Book::count();

       // Tổng số sách theo từng danh mục
       $booksByCategory = Category::withCount('books')->get();

       return view('admin.home', compact('totalBooks', 'booksByCategory'));

   }
   public function search(Request $request)
   {
       $query = $request->input('query');
       $index = 1;
       // Thực hiện tìm kiếm phim
       $users = User::where('username', 'like', "%{$query}%")->paginate(5);
   
       return view('admin.users.search', compact('users', 'query'));
   }
   

}
