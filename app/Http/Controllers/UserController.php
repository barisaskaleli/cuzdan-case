<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getFullPositionList()
    {
        $users = User::select(
            'users.*',
            DB::raw("year(curdate()) - age as birthday"),
        )->with(['position', 'level'])->where('position_id', 3)->get();

        return response()->json($users);
    }

    public function getJuniorPositionList()
    {
        $users = User::select(
            'users.*',
            DB::raw("year(curdate()) - age as birthday"),
        )->with(['position', 'level'])->where('level_id', 1)->whereBetween('age', [18, 23])->get();

        return response()->json($users);
    }

    public function getUsersCount()
    {
        $users = User::select(
                DB::raw("count(*) as count"),
                'position_id',
                'level_id',
                'city',
                'age'
            )
            ->with(['position', 'level'])
            ->whereBetween('age', [18, 25])
            ->groupBy('position_id', 'level_id', 'age', 'city')
            ->get();

        return response()->json($users);
    }

    public function getWordsCount()
    {
        $word = "Cüzdan olarak seni aramızda görmek istiyoruz!";
        $replacedWord = str_replace(' ', '', $word);
        $splittedWord = str_split($replacedWord);
        $countedWord = array_count_values($splittedWord);
        arsort($countedWord);

        print_r($countedWord);
    }





}
