<?php
    //! syntax:- setcookie(name,value,expire,path,domain,secure,httponly);
    //TODO:- path:- if i set like google.com/reads ...then i will be set in this url only
    //TODO:-domain-youtube can only access cookies( security) and also tells whether to set cookie in sub domain or not.
    //TODO:-secre:- http or htttps

    setcookie("fruit","apple",time()+86400,"/");//? now it has been set to my browser we can assess form any where remember that.....reference to learinig first superglobal.php
    setcookie("hello","Prajwol",time()+86400,"/");

    // $test=true;
    // if(isset($test)){
    //     echo "ok";
    // }

    if(isset($_COOKIE["fruit"])){
        echo "cookie set va xa hai";
        echo "<br>";
        echo "current cookie is ". $_COOKIE["hello"] . ".";

    }
?>