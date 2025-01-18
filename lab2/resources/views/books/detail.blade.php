@extends('homes.layout')
@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{$book->thumbnail}}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Title: {{$book->title}}</h5>
            <p class="card-text">Author: {{$book->author}}</p>
            <p class="card-text">Publisher: {{$book->publisher}}</p>
            <p class="card-text">Publication: {{$book->publication}}</p>
            <p class="card-text">Price: {{$book->price}}</p>
            <p class="card-text">Quantity: {{$book->quantity}}</p>
            <p class="card-text">Category: {{$book->name}}</p>
            <a href="{{route('book')}}" class="btn btn-primary">Quay lai</a>
            <a href="{{route('home')}}" class="btn btn-primary">Trang chu</a>
        </div>
    </div>
@endsection
