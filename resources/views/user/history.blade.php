@extends('layouts.base')
@section('page_title', '購入履歴')
@section('content')
    <ol>
        @foreach ($items as $item)
            <li><a href="/product/{{ $item->product_id }}">{{ $item->product_name }}</a>
        @endforeach
    </ol>
@endsection
