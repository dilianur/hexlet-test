<?php

// use \App\Node; 
print_r(array_merge([true], [false, false, true]));
// создание функции array_merge
function MyArrayMerge(array $first, array $last)
{
    //создание нового пустого массива
    $result = [];
    // с помощью цикла foreach обходим весь массив
    //может работать с массивами с любыми типами данных
    foreach ($first as $one) {
        $result[] = $one;
    }
    foreach ($last as $two) {
        $result[] = $two;
    }
    return $result;
}
print_r(MyArrayMerge(['fa', 'fo', 78], [4, 'g', 8]));
print_r("<br>");
//переворачиваем элементы массива reverse, в обьекте

class Node
{
    public function __construct($value, Node $node = null)
    {
        $this->next = $node;
        $this->value = $value;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function getValue()
    {
        return $this->value;
    }
}
function reverse(Node $list)
    {
        $first = null;
        $two = $list;
        while ($two) {
            //Реализуйте функцию reverse($list), которая принимает на вход односвязный 
            //список и переворачивает его. По условии задачи так, хотя рузультата не увидила
            //в $first это null слили обььект Node, с методами value and next в цикле
            $first = new Node($two->getValue(), $first);
            //а в $list слили getNext в него присвоен null
            $two = $two->getNext();
            // print_r($two);
        }
        return $first;
        // print_r($first);
    }
$new = new Node([1, 2, 3]);
print_r($new);
print_r("<br>");
print_r($new->getNext());
$new->getValue();
print_r("<br>");
reverse($new);
print_r("<br>");

//Рассмотрим условный код, в котором выбор ветки исполнения идёт по конкретному значению переменной:
//в зависимости от среды разработки приложение по рпзному стартует, запускается, этот процесс
//называется диспетчеризацией
$env = 'deve';
if ($env === 'development') {
    $databazeconfiguration = [
        'adapter' => 'sqlite',
    ];
} elseif ($env === 'production') {
    $databazeconfiguration = [
        'adapter' => 'postgresql',
    ];
}
//этот же код можно через switch
switch($env) {
    case 'development':
        $databazeconfiguration = [
            'adapter' => 'sqlite',
        ];
        break;
        case 'production':
            $databazeconfiguration = [
                'adapter' => 'postgresql',
            ];
            break;
}
//можно код еще таким способом писать, еще по короче
//значение сделать ключом ассоциативного массива
print_r("<br>");
$databazeenv = [
    'development' => [
        'adapter' => 'sqlite',
    ],
    'production' => [
        'adapter' => 'postgresql',
    ],
];
$databazeconfiguration = $databazeenv[$env] ?? ['adapter' => 'memory'];
print_r($databazeconfiguration);
//Реализуйте функцию getLinks($tags), которая принимает на вход список тегов, 
//находит среди них теги a, link и img, а затем извлекает ссылки и возвращает список ссылок. 
//Теги подаются на вход в виде массива, где каждый элемент это тег. Тег имеет следующую структуру:
//name - имя тега.
//href или src - атрибуты. Атрибуты зависят от тега: img - src, a - href, link - href.
print_r("<br>");
function getLinks(array $tags)
{
    $mapping = [
        'img' => 'src',
        'a' => 'href',
        'link' => 'href'
    ];
    $arrays = array_filter($tags, function ($tag) use ($mapping) {
        //здесь как я поняла, выбираем подходящие ключи и значения к name
        return array_key_exists($tag['name'], $mapping);
        // print_r($arrays);
    });
    $filtered = array_map(function ($tag) use ($mapping) {
        //здесь получается, возвращаем только значения у href and src
        $attribute = $mapping[$tag['name']];
        // print_r($mapping[$tag['name']]);
        return $tag[$attribute];
    }, $arrays);
    return array_values($filtered);
}
print_r(getLinks([
    ['name' => 'img', 'src' => 'hexlet.io/assets/logo.png'],
    ['name' => 'div'],
    ['name' => 'link', 'href' => 'hexlet.io/assets/style.css'],
    ['name' => 'h1']
]));//array_column
