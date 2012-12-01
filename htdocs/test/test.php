
<?php
require_once '../gof_iterator/Employee.class.php';
?>
<?php
class Employees implements IteratorAggregate {
    //private $employees;
    public $a = 'a';
    //public function __construct() {
    //    $this->employees = new ArrayObject();
    //}
    //public function add(Employee $employee) {
    //    $this->employees[] = $employee;
   // }
    public function getIterator() {
        return $this->employees->getIterator();
    }
}
?>
<?php
    $employees = new Employees();
    /*$employees->add(new Employee('SMITH', 32, 'CLERK'));
    $employees->add(new Employee('ALLEN', 26, 'SALESMAN'));
    $employees->add(new Employee('MARTIN', 50, 'SALESMAN'));
    $employees->add(new Employee('CLARK', 45, 'MANAGER'));
    $employees->add(new Employee('KING', 58, 'PRESIDENT'));
     */
    foreach($employees as $key => $val){
	    echo $key.'=>'.$val;
    }
?>