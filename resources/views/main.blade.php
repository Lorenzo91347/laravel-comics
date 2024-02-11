@extends('welcome')
@section('main')
<div class="background">
    <div class="list-cnt">
        @foreach ($comics as $comic)
        <ul>
            <li>{{$comic['title']}}</li>
            <li>{{$comic['description']}}</li>
            <li>{{$comic['thumb']}}</li>
            <li>{{$comic['price']}}</li>
            <li>{{$comic['series']}}</li>
            <li>{{$comic['sale_date']}}</li>
            <li>{{$comic['type']}}</li>
        </ul>
        @endforeach
    </div>
</div>
@endsection
