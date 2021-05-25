@extends('layouts.base')
@section('page_title', 'カートの中身')
@section('content')
    <?php use App\Models\{Product, Stock}; ?>
    @if (!isset($cart))
        <p>何も入っていません</p>
    @else
        <form action="cart/change" method="POST">
            @csrf
            <table>
                @foreach ($cart as $item)
                    <tr>
                        <th>商品名</th>
                        <th>賞味期限</th>
                        <th>個数</th>
                        <th></th>
                    </tr>
                    <?php
                    $stock = Stock::find($item['stock_id']);
                    $product = Product::find($stock->product_id);
                    ?>
                    <tr>
                        <td><a href="product/{{ $product->product_id }}">{{ $product->product_name }}</a></td>
                        <td> {{ $stock->expiration_date }}</td>
                        <td> <select name={{ $stock->stock_id }}>
                                @for ($i = 1; $i <= $stock->num; $i++)
                                    @if ($i == $item['num'])
                                        <option value={{ $i }} selected>{{ $i }}</option>
                                    @else
                                        <option value={{ $i }}>{{ $i }}</option>
                                    @endif
                                @endfor
                            </select></td>
                        <td><a href="/cart/remove/{{ $stock->stock_id }}">削除</a></td>
                    </tr>
                @endforeach
            </table>
            <p><input type="submit" value="変更を保存"> | <a href="purchase">購入</a></p>
        </form>
    @endif
@endsection
