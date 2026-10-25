<?php

class Student
{
    public string $firstName;
    public string $lastName;
    public array $grades;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->grades = [];
    }

    public function addGrade(int $grade): void
    {
        $this->grades[] = $grade;
    }

    public function getAverage(): float
    {
        if (count($this->grades) == 0) {
            return 0;
        }
        return array_sum($this->grades) / count($this->grades);
    }
}