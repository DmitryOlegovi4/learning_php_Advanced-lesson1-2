<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

echo "host-hackerU<br/><br/>";

// УРОК 1
// I часть
/*
echo "Hello world!".'<br/>';
print_r([1,2,3,4,5,'test'=> 567]);
echo '<br/>';
var_dump(123.5);
echo '<br/>';

$test = 'test';
$a = 123;
$bool = true;
echo $test.'<br/>';
print_r([$test ,$a , $bool, true, false, 'test'=> 567]);
echo '<br/>';
var_dump($bool );
echo '<br/>';
die('die');
/**/


// II часть
/*
$int=random_int(1,90000);
echo $int;
if($int%2){echo ' - это нечётное число'.'<br/>'; } else {echo ' - это чётное число'.'<br/>';};
if(!($int%3) && !($int%5)){echo ', также делится и на 3, и на 5' . ' foobar'.'<br/>'; }
elseif(!($int%3)){echo ', также делится на 3' . ' foo'.'<br/>'; }
elseif(!($int%5)){echo ', также делится на 5' . ' bar'.'<br/>'; };

for($i = 1; $i < 100; $i++){
    if(!($i%3) && !($i%5)){echo $i.' делится и на 3, и на 5' . '<br/>'; }
    elseif(!($i%3)){echo $i . ' делится на 3' . '<br/>'; }
    elseif(!($i%5)){echo $i. ' делится на 5' . '<br/>'; };
}
/**/



// III часть (циклы)
/*
$z =10;
for($i = 0; $i < $z; $i++){
    echo $i . '<br/>';
}
for($i = $z; $i >0; $i--){
    echo $i . '<br/>';
}
while ($i <= $z) {
    echo $i++. '<br/>';
}
/**/

/*
$bd = [ 1, 2, 3, 5, 6 ];
$token = 0;
do {
        $token++;
} while (in_array($token, $bd));
echo $token;
/**/


// IV часть (функции)

//сортировка поузырьком
/*
$arr = [10,5,99,64,13,0,-3,55];

function sortBubble($arr = []){
    $count = count($arr) - 1;
    do{
        $changes = 0;
        for($i=0; $i<$count; $i++){
            if($arr[$i]>$arr[$i+1]){
                [$arr[$i], $arr[$i+1]] = [$arr[$i+1], $arr[$i]];
                $changes = 1;
            }
        }
        $count--;
    }while($changes);
    return $arr;
}
print_r(sortBubble($arr));

/**/






//УРОК 2

// V часть (implode & explode)

// implode - склеивание массива в одну строку
/*
$arr = ['H','e','l','l','o',',',' ','w','o','r','l','d','!'];
//function implodeArr(string $str,$arr = []){
//    $res = '';
//    $countStr = -strlen($str);
//    foreach ($arr as $value){
//        $res .= $value.$str;
//    }
//    return $countStr === 0 ? $res : substr($res,0,$countStr);
//}
function implodeArr(string $str,$arr = []){
    $res = '';
    foreach ($arr as $key => $value){
        $res .= $key === array_key_last($arr) ? $value : $value.$str;
    }
    return $res;
}

echo implodeArr('---',$arr);
//echo implode('', $arr);


//варианты Анны
function impCopy ($glue, $arr){
    foreach ($arr as $val){
        $str = (strlen($str) == 0? $val: $str . $glue . $val);
    }
    return $str;
};
echo $str = impCopy('-', $a);

function impCopy ($glue, $arr){
    foreach ($arr as $key => $val){
        $str = ($key == 0? $val: $str . $glue . $val);
    }
    return $str;
};
echo $str = impCopy('-', $a);
/**/


// explode - разделить строку по символам
/*
$str = 'He$$ll$o$$,$Wo$r$$ld';

function explodeStr(string $separator, string $str){
    $res = [];
    $count = strlen($separator);
    $tempSimbol = '';
    for ($i =0; $i < strlen($str); $i++){
        if(substr($str, 0, $count) === $separator) $i = $count;
        if($count === 0){
            $res[] = substr($str, $i, 1);
        }
        if($count===1){
            if(substr($str, $i, 1) != $separator){
                $tempSimbol .= substr($str, $i, 1);
            }else{
                $res[] = $tempSimbol;
                $tempSimbol = '';
            }
        }
        if($count>1) {
            if (substr($str, $i, 1) === substr($separator, 0, 1)) {
                $tempCheck = '';
                for($j=0;$j<$count;$j++){
                    $tempCheck .= substr($str, $i+$j, 1);
                }
                if($tempCheck === $separator){
                    $res[] = $tempSimbol;
                    $tempSimbol = '';
                    $i += $count-1;
                }else{
                    $tempSimbol .= substr($str, $i, 1);
                }
            } else{
                $tempSimbol .= substr($str, $i, 1);
            }
        }
        if(($i === strlen($str)-1) && $tempSimbol){
            $res[] = $tempSimbol;
        }
    }
    return $res;
}

print_r(explodeStr('$$', $str));
echo '<br>';
print_r(explode('$$', $str));

/**/