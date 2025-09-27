<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class homeController extends Controller{
    public function requestMethod(Request $request){
        $name = $request->name;
        $surname = $request->surname;
        $age = $request->age;
        $color = 'black';
        $languages = ['js','python','php','java'];
        return view('index',compact('name','surname','age','languages','color'));
    }
}

?>