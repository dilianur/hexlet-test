<?php
namespace App;
// namespace Tightenco\Collect\Support;
// use Tightenco\Collect\Support\Traits\EnumeratesValues;
// use Tightenco\Collect\Support\Traits\Macroable;
require_once  __DIR__ . '/../vendor/autoload.php';
//функция collect доступно глобально

class HTMLelement
{
    public $body;
    public $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }
    public function setAttribute(string $key, $value)
    {
        $this->attributes[$key] = $value;
    }
    public function getAttribute(string $key)
    {
        return $this->attributes[$key];
    }
    public function getTextContent()
    {
        return $this->body;
    }
    public function setTextContent($body)
    {
        $this->body = $body;
    }
    protected function stringifyAttributes()
    {

    }
}
class HTMl extends HTMLelement
{
    public function __toString()
    {
        $attrline = $this->stringifyAttributes();
        $body = $this->getTextContent();
        return "<a{$attrline}>{$body}</a>";
    }
}
$anchor = new HTMl(['href' => 'https://ru.hexlet.io']);
$anchor->setTextContent('Hexlet');
// echo "Anchor: {$anchor}";
print_r($anchor-> __toString());
//Реализуйте класс HTMLHrElement (наследуется от HTMLElement), 
//который отвечает за представление тега <hr>. 
//Внутри класса определите функцию __toString(), 
//которая возвращает текстовое представление тега.
print_r("<br>");
class HTMLElem
{
    public $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }
    public function stringifyAttributes()
    {
        $stringline = collect($this->attributes)
        ->map(fn($key, $item) => " {$item}=\{$key}\"")
        ->join('');
        return $stringline;
        
    }
}
class HTMLHrElem extends HTMLElem
{
    public function __toString()
    {
        $line = $this->stringifyAttributes();
        return "<hr{$line}>";
        print_r($line);
    }
}
$html = new HTMLHrElem(['class' => 'w-75', 'id' => 'wop']);
echo $html;
// print_r($stringline);

class ts
{
    protected $data = 'ggggggggggggg';

    public function metod()
    {
        return $this->data;
    }
}
class tsss extends ts
{
    public function integer()
    {
        return $this->data;
    }
    public function test()
    {
        return $this->metod();
    }
}
$new = new tsss();
print_r($new->integer());
print_r("<br>");
//Эти методы должны обрабатывать свойство 'class' 
//(внутри строка) массива $this->attributes. 
//В процессе реализации вам понадобится постоянно преобразовывать строку классов в массив и обратно. 
//Вынесите эту операцию в отдельные функции и установите им правильный модификатор доступа.
// addClass($className) – добавляет класс
// removeClass($className) – удаляет класс
// toggleClass($className) – ставит класс если его не было и убирает если он был
class HTMLEle
{
    private $attributes = [];
    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }
    public function getAttribute($key)
    {
        return $this->attributes[$key];
    }
    // BEGIN (write your solution here)
    public function addClass($className)
    {
        //addclass добавляет класс 
        $class = $this->getClass();
        //array_uniqey убирает повторяющиеся значения, array_merge сливает
        $newclass = array_unique(array_merge($class, [$className]));
        // и attributes['class'] присваивается отсортированный, фильтрованный массив $newclass
        $this->attributes['class'] = $this->stringiClasses($newclass);
    }
    public function removeClass($className)
    {
        //удаляет одинаковые классы, если передать two, удаляет two класс
        $class = $this->getClass();
        //вычислить расхождение массивов, одинаковых массивов убирает
        $newclass = array_diff($class, [$className]);
        // и attributes['class'] присваивается отсортированный, фильтрованный массив $newclass
        $this->attributes['class'] = $this->stringiClasses($newclass);
    }
    public function toggleClass($className)
    { 
        //если значение $className существует в методе getClass
        //c методом removeClass удаляет переданное значение и возвращает
        if (in_array($className, $this->getClass())) {
            $this->removeClass($className);
            return;
        }
        //иначе с методом addclass добавляет
        return $this->addClass($className);
    }
    public function getClass()
    {
        return explode(' ', $this->getAttribute('class') ?? '');
    }
    public function stringiClasses($cla)
    {
        return implode(' ', $cla);
    }
    // END
}
class HTMLDivElement extends HTMLEle
{

}
$div = new HTMLDivElement(['class' => 'one two']);
// print_r($div->getAttribute('class')); // 'one two'
print_r("<br>");
print_r($div->addClass('small')); // 'one two'
print_r($div->getAttribute('class')); 
print_r("<br>");
print_r($div->removeClass('one')); // 'one two'
print_r($div->getAttribute('class')); 
print_r("<br>");
print_r($div->toggleClass('small')); // 'one two'
print_r($div->getAttribute('class')); 

print_r("<br>");
print_r($div->getClass()); // 'one two'
// print_r($div->getAttribute('class')); 

print_r("<br>");
print_r($div->stringiClasses(['class'])); // 'one two'
// print_r($div->getAttribute('class')); 

class Htvl
{
    //свойство
    public $attributes = [];
    //в конструкцию передали свойство, нейтральный элемент массива
    public function __construct($attributes = [])
    {
        //обращаемся внутри конструкции
        $this->attributes = $attributes;
    }
    public function getAttribute(string $key)
    {
        //возвращаем ключ
        return $this->attributes[$key];
    }
}
print_r("<br>");
class A
{
    //свойство
    public $name;
    public function getName()
    {
        echo get_class($this);
        echo "\n";
        return $this->name;
    }
}
class B extends A {}
$b = new B();
echo $b->getName();
echo "\n";

class I
{
    public function whereIam()
    {
        echo __CLASS__;
    }
}
class V extends I {}
$obj = new V();
$obj->whereIam();
//Реализуйте метод isInstanceOf($className), 
//который проверяет что объект принадлежит одному из классов в цепочке наследования.
print_r("<br>");
class Base 
{
    // private $name = 'Name';
    function isInstanceOf($className)
    {
        //смотрим все родительские обьеты
        $result = class_parents($this);
        // var_dump($result);
        //смотрим текущий обьект
        $obj = get_class($this);
        // var_dump($obj);
        //тут соединили текущий обьект к родительским обьектам
        $result[$obj] = $obj;
        // var_dump($result[$obj]);
        //если есть значение в родительских обьектах
        if (in_array($className, $result) ? 'daaa' : 'noooo');
    }
}
class FirstChild extends Base {}
class ChildOfChild extends FirstChild {}
$obj = new ChildOfChild();
// $obj2 = new Base();
// $obj3 = new FirstChild();
// $obj4 = new Someclass();
$obj->isInstanceOf('App\Base');

//шаблонный метод, это когда базовый класс может вызывать методы и своиство
// определенные в классах наследниках
//создадим 2 метода __toString для одиночных тегов и для парных
//оба наследуются от одного базового класса
// class HtmlSingle extends htmlelements
// {
//     //вызывается публичный метод автоматом
//     public function __toString()
//     {
//         //вызывается метод родительского
//         $atline = $this->stringifyAttributes();
//         $tagname = $this->getTagName();
//         //сождается одиночный тег
//         return "<{$tagname}{$atline}";
//     }
// }
// //второй наследник, дочерний класс
// //второй toString
// class HtmlPair extends htmlelements
// {
//     public function __toString()
//     {
//         //методы родительского класса
//         $atline = $this->stringifyAttributes();
//         //тело
//         $body = $this->getTextContent();
//         //метод tagname который должны реализовать все подклассы
//         $tagname = $this->getTagName();
//         return "<{$tagname}{$atline}>{$body}</{$tagname}>";
//     }
// }
//Реализуйте класс HTMLPairElement (наследуется от HTMLElement), 
//который отвечает за генерацию представления парных элементов и работу с телом. 
//Реализуйте следующий интерфейс:
print_r("<br>");
class HTM
{
    public $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function stringifyAttributes()
    {
        if (count($this->attributes) === 0) {
            return '';
        }
        $line = collect($this->attributes)
            ->map(function ($item, $key) {
                return "{$key}=\"{$item}\"";
            })
            ->join(' ');
        return " {$line}";
        // print_r($attributes);
    }
}
// $html = new HTM();
// print_r($html->stringifyAttributes());

print_r("<br>");
class HTMLPairElement extends HTM
{
    private $text = 'text';
    public function __toString()
    {
        $get = $this->stringifyAttributes();
        $name = $this->TagName();
        $set = $this->getTextContent();
        return "<{$name}{$get}>{$set}</$name>";
    }
    public function getTextContent()
    {
        return $this->text;
    }
    public function setTextContent(string $text)
    {
        return $this->text = $text;
    }
}
// $html = new HTMLPairElement();
// print_r($html->getTextContent());
//Реализуйте класс HTMLDivElement, который описывает собой парный тег <div>.
print_r("<br>");
class HTMLDiv extends HTMLPairElement
{
    public function TagName()
    {
        return 'div';
    }
}
$div = new HTMLDiv(['name' => 'div', 'data-toggle' => 'true']);
$div->setTextContent('body');
echo $div;
//<div name="div" data-toggle="true">Body</div>
//этот родительский класс
// $document = 
class HTMLselect
{
    private $lench;

}
//переопределение метада базового, в дочернем классе
class CustomElement extends HTMLselect
{
    //переопределение метода item()
    public function item($possible)
    {
        $index = $possible > 0 ? $possible : $this->length + $possible;
        //parent указывает на родительский класс
        return parent::item($index);
    }
}
//Реализуйте класс SmartSplFileInfo наследующийся от SplFileInfo. 
//Этот класс должен расширять поведение метода getSize. 
//В новом классе этот метод принимает на вход аргумент, 
//который обозначает единицу измерения возвращаемых данных. 
//По умолчанию это b, то есть байты. Но можно передать и kb, то есть килобайты. 
//В случае килобайтов, переопределённый метод делит байты на 1024 и получившееся значение 
//возвращает наружу.
//Метод должен обрабатывать ситуацию, когда на вход поступает что-то другое, 
//кроме указанных значений. Обработка сводится к возбуждению исключения Exception.
// class SplFileInfo
// {
//     public $file;
//     public function getSize()
//     {
//         return $this->file;
//     }
// }
// $spl = new SplFileInfo(__FILE__);
// print_r($spl->getSize());

// $info = new SplFileInfo(dirname(__FILE__));
// echo $info->getType();

//Обратный слэш перед именем функции говорит о том, 
//что должна быть вызвана функция из глобального пространства имен, 
//т.к. в текущем пространстве имен объявлена одноименная функция
class SmartSplFileInfo extends \SplFileInfo
{
    public function getSize($b = 'b')
    {
        // $size = parent::getSize();
        switch ($b) {
            case 'b':
                return $b;
                case 'kb':
                    return $size / 1024;
                    default;
                    throw new \Exception("fdcv:{$b}");
        }
    }
}
$file = new SmartSplFileInfo(__DIR__ . '/../Makefile');
print_r($file->getSize());
//Существует несколько правил, которые надо учитывать при работе с типами:
//Предусловия не могут быть усилены в подклассе
//Постусловия не могут быть ослаблены в подклассе
//Исторические ограничения
interface LoggerInterface
{
    public function log($leger, $message, array $cont = []);
}

class MyLogger implements LoggerInterface
{
    public function log($leger, $message, array $cont = [])
    {

    }
}
$loger = new MyLogger();
$loger->log('уровень сообщение', 'само сообщение');
//предположим хотим изменить параметры местами $leger сделать вторым, 
//чтобы задать значение по умолчанию
//для этого создадим подтип, с переопределенной сигнатурой
//затем его реализуем в классе MyLogger
interface Mylo extends LoggerInterface
{
    public function log($message, $kleger = 'debug', array $cont = []);
}
// class MyLogger implements Mylo
// {

// }
//код завершится с ошибкой
//затем если вызвать класс MyLogger, вызовется LoggerInterface
//задания
//class создаем
//этот класс умеет подсчитывать количество элементов в массиве
print_r("<br>");
interface Storage
{
    public function get($key);
    public function set($key, $value);
    public function count();
}
class Memoru
{
    //иммеется свойство
    private $array = [];
    public function __construct($array = [])
    {
        $this->array = $array;
    }
    public function get($key)
    {
        return $this->array[$key];
    }
    public function set($key, $value)
    {
        return $this->array[$key] = $value;
    }
    public function count()
    {
        // throw new \Exception('jhngbfvdc'); 
    }
}
$obj = new Memoru();
$obj->set('one', 'two');
print_r("<br>");
print_r($obj->get('one'));
print_r("<br>");
print_r($obj->count());
print_r("<br>");
class SplFileInfo
{
    private $file;
    // public function isReadable()
    // {
    //    $this->file;
    // }
}
$obj = new SplFileInfo(__FILE__);
// print_r($obj->isReadable());
//Создайте класс File, который представляет собой абстракцию над файлом 
//(упрощенная версия SplFileInfo). Реализуйте в этом классе метод read(). 
//Этот метод проверяет можно ли прочитать файл и если да, то читает его, 
//если нет, то бросает исключения двух видов:
//Если файла не существует – App\Exceptions\NotExistsException
//Если файл нельзя прочитать (но он существует) – App\Exceptions\NotReadableException
class File
{
    protected $file;
    public function __construct(string $file)
    {
        $this->file = $file;
    }
    public function read()
    {
        $file = $this->file;
        //если файла не существует, падает исключение
        if (!file_exists($file)) {
            throw new Exception\NotExistsException("not file");
        }
        //если файла читать не возможно, но он существуует, падает исключение
        if (!is_readable($file)) {
            throw new Exception\NotReadableException("not read");
        }
        //иначе читает файл
        return file_get_contents($file);
    }
}
//Реализуйте функцию readFiles, 
//которая принимает на вход список файлов и возвращает их содержимое. 
//Если в процессе обработки какого-то файла возникло исключение, 
//то вместо данных этого файла возвращается null.
//возвращает содержимое файла
function readfiles(array $filepath): array
{
    //collect библиотека обрабатывает код, принимает на вход исходный файл
    $values = collect($filepath)
    //здесь создается обьект на основе класса File, принимает его свойство
    ->map(fn($file) => new File($file))
    //тут создается исключение
    ->map(function ($files) {
        try {
            //возвращает содержимое
            return $files->read();
        } catch (\App\Exceptions\FileException $e) {
            return null;
        }
    })->all();
    return $values;
}
//код ищет метод 
//создаем функцию
function callMethod($data, $metodname, $args)
{
    //в переменную classname присваиваем data со ключом ['classname']
    $className = $data['className'];
    //специальная функция, хранит список классов и связанных
    //с ним методов, ищем по ключу className
    $metods = getClassMethods($className);
    //берем нужнфй метод и вызываем его у переменной $metods
    $metod = $metods[$metodname];
    //если метод true найден,
    if ($metod) {
        //вызываем его с аргументами
        $metod($data, ...$args);
    } else if (!$metod && isset($metods['__call'])) {
        //если $metod не найден, но определен метод __call, вызываем его
        $metods['__call']($data, ...$args); 
    }
    //иначе выбрасываем исключение
    throw new \Exception('no method error');
}
////DOM элемент
abstract class HTMLss
{
    private const ATTRIBUTE_NAMES = ['name', 'class'];
    public $attributes = [];
    public static function getAttributeNames()
    {
        return self::ATTRIBUTE_NAMES;
    }
    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }
    public function getAttributes()
    {
        return $this->attributes;
    }
    // BEGIN (write your solution here)
    abstract protected function isValid();
    // END
}
//Реализуйте метод isValid, который проверяет соответствие между 
//переданными атрибутами и допустимыми атрибутами. 
//Для тега Img допустимыми являются: name, class, src. 
//Причём name и class допустимы для любого элемента. 
//Поэтому информация о них должна находиться в базовом классе.
class HTMLImgElement extends HTMLss
{
    private const ATTRIBUTE_NAMES = ['src'];
    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }
    // BEGIN (write your solution here)
    public function  isValid() 
    {
        //тут выводим переданный массив с элементами
        $result = array_keys($this->getAttributes());
        // var_dump($result);
        //тут убираем значение или ключ, которого нет в $this->getAttributeNames()
        $diff = array_diff($result, $this->getAttributeNames());
        // var_dump($this->getAttributeNames());
        return empty($diff);
    // END
    }
}
// $img = new HTMLImgElement(['class' => 'rounded', 'href' => 'path/to/image']);
// print_r($img->isValid());
class HTMLButtonElement extends HTMLss
{
    private const ATTRIBUTE_NAMES = ['type'];
    private const TYPE_NAMES = ['button', 'submit', 'reset'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    // BEGIN (write your solution here)
    //Реализуйте валидацию по аналогии как для тега Img. 
    //Для тега Button допустимыми являются: name, class, type. 
    //Причём атрибут type, является обязательным и может принимать одно из доступных значений: 
    //button, submit, reset.
    public function isValid()
    {
        
        //тут присваивает переменная $atribut переданный массив
        $atribut = $this->getAttributes();
        //а тут выводит ключи переданного массива в $result присваивается
        $result = array_keys($this->getAttributes());
        $diff = array_diff($result, $this->getAttributeNames());
        //проверка на пустоту хммммммммм
        return empty($diff)
        //тут если есть ключ "type" в переданном массиве
        //сюда передается все переданные значения со ключами еще не обработанный
        && array_key_exists('type', $atribut)
        //и у этого ключа $result['type'] есть значения в статическом свойстве self::TYPE_NAMES
        && in_array($atribut['type'], self::TYPE_NAMES);
    } 
    // END
}
$button = new HTMLButtonElement(['class' => 'rounded', 'type' => 'button']);
print_r($button->isValid());
///Реализуйте метод __toString(), 
//который возвращает текстовое представление тега. 
//Для этого он использует данные из статического свойства 
//$params определенного в подклассах. Атрибуты в этой практике не предусмотрены. 
//Если у объекта есть тело $this->body, 
//то оно должно устанавливаться между открывающим и закрывающим тегом.
class HTMLdd
{
    private $body;
    public function setTextContent($body)
    {
        $this->body = $body;
    }
    // BEGIN (write your solution here)
    public function __toString()
    {
        //обращаемся к статическому свойству $params
        $params = static::$params;
        //здесь в переменную присваиваем $params со ключом 'name'
        $close = "<{$params[$name]}>";
        //если $params без пар
        if (!$params['pair']) {
            //возвращается тег без закрывающего
            return $close;
        }
        //если парный, тос концом
        $closeteg = "</{$params[$name]}>";
        //здесь говорится открывающий, закрывающий с телом
    return "{$close}{$this->body}{$closeteg}";
    }
    
    // END
}
class HTMLDivElements extends HTMLdd
{
    private static $params = [
        'name' => 'div',
        'pair' => false
    ]; 
}
$el = new HTMLDivElements();
print_r($el->setTextContent('!hello'));
print_r("<br>");
//Создайте класс Sanitizer и реализуйте интерфейс SanitizerInterface. 
//Метод sanitize($text) должен отрезать концевые пробелы и возвращать результат наружу.
//Создайте класс (декоратор) SanitizerStripTagsDecorator, 
//который также реализует интерфейс SanitizerInterface. 
//Он принимает в конструктор исходный санитайзер и дополнительно к его логике, 
//выполняет очистку текста от тегов. 
//Очистка текста от тегов должна идти раньше чем отрезание концевых пробелов.
interface Sanitais
{
    public function sanatais(string $text);
}
class Te implements Sanitais
{
    public function sanatais(string $text)
    {
        return trim($text);
    }
}
$te = new Te();
// $te->sanatais('text    ');

class SanitizerStripTagsDecorator extends Te
{
    private $sanitaze;
    public function __construct($sanitaze)
    {
       $this->sanitaze = $sanitaze;
    }
    public function sanatais(string $text)
    {
        $show = strip_tags($text);
        //тут вызываем функцию в классе Te, передаем аргумент обработаный
        //через strip_tags
        return $this->sanitaze->sanatais($show);
    }
}
$te1 = new Te();
$te2 = new SanitizerStripTagsDecorator($te1);
// $class = new SanitizerStripTagsDecorator();
print_r($te2->sanatais('<p>text<p>'));
print_r("<br>");
//создали трейт
trait Magic
{
    //доступно только внутри трейта
    private $properties;
    public function __get($key)
    {
        return $this->properties[$key];
    }
    public function __set($key, $value)
    {
        return $this->properties[$key] = $value;
    }
}
class M
{
    use Magic;
}
$magic = new M();
$magic->ked = 'value';
// print_r($magic->__get('key'));
var_dump($magic instanceof Magic);
print_r("<br>");
trait IteratorTrait
{
    protected $offset = 0;
    public function current()
    {
        return $this->getCollection() [$this->offset] ?? null;
    }
    public function next()
    {
        $this->offset++;
    }
    public function key()
    {
        return $this->offset;
    }
    public function valid()
    {
        return \array_key_exists($this->offset, $this->getCollection());
    }
    public function rewind()
    {
        $this->offset = 0;
    }
    abstract public function getCollection();
}
// interface Iterator extends Traversable {}
class Co 
{
    //implements Iterator
    private $lessons = ['one', 'two', 'three'];
    use IteratorTrait;
    protected function getCollection()
    {
        return $this->lessons;
    }
}
$co = new Co();
foreach ($co as $lessons) {
    echo $lessons . "\n";
}
//Реализуйте трейт, добавьте в него метод maxBy, 
//работающий по примеру выше. Этот метод принимает на вход анонимную функцию, 
//которая выполняет сравнение двух элементов коллекции по нужному признаку. 
//Результатом этой функции будет элемент соответствующий критерию максимальности. 
//Принцип работы такой же как и у usort
trait Enumerable
{
    abstract public function getIterator(): iterable;
    // BEGIN (write your solution here)
    public function maxBy(callable $fn)
    {
        $items = $this->getIterator();
        if (!count($items)) {
            return null;
        }
        $result = array_reduce($items, function ($a, $b) use ($fn){
            $value = $fn($a, $b);
           return $value >= 0 ? $a : $b;
        }, $items[0]);
        return $result;
    }
    // END
}
class Course
{
    use Enumerable;
    private $lessons;
    public function __construct($lessons)
    {
        $this->lessons = $lessons;
    }
    public function getIterator(): iterable
    {
        // Для простоты возвращает массив, вместо итератора
        return $this->lessons;
    }
}
$cource = new Course('a', 8);
print_r($cource->maxBy(function ($a, $b) {
    return $a->getDuration() <=> $b->getDuration();
}));


