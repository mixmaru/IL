<?php
/*
require_once './ShowFile.class.php';

$instance1 = SingletonSample::getInstance();
sleep(1);
$instance2 = SingletonSample::getInstance();

echo 'instance ID : '.$instance1->getID().'<br>';
echo '$instanse1->getID() === $instanse2->getID() :'.($instance1->getID() === $instance2->getID() ? 'true' : 'false');
echo '<br>';
echo '$instanse1 === $instanse2 :'.($instance1 === $instance2 ? 'true' : 'false') ;
echo '<br>';

$instance1_clone = clone $instance1;
var_dump($instance1_clone);

*/
require_once './DisplaySourceFileImpl.class.php';

$show_file = new DisplaySourceFileImpl('../index.php');
var_dump($show_file);
$show_file->display();
