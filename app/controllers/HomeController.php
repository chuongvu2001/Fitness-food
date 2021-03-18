<?php
    namespace App\Controllers;
    use App\Models\Category;
    use App\Models\Product;
    use App\Models\User;
    use Carbon\Carbon;
    class HomeController extends BaseController{
        public function index(){
            $cate_all = Category::all();
        }
        public function login(){
            $this->render('loginadmin.loginForm');
        }
        public function loginForm(){
            $email = isset($_POST['email']) ==true ? trim($_POST['email']) : "";
            $password =  isset($_POST['password']) ==true ? trim($_POST['password']) : "";
            if(empty($_POST['email']) || empty($_POST['password'])){
                header('location: '. BASE_URL .'login?msg=Taikhoan/matkhaukhonghople');
                die;
            }
            $user = User::where('email',$email)->first();
            if(empty($user) || !password_verify($password, $user->password)){
                header('location: '. BASE_URL . 'login?msg=Taikhoan/matkhaukhongdung');
                die;
            }
            $_SESSION[AUTH] = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role
            ];
            header('location: '. BASE_URL . 'cate-list');
        }
        public function logout(){
            unset($_SESSION[AUTH]);
            header('location: '. BASE_URL .'login');
        }
        public function loginMember(){
            $this->render('frontend.member');
        }
        public function productDetail(){
            $this->render('frontend.products_detail');
        }
        public function loginFront(){
            $email = isset($_POST['email']) ==true ? trim($_POST['email']) : "";
            $password =  isset($_POST['password']) ==true ? trim($_POST['password']) : "";
            if(empty($_POST['email']) || empty($_POST['password'])){
                header('location: '. BASE_URL .'login-member?msg=Taikhoan/matkhaukhonghople');
                die;
            }
            $user = User::where('email',$email)->first();
            if(empty($user) || !password_verify($password, $user->password)){
                header('location: '. BASE_URL . 'login-member?msg=Taikhoan/matkhaukhongdung');
                die;
            }
            $_SESSION[AUTH] = [
                'id' => $user->id,
                'name' => $user->name,
                'avatar' => $user->avatar,
                'email' => $user->email,
                'role' => $user->role
            ];
            header('location: '. BASE_URL);
        }
        public function logoutMember(){
            unset($_SESSION[AUTH]);
            header('location: '. BASE_URL);
        }
        public function signupMember(){
            $data = $_POST;
            $image = $_FILES['avatar'];
            $avatar = '';
            if($image['size']>0){
                $avatar = 'uploads/' . uniqid() . '-' . $image['name'];
                move_uploaded_file($image['tmp_name'],$avatar);
                $data['avatar'] = $avatar;
            }
            else{
                $avatar = 'uploads/'.'user.png';
                $data['avatar'] = $avatar;
            }
            $data['role']=1;
            $data['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $datetime = Carbon::now('Asia/Ho_Chi_Minh');
            $data['created_at'] = $datetime;
            User::insert($data);
            $this->render('frontend.member');
        }
    }