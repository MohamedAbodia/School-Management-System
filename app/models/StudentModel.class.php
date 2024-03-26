<?php 

require_once 'User.class.php';

class Student extends User {

    private $studentLv = 3;
    private $studentBooks = 'test';


    function getStdLevel() {
        return $this->studentLv;
    }

    function getStdBooks(){
        return $this->studentBooks;
    }

    /*
	** Count Number Of Student Function v1.0
	** Function To Count Number Of Student Rows
	*/

	function countStudent() {

		global $connect;

		$stmt = $connect->prepare("SELECT COUNT(studentid) FROM student");

		$stmt->execute();

		return $stmt->fetchColumn();
    }
    
    function showStudentDetails() {

		global $connect;

		$stmt = $connect->prepare("SELECT * FROM student");

		$stmt->execute();

        $row = $stmt->fetchAll();

		return $row;
    }

    function showStudentCourses($id) {

		global $connect;

		$stmt = $connect->prepare("SELECT * FROM course WHERE stdid = $id");

		$stmt->execute();

        $row = $stmt->fetchAll();

		return $row;
    }

    function showStudentShud($id) {

		global $connect;

		$stmt = $connect->prepare("SELECT * FROM schedule WHERE stdid = $id");

		$stmt->execute();

        $row = $stmt->fetchAll();

		return $row;
    }
    



}