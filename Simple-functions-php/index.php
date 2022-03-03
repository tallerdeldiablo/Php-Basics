<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
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

      //harcoded variable number 2 value of 6
  $number2 = 6;
    echo " <p>  Variable 2 = 6 </p>

   &#36;additon = &#36;number1 + &#36;number2;
  <br>

     ";


    // ---OPERATIONS---↓

//Addition operation
    $additon = $number1+$number2;

//multiplication operation
        $multiplication = $number1*$number2;

//Subtraction operation
    $substraction = $number1-$number2;
// Division operation

  $division = $number1/$number2;

  // Division operation

    $modulo = $number1%$number2;


     ?>
     <h3> Math  </h3>
     <table>
       <tr>
          <th>Operation</th>
         <th>Number1</th>
         <th>Number2</th>
         <th> RESULT </th>
       </tr>
       <tr>  <?php

           echo "
           <td>  Addition</td>
           <td>  $number1</td>
           <td>  $number2</td>
           <td>  $additon</td>";

                ?>

       </tr>
       <tr>
         <?php

            echo "
            <td>  Substraction</td>
            <td>  $number1</td>
            <td>  $number2</td>
            <td>  $substraction</td>";

                 ?>
       </tr>
       <tr>
         <?php

            echo "
            <td>  Multiplication</td>
            <td>  $number1</td>
            <td>  $number2</td>
            <td>  $multiplication</td>";

                 ?>
       </tr>
                 <?php
                       echo "
       <tr>



            <td>  Division</td>
            <td>  $number1</td>
            <td>  $number2</td>
            <td>  $division</td>


       </tr>
       <tr>



            <td>  Remainder</td>
            <td>  $number1</td>
            <td>  $number2</td>
            <td>  $modulo</td>


       </tr>


       ";?>

     </table>

  </body>
</html>
