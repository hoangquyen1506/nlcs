<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\season;


class seasonController extends Controller
{
    public function getList() {
    	$season = season::all();
    	return view('admin.season.list', ['season'=> $season]);
    }

    public function getEdit($id) {
    	$season = season::find($id);
        return view('admin.season.edit',compact('season'));
    }

    public function postEdit(Request $request, $id) {
        $season = season::find($id);
        $this->validate($request,
            [
                'name' => 'required|max:50'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên loại món ăn',
                'name.unique' => 'Tên loại món ăn đã tồn tại',
                'name.min' => 'Tên loại món ăn phải có tối thiểu 2 kí tự!',
                'name.max' => 'Tên loại món ăn phải có tối đa 50 kí tự!',
            ]);

        $season->ten_mua = $request->name;
        $season->tenmuakd = str::slug($request->name);
        $season->save();

        return redirect('admin/season/edit/'.$id)->with('thongbao', 'Sửa thành công.');
    }

    public function getInsert() {
    	return view('admin.season.insert');
    }

    public function postInsert(Request $request) {
    	$this->validate($request,
        [
            'name' => 'required|unique:category,c_ten|min:2|max:50'
        ],
        [
            'name.required' => 'Bạn chưa nhập tên thể loại!',
            'name.unique' => 'Tên loại món ăn đã tồn tại',
            'name.min' => 'Tên loại món ăn phải có tối thiểu 2 kí tự!',
            'name.max' => 'Tên loại món ăn phải có tối đa 50 kí tự!',
        ]);
    	$season = new season;
        $season->ten_mua = $request->name;
        $season->tenmuakd = str::slug($request->name);
        $season->save();


    	return redirect('admin/season/insert')->with('thongbao', 'Thêm thành công.');
    }

    public function getDelete($id) {
        $season = season::find($id);
        $season->delete();

        return redirect('admin/season/list')->with('thongbao', 'Xóa thành công.');
    }
}
