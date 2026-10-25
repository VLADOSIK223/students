<?php

require_once 'Student.php';
require_once 'Group.php';

function printStudentInfo(Student $student): void
{
    echo "Студент: " . $student->firstName . " " . $student->lastName . "\n";
    echo "Средний балл: " . round($student->getAverage(), 2) . "\n";
    echo "-----------------\n";
}

function printGroupInfo(Group $group): void
{
    echo "Группа: " . $group->groupName . "\n";
    echo "Количество студентов: " . count($group->students) . "\n";
    echo "Общий средний балл: " . round($group->getGroupAverage(), 2) . "\n";
    echo "=================\n";
}