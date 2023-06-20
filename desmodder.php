<!DOCTYPE html>
<html lang="en">
<?php include "./common/header.php" ?>

<script src="https://www.desmos.com/api/v1.8/calculator.js?apiKey=dcb31709b452b1cf9dc26972add0fda6"></script>


<body>
  <main>
    <h1>WIP</h1>
    <h3>Using Desmodder Preview Builds in browser</h3>
      
      <body></body>



      <?php include "./common/topnav.php" ?>

      <div id="calculator" class="Desmos"></div>
      <script>
        var elt = document.getElementById('calculator');
        var calculator = Desmos.GraphingCalculator(elt);
      </script>

<script>
      // JavaScript code
      console.log("hi");
    </script>
  </main>


</body>

</html>