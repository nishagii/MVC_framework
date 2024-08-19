<?php

if ($_SERVER['SERVER_NAME'] == 'localhost')
{
    /*database config */
    define('DBNAME','themis');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');

    define('ROOT' , 'http://localhost/MVC/public');

}else{
    /*database config */
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');

    define('ROOT' , 'http://www.mywebsite.com');//for online hosting
}

//true mean show errors
define('DEBUG',true);