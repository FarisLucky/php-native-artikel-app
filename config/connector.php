<?php 
// Db Connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "lsp_db";

function getConnection($host,$user,$pass,$db)
{
  return mysqli_connect($host,$user,$pass,$db);
}

$conn = getConnection($host,$user,$pass,$db);

// End DB COnnection
// var_dump($conn);