<?php

    $age = $_GET['age']; //recuperation de l'age saisit par l'utilisateur

    if(!empty($age)){

            if($age < 16){ ?>

                <h3 style = "text-align : center"> <?php echo 'Tu es un enfant';?> </h3> <br>
                <a href = "<?php echo $_SERVER['HTTP_REFERER']; ?>"><button type="button"> << Retour </button></a>
				
                <?php 
            }else{ ?>

                <h3 style = "text-align : center"> <?php echo "Tu es majeur"; ?> </h3> <br>
				<a href = "<?php echo $_SERVER['HTTP_REFERER']; ?>"><button type="button"> << Retour </button></a>
            <?php    
            }
            
    }else{

        echo "Le champ réservé est vide !";
        ?>
				<a href = "<?php echo $_SERVER['HTTP_REFERER']; ?>"><button type="button"> << Retour </button></a>
		<?php
    }
?>