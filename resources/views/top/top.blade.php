<!DOCTYPE html>
<html>

<head></head>

<body>
    <header>
        <p>これはポートフォリオ用に作られたデモサイトです。このサービスは実際には利用できません</p>
    </header>
    <h1>非常食の販売及び賞味期限の管理サービス</h1>
    @if (Auth::check())
        <p>USER:{{ $user->name . '(' . $user->email . ')' }}</p>
    @else
        <p>※ログインしていません(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
    @endif
    <a href="/">商品一覧</a>
</body>

</html>