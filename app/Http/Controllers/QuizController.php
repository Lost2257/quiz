<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class QuizController extends Controller
{

public function index()
{
 return view('quiz.pages.page');
}

public function quizForm(){
    return view('quiz.pages.quizForm');
}

public function store(Request $request){
Quiz::create
([
    'answer' => request('answer')
]);
$total = DB::table('quizzes')->count();
$good = DB::table('quizzes')->where('answer','=','good')->count();
$fair = DB::table('quizzes')->where('answer','=','fair')->count();
$neutral = DB::table('quizzes')->where('answer','=','neutral')->count();
$bad = DB::table('quizzes')->where('answer','=','bad')->count();
$goodPercent = $good / $total * 100;
$fairPercent = $fair / $total * 100;
$neutralPercent = $neutral / $total *100;
$badPercent = $bad / $total * 100;
return view('quiz.pages.statistic',compact('total','good','fair','neutral','bad','goodPercent','fairPercent','neutralPercent','badPercent'));
}

public function statistic(Request $request, Quiz $quiz)
{
     $stat = Quiz::all();
    $total = DB::table('quizzes')->count('answer');
    $good = DB::table('quizzes')->where('answer','=','good')->count();
    $fair = DB::table('quizzes')->where('answer','=','fair')->count();
    $neutral = DB::table('quizzes')->where('answer','=','neutral')->count();
    $bad = DB::table('quizzes')->where('answer','=','bad')->count();
    $goodPercent = $good / $total * 100;
    $fairPercent = $fair / $total * 100;
    $neutralPercent = $neutral / $total *100;
    $badPercent = $bad / $total * 100;
    return view('quiz.pages.statistic',compact('stat','total','good','fair','neutral','bad','goodPercent','fairPercent','neutralPercent','badPercent'));

}

}
