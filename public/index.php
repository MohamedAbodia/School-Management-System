<?php

include_once 'app/config/config.php';
include 'app/views/inc/headerind.inc.php';
?>

<?php
include 'app/views/inc/footerind.inc.php';
include 'app/Database.class.php';
/*
include_once 'app/models/StudentModel.class.php';
include_once 'app/models/AdmissionModel.class.php';
require_once 'app/models/AdminModel.class.php';
*/
/*
    Auto Load Classes
*/

// spl_autoload_register(function($class) {

//     require 'classes/' . $class . '.php';

// });

// $student = new Student();
// $admission = new Admission();
// echo $student->getUserID();

// echo $student->countStudent();

// $x = $student->showStudentDetails();
// foreach ($x as $user){
//     echo $user['studentId'] . $user['studentName'] . $user['studentEmail'] . '<br>';
// }

// $x = $student->showStudentCourses(2);
// foreach ($x as $user){
//     echo $user['stdid'] . $user['courseName'] . $user['courseCode'] . '<br>';
// }

// $x = $student->showStudentShud(1);
// foreach ($x as $user){
//     echo $user['day'] . $user['Time Slot'] . $user['roomID'] . $user['courseID'] . $user['groupType'] . $user['groupNo'] .'<br>';
// }

// echo $admission->studentLv;

// $std = new Student();
// $adm = new Admission($std);
// $adm = new Admin();

// $adm->AddTeacher(2000,'ayman ezat');

// echo "Hello Wolrd!";
// $db = new Database();
// echo "<pre>"; echo print_r($obj); echo "</pre>";
// echo var_dump(phpinfo());
?>
 <section id="home" class="home">
        <div class="trans-background">
            <div class="welcome-message">
                <span>Welcome to</span>
                <h1>School Managment System - SCMS </h1>
                <p>Professional - Developements</p>
            </div>
        </div>
    </section>

<script>
console.clear();
function typingEffect(element,speed){
  let text=element.innerHTML;
  element.innerHTML="";
 var i=0;
  var timer=setInterval(function(){
    if(i<text.length){
      element.append(text.charAt(i))
      i++;
    }else{
      clearInterval(timer);
    }
  },speed)
  
}



const h1=document.querySelector('h1');
typingEffect(h1,150);
    const p=document.querySelector('p');
typingEffect(p,190);
</script>
<style>

/* DEMO-SPECIFIC STYLES */
 h1 {
  color: #DC3545 !important;
  font-family: monospace;
  border-right: .15em solid #fff; 
  white-space: nowrap; 
  margin: 0 auto; */
  padding-right:00px;
  letter-spacing: .15em;
  animation: blink .5s step-end           infinite alternate;;
}



/* The typewriter cursor effect */
@keyframes blink {
  50% { border-color: transparent}
}

</style>