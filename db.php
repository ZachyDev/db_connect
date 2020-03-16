<?php
    require_once('conn.php');
    // $query = "CREATE DATABASE student_record;";
    // if(mysqli_query($conn,$query)){
    //     echo "Database created successfully" . "<br>";
    // }else{
    //     echo "something went wrong while creating table" . "<br>";
    // }
      // create a table in a db
      $query_tb = "CREATE TABLE `student_record`.`stud` ( `id` INT(20) NOT NULL , `Username/Email` VARCHAR(20) NOT NULL , 
      `Gender` VARCHAR(6) NOT NULL , `Path` INT(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
      if(mysqli_query($conn,$query_tb)){
          echo "Created table successfully"."<br>";
      }else{
          echo "Something went wrong!"."<br>";
      }
?>