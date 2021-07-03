<?php

session_start();
require_once'connector.php';
// Base_url
define('BASE_URL',"http://{$_SERVER['HTTP_HOST']}/ArtikelsApp/");

function set_flash($data, $value = NULL)
{
  if (is_array($data)) {
    foreach ($data as $key => $val) {
      $_SESSION[$key] = $val;
    }

    return;
  }

  $_SESSION[$data] = $value;
}

function selectAll($conn,$tbl,$order = "",$order_by = "",$limit="")
{
  $query = "SELECT * FROM {$tbl}";
  if ($order != "") {
    $query .= " ORDER BY {$order} {$order_by}";
  } 
  if ($limit != "") {
    $query .= " LIMIT {$limit}";
  }
  return mysqli_query($conn,$query);
}

function selectWhere($conn,$tbl,$where,$order = "",$order_by = "",$limit="")
{
  $query = "SELECT * FROM {$tbl}";
  if (is_array($where)) {
    $query .= " WHERE";
    foreach ($where as $key => $value) {
      $query .= " {$key}='{$value}' AND";
    }
    $query = substr($query,0, -3);
  }
  
  if ($order != "") {
    $query .= " ORDER BY {$order} {$order_by}";
  } 
  if ($limit != "") {
    $query .= " LIMIT {$limit}";
  }
  return mysqli_query($conn,$query);
}

function insertData($conn,$tbl,$data)
{
  $query = "INSERT INTO {$tbl} SET";
    foreach ($data as $key => $value) {
      $query .= " {$key}='{$value}',";
    }
    $query = substr($query, 0, -1);
  return mysqli_query($conn,$query);
}

function updateData($conn,$tbl,$data,$where)
{
  $query = "UPDATE {$tbl} SET";
  foreach ($data as $key => $value) {
    $query .= " {$key}='{$value}',";
  }
  $query = substr($query,0,-1);
  if (is_array($where)) {
    $query .= " WHERE";
    foreach ($where as $key => $value) {
      $query .= " {$key}='{$value}' AND";
    }
    $query = substr($query,0,-3);
  }
  return mysqli_query($conn,$query);
}

function deleteItem($conn,$tbl,$where)
{
  $query = "DELETE FROM {$tbl} ";
  if (is_array($where)) {
    $query .= " WHERE";
    foreach ($where as $key => $value) {
      $query .= " {$key}='{$value}' AND";
    }
    $query = substr($query,0,-3);
  }
  return mysqli_query($conn,$query);
}
// End Query builder