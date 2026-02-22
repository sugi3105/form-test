<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<header class="header">
    <h1 class="logo">FashionablyLate</h1>
</header>

<main class="admin-container">
    <h2 class="admin-title">Admin</h2>

    {{-- 検索フォーム --}}
    <form class="search-form">
        <input type="text" placeholder="名前やメールアドレスを入力してください">
        <select>
            <option>性別</option>
            <option>男性</option>
            <option>女性</option>
        </select>
        <select>
            <option>お問い合わせの種類</option>
        </select>
        <input type="date">
        <button type="submit">検索</button>
    </form>

    <button class="export-btn">エクスポート</button>

    {{-- テーブル --}}
    <table class="admin-table">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>山田 太郎</td>
                <td>男性</td>
                <td>test@example.com</td>
                <td>商品の交換について</td>
                <td><button class="detail-btn">詳細</button></td>
            </tr>
        </tbody>
    </table>
</main>

</body>
</html>