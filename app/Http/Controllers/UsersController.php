<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Time;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);

        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $phptimes = $user->times()->find($id);

        $data = [
            'user' => $user,
            'phptimes' => $phptimes,
        ];

        return view('users.show', $data);
    }
    
    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->times();

        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        return view('users.followings', $data);
    }
    
    public function phptimes($id)
    {
        $user = User::find($id);
        $phptimes = $user->times()->find($id);
        //$phpstatus1=$phptimes->where('phpstatuslesson1','1')->count();
        //$phpstatus0=$phptimes->where('phpstatuslesson1','0')->count();
        //$phpstatus=$phpstatus1/$phpstatus1;
        
        //レッスン別全ユーザー達成率
        $avgphpstatuslesson0=Time::avg('phpstatuslesson0')*100;
        $avgphpstatuslesson1=Time::avg('phpstatuslesson1')*100;
        $avgphpstatuslesson2=Time::avg('phpstatuslesson2')*100;
        $avgphpstatuslesson3=Time::avg('phpstatuslesson3')*100;
        $avgphpstatuslesson4=Time::avg('phpstatuslesson4')*100;
        $avgphpstatuslesson5=Time::avg('phpstatuslesson5')*100;
        $avgphpstatuslesson6=Time::avg('phpstatuslesson6')*100;
        $avgphpstatuslesson7=Time::avg('phpstatuslesson7')*100;
        $avgphpstatuslesson8=Time::avg('phpstatuslesson8')*100;
        $avgphpstatuslesson9=Time::avg('phpstatuslesson9')*100;
        $avgphpstatuslesson10=Time::avg('phpstatuslesson10')*100;
        $avgphpstatuslesson11=Time::avg('phpstatuslesson11')*100;
        $avgphpstatuslesson12=Time::avg('phpstatuslesson12')*100;
        $avgphpstatuslesson13=Time::avg('phpstatuslesson13')*100;
        $avgphpstatuslesson14=Time::avg('phpstatuslesson14')*100;
        
        //レッスン別全ユーザー平均時間
        $avgtimephplesson0=Time::avg('phptimelesson0');
        $avgtimephplesson1=Time::avg('phptimelesson1');
        $avgtimephplesson2=Time::avg('phptimelesson2');
        $avgtimephplesson3=Time::avg('phptimelesson3');
        $avgtimephplesson4=Time::avg('phptimelesson4');
        $avgtimephplesson5=Time::avg('phptimelesson5');
        $avgtimephplesson6=Time::avg('phptimelesson6');
        $avgtimephplesson7=Time::avg('phptimelesson7');
        $avgtimephplesson8=Time::avg('phptimelesson8');
        $avgtimephplesson9=Time::avg('phptimelesson9');
        $avgtimephplesson10=Time::avg('phptimelesson10');
        $avgtimephplesson11=Time::avg('phptimelesson11');
        $avgtimephplesson12=Time::avg('phptimelesson12');
        $avgtimephplesson13=Time::avg('phptimelesson13');
        $avgtimephplesson14=Time::avg('phptimelesson14');
        
        
        //コース合計時間userid->sum(lessontime1,2...)
        //コース平均時間sum(lessontime1,2...)/$times->user->count
        //コース平均達成率sum(lessonstatus1,2...)/where(phpstatus,like)sum
        
        //コース登録者数$times->user->count　テーブルを分けないとレッスンごとに集計はできないか(カラムはひとまとめな為)
        
        
        //合計時間
        
        
        $phptimes->totaltime=$phptimes->phptimelesson0+$phptimes->phptimelesson1
                     +$phptimes->phptimelesson2+$phptimes->phptimelesson3
                     +$phptimes->phptimelesson4+$phptimes->phptimelesson5
                     +$phptimes->phptimelesson6+$phptimes->phptimelesson7
                     +$phptimes->phptimelesson8+$phptimes->phptimelesson9
                     +$phptimes->phptimelesson10+$phptimes->phptimelesson11
                     +$phptimes->phptimelesson12+$phptimes->phptimelesson13
                     +$phptimes->phptimelesson14;
                     
                     $phptimes->save();
                     $phptotaltime=$phptimes->totaltime;
        
        
        //関数使えない？
        //function lessontotal($a, $b) {
        //$user = User::find($b);
        //$phptimes = $user->times()->find($b);
        //$result = 0;
        //for ($i = 0; $i <= $a; $i++) {
        //    $result = $result + $phptimes->phptimelesson.$i;
        //}
        //return $result;
        //}
        //$phptotaltime=lessontotal(14,$id);
        //$allphplesson0=Time::sum('phptimelesson0');
        //$allphplesson1=Time::sum('phptimelesson1');
        //alltotaltime=$allphplesson0+$allphplesson1;
        
        
        //コース全ユーザー平均時間
        $avgphptimelesson0=Time::avg('phptimelesson0');
        $avgphptimelesson1=Time::avg('phptimelesson1');
        $avgphptimelesson2=Time::avg('phptimelesson2');
        $avgphptimelesson3=Time::avg('phptimelesson3');
        $avgphptimelesson4=Time::avg('phptimelesson4');
        $avgphptimelesson5=Time::avg('phptimelesson5');
        $avgphptimelesson6=Time::avg('phptimelesson6');
        $avgphptimelesson7=Time::avg('phptimelesson7');
        $avgphptimelesson8=Time::avg('phptimelesson8');
        $avgphptimelesson9=Time::avg('phptimelesson9');
        $avgphptimelesson10=Time::avg('phptimelesson10');
        $avgphptimelesson11=Time::avg('phptimelesson11');
        $avgphptimelesson12=Time::avg('phptimelesson12');
        $avgphptimelesson13=Time::avg('phptimelesson13');
        $avgphptimelesson14=Time::avg('phptimelesson14');
        
        $avgphptime=($avgphptimelesson0+$avgphptimelesson1
        +$avgphptimelesson2+$avgphptimelesson3
        +$avgphptimelesson4+$avgphptimelesson5
        +$avgphptimelesson6+$avgphptimelesson7
        +$avgphptimelesson8+$avgphptimelesson9
        +$avgphptimelesson10+$avgphptimelesson11
        +$avgphptimelesson12+$avgphptimelesson13
        +$avgphptimelesson14)/Time::count();
        
        
        //計算不能？Time::avg()->groupBy('phptimelesson0','phptimelesson1');
        
        //計算不能？$phptimes->sum()->groupBy('phpstatuslesson0','phpstatuslesson1');
        
        
        //コース全ユーザー平均達成率
        $allsumphpstatus=($avgphpstatuslesson0+$avgphpstatuslesson1
        +$avgphpstatuslesson2+$avgphpstatuslesson3
        +$avgphpstatuslesson4+$avgphpstatuslesson5
        +$avgphpstatuslesson6+$avgphpstatuslesson7
        +$avgphpstatuslesson8+$avgphpstatuslesson9
        +$avgphpstatuslesson10+$avgphpstatuslesson11
        +$avgphpstatuslesson12+$avgphpstatuslesson13
        +$avgphpstatuslesson14)/15;
        
        //コース達成率
        $phpstatuslesson0 = $phptimes->phpstatuslesson0;
        $phpstatuslesson1 = $phptimes->phpstatuslesson1;
        $phpstatuslesson2 = $phptimes->phpstatuslesson2;
        $phpstatuslesson3 = $phptimes->phpstatuslesson3;
        $phpstatuslesson4 = $phptimes->phpstatuslesson4;
        $phpstatuslesson5 = $phptimes->phpstatuslesson5;
        $phpstatuslesson6 = $phptimes->phpstatuslesson6;
        $phpstatuslesson7 = $phptimes->phpstatuslesson7;
        $phpstatuslesson8 = $phptimes->phpstatuslesson8;
        $phpstatuslesson9 = $phptimes->phpstatuslesson9;
        $phpstatuslesson10 = $phptimes->phpstatuslesson10;
        $phpstatuslesson11 = $phptimes->phpstatuslesson11;
        $phpstatuslesson12 = $phptimes->phpstatuslesson12;
        $phpstatuslesson13 = $phptimes->phpstatuslesson13;
        $phpstatuslesson14 = $phptimes->phpstatuslesson14;
        
        $phpstatus=($phptimes->phpstatuslesson0+$phptimes->phpstatuslesson1
        +$phptimes->phpstatuslesson2+$phptimes->phpstatuslesson3
        +$phptimes->phpstatuslesson4+$phptimes->phpstatuslesson5
        +$phptimes->phpstatuslesson6+$phptimes->phpstatuslesson7
        +$phptimes->phpstatuslesson8+$phptimes->phpstatuslesson9
        +$phptimes->phpstatuslesson10+$phptimes->phpstatuslesson11
        +$phptimes->phpstatuslesson12+$phptimes->phpstatuslesson13
        +$phptimes->phpstatuslesson14)/15*100;


//GROUP BYレッスン数　計算不能？
//$phplessoncount=$phpstatus->groupBy('phpstatuslesson0','phpstatuslesson1',...)->count();;
//$sumphpstatus=($phpsumstatuslesson0+$phpsumstatuslesson1)/$phplessoncount;

//$Time::groupBy('phpstatuslesson0','phpstatuslesson1',...)->count();;


        $data = [
            'user' => $user,
            'phptimes' => $phptimes,
            //'phpstatus1' => $phpstatus1,
            //'phpstatus0' => $phpstatus0,
            
            'avgphpstatuslesson0' => $avgphpstatuslesson0,
            'avgphpstatuslesson1' => $avgphpstatuslesson1,
            'avgphpstatuslesson2' => $avgphpstatuslesson2,
            'avgphpstatuslesson3' => $avgphpstatuslesson3,
            'avgphpstatuslesson4' => $avgphpstatuslesson4,
            'avgphpstatuslesson5' => $avgphpstatuslesson5,
            'avgphpstatuslesson6' => $avgphpstatuslesson6,
            'avgphpstatuslesson7' => $avgphpstatuslesson7,
            'avgphpstatuslesson8' => $avgphpstatuslesson8,
            'avgphpstatuslesson9' => $avgphpstatuslesson9,
            'avgphpstatuslesson10' => $avgphpstatuslesson10,
            'avgphpstatuslesson11' => $avgphpstatuslesson11,
            'avgphpstatuslesson12' => $avgphpstatuslesson12,
            'avgphpstatuslesson13' => $avgphpstatuslesson13,
            'avgphpstatuslesson14' => $avgphpstatuslesson14,
            
            'avgtimephplesson0' => $avgtimephplesson0,
            'avgtimephplesson1' => $avgtimephplesson1,
            'avgtimephplesson2' => $avgtimephplesson2,
            'avgtimephplesson3' => $avgtimephplesson3,
            'avgtimephplesson4' => $avgtimephplesson4,
            'avgtimephplesson5' => $avgtimephplesson5,
            'avgtimephplesson6' => $avgtimephplesson6,
            'avgtimephplesson7' => $avgtimephplesson7,
            'avgtimephplesson8' => $avgtimephplesson8,
            'avgtimephplesson9' => $avgtimephplesson9,
            'avgtimephplesson10' => $avgtimephplesson10,
            'avgtimephplesson11' => $avgtimephplesson11,
            'avgtimephplesson12' => $avgtimephplesson12,
            'avgtimephplesson13' => $avgtimephplesson13,
            'avgtimephplesson14' => $avgtimephplesson14,
            
            'phptotaltime'=>$phptotaltime,
            'avgphptime'=>$avgphptime,
            'allsumphpstatus'=>$allsumphpstatus,
            'phpstatus'=>$phpstatus,
        ];

        return view('users.phptimes', $data);
    }
}
