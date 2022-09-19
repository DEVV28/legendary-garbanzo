<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
<<<<<<< HEAD
    
    if (isset($_POST['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];
            echo "Thanks for you selection ". $username. "<br />";
    } else {
        echo "invalid input, please enter your username". "<br />";
    }


    if (isset($_POST['dish']) && !empty($_POST['dish'])){
        $dish=$_POST['dish'];
            echo "You really enjoyed your ". $dish. "<br />";
    } else {
        echo "invalid input, please enter your favorite dish". "<br />";
    }


    if (isset($_POST['color']) && !empty($_POST['color'])){
        $color=$_POST['color'];
            echo "Especially with a nice ". $color. "\n". "wine";
    } else {
        echo "invalid input, please select your favorite color". "<br />";
    }
            
        
=======
<<<<<<< HEADING
       
        if(isset($_POST['Hunter'])){
            $hunter = $_POST['hunter'];
             $W = $_POST['Weapons']; 
            
            $Selections = empty($Hunter);
            $class = empty($b);

        /////
             if ($selections != 1){ 
                 
              if(isset($_POST['color']) & $class != 1){
                        $elmt = $_POST['color'];              
         echo "Good choice!, A Fine Weapon of your Class, Very well I hope it serve you well! "
             .$user. "<br>hmm, Interesting!! ". 
             $b . " <br>- With an Elemantal Enchancement it will be formidable" . 
             $a . " with this you are Unstoppable!";

                }else {echo "Ah!, A Bow and arrow favored by the skilled, few!."; }

                }else {echo "What is your Name,Hunter."; }

          }
>>>>>>> 6e8e213141af9972a281a20084f6e3e68b024a71
    ?>
    ////////////
        if(isset($_POST['Hunter'])){
        echo $_POST['Hunter'];
        }
        if(isset($_POST['color'])){
        if (isset($_POST['color'=='Fire'])){      
            }
        }


        ?>

>>>>>>> 
</body>
</html>
