<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
class CategoryController extends BaseController{
    public function listCate(){
        $cates = Category::all();
        $this->render('admin/categories/cate-list',['cates' => $cates]);
    }
    public function cateDetail(){
        $cate = $_GET['cate'];
        $cateDetail = Category::where('id_grade',$cate)->get();
        $this->render('admin/categories/cate-pr',['cateDetail' => $cateDetail]);
    }
    public function cateAdd(){
        $cates = Category::all();
        if (isset($cates)){
            $cate = Category::where('id_grade',0)->get();
            $this->render('admin/categories/cate-add',['cate' => $cate, 'cates' => $cates]);
        }
        else{
            $this->render('admin/categories/cate-add');

        }

    }
    public function cateSave(){
            $data = $_POST;
            $datetime = Carbon::now('Asia/Ho_Chi_Minh');
            $data['created_at'] = $datetime;
            isset($data['show_menu']) ==1 ? $data['show_menu']=1: $data['show_menu']=0;
            Category::insert($data);
            header('location: cate-list');
    }
    public function cateRemove(){
        $cate = $_GET['cate'];
        Category::find($cate)->delete();
        header("location: cate-list");
    }
    public function cateEdit(){
        $cate_id = $_GET['cate'];
        $cates  = Category::all();
        $cate = Category::where('id',$cate_id)->get();
        $this->render('admin/categories/cate-edit',['cate'=>$cate,
        'cates'=>$cates, 'cate_id' => $cate_id
        ]);
    }
    public function editSave(){
        $cate_id = $_GET['cate'];
        $data = $_POST;
        $datetime = Carbon::now('Asia/Ho_Chi_Minh');
        $data['updated_at'] = $datetime;
        isset($data['show_menu']) ==1 ? $data['show_menu']=1: $data['show_menu']=0;
        Category::where('id',$cate_id)->update($data);
        header("location: cate-list");
    }

}