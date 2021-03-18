<?php
    namespace App\Controllers;
    use App\Models\Category;
    use App\Models\Product;
    use Carbon\Carbon;
    class ProductController extends BaseController {
        public function productList(){
            $products = Product::all();
            $this->render('admin.products.product-list',['products' => $products]);
        }
        public function productAdd(){
            $cates = Category::all();
            if (isset($cates)){
                $cate = Category::where('id_grade','<>',0)->get();
                $this->render('admin.products.product-add',['cate' => $cate, 'cates' => $cates]);
            }
            else{
                $this->render('admin.products.product-add');
            }
        }
        public function productSave(){
            $data = $_POST;
            $image = $_FILES['image'];
            $avatar = '';
            if($image['size']>0){
                $avatar = 'uploads/' . uniqid() . '-' . $image['name'];
                move_uploaded_file($image['tmp_name'],$avatar);
                $data['image'] = $avatar;
            }
            $datetime = Carbon::now('Asia/Ho_Chi_Minh');
            $data['created_at'] = $datetime;
            Product::insert($data);
            header('location: product-list');
        }
    }