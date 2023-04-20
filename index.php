<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date en francais PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="index.php" method="GET">
            <label for="date">Entrez une date :   </label>
            <input type="date" name="date" id="date">
            <br>
            <input id="btn-submit" type="submit" value="ENVOYER">
        </form>
    </div>
    <?php
        function date_fr (){                                                    // Créer la fonction
            $date = $_GET['date'];                                              
            $date = (explode("-",$date));
            $date = date("l-d-F-Y",mktime(0,0,0,$date[1],$date[2],$date[0]));
            echo '<br>';
            echo json_encode($date = explode('-',$date));
            echo '<br>';
            $jours = array(
                'Monday'     =>  'Lundi',
                'Tuesday'    =>  'Mardi',
                'Wednesday'  =>  'Mercredi',
                'Thursday'   =>  'Jeudi',
                'Friday'     =>  'Vendredi',
                'Saturday'   =>  'Samedi',
                'Sunday'     =>  'Dimanche',
            );

            $mois = array(          
                'January'   =>  'Janvier',
                'February'  =>  'Février',
                'March'     =>  'Mars',
                'April'     =>  'Avril',
                'May'       =>  'Mai',
                'June'      =>  'Juin',
                'July'      =>  'Juillet',
                'August'    =>  'Août',
                'September' =>  'Septembre',
                'October'   =>  'Octobre',
                'November'  =>  'Novembre',
                'December'  =>  'Décembre',
            );
            $date[0]=$jours[$date[0]];
            $date[1];
            $date[2]=$mois[$date[2]]; 
            $date[3]=$date[3];
            return $date;
        }
        if ($_GET):                             // S'il y a des données à recevoir par $_GET
            if ($_GET["date"]){                 // S'il y a des informations dans $_GET 
                $date_fr = date_fr();           //Mettez dans $date_fr ce qui est retourné par la fonction 
                echo                            //imprimer                      
                    "<h1>"
                    .$date_fr[0]
                    ." , "
                    . $date_fr[1] 
                    . " " 
                    . $date_fr[2] 
                    . " " 
                    .$date_fr[3]
                    ."</h1";  
            }else {
                header ('location: index.php');
            }
        endif; 
        
        
    ?>
</body>
</html>