<?php
interface eat{
	public function eat();
	public function bite();
}

abstract class animal implements eat{
	protected $name;
	public function __construct($name) {
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
	//abstract public function eat();
	//abstract public function bite();
}

class dog extends animal{

	public function bite() {
		echo 'かむわん！';
	}

	public function eat() {
		echo 'くうわん！';
	}
}

$dog = new dog("pochi");
var_dump($dog);
var_dump(get_class_methods($dog));
echo $dog->getName();
$dog->eat();
?>
