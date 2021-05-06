<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category, Request $request, Topic $topic)
    {
        // 读取分类ID关联的话题
        $topics = $topic->withOrder($request->order)
            ->with('user', 'category')
            ->where('category_id', $category->id)
            ->paginate();
        // 传参变量话题和分类到视图中
        return view('topics.index', compact('topics', 'category'));
    }
}
