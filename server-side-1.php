<?php
        $conn = new mysqli("localhost", "root", "", "google");
        $id= $_POST['id'];
        $name = $_POST['name'];
        $salary = $_POST['salary'];
        $position = $_POST['position'];
        if ($conn->query("INSERT INTO employees (id,name, salary, position) VALUES ('$id','$name', '$salary', '$position')")) {
                 echo "Successfully Inserted new Employee";
         } else {
                 echo "Unsuccessful Insertion";
         }
?> 