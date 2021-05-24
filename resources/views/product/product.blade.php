@extends('layouts.base')
@section('page_title', $product->product_name)
@section('content')
    <p>{{ $product->product_info }}</p>
    <p>賞味期限</p>
    @foreach ($stock as $info)
        <input name="expiration_date" type="radio" onclick="howMany({{ $info->num }})"
            value={{ $info->expiration_date }}>{{ $info->expiration_date }}
    @endforeach
    <p>個数</p>
    <select>
    </select>
    <p><input type="submit" value="購入"></p>
@endsection
@section('script')
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
@endsection
