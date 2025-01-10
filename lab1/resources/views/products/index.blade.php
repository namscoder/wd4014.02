@extends('homes.index')
@section('title','Danh sách sản phẩm')
@section('content')


<table class="table">
    <thead>
    <tr>
    <th >id</th>
    <th >name</th>
    <th>image</th>
    <th >price</th>
    </tr>
    </thead>
    @foreach($products as $product)
    <tbody>
    <tr>
    <td>{{$product['id']}}</td>
    <td>{{$product['name']}}</td>
    <td><img style="width: 100px" src="{{$product['image']}}"></td>
    <td>{{$product['price']}}</td>
    </tr>
    </tbody>
    @endforeach
</table>





@endsection
