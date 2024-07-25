<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class RemotePostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            // バリデーション
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
            ]);

            // 新しい投稿を作成
            $post = Post::create($validatedData);

            // コミット
            DB::commit();

            // 成功メッセージ
            return response()->json(['message' => 'success post', 'data' => $post], 201);
        } catch (\Exception $e) {

            // ロールバック
            DB::rollback();
            
            // エラーメッセージ
            return response()->json(['error' => $e->getMessage()], 500);
        }//
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
