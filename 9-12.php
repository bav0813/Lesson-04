<?php

   //9. Создайте переменную day и присвойте ей произвольное числовое значение.
$day=rand(1,31);

//10. С помощью конструкции switch выведите фразу: "Это рабочий день", если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "$day Это рабочий день <br>";
        break;

    //11. С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).

    case 6:
    case 7:
        echo "$day Это выходной день <br>";
        break;

    //12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).

    default :
        echo "$day Неизвестный день <br>";
}