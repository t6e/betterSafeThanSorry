@extends('layouts.base')
@section('page_title', '購入履歴')
@section('content')
    <?php use App\Models\{Product, Stock}; ?>
    @if (!isset($history))
        <p>何も購入していません</p>
    @else
        <table>
            @foreach ($history as $info)
                <tr>
                    <th>商品名</th>
                    <th>賞味期限</th>
                    <th>個数</th>
                    <th>購入日時</th>
                </tr>
                <?php
                $stock = Stock::find($info->stock_id);
                $product = Product::find($stock->product_id);
                ?>
                <tr>
                    <td><a href="product/{{ $product->product_id }}">{{ $product->product_name }}</a></td>
                    <td> {{ $stock->expiration_date }}</td>
                    <td>{{ $info->num }}</td>
                    <td>{{ $info->created_at }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
