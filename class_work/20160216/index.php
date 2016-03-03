<?PHP
echo "<pre>";
function toArray($a,$b,$c){
	return [$a,$b,$c];
}
$u=toArray(1,2)[0];
list($a,$b,$c)=toArray(1,2,3);
echo $u;
echo "<br>";
//print_r($u);
function mySum($a,$b){
	return $a+$b;
	echo "Этот код не выведется";
}
$s=mySum(5,3);
echo $s;
echo "<br>";
function foo5(){
	static $i=0;
	echo ++$i."<br>";
}
foo5();
foo5();
foo5();
foo5();
function sayHello($name, $role=0){
	switch($role){
		case 0:$type="Гость";$st="color:green;font-size:18px";break;
		case 1:$type="Пользователь";$st="color:red;font-size:20px";break;
		case 2:$type="Модератор";$st="color:blue;font-size:22px";break;
		default:$type="Прохожий";$st="color:black;font-size:10px";break;
	}
	echo "<p style=$st>Hello $type $name</p> ";
	//global $w;
	$GLOBALS['w']="Changed";
}

print_r($GLOBALS);
//sayHello();
$w="John";
sayHello($w,1);
echo $w."<br>";
//sayHello("Maria",8);
function foo1(){
	echo "Работает функция".__FUNCTION__."<br>";
	function foo2(){
		echo "Работает функция".__FUNCTION__."<br>";
	}
}
foo1();
foo2();
//foo1();
$flag=true;
if ($flag){
function foo(){
	echo __FUNCTION__."<br>";
}
}
foo();
foo();
foo();

//print_r(get_defined_functions());