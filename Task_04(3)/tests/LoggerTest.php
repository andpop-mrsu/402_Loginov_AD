<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\StudentsList;
use App\Student;
use App\FileLogger;
use App\DBLogger;

class LoggerTest extends TestCase
{
    public function testLog()
    {
        $fileLogger = new FileLogger('logs');
        $dbLogger = new DbLogger('logs');
        $studentsListFile = new StudentsList($fileLogger);
        $studentsListDB = new StudentsList($dbLogger);
        self::assertFileExists("./logs/logs.db");
        self::assertFileExists("./logs/logs.txt");
        $sizeLogsTxt = count(file("./logs/logs.txt"));
        $student1 = new Student();
        $student2 = new Student();
        $student3 = new Student();
        $studentsListFile->add($student1);
        $studentsListDB->add($student1);
        $studentsListFile->add($student2);
        $studentsListDB->add($student2);
        $studentsListFile->add($student3);
        $studentsListDB->add($student3);
        self::assertCount($sizeLogsTxt + 3, file("./logs/logs.txt"));
    }
}
