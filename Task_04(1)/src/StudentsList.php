<?php

namespace App;

use App\Student;
use Iterator;

class StudentsList implements Iterator
{
    private $students = array();

    public function add(Student $student): void
    {
        $this->students[] = $student;
    }

    public function count(): int
    {
        return count($this->students);
    }

    public function get(int $n): Student
    {
        return $this->students[$n - 1];
    }

    public function store(string $fileName): void
    {
        file_put_contents($fileName, serialize($this->students));
    }

    public function load(string $fileName)
    {
        if (!file_exists($fileName)) {
            return "Файл " . $fileName . " не существует!";
        }

        $this->students = unserialize(file_get_contents($fileName));
    }

    public function current()
    {
        return current($this->students);
    }

    public function key()
    {
        return current($this->students)->getId();
    }

    public function next()
    {
        return next($this->students);
    }

    public function rewind()
    {
        reset($this->students);
    }

    public function valid(): bool
    {
        return $this->current() !== false;
    }
}
