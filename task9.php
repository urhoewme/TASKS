<?php

class Student
{
    protected string $firstName;
    protected string $lastName;
    protected string $group;
    protected float $averageMark;
    public function __construct(string $firstName, string $lastName, string $group, float $averageMark)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->averageMark = $averageMark;
    }
    public function getInfo()
    {
        return "Name: {$this->firstName}, Last Name: {$this->lastName}, Group: {$this->group}, Average Mark: {$this->averageMark}\n";
    }
    public function getScholarship()
    {
        if ($this->averageMark >= 5) {
            $scholarship = 100;
        } else {
            $scholarship = 80;
        }
        return $scholarship;
    }
}

class Aspirant extends Student
{
    protected string $topic;
    public function __construct(string $firstName, string $lastName, string $group, float $averageMark, string $topic)
    {
        parent::__construct($firstName, $lastName, $group, $averageMark);
        $this->topic = $topic;
    }
    public function getScholarship()
    {
        if ($this->averageMark >= 5 && $this->topic) {
            $scholarship = 200;
        } else {
            $scholarship = 180;
        }
        return $scholarship;
    }
    public function getInfo()
    {
        return "Name: {$this->firstName}, Last Name: {$this->lastName}, Group: {$this->group}, Average Mark: {$this->averageMark}, Topic: {$this->topic}\n";
    }
}
$students = [
    new Student("Boba", "Bibin", "C3P0", 4.2),
    new Aspirant("Luke", "Skywalker", "R2D2", 7.4, "Lightsabers"),
    new Student("Boba", "Fett", "CT-7567", 8.1),
    new Aspirant("Anakin", "Skywalker", "CT-7182", 3.1, "Fighters"),
];
foreach ($students as $s) {
    echo "{$s->getInfo()} - Scholarship: {$s->getScholarship()}";
    echo "\n";
}
