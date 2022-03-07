<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> 🐣 Functions 🐣</title>
  <!-- style -->
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
     <h2>   🐣 🐤 Functions </h2>
  <?php
    // --CODE--↓

      // echo " <h2>  Commentsinside php</h2>";
    echo " <h3>  Variablbles (php)</h3>";
    //harcoded variable number 1 value of 10
    $hello = "Hello";
      echo " <p>  Variable 1 = $hello</p>";

        //harcoded variable number 2 value of 6
    $world = "World";
      echo " <p>  Variable 2 =   $world </p> ";

// the function
      function sayHelloWorld ($hello, $world){
        // the function will print the phrase with the space between words
          echo "$hello $world";
      }





    $result =0;


     ?>
     <table>

   <tr>
     <th>Result</th>
   </tr>
   <tr>
     <td>
    <!-- opening phph to call the function -->
          <?php  sayHelloWorld ($hello, $world);   ?>
    </td>

   </tr>
   <tr>


   </table>

    <!-- // -↓  Only for HTML preview -↓ -->
     <table>
   <tr>
     <th>CODE</th>
   </tr>
   <tr>
     <td>
         function sayHelloWorld ($hello, $world){<br>
          echo "$hello $world"; <br>
         }<br>

     sayHelloWorld ($hello);<br>

</td>

   </tr>
   <tr>


   </table>






  </body>
</html>
