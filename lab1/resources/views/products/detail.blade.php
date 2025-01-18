@extends('homes.index')
@section('title','Chi tiết sản pham')
@section('content')

    <h1>{{ $product['name'] }}</h1>
    <img src="{{ $product['image'] }}" style="width:400px;">
    <p>Giá: {{ $product['price']}} VNĐ</p>
    <a class="btn btn-success" href="{{ route('product') }}">Quay lại danh sách sản phẩm</a>
@endsection

