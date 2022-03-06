<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>if 👶</title>
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
     <h2>   👶 🍼 🥚 🍤  IF STATEMENT </h2>
    <?php
    $result=0;
      // echo " <h2>  Commentsinside php</h2>";
    echo " <h3>  Variablbles (php)</h3>";
    //harcoded variable number 1 value of 10
  $number1 = 10;
    echo " <p>  Variable 1 = 10 </p>";

      //harcoded variable number 2 value of 6
  $number2 = 6;
    echo " <p>  Variable 2 = 6 </p>

  if  &#36;number1 > &#36;number2

      print Number 1 is greater than Number 2

  else

   print Number 1 is not greater than Number 2
  <br>

";
if ($number1>$number2) {
$result = "Number 1 is greater than Number 2";
} else {
  // code... result prinys "Number 1 is not greater than Number 2"
  $result = "Number 1 is not greater than Number 2";
}


echo "
  <table>
<tr>
  <th>Result</th>

</tr>
<tr>
  <td>$result</td>

</tr>
<tr>
  <td> </td>



</table> ";


    // ---OPERATIONS---↓

    $result =0;



     ?>


     <table>
   <tr>
     <th>CODE</th>

   </tr>
   <tr>
     <td> if ($number1>$number2) { <br>
        $result = "Number 1 is greater than Number 2";  <br>
        } else { <br>
          $result = "Number 1 is not greater than Number 2";  <br>
        }
</td>

   </tr>
   <tr>


   </table>






  </body>
</html>
