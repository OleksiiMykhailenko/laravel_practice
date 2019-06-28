@extends('layouts.default')
@section('content')

    <div class="card">
        <div class="card-header">
            Book details
        </div>
        <form>
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">{{$book->author}}</p>
                <p class="card-text">{{$book->isbn}}</p>
                <p><a href="/pages{{$book->id}}" class="btn btn-dark">Edit</a></p>
                <button href="" type="submit" class="btn btn-dark">Delete</button>
            </div>
        </form>
    </div>
@stop
