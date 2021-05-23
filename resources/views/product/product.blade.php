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
    <h2>{{ $product->product_name }}</h2>
    <p>{{ $product->product_info }}</p>
    <p>賞味期限</p>
    @foreach ($stock as $info)
        <input name="expiration_date" type="radio" onclick="howMany({{ $info->num }})"
            value={{ $info->expiration_date }}>{{ $info->expiration_date }}
    @endforeach
    <p>個数</p>
    <select>
    </select>
    <p><input type="submit" value="送信する"></p>
    <script>
        function howMany(num) {
            const select = document.querySelector("select");
            var newSelect = document.createElement("select");

            for (let i = 1; i <= num; i++) {
                const option = document.createElement("option");
                option.tagName = "num";
                option.value = i;
                option.textContent = i;
                newSelect.appendChild(option);
            }
            document.body.replaceChild(newSelect, select);
        }

    </script>
</body>

</html>
