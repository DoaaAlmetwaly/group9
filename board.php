<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table width="300px">

        <?php 
            for ($raw=1; $raw <= 8 ; $raw++) { 
                # code...

                echo '<tr>';
               
              for ($col=1; $col <= 8 ; $col++) { 
                  # code...

                $result = ($raw + $col)%2;
                
                if($result == 0){
                    echo "<td height= '35px' width = '35px'   bgcolor='#FFFFFF'  ></td>";
                }else{
                    echo "<td height= '35px' width = '35px'   bgcolor='#000000'  ></td>";
                }


              }      

                echo '</tr>';    
            }
            
            ?>

    </table>



</body>
</html>