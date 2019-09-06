<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Category;
use App\Post;

class AdminController extends Controller
{
    public function index(){
      $postsCount = Post::count();
      $categoriesCount = Category::count();
      $commentsCount = Comment::count();

      return view('admin/index', compact('postsCount', 'categoriesCount', 'commentsCount'));


    }
}
