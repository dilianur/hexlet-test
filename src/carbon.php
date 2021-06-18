<?php
namespace Carbon;

require_once  __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;

// class Carbon extends \DateTime
// {

// }
// выдало текущую дату на момент написания урока
print_r("<br>");
printf("Now: %s", Carbon::now()); // Now: 2018-04-21 13:31:56

print_r("<br>");
$dt = Carbon::now();

$dt->year(1975)->month(5)->day(21)->hour(22)->minute(32)->second(5)->toDateTimeString();
$dt->setDate(1975, 5, 21)->setTime(22, 32, 5)->toDateTimeString();
$dt->setDate(1975, 5, 21)->setTimeFromTimeString('22:32:05')->toDateTimeString();
$dt->setDateTime(1975, 5, 21, 22, 32, 5)->toDateTimeString();

$dt->timestamp(169957925)->timezone('Europe/London');
// print_r($dt);
print_r("<br>");
echo Carbon::now()->tzName;                        // America/Toronto
$first = Carbon::create(2012, 9, 5, 23, 26, 11);
$second = Carbon::create(2012, 9, 5, 20, 26, 11, 'America/Vancouver');

echo $first->toDateTimeString();                   // 2012-09-05 23:26:11
echo $first->tzName;                               // America/Toronto
echo $second->toDateTimeString();                  // 2012-09-05 20:26:11
echo $second->tzName;                              // America/Vancouver
print_r("<br>");
var_dump($first->eq($second));                     // bool(true)
var_dump($first->ne($second));                     // bool(false)
var_dump($first->gt($second));                     // bool(false)
var_dump($first->gte($second));                    // bool(true)
var_dump($first->lt($second));                     // bool(false)
var_dump($first->lte($second));                    // bool(true)
//Реализуйте класс Booking, который позволяет бронировать номер отеля на 
//определённые даты. Единственный интерфейс класса — функция book(), 
//которая принимает на вход две даты в текстовом формате. Если бронирование возможно, 
//то метод возвращает true и выполняет бронирование 
//(даты записываются во внутреннее состояние объекта).
//Класс CarbonPeriod не подключен в задаче по умолчанию, используйте интерфейс объекта 
//Carbon для работы с датами
print_r("<br>");
// echo $dt->addWeek();

// 04-21, 04-24, 04-27
echo "\n";

// // Here is what happens under the hood:
// $period->rewind(); // restart the iteration
// while ($period->valid()) { // check if current item is valid
//     if ($period->key()) { // echo comma if current key is greater than 0
//         echo ', ';
//     }
//     echo $period->current()->format('m-d'); // echo current date
//     $period->next(); // move to the next item
// }
// 04-21, 04-24, 04-27
print_r("<br>");
$period = CarbonPeriod::create('2018-04-29', 7);
$dates = [];
foreach ($period as $key => $date) {
    if ($key === 3) {
        $period->invert()->start($date); // invert() is an alias for invertDateInterval()
    }
    $dates[] = $date->format('Y-m-d');
}

echo implode(', ', $dates); // 04-29, 04-30, 05-01, 05-02, 05-01, 04-30, 04-29
print_r("<br>");
// class Booking1111
// {
//     private $book = [];

//     public function book($begin, $end)
//     {
//         $firstBegin = new Carbon($begin);
//         $twoEnd = new Carbon($end);
//         if ($this->canBook($firstBegin, $twoEnd)) {
//             $this->book[] = [$firstBegin, $twoEnd];
//             return true;
//         }
//         return false;
//     }
//     function canBook($begin, $end)
//     {
//         if ($begin >= $end) {
//             return false;
//         }
//         foreach ($this->book as [$bookbegin, $bookEnd]) {
//             $interest = $begin < $bookEnd && $end > $bookbegin;
//             if ($interest) {
//                 return false;
//             }
//         }
//         return true;
//     }
// }
// $b = new Booking1111();
// print_r($b->book('10-11-2008', '12-11-2008'));
// print_r("<br>");
// echo mb_strlen('привет');
// print_r("<br>");
// echo strpos('start', 'st') === 0;