<?php

function GetAllBirthday(){
  $db = openDatabaseConnection();
  $sql = "SELECT * FROM birthdays ORDER BY  month , day , year ASC";
  $query = $db->prepare($sql);
  $query->execute();
  $db = null;
  return $query->fetchAll();
  }

function createBirthday($data){
  $db = openDatabaseConnection();
  $sql = "INSERT INTO birthdays (person, day, month, year) VALUES(:person, :day, :month, :year)";
  $query = $db->prepare($sql);
  $query->bindParam(':person', $data['person']);
  $query->bindParam(':day', $data['day']);
  $query->bindParam(':month', $data['month']);
  $query->bindParam(':year', $data['year']);
  $query->execute();
   $db = null;
 }

 function deleteBirthday($id){
  $db = openDatabaseConnection();
  $sql = "DELETE FROM birthdays WHERE id = :id";
  echo $sql;
  $query = $db->prepare($sql);
  $query->execute(array(
  ':id' => $id));
  $db = null;
  return true;
 }

 function editBirthday($dataSafe){
   $db = openDatabaseConnection();
   $sql = "UPDATE birthdays SET person = :person, day = :day, month = :month, year = :year WHERE id = :id";
   $query = $db->prepare($sql);
   $query->bindParam(':person', $dataSafe['person']);
   $query->bindParam(':day', $dataSafe['day']);
   $query->bindParam(':month', $dataSafe['month']);
   $query->bindParam(':year', $dataSafe['year']);
   $query->bindParam(':id', $dataSafe['id']);
   $query->execute();
 }

 function GetABirthday($id){
   $db = openDatabaseConnection();
   $sql = "SELECT * FROM birthdays WHERE id = :id";
   $query = $db->prepare($sql);
   $query->execute(array(
   ':id' => $id));
   $db = null;
   return $query->fetch();
 }
