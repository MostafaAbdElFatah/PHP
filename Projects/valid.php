<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name =$_POST["name"];
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed"; 
      }
   }
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email =$_POST["email"];
     if (filter_var($email,FILTER_VALIDATE_EMAIL)!=true) {
          $emailErr = " Sorry The $email E-Mail is Invalid E-Mail ";
      }
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = $_POST["website"];
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment =$_POST["comment"];
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = $_POST["gender"];
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<!DOCTYPE HTML>
<html>
   <head>
      <style> 
      body{background: #ccc;/*margin-top: 0px; */}
      #con{
        background:#ddd;
        width:50%;
        margin:0 auto;
        padding-left: 10px;
        height:600px;
        padding-top:10px;
        list-style:georgian;
      }
      .word{
        width:80px;
        padding-left:5px;
        background:#eee;
        display:inline-block;
        margin-right:3px; 
      }
      .error {color: #FF0000;} 
      </style>
   </head>
   <body>
      <div id="con">
        <h2>PHP Form Validation Example</h2>
        <p><span class="error">* required field.</span></p>
        <form method="post" action="<?= $_SERVER["PHP_SELF"];?>">
           <div class="word">Name:<span class="error">*</span></div> <input type="text" name="name">
           <span class="error"><?= $nameErr;?></span>
           <br><br>
           <div class="word">E-mail:<span class="error">*</span></div> <input type="text" name="email">
           <span class="error"><?= $emailErr;?></span>
           <br><br>
           <div class="word">Website:</div> <input type="text" name="website">
           <span class="error"><?= $websiteErr;?></span>
           <br><br>
           <div id="com" class="word">Comment:</div> <textarea name="comment" rows="5" cols="40"></textarea>
           <br><br>
           <div class="word">Gender:<span class="error">*</span></div>
           <input type="radio" name="gender" value="male">Male
           <input type="radio" name="gender" value="female">Female
           <span class="error"><?= $genderErr;?></span>
           <br><br>
           <input type="submit" name="submit" value="Submit">
           
        </form>
        <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
      ?>
     </div>
      

   </body>
</html>
