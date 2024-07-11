<h1>一覧画面</h1>
<button onclick="location.href='{{ route('show.create') }}'">新規登録画面へ</button>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>タイトル</th>
            <th>投稿者</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author_name }}</td>
                <td><button onclick="location.href='{{ route('show.edit', ['id' => $post->id]) }}'">編集</button></td>
                <td>
                    <form action="{{ route('delete', ['id' => $post->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>