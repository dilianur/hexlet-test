<?php
require_once  __DIR__ . '/../vendor/autoload.php';

use function Symfony\Component\String\u;
use function Symfony\Component\String\s;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\String\Slugger\AsciiSlugger;

//Реализуйте функцию getQuestions(), которая принимает на вход текст 
//(полученный из редактора) и возвращает извлеченные из этого текста вопросы. 
//Это должна быть строчка в форме списка разделенных переводом строки вопросов 
//(смотрите секцию "Примеры").
//Входящий текст разбит на строки и может содержать любые пробельные символы. 
//Некоторые из этих строк являются вопросами. Они определяются по последнему символу: 
//если это знак ?, то считаем строку вопросом.
print_r("<br>");
function getQuestions(string $text)
{ 
    // $slug = str_replace($text, " ", "ehu?\none two?");
    // return $slug;
    $first = collect(s($text)->split("\n"))
    ->map(fn($line) => $line->trim())
    ->filter(fn($line) => $line->endsWith('?'))
    ->toArray();
    return implode("\n", $first);

}
print(getQuestions(<<<HEREDOC
lala\r\nr
ehu?\t
vie?eii
\n \t
i see you
/r \n
one two?\r\n\n
turum-purum
HEREDOC));
print_r("<br>");
// $regex = '/([A-Za-z0-9.,-]+\s*){0,5}\sconsectetur purus(\s|[,.!?])(\s*[A-Za-z0-9.,-]+){0,5}/';
// preg_match($regex, $content, $matches);
// echo $matches[0];

print_r(mb_strlen('username=admin&password=secret'));