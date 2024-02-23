@extends('layouts.app')

@section('content')
    <title>{{'app_name'}} {{'title'}}</title>
    <navbar>
        <ul>
            @foreach($routes as $r )
                <li><a href={{$r['url']}}>{{$r['name']}}</a></li>
            @endforeach
        </ul>
    </navbar>

@endsection

