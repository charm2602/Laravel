<?php
// Create database Credentials
$host = 'localhost';  
$dbName = 'DB';       
$uName = 'root';  
$pWord = '';  

try {
    //Connect Database
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $uName, $pWord);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Check Dtabase Connection
    echo "<h1 style ='color: #f25278; font-weight: bold;'>Database Connection Status:</h2>";
    echo "<h3 style = 'color: green;'>Connection is successful!<h1>";
    
    // Select All Employees
    echo "<h1 style ='color: #f25278; font-weight: bold;'>List of Employees</h1>";
    $selectData = "SELECT * FROM emp_tbl";
    $result1 = $pdo->query($selectData);
     echo "<table style = 'width: 700px;
    border-collapse: separate;
    border-spacing: 0 10px;'>
    
    <thead style = 'box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 20px;
    border: none;
    background-color: #ddd;
    letter-spacing: 1px;
    color: #330066;
    font-weight: bold;
    width: 350px;
    height: 15px;
    align-content: center;'>
    <tr>

    <th>ID</th>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Email</th>
    <th>Gender</th>
</tr>    
    </thead>";
    while ($emp = $result1->fetch(PDO::FETCH_ASSOC)) {
        echo "
          <tbody style = ' margin-top: 10px;
          padding: 0 20px;
          background-color: whitesmoke;
          border-spacing: 2px;
          margin-top: 15px;
          color: black;
          border: none;
          align-content: center;'>
          <tr>
          <td>{$emp['id']}. </td>
          <td>{$emp['fName']} </td>
          <td>{$emp['lName']} </td>
          <td>{$emp['email']} </td>
          <td>{$emp['gender']} </td>
          </tr>
       </tbody> 
        ";

    }

    echo "</table>";

    // Select All Male Employees
    echo "<h1 style ='color: #f25278; font-weight: bold;' > List of Male Employees </h1>";
    $selectMale = "SELECT * FROM emp_tbl WHERE gender = 'Male'";
    $result2 = $pdo->query($selectMale);
    echo "<table style = 'width: 700px;
    border-collapse: separate;
    border-spacing: 0 10px;'>
    
    <thead style = 'box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 20px;
    border: none;
    background-color: #ddd;
    letter-spacing: 1px;
    color: #330066;
    font-weight: bold;
    width: 350px;
    height: 15px;
    align-content: center;'>
    <tr>

    <th>ID</th>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Email</th>
    <th>Gender</th>
</tr>    
    </thead>";
    while ($emp = $result2->fetch(PDO::FETCH_ASSOC)) {
        echo "
        <tbody style = ' margin-top: 10px;
        padding: 0 20px;
        background-color: whitesmoke;
        border-spacing: 2px;
        margin-top: 15px;
        color: black;
        border: none;
        align-content: center;'>
        <tr>
        <td>{$emp['id']}. </td>
        <td>{$emp['fName']} </td>
        <td>{$emp['lName']} </td>
        <td>{$emp['email']} </td>
        <td>{$emp['gender']} </td>
        </tr>
     </tbody> 
      ";
    }
    echo "</table>";

    // Select All Female Employees
    echo "<h1 style ='color: #f25278; font-weight: bold;'>List of Female Employees</h1>";
    $selectFemale= "SELECT * FROM emp_tbl WHERE gender = 'Female'";
    $result3 = $pdo->query($selectFemale);
    echo "<table style = 'width: 700px;
    border-collapse: separate;
    border-spacing: 0 10px;'>
    
    <thead style = 'box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 20px;
    border: none;
    background-color: #ddd;
    letter-spacing: 1px;
    color: #330066;
    font-weight: bold;
    width: 350px;
    height: 15px;
    align-content: center;'>
    <tr>

    <th>ID</th>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Email</th>
    <th>Gender</th>
</tr>    
    </thead>";
    while ($emp = $result3->fetch(PDO::FETCH_ASSOC)) {
        echo "
        <tbody style = ' margin-top: 10px;
        padding: 0 20px;
        background-color: whitesmoke;
        border-spacing: 2px;
        margin-top: 15px;
        color: black;
        border: none;
        align-content: center;'>
        <tr>
        <td>{$emp['id']}. </td>
        <td>{$emp['fName']} </td>
        <td>{$emp['lName']} </td>
        <td>{$emp['email']} </td>
        <td>{$emp['gender']} </td>
        </tr>
     </tbody> 
      ";
    }
    echo "</table>";


    // Get Employees With A Last Name Starts With Letter C
    echo "<h1 style ='color: #f25278; font-weight: bold;'>List of Employees with Surname Starting with C</h1>";
    $selectC = "SELECT * FROM emp_tbl WHERE lName LIKE 'C%'";
    $result4 = $pdo->query($selectC);
    echo "<table style = 'width: 700px;
    border-collapse: separate;
    border-spacing: 0 10px;'>
    
    <thead style = 'box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 20px;
    border: none;
    background-color: #ddd;
    letter-spacing: 1px;
    color: #330066;
    font-weight: bold;
    width: 350px;
    height: 15px;
    align-content: center;'>
    <tr>

    <th>ID</th>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Email</th>
    <th>Gender</th>
</tr>    
    </thead>";
    while ($emp= $result4->fetch(PDO::FETCH_ASSOC)) {
        echo "
        <tbody style = ' margin-top: 10px;
        padding: 0 20px;
        background-color: whitesmoke;
        border-spacing: 2px;
        margin-top: 15px;
        color: black;
        border: none;
        align-content: center;'>
        <tr>
        <td>{$emp['id']}. </td>
        <td>{$emp['fName']} </td>
        <td>{$emp['lName']} </td>
        <td>{$emp['email']} </td>
        <td>{$emp['gender']} </td>
        </tr>
     </tbody> 
      ";
    }
    echo "</table>";

    // Count All Employees
   
    $countEmployees = "SELECT COUNT(*) as count FROM emp_tbl";
    $result5 = $pdo->query($countEmployees);
    $row = $result5->fetch(PDO::FETCH_ASSOC);
    echo "<h1 style ='color: #f25278; font-weight: bold;' >Total Number of Employees:</h1> <h2 style ='color: black;'>{$row['count']}</h2>";

    //Catch Error If Database Connection Failed
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>