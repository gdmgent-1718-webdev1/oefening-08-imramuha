<?php 

    function showMyTint(){
        $class = "class='shadow";
        $element = "<div $class";
        $value = "rgba(1, 1, 1, 1)";
        $myDiv;
        for ($i = 0; $i < 250; $i += 5 ){
            $value = "rgba(${i}, ${i}, ${i}, 1)";
            echo $element.$i."'"."style='background-color:".$value."; width: 280px; height: 30px'> </div>"; 
            
            
        }
    }
   
?>

<html>
<head>
 <title>Grey shades</title>

</head>
<body>
 <?php showMyTint(); ?>

</body>
</html>