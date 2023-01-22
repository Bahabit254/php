<?php
   class climate {
    public static $conditions = ['cold', 'mild', 'warm'];

    public static function convertToFarhrenheit($value) {
        return $value * 9 / 5 + 32;
    }

    public static function determineCondition($f) {
        if ($f < 40){
            return self::$conditions[0];
        }else if ($f < 70){
            return self::$conditions[1];
        }else {
            return self::$conditions[2];
        }
    }
   }

   echo climate::determineCondition(50);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP PROGRAMMING</title>
</head>
<body>
    
</body>
</html>