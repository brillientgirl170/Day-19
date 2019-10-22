<?php
namespace App\classes;


class student
{
    public function saveStudentInfo($data){
        $link= mysqli_connect('localhost', 'root', '', 'practice-database');
        $sql= "INSERT INTO students (name, email, mobile) VALUES('$data[name]', '$data[email]', '$data[mobile]')";
        if (mysqli_query($link, $sql)) {
            $massege= 'Student info save successfully';
                return $massege;
        } else {
            die('Query problem'.mysqli_error($link));
        }
    }

    public function getStudentsInfo(){
       $link= mysqli_connect('localhost', 'root', '', 'practice-database');
       $sql= "SELECT * FROM students";
       if (mysqli_query($link, $sql)){
           $queryResult= mysqli_query($link, $sql);
            return $queryResult;
       } else {
           die('Query problem'.mysqli_error($link));
       }
    }
}