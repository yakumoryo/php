<div class="panel panel-primary" style="border-color:#777BB4;">
<div class="panel-heading clearfix" style="background:#777BB4;">
<h2>PHP/Laravel コ－ス</h2>
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">合計勉強時間：</td>
        <td>{{$phptotaltime}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgphptime}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成率：</td>
        <td>{{$phpstatus}}%</td>
    </tr>
    
    <tr>
        <td class="text-center">平均達成率：</td>
        <td>{{$allsumphpstatus}}%</td>
    </tr>
    
    <tr>
        <td class="text-center">登録者数：</td>
        <td>{{App\Time::count()}}人</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson0</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson0}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson0}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson0==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson0}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson1</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson1}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson1}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson1==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson1}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson2</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson2}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson2}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson2==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson2}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson3</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson3}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson3}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson3==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson3}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson4</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson4}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson4}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson4==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson4}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson5</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$avgtimephplesson5}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{App\Time::avg('phptimelesson5')}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson5==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson5}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson6</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson6}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson6}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson6==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson6}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson7</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson7}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson7}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson7==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson7}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson8</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson8}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson8}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson8==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson8}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson9</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson9}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson9}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson9==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson9}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson10</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson10}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson10}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson10==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson10}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson11</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson11}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson11}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson11==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson11}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson12</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson12}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson12}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson12==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson12}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson13</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson13}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson13}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson13==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson13}}%</td>
    </tr>

</table>
</div>

<div class="panel panel-default">
<div class="panel-heading clearfix">
<h3>Lesson14</h3>
{!! link_to_route('times.phpedit', '更新', ['id' => $phptimes->id], ['class' => "pull-right btn btn-default"]) !!}
</div>
<table class="table table-condensed table-bordered">
    <tr>
        <td class="text-center">勉強時間：</td>
        <td>{{$phptimes->phptimelesson14}}時間</td>
    </tr>
    
    <tr>
        <td class="text-center">平均勉強時間：</td>
        <td>{{$avgtimephplesson14}}時間</td>
    </tr>
    
        <tr>
        <td class="text-center">達成状況：</td>
        <td>
            @if ($phptimes->phpstatuslesson14==1)
                <button class="btn-info">達成済</button>
            @else
                <button class="btn-success">未達成</button>
            @endif
        </td>
    </tr>
    
    <tr>
        <td class="text-center">達成率：</td>
        <td>{{$avgphpstatuslesson14}}%</td>
    </tr>

</table>
</div>