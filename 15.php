<?php
/*
 * Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
    На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
 */

    if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operator'])) {
        $a = filter_var($_GET['a'], FILTER_VALIDATE_FLOAT);
        $b = filter_var($_GET['b'], FILTER_VALIDATE_FLOAT);
        $operator = filter_var($_GET['operator'], FILTER_SANITIZE_STRING);
        if ($a === false || $b === false ||!$operator) {
            $result = 'Неизвестная ошибка!';
        } else {
            switch ($operator) {
                case'+':
                    $result = "$a $operator $b =" . ($a + $b);
                    break;
                case'-':
                    $result = "$a $operator $b =" . ($a - $b);
                    break;
                case'*':
                    $result = "$a $operator $b =" . ($a * $b);
                    break;
                case'/':
                    if (!$b) {
                        $result = 'На 0 делить нельзя!';
                    } else {
                        $result = "$a $operator $b = " . ($a / $b);
                    }
                    break;
                case '%':
                    if (!$b) {
                        $result = 'На 0 делить нельзя!';
                    } else {
                        $result ="$a $operator $b =" . ($a % $b);
                    }
                    break;
                default:
                    $result = 'Неизвестная ошибка!';

            }
        }
    }
    if (isset($result)) {
        echo $result;
    }
?>
<form>
    <input type="hidden" name="task" value="20">
    <input type="text" name="a">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>
    <input type="text" name="b">
    <input type="submit" value="=">
</form>

