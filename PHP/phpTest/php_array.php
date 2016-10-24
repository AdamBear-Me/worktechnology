<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/7/13 0013
 * Time: 20:42
 */
//php数组

/*$arr = array(1,4,3,6,8,2,5);

var_dump($arr);
rsort($arr);
var_dump($arr);

$num = 10;
function multipy($num){
    $num = $num +10;
    echo $num;
}
multipy($num);
echo $num;*/


$contact = array("id"=>1,"username"=>"xiongchao","sex"=>"man","address"=>"xinxiang");

/*while(list($key,$value) = each($contact)){
    echo "$key => $value"."<br/>";
}*/
echo array_shift($contact);
/*echo key($contact)."=>".current($contact);
next($contact);
echo key($contact)."=>".current($contact);
prev($contact);
echo key($contact)."=>".current($contact);
end($contact);
echo "   ";
echo pos($contact);
echo "   ";
echo key($contact)."=>".current($contact);
reset($contact);
echo key($contact)."=>".current($contact);

echo "   ";
echo pos($contact);*/