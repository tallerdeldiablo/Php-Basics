<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> 🐣 Sequence Functions 🐣</title>
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

// the function ten numbers
      function sequenceTenNumbers (){
        for ($i = 0; $i <= 10; $i++) {
          echo " $i ,";
        }
      }

      function sequencepar (){
        for ($i = 0; $i <= 10; $i+=2) {
          echo " $i ,";
        }
      }

     ?>
     <table>
   <tr>
     <th>Result</th>
   </tr>
   <tr>
     <td>
    <!-- opening phph to call the function -->
          <?php  sequenceTenNumbers ();
          echo "<br>";
        sequencepar ();
        sequenceNumber ();
        ?>

    </td>
   </tr>
   <tr>

   </table>




  </body>
</html>
