<?php



//15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления). На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.

    $a=5;
    $b=1;
    $operator='%';

    if ($b == 0)  die ("Ошибка деления на 0");
    else {


        switch ($operator) {
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '%':
                $result = $a % $b;
                break;
            case '/':
                $result = $a / $b;
                break;
            default: die("неизвестный оператор");
        }
        echo "$a $operator $b= $result <br>";

    }
