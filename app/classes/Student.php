<?php

namespace App\classes;

class Student
{
    public function newStudent()
    {
        $name = $_POST['name'];
        $phone = $_POST['number'];
        $email = $_POST['email'];
        $pwd = md5($_POST['pwd']);
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $link = mysqli_connect('localhost', 'root', '', 'student-info');
        $sql = "INSERT INTO students (name, number, email, pwd, address, gender) VALUES ('$name', '$phone', '$email', '$pwd', '$address', '$gender')";
        if (mysqli_query($link, $sql)) {
            $message = "Data Inserted Successfully";
            return $message;
        } else {
            die('Something went wrong' . mysqli_error($link));
        }
    }

    public function viewAllStudent()
    {
        $link = mysqli_connect('localhost', 'root', '', 'student-info');
        $sql = "SELECT * FROM students";
        if ($result = mysqli_query($link, $sql)) {
            return $result;
        } else {
            die('Something went wrong' . mysqli_error($link));
        }
    }

    public function getStudent($id)
    {
        $link = mysqli_connect('localhost', 'root', '', 'student-info');
        $sql = "SELECT * FROM students WHERE id = '$id'";
        if ($result = mysqli_query($link, $sql)) {
            return $result;
        } else {
            die('Something Wrong' . mysqli_error($link));
        }
    }
    public function updateStudent()
    {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $link = mysqli_connect('localhost', 'root', '', 'student-info');
        $sql = "Update students SET name='$name', number='$number', email='$email', pwd='$pwd', address='$address', gender='$gender' WHERE id='$_POST[id]'";
        if (mysqli_query($link, $sql)) {
            header('location: view-student.php');
        } else {
            die('Something wrong' . mysqli_error($link));
        }
    }
    public function deleteStudent($id)
    {
        $link = mysqli_connect('localhost', 'root', '', 'student-info');
        $sql = "DELETE FROM students WHERE id = '$id'";
        if (mysqli_query($link, $sql)) {
            header('location: view-student.php');
        } else {
            die('something wrong' . mysqli_error($link));
        }
    }
}
