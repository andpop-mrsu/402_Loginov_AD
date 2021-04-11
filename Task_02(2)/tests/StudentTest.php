<?php

namespace Tests\StudentTest;

use App\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    public function test_setName_isPositive(): void
    {
        $student = new Student();
        $student->setName("Иван");

        self::assertEquals("Иван", $student->getName());
    }

    public function test_setSurname_isPositive(): void
    {
        $student = new Student();
        $student->setSurname("Иванов");

        self::assertEquals("Иванов", $student->getSurname());
    }

    public function test_setFaculty_isPositive(): void
    {
        $student = new Student();
        $student->setFaculty("ФИиИТ");

        self::assertEquals("ФИиИТ", $student->getFaculty());
    }

    public function test_setCourse_isPositive(): void
    {
        $student = new Student();
        $student->setCourse(3);

        self::assertEquals(3, $student->getCourse());
    }

    public function test_setGroup_isPositive(): void
    {
        $student = new Student();
        $student->setGroup("303");

        self::assertEquals("303", $student->getGroup());
    }
}