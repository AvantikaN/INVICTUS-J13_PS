<?php ?>
<!DOCTYPE html>
<html>
    <head><title>"Form page"</title>
        <link rel="stylesheet" href="emaildup1.css" type="text/css" />
    </head>
<body>
    <h1>
        VESIT Project Showcase
    </h1>
  <form action="#" method="POST">
    <h2>
      Enter your Project Title :
      <input type="text" name="Project_title">
    </h2>
    <h2>
      Department
   
   <br>  
  <input type="radio" id="dept"name="CMPN" value="CMPN"/> CMPN   
  <br>  
  <input type="radio" id="dept" name="IT" value="IT"/> IT <br>
  <input type="radio" id="dept" name="EXTC" value="EXTC"/> EXTC <br>  
  <input type="radio" id="dept" name="AI_DS" value="AI&DS"/> AI&DS <br>
  <input type="radio" id="dept" name="ELEC" value="Electrical"/> ELECTRICAL <br>
  <input type="radio" id="dept" name="MECH" value="Mechanical"/> MECHANICAL <br>
  <input type="radio" id="dept" name="INSTRU" value="INSTRU"/> INSTRUMENTATION<br/>
  
  </h2>
    <h2>
      Enter your Mentor Name :
      <input type="text" name="Mentor_name">
    </h2>
    <h2 >
      Give your Project Description (less than 200 words) :
      <textarea id="subject" name="Project_Description" placeholder="Enter here..." class ="desc" ></textarea>
    </h2>
    <h2>Enter the team members names:</h2>
    <h2>Member 1 (Leader)</h2>
    <h3>
      Name :
      <input type="text" name="Team_member_names">
      Class :
      <input type="text" name="Class">
      Div:
      <input type="text" name="Div">
      Roll Number :
      <input type="text" name="Roll_no">
    </h3>
    
   <h2>Member 2 </h2>
    <h3>
      Name :
      <input type="text" >
      Class :
      <input type="text" >
      Div:
      <input type="text">
      Roll Number :
      <input type="text">
    </h3>
    
    <h2>Member 3 </h2>
    <h3>
      Name :
      <input type="text">
      Class :
      <input type="text">
      Div:
      <input type="text">
      Roll Number :
      <input type="text">
    </h3>
    
    <h2>Member 4 </h2>
    <h3>
      Name :
      <input type="text">
      Class :
      <input type="text">
      Div:
      <input type="text">
      Roll Number :
      <input type="text">
    </h3>
    <h2>
    Enter Academic Year
    <input type="text" name="Academic_year">
    </h2>
    <h2>
    Semester
    <input type="text" name="Semester">
    </h2>
    <h2>Upload image of your project :</h2>
    <canvas id="canvas"></canvas>
    <input type="file" id="inp" name="Image">
  
    <h2>Technologies / Software used
    <input type="text" name="Technology_Software">  
    </h2>
  
    <h2>Hardware used
    <input type="text" name="Hardware">  
    </h2>
    <input type="submit" value="Submit">
      </form>
      <script src="emaildup1.js"></script>
  </body>
  </html>
  <?php
  if($_POST['submit'])
  {
      $Project_title=$_POST['Project_title'];
      $CMPN=$_POST['CMPN'];
      $IT=$_POST['IT'];
      $EXTC=$_POST['EXTC'];
      $AI_DS=$_POST['AI_DS'];
      $ELEC=$_POST['ELEC'];
      $MECH=$_POST['MECH'];
      $INSTRU=$_POST['INSTRU'];
      $Mentor_name=$_POST['Mentor_name'];
      $Project_Description=$_POST['Project_Description'];
      $Team_member_names=$_POST['Team_member_names'];
      $Class=$_POST['Class'];
      $Div=$_POST['Div'];
      $Roll_no=$_POST['Roll_no'];
      $Academic_year=$_POST['Academic_year'];
      $Semester=$_POST['Semester'];
      $Image=$_POST['Image'];
      $Technology_Software=$_POST['Technology_Software'];
      $Hardware=$_POST['Hardware'];
      $query="INSERT INTO project_details values('$Project_title','$CMPN','$IT','$EXTC','$AI_DS','$ELEC','$MECH','$INSTRU','$Mentor_name','$Project_Description','$Team_member_names','$Class','$Div','$Roll_no','$Academic_year','$Semester','$Image','$Technology_Software','$Hardware');
        $data=mysqli_query($query)";
        if($data){
            echo "Data inserted into Database";
        }
        else{
            echo "Failed to insert"; 
        }
}
  ?>