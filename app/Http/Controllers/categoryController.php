<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;
use Illuminate\Support\Str;

class categoryController extends Controller
{
    public function getList() {
    	$category = category::all();
    	return view('admin.category.list', ['category'=>$category]);
    }

    public function getEdit($id) {
    	$category = category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function postEdit(Request $request, $id) {
        $category = category::find($id);
        $this->validate($request, 
            [
                'name' => 'required|unique:category,c_ten|min:2|max:50'
            ], 
            [
                'name.required' => 'Trường này không được để trống',
                'name.unique' => 'Tên loại món ăn đã tồn tại',
                'name.min' => 'Tên loại món ăn phải có tối thiểu 2 kí tự!',
                'name.max' => 'Tên loại món ăn phải có tối đa 50 kí tự!',
            ]);

        $category->c_ten = $request->name;
        $category->c_tenkd = str::slug($request->name);
        $category->c_img = $request->c_img;
        $category->save();

        return redirect('admin/category/edit/'.$id)->with('thongbao', 'Sửa thành công.'); 
    }

    public function getInsert() {
    	return view('admin.category.insert');
    }

    public function postInsert(Request $request) {
    	$this->validate($request, 
    		[
                'name' => 'required|unique:category,c_ten|min:2|max:50',
    		],
    		[
                'name.required' => 'Trường này không được để trống',
                'name.unique' => 'Tên loại món ăn đã tồn tại',
    			'name.min' => 'Tên loại món ăn phải có tối thiểu 2 kí tự!',
    			'name.max' => 'Tên loại món ăn phải có tối đa 50 kí tự!',
    		]);

    	$category = new category;
    	$category->c_ten = $request->name;
    	$category->c_tenkd = str::slug($request->name);
        $category->c_img = $request->c_img;
    	$category->save();

    	return redirect('admin/category/insert')->with('thongbao', 'Thêm thành công.');
    }

    public function getDelete($id) {
        $category = category::find($id);
        $category->delete();

        return redirect('admin/category/list')->with('thongbao', 'Xóa thành công.');
    }
}
