<?php
/*router gére les inclusions des controllers, 
en modéliasation chaque package représente un controller
Son role est d'intercepter les requetes*/
if(isset($_REQUEST["controller"])){
    //l'utilisateur a cliqué sur un lien du site
    if($_REQUEST["controller"]=="security"){
        require_once(PATH_ROOT."controllers/security.php");
    }elseif($_REQUEST["controller"]=="service"){
        require_once(PATH_ROOT."controllers/bien.php");
    }elseif($_REQUEST["controller"]=="commander"){
        require_once(PATH_ROOT."controllers/commander.php");
    }
}else{
    //le visiteur arrive pour la premiere fois
    require_once PATH_ROOT."views/bien/catalogue.html.php";
}
?>