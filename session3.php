<?php 

// function nextChar($char){
// $nextChar = ++$char;

// if(strlen($nextChar) > 1){
//     $nextChar = $nextChar[0];
// }
// echo $nextChar;
// }

// nextChar('x');

//   echo ord('b');

//   echo chr(102);



// $name = "ahmed"; 

// $students = array("root","test Account","x","y");

// $students = ["root","test Account","x","y"];


//  var_dump($students);

// print_r($students);

// echo $students[0];
// echo $students[1];
// echo $students[2];
// echo $students[3];


// foreach ($students as $key => $value) {
//     # code...
//     echo $key.' : '.$value.'<br>';
// }


// echo  count($students);


//  $studentData = ["name" => "root","age" => 20,"gpa" => 3.4];

// //  print_r($studentData);

// // echo $studentData["name"];


// foreach ($studentData as $key => $value) {
//     # code...
//     echo $key.' : '.$value.'<br>';
// }


  
// $students = [

//      ["ahmed",20,3.4],
//      ["x",23],
//      ["y",22,3.4,'class A'],

// ];
 
// echo  $students[0][0];


//   $char = ["c","a","b"];


 //   sort($char);   // asc 
 //   rsort($char);   // desc 
    

//   $students = ["name" => "x" , "class" => "b"];

//    // asort($students);  // value  asc 
//    // arsort($students); // value  desc 

// //    ksort($students);
//       krsort($students);

//    print_r($students);
   
// $GLOBALS[]

// $x = 2;

// function printNumber(){
  
 
//    $result = $GLOBALS['x'] + 1;

//     echo $result;

// }

// printNumber();


// $_SERVER[];

//    ECHO  $_SERVER['PHP_SELF'];
//    ECHO  $_SERVER['SCRIPT_NAME'];
//    ECHO  $_SERVER['SERVER_SOFTWARE'];
//    ECHO  $_SERVER['SERVER_ADDR'];
//    ECHO  $_SERVER['REMOTE_ADDR'];
//    ECHO  $_SERVER['REQUEST_METHOD'];



function Clean($input){

    // $input = trim($input);
    // $input = strip_tags($input);

    // return $input; 

     return   strip_tags(trim($input));

}


# Fetch Data
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // code 

    // $name     =  $_GET['name'];
    // $password =  $_GET['password'];
    // $email    =  $_GET['email'];
  
    // $name     =  $_REQUEST['name'];
    // $password =  $_REQUEST['password'];
    // $email    =  $_REQUEST['email'];


    // echo "Name : ".$name.' Password : '.$password.' Email: '.$email;



    $name     = Clean($_POST['name']);
    $password = Clean($_POST['password']);
    $email    = Clean($_POST['email']);



    //  echo strlen(trim($name));

    // <h1>test</h1> 
    

      // htmlentities()

    // &lt;   h1   &gt;   test &lt; /h1 &gt;

    // echo  htmlspecialchars($name);


    //   echo strip_tags($name);






     $errors = [];

     # Validate Name ... 
     if(empty($name)){
         $errors['Name']  = "Field Required";
     }

     # Validate Email ..... 
     if(empty($email)){
         $errors['Email'] = "Field Required";
     }

    #Validate Password
    if(strlen($password) < 6){
        $errors['Password']  = "Password Length must be >= 6 chs ";
    }


     # Check .... 
     if(count($errors) > 0){
         foreach ($errors as $key => $value) {
             # code...
             echo '* '.$key.' : '.$value.'<br>';
         }
     }else{

        echo 'Valid Data .... ';
     }


}



?>







<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
 
 
  <form  action="<?php echo $_SERVER['PHP_SELF'];?>"   method="post" >

  

  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName"  name="name" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email"   class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword">New Password</label>
    <input type="password"   class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>