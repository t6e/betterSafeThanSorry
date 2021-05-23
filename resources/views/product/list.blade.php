<!DOCTYPE html>
<html>

<head></head>

<body>
    <header>
        <p>これはポートフォリオ用に作られたデモサイトです。このサービスは実際には利用できません
            @if (Auth::check())
                <a href="/home">USER:{{ $user->name . '(' . $user->email . ')' }}</a>
            @else
                <a href="/login">ログイン</a>|<a href="/register">登録</a>)
            @endif
        </p>
    </header>
    <h1>非常食の販売及び賞味期限の管理サービス</h1>
    <p>商品一覧</p>
    <ol>
        @foreach ($items as $item)
            <li><a href="/product/{{ $item->product_id }}">{{ $item->product_name }}</a>
        @endforeach
    </ol>
</body>

</html>
