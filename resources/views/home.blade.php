@extends('layouts.layout')

@section('content')
    <div class="home-div container">
        <h3>Welcome to BRS</h3>
        <br>
        <div class="details-div">
            <div class="users">
                <h4>Users</h4>
                <p>{{count($users)}}</p>
            </div>
            <div class="genres">
                <h4>Number of genres</h4>
                <p>
                    {{count($genrelist)}}
                </p>
            </div>
            <div class="books">
                <h4>Number of books</h4>
                <p>
                    {{count($books)}}
                </p>
            </div>
{{--            active book rentals --}}
            <div class="rentals">
                <h4>Active book rentals</h4>
                <p>
                    {{$rentals}}
                </p>
            </div>
        </div>
        <br>
        <br>
        <div class="genre-list">
            <h4>Genre list</h4>
            <ol>
                @foreach($genrelist as $genre)
                    <li>
                        <a href="{{ route('books.genre', ['genre' => $genre->name]) }}">{{$genre->name}}</a>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection


