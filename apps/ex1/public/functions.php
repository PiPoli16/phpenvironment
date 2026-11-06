<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <?php include_once '../includes/styles.php';?>
</head>
<body>
   <h1>Functions</h1>
    <a href="/">Home</a>
    <?php

        /**
         * 
         * @param int|float $x value 1
         * @param int|float $y value 2
         * @return float|int The sum of the two values
         */
        function add(int| float $x, int|float $y): int|float{
            return $x + $y;

        }

        //subtract
         function subtract(int| float $x, int|float $y): int|float{
            return $x - $y;
         }

        //multiply
         function multiply(int| float $x, int|float $y): int|float{
            return $x * $y;
         }
        //divide
         function divide(int| float $x, int|float $y): int|float{
            return $x / $y;
         }

         //modules
         function modulus(int| float $x, int|float $y): int|float{
            return $x % $y;
         }


     ?>
     <div>
        3 + 4 = <?= add(3,4) ?><br>
        4 - 3 = <?= subtract(4,3) ?><br>
        3 * 4 = <?= multiply(3,4) ?><br>
        12 / 4 = <?= divide(12,4) ?><br>
        12 % 4 = <?= modulus(12,4) ?><br>
     </div>
    
</body>
</html>