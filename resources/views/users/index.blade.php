@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-xs-12 col-sm-offset-2 col-sm-8">
    @if (count($users) > 0)
<ul class="media-list">
@foreach ($users as $user)
    <li class="media">
        <div class="media-left">
            <img class="img-circle" src="{{ Gravatar::src($user->email, 50). '&d=mm' }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {{ $user->name }}
            </div>
            <div>
                <p>{!! link_to_route('users.show', '詳細を見る', ['id' => $user->id]) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $users->render() !!}
@endif
</div>
</div>
@endsection