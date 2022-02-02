<?php
class Student
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function showStudent()
    {
        echo "Student Name : " . $this->name . "<br/>";
    }
}
class Department
{
    public $name;
    public $students;
    function __construct($name, $students)
    {
        $this->name = $name;
        $this->students = $students;
    }
    function addStudent($student)
    {
        array_push($this->students, $student);
    }
    function showStudents($title = "")
    {
        echo "<br/><b>" . $title . "</b><br/>";
        foreach ($this->students as $student) {
            $student->showStudent();
        }
    }
    function deleteStudent($studentName)
    {
        $newStudents = array();
        foreach ($this->students as $student) {
            if ($student->name != $studentName) {
                array_push($newStudents, $student);
            }
        }
        $this->students = $newStudents;
    }
}
$cseDept = new Department("Computer Science engineering", array());
$cseDept->addStudent(new Student("Riyad Mahmud"));
$cseDept->addStudent(new Student("Scribble riyad"));
$cseDept->addStudent(new Student("James frankistian"));
$cseDept->addStudent(new Student("chappie"));
$cseDept->showStudents("All Students");
$cseDept->deleteStudent("scribble");
$cseDept->showStudents("After deleting scribble");
