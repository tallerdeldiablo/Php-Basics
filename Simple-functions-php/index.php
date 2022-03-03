<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
         <!-- <h2>  Comments inside html </h2> -->
     <h2>  Simple Functions html </h2>
    <?php
      // echo " <h2>  Commentsinside php</h2>";
    echo " <h3>  Variablbles (php)</h3>";
    //harcoded variable number 1 value of 10
  $number1 = 10;
    echo " <p>  Variable 1 = 10 </p>";

      //harcoded variable number 2 value of 5
  $number2 = 5;
    echo " <p>  Variable 2 = 5 </p>";
//Addition operation
    $sum = $number1+$number2;

//multiplication operation
        $multiplication = $number1*$number2;

//Subtraction operation
    $substraction = $number1-$number2;
// Division operation

  $multiplication = $number1/$number2;
     ?>
     <h3> Math  </h3>
     <table>
       <tr>
          <th>Operation</th>
         <th>Number1</th>
         <th>Number2</th>
         <th>Total</th>
       </tr>
       <tr>  <?php

           echo "
           <td>  Addition</td>
           <td>  $number1</td>
           <td>  $number2</td>
           <td>  $sum</td>";

                ?>

       </tr>
       <tr>
         <?php

            echo "
            <td>  Subs</td>
            <td>  $number1</td>
            <td>  $number2</td>
            <td>  $substraction</td>";

                 ?>
       </tr>
       <tr>
         <?php

            echo "
            <td>  Addition</td>
            <td>  $number1</td>
            <td>  $number2</td>
            <td>  $sum</td>";

                 ?>
       </tr>
       <tr>
         <?php

            echo "
            <td>  Addition</td>
            <td>  $number1</td>
            <td>  $number2</td>
            <td>  $sum</td>";

                 ?>
       </tr>
       <tr>
         <?php

            echo "
            <td>  Addition</td>
            <td>  $number1</td>
            <td>  $number2</td>
            <td>  $sum</td>";

                 ?>
       </tr>
       <tr>
         <?php

            echo "
            <td>  Addition</td>
            <td>  $number1</td>
            <td>  $number2</td>
            <td>  $sum</td>";

                 ?>
       </tr>
     </table>

  </body>
</html>
