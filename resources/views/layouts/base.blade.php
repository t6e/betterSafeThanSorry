<!DOCTYPE html>
<html>

<head>
    <title>@yield('page_title')</title>
</head>

<body>
    @component('components.header')
        @if (isset($user))
            @slot('user_name')
                {{ $user->name }}
            @endslot
            @slot('user_email')
                {{ $user->email }}
            @endslot
        @endif
    @endcomponent
    <h1>非常食の販売及び賞味期限の管理サービス</h1>
    <h2>@yield('page_title')</h2>
    @section('content')
    @show
    @section('script')
    @show
</body>

</html>
