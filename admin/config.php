<?php
ini_set( "display_errors", true );
define( "HOST", "localhost" );
//nama database
define( "DATABASE_NAME", "unengexpress" );
define( "DB_USERNAME", "root" );
//password mysql
define( "DB_PASSWORD", "gunadarma" );
//dir admin
define( "DIR_ADMIN", "php-backend-generator/admina/");
//main directory
define( "DIR_MAIN", "php-backend-generator/");


define('DB_CHARACSET', 'utf8');

require_once ('report.php');
require_once ('report1.php');

$db=new Database();
$pg=New My_pagination();
$dtable = new TableData();

function handleException( $exception ) {
  echo  $exception->getMessage();
}

set_exception_handler( 'handleException' );


?>
