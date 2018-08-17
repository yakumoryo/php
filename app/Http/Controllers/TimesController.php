<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Time;

class TimesController extends Controller
{
     public function index()
    {
        $phptimes=Time::orderBy('totaltime','desc')->get();

        return view('times.index', [
            'phptimes' => $phptimes,
        ]);
    }
    
    public function show()
    {
        $phptimes=Time::orderBy('totaltime','desc')->get();

        return view('times.index', [
            'phptimes' => $phptimes,
        ]);
    }
    
    public function phpcreate($id)
    {
       $user = User::find($id);
    //$phptimes = Time::find($id);
        
         //レッスン別達成率
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
        
        //レッスン別平均時間
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

        $data = [
            'user' => $user,
            
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
            
            'avgphptime'=>$avgphptime,
        ];

        return view('times.phpcreate', $data);
        
    }
    
    public function phpstore(Request $request)
    {
        $request->user()->times()->create();

        return redirect(route('users.phptimes', ['id' => $user->id]));
    }
    
    
    public function phpedit($id)
    {
        
        $user = User::find($id);
    //$phptimes = Time::find($id);
        $phptimes = $user->times()->find($id);
        
         //レッスン別達成率
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
        
        //レッスン別平均時間
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
        
        //合計時間
        $phptotaltime=$phptimes->phptimelesson0+$phptimes->phptimelesson1;
                     +$phptimes->phptimelesson2+$phptimes->phptimelesson3
                     +$phptimes->phptimelesson4+$phptimes->phptimelesson5
                     +$phptimes->phptimelesson6+$phptimes->phptimelesson7
                     +$phptimes->phptimelesson8+$phptimes->phptimelesson9
                     +$phptimes->phptimelesson10+$phptimes->phptimelesson11
                     +$phptimes->phptimelesson12+$phptimes->phptimelesson13
                     +$phptimes->phptimelesson14;
                     
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

        $data = [
            'user' => $user,
            'phptimes' => $phptimes,
            
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

        return view('times.phpedit', $data);
        
    }
    
    public function phpupdate(Request $request, $id)
    {
        //$this->validate($request, [
           // 'phptimelesson0' => 'required|max:191',
            //'' => 'required|max:191',:
        //]);
        
        
        $user = User::find($id);
        //$phptimes = Time::find($id);
        $phptimes = $user->times()->find($id);
        $phptimes->phptimelesson0 = $request->phptimelesson0;
        $phptimes->save();
        
        return redirect(route('users.phptimes', ['id' => $user->id]));
    }
    
    public function phpstatuslesson1update1(Request $request, $id)
    {
 
        $user = User::find($id);
        $phptimes = $user->times()->find($id);
        $phptimes->phpstatuslesson1 = 0;
        $phptimes->save();
        
        return redirect()->back();
    }
    
    public function phpstatuslesson1update2(Request $request, $id)
    {
        
        $user = User::find($id);
        $phptimes = $user->times()->find($id);
        $phptimes->phpstatuslesson1 = 1;
        $phptimes->save();
        
        return redirect()->back();
    }
}
