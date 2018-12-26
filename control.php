<?php

    $age = $_GET['age']; //recuperation de l'age saisit par l'utilisateur

    if(!empty($age)){

            if($age < 16){ ?>

                <h3 style = "text-align : center"> <?php echo 'Tu es un enfant';?> </h3> <br>
                
                <?php 
            }else{ ?>

                <h3 style = "text-align : center"> <?php echo "Tu es majeur"; ?> </h3> <br>

            <?php    
            }
            
    }else{

        echo "Le champ réservé est vide !";
        
    }
?>