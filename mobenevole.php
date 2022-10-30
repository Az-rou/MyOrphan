<?php 
if ( $_SERVER['REQUEST_METHOD'] == "POST") {
    
    echo $_REQUEST['prenom'] . " " . $_REQUEST['nom'] . "<br>";
    echo  $_REQUEST['datenaiss'] . "<br>" ;
    echo  $_REQUEST['adresse'] . "<br>" ;
    echo  $_REQUEST['numtel'] . "<br>" ;
    echo  $_REQUEST['email'] . "<br>" ;
    echo  $_REQUEST['question'] . "<br>" ;
    echo  $_REQUEST['precision'] . "<br>" ;
    echo  $_REQUEST['perspectives'] . "<br>" ;
    echo  $_REQUEST['question2'] . "<br>" ;
   
}

?>