@extends('layouts.app')

@section('content')
        <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8">
        <div class="icon text-center">
            <img class="img-circle" src="{{ Gravatar::src($user->email, 100) . '&d=mm' }}" alt="">
        </div>
        <div class="name text-center">
            <h1>{{ $user->name }}</h1>
        </div>
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation" class="{{ Request::is('users/*/phptimes') ? 'active' : '' }}"><a href="{{ route('users.phptimes', ['id' => $user->id]) }}">PHP/Laravel</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
        </ul>
        
        <div>
            @if(count($phptimes) == 0)
            @if (\Auth::id() === $user->id)
                {!! Form::open(['route' => 'times.phpstore', $user->id]) !!}
                <div class="form-group">
                {!! Form::submit('作成', ['class' => "btn btn-default form-control"]) !!}
                </div>
                {!! Form::close() !!}
            @endif
            @endif

        </div>
        </div>
        </div>
@endsection