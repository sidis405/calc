<?php

namespace Acme2\Calc;

use App\Http\Controllers\Controller;

class CalcController extends Controller
{
    public function add($a, $b)
    {
        $result = $a + $b;
        return view("calc::result")->withResult($result);
    }

    public function subtract($a, $b)
    {
        $result = $a - $b;
        return view("calc::result")->withResult($result);
    }

    public function multiply($a, $b)
    {
        $result = $a * $b;
        return view("calc::result")->withResult($result);
    }

    public function divide($a, $b)
    {
        $result = (!$b) ? "Division by zero" : $a / $b;
        return view("calc::result")->withResult($result);
    }
}
