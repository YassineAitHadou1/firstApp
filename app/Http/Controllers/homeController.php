<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class homeController extends Controller{
    public function requestMethod(Request $request){
        $users = [
            ["id" =>"1", "name" => "yassine", "age"=> 19],
            ["id" =>"2", "name" => "ahmed", "age"=> 29],
            ["id" =>"3", "name" => "khadija", "age"=> 30]
        ];
        return view('index',compact('users'));
    }
}

?>