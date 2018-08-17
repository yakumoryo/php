@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-xs-12 col-sm-offset-2 col-sm-8">
<div class="btn-group">
  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    並べ替え <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="{{ route('times.index')}}">合計時間</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">0</a></li>
    <li><a href="#">1</a></li>
  </ul>
</div>
@if (count($phptimes) > 0)
<ul class="media-list">
@foreach ($phptimes as $phptime)
    <li class="media">
        <div class="media-left">
            <img class="img-circle" src="{{ Gravatar::src($phptime->user->email, 50). '&d=mm' }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {{ $phptime->user->name }}
            </div>
            <div>
                <p>{!! link_to_route('users.show', '詳細を見る', ['id' => $phptime->user->id]) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>

@endif
</div>
</div>
@endsection