<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getSetting(){
        return Setting::first();
    }
    public function index()
    {
        $setting=Setting::first();
        return view('home.index',['setting'=>$setting,'page'=>'home']);
    }
    public function aboutus()
    {

        $setting=Setting::first();
        return view('home.about',['setting'=>$setting,'page'=>'home']);
        #return view('home.about');
    }
    public function product($id,$slug){
        $data=Product()::find($id);
        return view('home.product_detail',['data'=>$data]);

    }
    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials))
            {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email'=>'The provided credentials do not your username records',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function test($id,$name)
    {
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
        /*
        echo "Id number:",$id;
        echo "<br>Name:",$name;
        for ($i=1;$i<=$id;$i++)
        {
            echo "<br> $i - $name";
        }
        */
    }
}
