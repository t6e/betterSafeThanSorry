@extends('layouts.base')
@section('page_title', $product->product_name)
@section('content')
    <p>{{ $product->product_info }}</p>
    <p>賞味期限</p>
    <?php
    use App\Models\{Product, Stock};
    $added = false;
    if (isset($cart)) {
    $stock_id_list = array_column($cart, 'stock_id');
    }
    ?>
    <form action="/cart/add" method="POST" id="cart_form">
        @csrf
        <input name="product_id" type="hidden" value={{ $product->product_id }}>
        @foreach ($stock as $info)
            <?php
            $added = false;
            if (isset($stock_id_list)) {
            $added = in_array($info->stock_id, $stock_id_list);
            }
            ?>
            <input name="stock_id" type="radio" onclick="howMany({{ $info->num }},{{ $added }})"
                value={{ $info->stock_id }}>{{ $info->expiration_date }}
        @endforeach
        <div id="product_num"></div>
    </form>
@endsection
@section('script')
    <script>
        function howMany(num, added) {
            const div = document.getElementById("product_num");
            var newDiv = document.createElement("div");
            newDiv.id = "product_num";
            var newP = document.createElement("p");
            if (added) {
                const newA = document.createElement("a");
                newA.href = "/cart";
                newA.textContent = "カートに追加済";
                newP.appendChild(newA);
                newDiv.appendChild(newP);
            } else {
                newP.textContent = "個数";
                newDiv.appendChild(newP);
                var newSelect = document.createElement("select");
                newSelect.name = "num";

                for (let i = 1; i <= num; i++) {
                    const option = document.createElement("option");
                    option.value = i;
                    option.textContent = i;
                    newSelect.appendChild(option);
                }

                newDiv.appendChild(newSelect);

                var newP2 = document.createElement("p");
                var newInput = document.createElement("input");
                newInput.type = "submit";
                newInput.value = "カートに追加する";
                newP2.appendChild(newInput);
                newDiv.appendChild(newP2);

            }
            document.getElementById("cart_form").replaceChild(newDiv, div);
        }

    </script>
@endsection
