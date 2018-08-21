<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
   public function index()
   {
        $todos = Todo::all();
        // dd($todos);

       return view('todo.index',[
           'todos' => $todos
       ]);
       // view('view下面的檔案,如果有再建立一個資料夾,變成 資料夾.檔案名')
   }
   public function update(Request $request)
   {
    #第一種儲存方式
    //    $todo = new Todo();
    //    $todo->title = $request->title;
    //    $todo->save(); 

    #第二種儲存方式
        // $todo = Todo::create([
        //     'title' => $request->title,
        // ]);

    #第三種儲存方式
        $todo = Todo::create($request->all());

        return redirect('todo');
   }   
}
