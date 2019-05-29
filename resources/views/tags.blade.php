@extends('welcome')
@section('content')
    @foreach($tags as $tag)
        <div class="card">
            <div class="card-body">
                <h3>{{$tag->id.'. '}}{{$tag->name}}</h3>
            </div>
        </div>
    @endforeach
@endsection

