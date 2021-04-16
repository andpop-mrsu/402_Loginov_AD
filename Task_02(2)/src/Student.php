<?php

namespace App;

class Student
{
    public static int $autoincrement = 0;
    private int $id;
    private string $surname;
    private string $name;
    private string $faculty;
    private int $course;
    private string $group;

    public function __construct()
    {
        self::$autoincrement++;
        $this->id = self::$autoincrement;
    }

    public function setName($name): Student
    {
        $this->name = $name;

        return $this;
    }

    public function setSurname($surname): Student
    {
        $this->surname = $surname;

        return $this;
    }

    public function setFaculty($faculty): Student
    {
        $this->faculty = $faculty;

        return $this;
    }

    public function setCourse($course): Student
    {
        $this->course = $course;

        return $this;
    }

    public function setGroup(string $group): Student
    {
        $this->group = $group;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getFaculty(): string
    {
        return $this->faculty;
    }

    public function getCourse(): int
    {
        return $this->course;
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    public function __toString(): string
    {
        return "Id: {$this->id}" . PHP_EOL .
            "Фамилия: {$this->surname}" . PHP_EOL .
            "Имя: {$this->name}" . PHP_EOL .
            "Факультет: {$this->faculty}" . PHP_EOL .
            "Курс: {$this->course}" . PHP_EOL .
            "Группа: {$this->group}" . PHP_EOL;
    }
}