<header>
    <p>これはポートフォリオ用に作られたデモサイトです。このサービスは実際には利用できません
        @if (Auth::check())
            <a href="/home">USER:{{ $user->name . '(' . $user->email . ')' }}</a>
        @else
            (<a href="/login">ログイン</a>|<a href="/register">登録</a>)
        @endif
    </p>
</header>
