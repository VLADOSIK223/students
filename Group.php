<?php

require_once 'Student.php';

class Group
{
    public string $groupName;
    public array $students;

    public function __construct(string $groupName)
    {
        $this->groupName = $groupName;
        $this->students = [];
    }

    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    public function getGroupAverage(): float
    {
        if (count($this->students) == 0) {
            return 0;
        }

        $sum = 0;
        foreach ($this->students as $student) {
            $sum += $student->getAverage();
        }
        return $sum / count($this->students);
    }

    public function getBestStudent(): ?Student
    {
        if (count($this->students) == 0) {
            return null;
        }

        $best = $this->students[0];
        foreach ($this->students as $student) {
            if ($student->getAverage() > $best->getAverage()) {
                $best = $student;
            }
        }
        return $best;
    }
}