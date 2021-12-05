<?php 

  // used to print message 
    //  echo ("Test Message");   

   #  print ("Test Message");   
   // print ("test message");


    /*
    print ("Test Message");   
    print ("test message");
    */


    //    $name = "ahmed  account";
    //    $age  = 20;
    
    //    $studentsData = ["name" => "ahmed" , "age" => 20 , "grade" => 3.4];

    //    echo $age;
    
   // var_dump($name);

    //    var_dump(true);

      //   echo $NAME;

        // ECHO "test account";



        // $age = 30; 
        
        
        // echo $age; 



        // define("age",30,true);   // case insensitive default = false 

       // echo age;

        // echo constant("AGE");


        // const age = 20;

        // echo age;


//   + 
//   - 
//   / 
//   * 
//   % 
//   ** 



         $num1 = 5;      // int 
         $num2 = 3;    // string 


        // echo  ($num1-$num2);

     // echo   $num1 = $num1 + 3;
   //    echo        $num1 += 3;   // 8 

      


        // var_dump($num1 == $num2);    // true ..... 

        // var_dump($num1 === $num2);       // false 


  //  echo      var_dump($num1 != $num2); // false 
  //  echo      var_dump($num1 !== $num2);   // true 

                //  var_dump ($num1 > $num2);


        //  $num1++;    //  =  $num1 + 1;
        // echo $num1;
        // echo ++$num1;
      
        //    $num1--;     // =  $num1 -1;
        //    echo $num1;

        // echo --$num1;

 /*
        # AND   && 

        cond1      op       cond2     result  
        true       and &&    true      true 
        true        and      false     false 
        false       and      true      false 
        false       and      false     false 


        */

  

       //  var_dump((true && false) && true);



 /*
        # or   ||  

        cond1      op       cond2     result  
        true       or ||    true      true 
        true       or       false     true 
        false      or       true      true 
        false      or       false     false 

 */


 

 
 /*
        # xor   

        cond1      op       cond2     result  
        true       xor       true      false 
        true       xor       false     true 
        false      xor       true      true 
        false      xor       false     false 

 */



  //  !

    //   var_dump(!false);


//    $message = "Welcome";
//    $name    = "Ahmed";

//       echo $message.$name;


    // $status = true ;

    //   if($status == true){
          
    //     echo "test message";
      
    // }



    // $age = 25;

    // if($age >= 10   and  $age <= 20 ){
    //     echo 'age between 10 : 20 ';
    // }elseif($age > 20  && $age <= 30){
    //     echo 'age between 20 : 30';
    // }elseif($age > 30 ){
    //     echo 'age > 30';
    // }else{
    //     echo 'age < 10';
    // }
      
    //  $color = "red";

    // switch ($color) {
    //     case 'blue':
    //         # code...
    //         echo "Your color is Blue";
    //         break;

    //     case 'green': 
    //          echo "Your Color is Green";
    //          break;
        
    //     default:
    //         # code...
    //         echo 'No case Matched With Your color';
    //         break;
    // }


     $age = 5;

    switch ($age) {
        case ($age >= 10   and  $age <= 20 ):
            # code...
            echo 'age between 10 : 20 ';
            break;
        
        case ($age > 20  && $age <= 30 ):
            # code...
            echo 'age between 20 : 30';
            break;

        default:
            # code...
            echo 'No case Matched With Your age';
            break;
        

    }
   


?>

