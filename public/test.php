<?php
require_once  __DIR__ . '/../vendor/autoload.php';

use DS\Stack;

function checkIfBalanced(string $expression): bool
{
    // инициализируем стек
    $stack = new \Ds\Stack();
    // инициализируем список открывающих элементов
    $startSymbols = ['{', '(', '<', '['];
    // инициализируем список пар
    $pairs = ['{}', '()', '<>', '[]'];

    // Проходим по строке от первого до последнего символа
    for ($i = 0; $i < strlen($expression); $i++) {
        $curr = $expression[$i];
        // Если текущий символ находится в списке открывающих символов, то заносим его в стек
        if (in_array($curr, $startSymbols)) {
            $stack->push($curr);
        } else { // Если элемент не входит в список открывающих, то считаем, что это закрывающий символ
            $prev = $stack->pop();
            // Составляем из этих символов пару
            $pair = "{$prev}{$curr}";
            // Проверяем, что она входит в список $pairs. Если входит, то все правильно, двигаемся дальше; если нет,
            // то это автоматически означает, что символы не сбалансированы
            if (!in_array($pair, $pairs)) {
                return false;
            }
        };
    }

    // Если стек оказался пустым после обхода строки, то значит все хорошо
    return sizeof($stack) === 0;
}
print_r(checkIfBalanced('[](]'));
print_r("\n");
//Реализуйте функцию compare($seq1, $seq2), которая сравнивает две строчки набранные в редакторе. 
//Если они равны то возвращает true, иначе - false. Особенность строчек в том они могут содержать символ #, 
//соответствующий нажатию клавиши Backspace. 
//Она означает, что нужно стереть предыдущий символ: abd##a# превращается в a.
function compare($seq1, $seq2)
{
    // $one = compare2($seq1);
    // $two = compare2($seq2);
    // return $one === $two;

}
    function compare2($text) 
    {
        $sequence = new \Ds\Stack();
        for ($i = 0; $i < strlen($text); $i++) {
        $curr = $text[$i];
        if ($curr !== '#') {
            $pre = $sequence->push($curr);
        } elseif (!$sequence->isEmpty()) {
           $sequence->pop();
        }
    }
        return $sequence->toArray();
    }

print_r(compare('ab#c', 'ab#c'));