<?php

namespace App;

include '../vendor/autoload.php';

$student1 = new Student();
$student1->setName("Иван")
    ->setSurname("Иванов")
    ->setFaculty("ФИиИТ")
    ->setCourse(3)
    ->setGroup("303");

$student2 = new Student();
$student2->setName("Петр")
    ->setSurname("Петров")
    ->setFaculty("ФИиИТ")
    ->setCourse(2)
    ->setGroup("201");

$student3 = new Student();
$student3->setName("Николай")
    ->setSurname("Николаев")
    ->setFaculty("ФИиИТ")
    ->setCourse(4)
    ->setGroup("402");

$students = new StudentsList();
$students->add($student1)
    ->add($student2)
    ->add($student3);

try {
    $students->store("../resources/output.txt");
}  catch (\Exception $e) {
    echo $e->getMessage();
}

try {
    $students->load("../resources/output.txt");
}  catch (\Exception $e) {
    echo $e->getMessage();
}

var_dump($students->get(1));