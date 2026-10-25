<?php

require_once 'Student.php';
require_once 'Group.php';
require_once 'functions.php';

$student1 = new Student("Иван", "Петров");
$student2 = new Student("Анна", "Сидорова");
$student3 = new Student("Олег", "Иванов");

$student1->addGrade(5);
$student1->addGrade(4);
$student1->addGrade(5);

$student2->addGrade(5);
$student2->addGrade(5);
$student2->addGrade(5);

$student3->addGrade(3);
$student3->addGrade(4);
$student3->addGrade(3);

$group = new Group("ИС-21");
$group->addStudent($student1);
$group->addStudent($student2);
$group->addStudent($student3);

foreach ($group->students as $student) {
    printStudentInfo($student);
}

printGroupInfo($group);

$best = $group->getBestStudent();
echo "Лучший студент: " . $best->firstName . " " . $best->lastName;
echo " (" . round($best->getAverage(), 2) . ")\n";