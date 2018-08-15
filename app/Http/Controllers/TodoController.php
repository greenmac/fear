<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
   public function index()
   {
       return view('todo.index');
       // view('view下面的檔案,如果有再建立一個資料夾,變成 資料夾.檔案名')
   }
   public function update()
   {
       return '123';
   } 
}
