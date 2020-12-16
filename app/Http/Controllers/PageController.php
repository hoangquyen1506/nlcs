<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use App\User;
use App\category;
use App\type;
use App\product;
use App\detail;
use App\material;
use App\spice;
use App\timeCook;
use App\level;
use App\season;


class PageController extends Controller {
	function __construct() {

      $category = category::all();
      $type = type::all();
      $cate = category::all();
      $typ = type::all();
      $season = season::all();
      view::share('category', $category);
      view::share('type', $type);
      view::share('cate', $cate);
      view::share('typ', $typ);
      view::share('season', $season);

		if(Auth::check()) {

         view()->share('user', Auth::user());

      }

   }

   function homePage(Request $request) {

      return view('pages.homepage');

   }

   function admin(Request $request) {

      return view('admin.layout.index');

   }

   public function getListProduct(Request $request){

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);
      $id = array_pop($url);
      
      $productDetails =  product::where('id',$id)->get();
      $postProduct = product::find($id);
      $getDetails = detail::where('idproduct',$id)->get();
      $getMaterials = material::where('idProduct', $id)->get();
      $getSpices = spice::where('idPD', $id)->get();
      $timecooks = timecook::where('idProD', $id)->get();
      $levels = level::where('idPDuct', $id)->get();
      $category = category::all();
      $season = season::where('id', $id)->get();
      
      // Lấy ID Category
      $getIDCat = null;
      foreach($productDetails as $proD){
         $getIDCat = $proD['idCategory'];
      }

      /*

      1. Canh      2. Chiên      3. Nướng
      4. Kho       5. Ăn vặt     6. Món nước
      7. Món Chay  8. Xào        9. Luộc hấp

      */

      $idC = 0;
      $idCat = array(1,2,3,4,5,6,7,8,9); // danh sach danh muc A | KHÔNG ĐỔI !
      $idMixCat = array(3,4,6,4,8,3,6,1,2); // danh sach ket hop voi danh muc A | THAY ĐỔI SƯ KẾT HỢP
      
      // Goi y mon an o danh muc A
      foreach (array_combine($idCat, $idMixCat) as $code => $name) {
         if($getIDCat == $code) {
            $idC = $name;
         }
      }

      // Bổ sung cho Phần Món ăn gợi ý đi kèm
      $categoryi = product::where('idCategory',$idC)->get();
      $products = product::where([
         'idCategory'=>$idC
      ])->get();



      $viewdata = [
         'productDetails' => $productDetails,
         'getDetails' => $getDetails,
         'getMaterials' => $getMaterials,
         'getSpices' => $getSpices,
         'timecooks' => $timecooks,
         'levels' => $levels,
         'category' => $category,
         'postProduct' => $postProduct,
         'season' => $season,
         'products' => $products,
         'categoryi' => $categoryi
      ];

      return view('pages.detail', $viewdata);

   }

   public function getListCategory(Request $request){

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {
         

         $categoryi = category::find($id);

         $products = product::where([
            'idCategory'=>$id
         ])->get();
         $viewdata = [
            'categoryi' => $categoryi,
            'products' => $products,

         ];

         return view('pages.category', $viewdata);

      }

   }
   public function getListSeason(Request $request){

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {

         $season = season::find($id);

         $products = product::where([
            'idSeason'=>$id
         ])->get();

         $viewdata = [
            'season' => $season,
            'products' => $products
         ];

         return view('pages.season', $viewdata);

      }

   }

   public function getListSS(Request $request){

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {

         $ss = season::find($id);

         $productss = product::where([
            'idSeason'=>$id
         ])->get();

         $viewdata = [
            'ss' => $ss,
            'productss' => $productss
         ];



         return view('pages.ss', $viewdata);

      }

   }


   public function getListType(Request $request){

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {

         $type = type::find($id);

         $products = product::where([
            'idType'=>$id
         ])->get();

         $viewdata = [
            'type' => $type,
            'products' => $products
         ];

         return view('pages.type', $viewdata);

      }

   }

   public function getMenuCate(Request $request) {

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {

         $cates = category::find($id);
         $products = product::where([
            'idCategory'=>$id
         ])->get();

         $viewdata = [
            'cates' => $cates,
            'products' => $products
         ];

         return view('pages.cate', $viewdata);

      }

   }

   public function getMenuTyp(Request $request) {

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {

         $typs = type::find($id);
         $productt = product::where([
            'idType'=>$id
         ])->get();

         $viewdata = [
            'typs' => $typs,
            'productt' => $productt
         ];

         return view('pages.typ', $viewdata);

      }

   }

   public function getLogin() {

      return view('pages.login');

   }

   public function postLogin(Request $request) {

      $this->validate($request,
      [
         'email' => 'required|email',
         'password' => 'required'
      ],
      [
         'email.required' => 'Bạn chưa nhập email',
         'email.email' => 'Bạn chưa nhập đúng định dạng email',

         'password.required' => 'Bạn chưa nhập password!!',
      ]);

      if ( Auth::attempt([ 'email'=>$request->email, 'password'=>$request->password ])) {

         return redirect('homepage');

      }
      else {

         return redirect('login')->with('thongbao', 'Email hoặc mật khẩu không đúng!');

      }
   }

   public function getLogout() {

      \Auth::logout();
      return redirect()->back();

   }

   public function getUserProfile($id) {

      $users = DB::table('users')->find($id);
      return view('pages.user',compact('users'));

   }

   public function postUserProfile(Request $request,$id) {

      $users = User::find($id);
      if($request->customSwitch1 == "on"){
         $this->validate($request,
         [
            'email' => 'required|email',
            'pdag' => 'same:pd'
         ],
         [
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            'pdag.same' => 'Mật khẩu không đúng!!',
         ]);

         $users->password = bcrypt($request->password);
         $users->level = $request->quyen;
      }

      $users->name = $request->ten;
      $users->email = $request->email;
      $users->save();
      return redirect()->back()->with('thongbao', 'Sửa thành công.');
   }

   public function getDangki() {
      return view('pages.register');
   }

   public function postDangki(Request $request) {

      $this->validate($request,
      [
         'name' => 'required|unique:users,name|min:4',
         'email' => 'required|email|unique:users,email',
         'password' => 'required|min:6|max:32',
         'repassword' => 'required|same:password'
      ],
      [
         'name.required' => 'Bạn chưa nhập tên người dùng',
         'name.min' => 'Tên người dùng phải có tối thiểu 4 kí tự!',
         'name.unique' => 'Tên người dùng đã tồn tại đã tồn tại',

         'email.required' => 'Bạn chưa nhập email',
         'email.email' => 'Bạn chưa nhập đúng định dạng email',
         'email.unique' => 'Email đã tồn tại',

         'password.required' => 'Bạn chưa nhập mật khẩu',
         'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
         'password.max' => 'Mật khẩu phải có tối đa 32 kí tự',

         'repassword.required' => 'Mật khẩu không đúng!',
         'repassword.same' => 'Mật khẩu không đúng!!'
      ]);

      $users = new User();
      $users->name = $request->name;
      $users->email = $request->email;
      $users->password = bcrypt($request->password);
      $users->level = 0;
      $users->save();
      return redirect('signup')->with('thongbao', 'Đăng kí thành công.');

   }

   public function findProduct(request $request) {

      $productAll = product::all();
      $keyword = $request->keyword;
      $productLists = product::where('ten_sp','like','%'.$keyword.'%')->orWhere('content','like','%'.$keyword.'%')->get();


      $getIDCatt = null;
      foreach($productLists as $proD){
         $getIDCatt = $proD['idCategory'];
      }

      $idCc = 0;
      $idCatt = array(1,2,3,4,5,6,7,8,9); // danh sach danh muc A | KHÔNG ĐỔI !
      $idMixCatt = array(5,4,6,7,8,3,6,1,2); // danh sach ket hop voi danh muc A | THAY ĐỔI SƯ KẾT HỢP
      
      foreach (array_combine($idCatt, $idMixCatt) as $codee => $namee) {
         if($getIDCatt == $codee) {
            $idCc = $namee;
         }
      }

      // Bổ sung cho Phần Món ăn gợi ý đi kèm
      $categoryii = product::where('idCategory',$idCc)->get();
      $products = product::where([
         'idCategory'=>$idCc
      ])->get();
      
      

         
      if($getIDCatt == null) {
         $viewdata = [
            'productLists' => $productLists,
            'productAll' => $productAll,
            'keyword' => $keyword,
         ];
      } else {
         $viewdata = [
            'productLists' => $productLists,
            'productAll' => $productAll,
            'keyword' => $keyword,
            'categoryii' => $categoryii,
            'products' => $products
         ];
      }

      return view('pages.find', $viewdata);

   }


}