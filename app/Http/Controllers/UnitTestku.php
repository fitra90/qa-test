<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitTestku extends Controller
{
    public function palindrome(Request $request)
    {
        $result = false;
        $statusCode = 404;
        $unwantedChars = array(',', '!', '?', ' ', '.', '-', '#', '@', '(', ')', '[', ']');
        $filtered = str_replace($unwantedChars, '', $request->myString);

        $myArr = str_split($filtered);
        $myArrLength = count($myArr) - 1;
        $sameCount = 0;

        for ($i = 0; $i <= $myArrLength; $i++) {
            if ($myArr[$i] == $myArr[$myArrLength - $i]) {
                $sameCount++;
            }
        }

        if ($sameCount == count($myArr)) {
            $result = true;
            $statusCode = 200;
        }

        return Response(["message" => $result], $statusCode);
    }

    public function mergeWords(Request $request)
    {
        $result = array();
        $statusCode = 404;
        $unwantedChars = array(',', '!', '?', ' ', '.', '-', '#', '@', '(', ')', '[', ']');
        $filtered = str_replace($unwantedChars, '', $request->word);
        $divider = $request->divider;
        $myArr = str_split($filtered);
        $myArrLength = count($myArr);
        // $j = 0;
        // do {
        //     for ($i = 0; $i < $myArrLength; $i++) {
        //         $result[$j] = array();
        //         do {
        //             array_push($result[$j], $myArr[$i]);
        //         } while (count($result[$j]) <= $divider);
        //     }
        //     $result[$j] = implode("", $result[$j]);
        //     $j++;
        // } while ($j <= ($myArrLength - $divider + 1));

        return Response(["message" => $myArr], $statusCode);
    }
}
