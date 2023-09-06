<?php 
// SQL server configuration 
$serverName = "SQLNODE1"; 
$dbUsername = "sa"; 
$dbPassword = "P@ssw0rd123!"; 
$dbName     = "phpcruddb"; 
 
// Create database connection 
try {   
   $conn = new PDO( "sqlsrv:Server=$serverName;Database=$dbName", $dbUsername, $dbPassword);    
   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );   
}   
   
catch( PDOException $e ) {   
   die( "Error connecting to SQL Server: ".$e->getMessage() );    
} 