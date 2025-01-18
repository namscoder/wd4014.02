@extends('homes.layout')
@section('title','Book List')
@section('content')
    <div>
        <h1>Book List</h1>
    </div>
    <form class="form-group" method="GET" action="{{ route('book') }}">
        <select class="form-control" name="category_id">
            <option value="">Chọn thể loại</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>

        <button class="btn btn-primary" type="submit">Lọc</button>
    </form>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>title</th>
                <th>thumbnail</th>
                <th>author</th>
                <th>publisher</th>
                <th>publication</th>
                <th>price</th>
                <th>quantity</th>
                <th>category</th>
                <th>action</th>
            </tr>
            </thead>
            @foreach($books as $book)
                <tbody>
                <tr>
                    <th>{{$book->id}}</th>
                    <th>{{$book->title}}</th>
                    <th><img src="{{$book->thumbnail}}" style="width: 100px"></th>
                    <th>{{$book->author}}</th>
                    <th>{{$book->publisher}}</th>
                    <th>{{$book->publication}}</th>
                    <th>{{$book->price}}</th>
                    <th>{{$book->quantity}}</th>
                    <th>{{$book->name}}</th>
                    <th><a class="btn btn-primary" href="{{route('detail',['id'=>$book->id])}}">Detail</a></th>
                </tr>
                </tbody>
            @endforeach
        </table>
        {{$books->links()}}
    </div>

@endsection
