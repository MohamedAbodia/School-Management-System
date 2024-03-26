<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<?php include 'inc/header.inc.php'; ?>
<?php
require_once '../../app/models/TeacherModel.class.php';
require_once '../../app/models/AssignmentsModel.class.php';
require_once '../../app/models/CourseModel.class.php';
require_once '../../app/models/QuizModel.class.php';
require_once '../../app/controllers/TeacherController.class.php';
class TeacherView {

   
    
    
    
    
    
    
    
    function showStudentsData($data){

        ?>
            <section> 
                <h1>Students Enrolled in Courses</h1> 
                <!-- TABLE CONSTRUCTION--> 
                <table class='table table-hover'> 
                    <tr> 
                        <th>Student Id</th>
                        <th>Student Name</th>
                        <th>Course code</th> 
                        <th>Course name</th> 
                       
                    </tr> 
                    <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
                    <?php   // LOOP TILL END OF DATA  
                        foreach($data as $x)
                        {
                    ?> 
                    <tr> 
                        <!--FETCHING DATA FROM EACH  
                            ROW OF EVERY COLUMN--> 
                        <td><?php echo $x['StudentId'];?></td> 
                        <td><?php echo $x['studentName'];?></td> 
                        <td><?php echo $x['courseCode'];?></td> 
                        <td><?php echo $x['courseName'];?></td> 
                       
                    </tr> 
                    <?php 
                        } 
                    ?> 
                </table> 
            </section> 

        <?php
    }
    
      public function showCourseDetails($data){
              $x=$data->courseArray;
        
               
                ?>
<div id="Courses" class="tabcontent">
    <table class='table table-hover'>
        <tr> 
                        <th>courseCode</th>
                        <th>courseName</th>
                        <th>CourseDesc</th> 
                        <th>NumTeachers</th> 
                        <th>CourseMatrial</th>
                        <th>studentid</th> 
                       
        </tr>
        
    <?php
           for($i=0;$i<count($x);$i++){    
               
               
                ?>
           <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
             
                <td><?php echo $data->courseArray[$i]->courseCode;?></td> 
                <td><?php echo $data->courseArray[$i]->courseName;?></td> 
                <td><?php echo $data->courseArray[$i]->CourseDesc;?></td> 
                <td><?php echo $data->courseArray[$i]->NumTeachers;?></td>
                 <td><?php echo $data->courseArray[$i]->CourseMatrial;?></td> 
                  <td><?php echo $data->courseArray[$i]->stdid;?></td> 
                      
                  
            </tr>
            <?php
                   }
                   ?>
    </table>
</div>
            <?php
               
               
               
               
  
           
           
        }
    
        
        
        
           public function ShowQuiz($data){
              $x=$data->quizArray;
           
               
               
                ?>
<div id="Quizzes" class="tabcontent">
    <table class='table table-hover'>
        <tr> 
                        <th>Quiz ID</th>
                        <th>Due Date</th>
                        <th>Quiz Res</th> 
                        <th>Teacher ID</th> 
                        
                        <th>studentid</th> 
                       
                    </tr>
           <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <?php
                  for($i=0;$i<count($x);$i++){  
                ?>
                <td><?php echo $data->quizArray[$i]->QuizID;?></td> 
                <td><?php echo $data->quizArray[$i]->DueDate;?></td> 
                <td><?php echo $data->quizArray[$i]->QuizRes;?></td> 
                <td><?php echo $data->quizArray[$i]->teacherId;?></td>
                <td><?php echo $data->quizArray[$i]->studentId;?></td>
                </tr>
                     <?php
                  }
?>                     
            
    </table>
</div>
            <?php
               
               
               
               
  
            
           
        }
        

               public function showAssignmentsDetails($data){
                   ?>

                <br>
                <div class="d-grid gap-2">
                  <button class="btn btn-lg btn-primary" type="button">Teacher Dashboard</button>
                </div>
                <br>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Assigments')">Assigments</button>
  <button class="tablinks" onclick="openCity(event, 'Courses')">Courses</button>
    <button class="tablinks" onclick="openCity(event, 'Quizzes')">Quizzes</button>
    <button class="tablinks" onclick="openCity(event, 'AssignAdd')">Create Assigment</button>
    <button class="tablinks" onclick="openCity(event, 'Attnendcd')">Attedance</button>

</div>
<?php
              $x=$data->assignArray;
           
                ?>
<div id="Assigments" class="tabcontent">
       <table class='table table-hover'> 
                    <tr> 
                        <th>Teacher ID</th> 
                        <th>Course ID</th> 
                        <th>Due DATE</th> 
                        <th>Assign File</th> 
                        <th>Assign ID</th> 
                        <th>Assign Status</th> 
                        <th>Assign Solution</th> 
                    </tr> 
                    <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
                    <?php   // LOOP TILL END OF DATA  
                      
                    ?> 
                    <tr> 
                        <!--FETCHING DATA FROM EACH  
                            ROW OF EVERY COLUMN--> 
                       <?php
                          for($i=0;$i<count($x);$i++){ 
                       ?>
                        <td><?php echo $data->assignArray[$i]->TeacherID;?></td 
                        <td><?php echo $data->assignArray[$i]->courseId;?></td> 
                        <td><?php echo $data->assignArray[$i]->DueDate;?></td> 
                        <td><?php echo $data->assignArray[$i]->AssignFile;?></td> 
                        <td><?php echo $data->assignArray[$i]->AssignID;?></td>
                        <td><?php echo $data->assignArray[$i]->assignStatus;?></td>
                        <td><?php echo $data->assignArray[$i]->assignSolution;?></td>
                    </tr> 
                    <?php 
                           }
                    ?> 
                </table> 
</div>
        
        
            <?php
               
               
               
               
  
         
           
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    function AddAssignment($data){
        ?>
<div id="AssignAdd" class="tabcontent">
        <h1 class="text-center">Add New Assignment</h1>
			<div class="container">
				<form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
					<!-- Start Username Field -->
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Course Code</label>
						<div class="col-sm-10 col-md-6">
							<input type="text" name="coursecode" class="form-control" autocomplete="off" required="required" placeholder="The Code Of The Course In SCMS" />
						</div>
					</div>

					<!-- End Password Field -->
					<!-- Start Email Field -->
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Assignment Link</label>
						<div class="col-sm-10 col-md-6">
							<input type="text" name="link" class="form-control" required="required" placeholder="Enter Thew Link OF Submission" />
						</div>
					</div>
					<!-- End Email Field -->
					<!-- Start Full Name Field -->
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Due Date</label>
						<div class="col-sm-10 col-md-6">
							<input type="text" name="date" class="form-control" required="required" placeholder="Enter A Valid Due Date m-d-y" />
						</div>
					</div>

					<!-- End Avatar Field -->
					<!-- Start Submit Field -->
					<div class="form-group form-group-lg">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" value="Add Assignment" class="btn btn-primary btn-lg" />
						</div>
					</div>
					<!-- End Submit Field -->
				</form>
			</div>
</div>
            <?php
    }

    function teacherAttend(){
        ?>
<div id="Attnendcd" class="tabcontent">		
        <h1 class="text-center">Attendance Code</h1>
        <div class="container">
            <form class="form-horizontal" action="?do=check" method="POST" enctype="multipart/form-data">
                <div class="form-group form-group-lg">
                    <label class="col-sm-2 control-label">Code</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="attendcode" class="form-control" autocomplete="off" required="required" placeholder="Enter Attend Code"/>
                    </div>
                </div>

                <div class="form-group form-group-lg">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="Submit" class="btn btn-primary btn-lg" />
                    </div>
                </div>
            </form>
        </div>
		</div>
<style>
    .tabcontent{
        height:344px !important;
    }
</style>
        <?php
    }
    
    
}
?>