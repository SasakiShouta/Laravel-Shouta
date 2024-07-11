<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'author_id', 'content'];

    public function getPosts(){
        $posts = self::join('authors', 'posts.author_id', '=', 'authors.id')
            ->select('posts.*', 'authors.author_name')
            ->get();

        return $posts;
    }

    public function storePost($request){
        self::create([
            'title' => $request->input('title'),
            'author_id' => $request->input('author_id'),
            'content' => $request->input('content')
        ]);
    }

    public function updatePost($request, $id){
        $posts = self::find($id);
        $posts->title = $request->input('title');
        $posts->author_id = $request->input('author_id');
        $posts->content = $request->input('content');
        $posts->save();
    }

    public function deletePost($id){
        $post = self::find($id);
        $post->delete();
    }
}
