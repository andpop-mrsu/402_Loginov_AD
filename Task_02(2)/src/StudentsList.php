<?php

namespace App;

use RuntimeException;

class StudentsList
{
    private array $students;

    public function add(Student $student): StudentsList
    {
        $this->students[] = $student;

        return $this;
    }

    public function count(): int
    {
        return count($this->students);
    }

    /**
     * Возвращает n-й элемент массива студентов. Начинается с 1.
     *
     * @param int $n
     * @return Student
     */
    public function get(int $n): Student
    {
        return $this->students[$n - 1];
    }

    /**
     * @param string $fileName
     */
    public function store(string $fileName): void
    {
        if (!$fp = fopen($fileName, "w")) {
            throw new RuntimeException("Не удалось открыть файл.", 10);
        }

        foreach ($this->students as $student) {
            $line = $student->getName() . "," .
                $student->getSurname() . "," .
                $student->getFaculty() . "," .
                $student->getCourse() . "," .
                $student->getGroup() . "\r\n";

            fwrite($fp, $line);
        }

        fclose($fp);
    }

    public function load(string $fileName): StudentsList
    {
        if (!$lines = file($fileName, FILE_SKIP_EMPTY_LINES)) {
            throw new RuntimeException("Не удалось прочитать файл.", 20);
        }

        foreach ($lines as $line) {
            $data = explode(",", $line);

            $student = new Student();
            $student->setName($data[0])
                ->setSurname($data[1])
                ->setFaculty($data[2])
                ->setCourse((int)$data[3])
                ->setGroup($data[4]);

            $this->add($student);
        }

        return $this;
    }
}