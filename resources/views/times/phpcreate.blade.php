@extends('layouts.app')

@section('content')

@if (Auth::check())

<div class="row">
<div class="col-xs-12 col-sm-offset-2 col-sm-8">
<div class="panel panel-primary" style="border-color:#777BB4;">
<div class="panel-heading clearfix" style="background:#777BB4;">
<h2>PHP/Laravel コ－ス</h2>
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">合計勉強時間：</td>
        <td>0時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgphptime}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成率：</td>
        <td>0%</td>
    </tr>
    
    <tr>
        <td class="text-center">平均達成率：</td>
        <td>%</td>
    </tr>
    
    <tr>
        <td class="text-center">登録者数：</td>
        <td>{{App\Time::count()}}人</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h3>Lesson0</h3>
</div>

<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>
            {!!  Form::open(['route' => 'times.phpstore', $user->id]) !!}
                    <div class="col-xs-5">
                    <div class="form-group">
                        {!! Form::text('phptimelesson0',null,['class' => 'form-control']) !!}
                    </div>
                </div>
                <div>
                時間
                    {!! Form::submit('登録', ['class' => "btn btn-default pull-right"]) !!}
                    {!! Form::close() !!}
                </div>
        </td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson0}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson0}}%</td>
    </tr>

</table>
</div>

</div>
</div>
           
@endif

@endsection