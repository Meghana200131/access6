<?php
include_once 'conn.inc';
if(isset($_POST['submit']))
{
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

  $stmt = $conn->query("SELECT MAX(id) as id FROM information");
  $v = $stmt->fetch();
  @$id = $v['id']+1;
  
  $sql="INSERT INTO information VALUES('$id','$fname','$$fname','$email','$subject','$message')";
  //if( $conn->exec($sql)) {  
  $conn->exec($sql);      

  ?>
  <script>
     alert('Thank You! for Registering, We will Contact You Shortly..');
     window.location.href='index.html';
  </script>

 <?php
}
else
{

      ?>
      <script>
           alert('error while uploading file');
          // window.location.href='intern_registration.php?fail';
         </script>
    <?php
}

?>

