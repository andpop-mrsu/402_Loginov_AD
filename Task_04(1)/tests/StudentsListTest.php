<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\StudentsList;
use App\Student;

class StudentsListTest extends TestCase
{
    public function test_AddAndCount(): void
    {
        $student = new Student();
        $studentsList = new StudentsList();
        $studentsList->add($student);
        self::assertSame(1, $studentsList->count());
    }

    public function test_Get(): void
    {
        $student = new Student();
        $studentsList = new StudentsList();
        $student->setName("Антон")->setLastName("Логинов")->setFaculty("ФМиИТ")->setCourse(4)->setGroup(402);
        $studentsList->add($student);
        self::assertInstanceOf(Student::class, $studentsList->get(1));
    }

    public function test_Load(): void
    {
        $studentsList = new StudentsList();
        $studentsList->load("output");
        self::assertSame(1, $studentsList->count());
        self::assertInstanceOf(Student::class, $studentsList->get(1));
        self::assertSame("Файл fileName не существует!", $studentsList->load("fileName"));
    }

    public function test_CurrentAndKey(): void
    {
        $student1 = new Student();
        $student2 = new Student();
        $student3 = new Student();
        $studentsList = new StudentsList();
        $student1->setName("Антон")->setLastName("Логинов")->setFaculty("ФМиИТ")->setCourse(4)->setGroup(402);
        $student2->setName("Иван")->setLastName("Иванов")->setFaculty("ИСИ")->setCourse(2)->setGroup(201);
        $student3->setName("Пётр")->setLastName("Голубев")->setFaculty("ИНК")->setCourse(3)->setGroup(303);
        $studentsList->add($student1);
        $studentsList->add($student2);
        $studentsList->add($student3);

        self::assertSame("Id: 14" . "\n" .
            "Фамилия: Логинов" . "\n" .
            "Имя: Антон" . "\n" .
            "Факультет: ФМиИТ" . "\n" .
            "Курс: 4" . "\n" .
            "Группа: 402", $studentsList->current()->__toString());
        self::assertSame(5, $studentsList->key());
    }
}
