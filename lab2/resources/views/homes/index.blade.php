@extends('homes.layout')

@section('content')

<div class="">
    <div>
        <h1>Gia cao nhat</h1>
    </div>
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
            @foreach($book_highprices as $bh)
                <tbody>
                <tr>
                    <th>{{$bh->id}}</th>
                    <th>{{$bh->title}}</th>
                    <th><img src="{{$bh->thumbnail}}" style="width: 100px"></th>
                    <th>{{$bh->author}}</th>
                    <th>{{$bh->publisher}}</th>
                    <th>{{$bh->publication}}</th>
                    <th>{{$bh->price}}</th>
                    <th>{{$bh->quantity}}</th>
                    <th>{{$bh->name}}</th>
                    <th><a class="btn btn-primary" href="{{route('detail',['id'=>$bh->id])}}">Detail</a></th>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <div>
        <h1>Gia thap nhat</h1>
    </div>
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
                <th>category
                <th>action</th>
            </tr>
            </thead>
            @foreach($book_lowprices as $bl)
                <tbody>
                <tr>

                    <th>{{$bl->id}}</th>
                    <th>{{$bl->title}}</th>
                    <th><img src="{{$bl->thumbnail}}" style="width: 100px"></th>
                    <th>{{$bl->author}}</th>
                    <th>{{$bl->publisher}}</th>
                    <th>{{$bl->publication}}</th>
                    <th>{{$bl->price}}</th>
                    <th>{{$bl->quantity}}</th>
                    <th>{{$bl->name}}</th>
                    <th><a class="btn btn-primary" href="{{route('detail',['id'=>$bl->id])}}">Detail</a></th>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</div>


@endsection
