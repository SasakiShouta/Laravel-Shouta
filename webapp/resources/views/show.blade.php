<h1>編集画面</h1>
<form action="{{ route('regist.edit', ['id' => $post->id]) }}" method="post">
    @csrf
    <div>
        タイトル
        <input type="text" name="title" value="{{ $post->title }}">
    </div>

    <div>
        投稿者
        <select name="author_id" id="">
            <option value="">選択してください</option>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->author_name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        本文
        <textarea name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>
    </div>
    <input type="submit" value="更新する">
</form>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif