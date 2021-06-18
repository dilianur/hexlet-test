<?php

require_once  __DIR__ . '/../vendor/autoload.php';
ini_set('error_reporting', E_ALL);
// namespace App;
// Функция collect доступна глобально
// Пакет Collect использует для этого черную магию
// $collection = collect(['name' => 'taylor', 'languages' => ['php', 'javascript']]);

// // flatten() «распрямляет» массивы, вытаскивая элементы
// // из вложенных массивов на верхний уровень.
// $flattened = $collection->flatten();

// // Извлечение массива
// print_r($flattened->all()); // ['taylor', 'php', 'javascript'];
// print_r("<br>");
// echo gettype($collection);
// print_r("<br>");
// $collection = collect(['name' => 'taylor', 'languages' => ['php', 'javascript']]);
// $excepted = $collection->except(['name']); // исключаем ключ
// $flattened = $collection->flatten();
// print_r($collection->all()); // ['name' => 'taylor', 'languages' => ['php', 'javascript']]
// print_r($excepted->all()); // ['languages' => ['php', 'javascript']]
// print_r($flattened->all()); // ['taylor', 'php', 'javascript']
// print_r("<br>");
// $collect = collect([1, 5, 3]);
// $col = $collect->map(fn($item) => $item * 2);
// // $multiplied->all();
// print_r($col->all());
// print_r("<br>");
// $mass1 = collect([2, 2, 5]);
// $mass2 = $mass1->filter(fn($item) => $item == 2);
// print_r($mass2->all());
// print_r("<br>");
// $reduse1 = collect([2, 2, 2, 2]);
// $reduse2 = $reduse1->reduce(fn($item, $item1) => $item + $item1);
// print_r($reduse2);
// print_r("<br>");
// $result = collect(['map', 'map', 'reduce', 'filter', null])
// ->map(fn($item) => strtoupper($item))
// //фильтрация
// ->reject(fn($item) => empty($item));
// $result->dump();
// print_r("<br>");
// // Laravel query builder
// // $price = DB::table('orders')
// //                 ->where('finalized', 1)
// //                 ->avg('price');
// // print_r($price);
// print_r("<br>");
// // class DeckOfCards
// // {
// //     private $array;
// //     public function __construct(array $card)
// //     {
// //         $this->array = collect($card)
// //         ->map(function ($arr) {
// //             return array_fill(0, 4, $arr);
// //         })
// //         ->flatten();
// //     }
// //     public function getShuffled()
// //     {
// //         return $this->array->shuffle()->all();
// //     }
// // }
// // $d = new DeckOfCards([2, 3]);
// // print_r($d->getShuffled());
// // print_r("<br>");
// // class Url
// // {
// //   private $http;
// //   public function __construct(string $http)
// //   {
// //     $this->http = $http;
// //   }
// //   function getScheme()
// //   {
// //     return substr($this->http, 0, 4);
// //   }
// //   function getHostName()
// //   {
// //     return substr($this->http, 7, 9);
// //   }
// //   function getQueryParams()
// //   {
// //     $result = [];
// //           $str1 = substr($this->http, 20, -12);
// //           $sr2 = substr($this->http, 30);
// //            $ito = explode('=', $str1);
// //            $it2 = explode('=', $sr2);
// //            $first = array_merge($ito, $it2);
// //            $result = ['key' => $first[1], $first[2] => $first[3]];
// //         //    print_r($first[1]);
// //            return $result;
// //  }
// //  function getQueryParam($value1, $default = null)
// //  {
// //    $result = [];
// //    $str1 = substr($this->http, 20, -12);
// //           $sr2 = substr($this->http, 30);
// //            $ito = explode('=', $str1);
// //            $it2 = explode('=', $sr2);
// //            $first = array_merge($ito, $it2);
// //            $result = [$first[0] => $first[1], $first[2] => $first[3]];
// //            $res = [];
// //            foreach ($result as $key => $value) {
// //              if ($value1 === $key) {
// //                  return $value;
// //              }
// //            }
// //            return $default;
// //  }
// //  function equals($url)
// //  {
// //    return $this->http === $url->http;
// //  }
// // }
// // $o = new Url('http://yandex.ru:80?key=value&key2=value2');
// // print_r($o->getScheme());
// // print_r("\n");
// // print_r($o->getHostName());
// // print_r("\n");
// // print_r($o->getQueryParams());
// // print_r($o->getQueryParam('key2asca', 'lala'));
// // print_r("<br>");
// //Входная структура представляет из себя список городов, 
// //где каждый город это ассоциативный массив с ключами name и country. 
// //Значения в этих ключах не нормализованы. 
// //Они могут быть в любом регистре и содержать начальные и концевые пробелы. 
// //Сами города могут дублироваться в рамках одной страны.
// //map, filter и reduce
// // function normalize(array $raw)
// // {
// //     return collect($raw)
// //         ->map(fn($value) =>
// //             array_map(fn($item) =>
// //                 mb_strtolower($item), $value))
// //         ->map(fn($value) =>
// //             array_map(fn($item) =>
// //                 trim($item), $value))
// //         ->mapToGroups(fn($item) =>
// //             [$item['country'] => $item['name']])
// //         ->map(fn($cities) =>
// //             $cities->unique()->sort()->values())
// //         ->sortKeys()
// //         ->toArray();
// // }
// // print_r(normalize([
// //     [
// //         'name' => 'istambul',
// //         'country' => 'turkey'
// //     ],
// //     [
// //         'name' => 'Moscow ',
// //         'country' => ' Russia'
// //     ],
// //     [
// //         'name' => 'iStambul',
// //         'country' => 'tUrkey'
// //     ],
// //     [
// //         'name' => 'antalia',
// //         'country' => 'turkeY '
// //     ],
// //     [
// //         'name' => 'samarA',
// //         'country' => '  ruSsiA'
// //     ],
// // ]));


// ///Реализуйте метод index($user, $limit), 
// //который возвращает список постов с добавленной отметкой о том лайкал 
// //ли текущий пользователь этот пост или нет. 
// //$limit ограничивает количество постов. Пример вызова:
// //решение учителя
// // $posts = Post::limit($limit)->orderBy('created_at', 'desc')->get();
// //         $postIds = $posts->pluck('id');
// //         $likedPostIds = $user->postLikes()->whereIn('post_id', $postIds)->pluck('post_id');

// //         $result = $posts->map(function ($post) use ($likedPostIds) {
// //             return ['post' => $post->toArray(), 'liked' => $likedPostIds->contains($post->id)];
// //         });
// //         return $result;
//         print_r("\n");
// //создаем обьект collection
// $collection1 = collect([
//     [
//         'name' => 'John Doe',
//         'department' => 'Sales',
//     ],
//     [
//         'name' => 'Jane Doe',
//         'department' => 'Sales',
//     ],
//     [
//         'name' => 'Johnny Doe',
//         'department' => 'Marketing',
//     ]
// ]);
// //создается переменная
// //mapToGroups возвращиет сгруппированное значение
// $grouped = $collection1->mapToGroups(function ($item, $key) {
//     return [$item['department'] => $item['name']];
// });
// //возвращает новую коллекцию
// print_r($grouped->toArray());
// print_r("\n");

// function finwhereresult52445(array $array, $value)
// {
//     return collect($array)
//     ->where($value)
//     ->all();
// }
// print_r(finwhereresult52445([
//     ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
//     ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
//     ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
//     ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
//     ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
//     ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
// ],
// ['author' => 'Shakespeare', 'year' => 1611]
// ));
echo 'hello';