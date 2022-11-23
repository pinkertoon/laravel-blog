<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;


class MainController extends Controller
{

    public function index() {
        // $test= new Tag();
        // $test->title = 'Я люблю собак';
        // $test->save();
        $t = Tag::get

        return view('admin.index');
    }
}
