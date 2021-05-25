<header>
    <p>これはポートフォリオ用に作られたデモサイトです。このサービスは実際には利用できません
        @if (Auth::check())
            <a href="/home">USER:{{ $user->name . '(' . $user->email . ')' }}</a>
        @else
            (<a href="/login">ログイン</a>|<a href="/register">登録</a>)
        @endif
    </p>
    <p>
        <a href="/cart">カート</a> | <a href="/product/list">商品一覧</a>
    </p>
</header>
