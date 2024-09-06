<?php
//! include is important when we have same code we can include it and we don't have to repeat the code example like header and footer in multiple pages.

//! file name galat xa vaney only warning dinx as we can hide warning in production

//? include_once runs only one times ... if file has loaded previously then it will not be loaded again but load different file

include('./superglobal.php');
for($i=0;$i<=10;$i++){
    include_once('./superglobal.php');
}
// echo $globe;

//! require gives fatal error when file galat xa vanay and require_once also run one time and if galat file require vayo vanya fatal error dinxa 
?>