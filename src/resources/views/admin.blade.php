<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<header class="header">
    <h1 class="logo">FashionablyLate</h1>
</header>

<main class="admin-container">
    <h2 class="admin-title">Admin</h2>

    <form class="search-form" action="{{ route('admin.index') }}" method="GET">

        <input
            type="text"
            name="keyword"
            value="{{ request('keyword') }}"
            placeholder="名前やメールアドレスを入力してください">

        <select name="gender">
            <option value="">性別</option>
            <option value="1" {{ request('gender') == '1' ? 'selected' : '' }}>男性</option>
            <option value="2" {{ request('gender') == '2' ? 'selected' : '' }}>女性</option>
        </select>

        <select name="category_id">
            <option value="">お問い合わせの種類</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ request('category_id') == $category->id ? '商品のお届けについて' : ''}}
                    {{ request('category_id') == $category->id ? '商品の交換について' : ''}}
                    {{ request('category_id') == $category->id ? '商品トラブル' : '' }}
                    {{ request('category_id') == $category->id ? 'ショップへのお問い合わせ' : '' }}
                    {{ request('category_id') == $category->id ? 'その他' : '' }}
                    {{ $category->content }}
                </option>
            @endforeach
        </select>

        <input type="date" name="date" value="{{ request('date') }}">

        <button class="btn-search" type="submit">検索</button>
        <a href="{{ route('admin.index') }}" class="btn-reset">リセット</a>
    </form>

    <button class="export-btn">エクスポート</button>


    <table class="admin-table">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th>操作</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>

                    <td>
                        {{ $contact->gender == 1 ? '男性' : '女性' }}
                    </td>

                    <td>{{ $contact->email }}</td>

                    <td>{{ $contact->category->content ?? '' }}</td>

                    <td>
                        <form action="{{ route('admin.destroy', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="delete-btn">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</main>

</body>
</html>