<!DOCTYPE html> 
<html lang = "en">
 <head>
<meta charset = "UTF-8">
 <meta name = "viewport">

 <title>Lab Exercise 4 - Charm Villegas</title>

</head>
<?php
echo "<center><h1 style = 'color: black; background-color: goldenrod;'>Lab Exercise 4</h1></center><br><br>";

   
class Organization {
    private $company;
    private $year;
    private $typeOfCompany;
    private $location;

    public function __construct($company, $year, $typeOfCompany, $location) {
        $this->company = $company;
        $this->year = $year;
        $this->typeOfCompany = $typeOfCompany;
        $this->location = $location;
    }

    public function getCompany(){
        return $this->company;
    }

    public function setCompany($company){
        $this->company = $company;
    }

    public function getYear(){
        return $this->year;
    }

    public function setyear($year){
        $this->year = $year;
    }

    public function getType(){
        return $this->typeOfCompany;
    }

    public function setType($typeOfCompany){
        $this->typeOfCompany = $typeOfCompany;
    }

    public function getLocation(){
        return $this->location;
    }

    public function setLocation($location){
        $this->location = $location;
    }

    public function printAttributes(){
        
    
        echo
        
        "<center>
        <div style =  'display: flex; padding: 5px 5px 5px 5px;'>
        <table border = '1'cellpadding = '30'>
       
        <tr>
           <td style = 'font-weight: bold; background-color: #ffff9f;'> COMPANY NAME </td>
           <td> {$this->company} </td>
    
        </tr>
         
        <tr>
        <td style = 'font-weight: bold; background-color: #ffff9f;'> YEAR FOUNDED </td>
        <td> {$this->year} </td>
 
        </tr>

        <tr>
        <td style = 'font-weight: bold; background-color: #ffff9f;'> TYPE OF COMPANY </td>
        <td> {$this->typeOfCompany} </td>
 
        </tr>


        <tr>
        <td style = 'font-weight: bold; background-color: #ffff9f;'> LOCATION </td>
        <td> {$this->location} </td>
 
        </tr>
        </div>
        </center> <br><br>";

    }

    public function updatedAttributes(){
        
    
        echo
        
        "<br><br><center>
        <div style = 'display: inline-block;'>
        <table border = '1'cellpadding = '30'>
        <tr>
        <th colspan = '2' style = 'background-color: yellow; color: black; font-weight: bold;'>UPDATED VALUE FOR TESTING</th>
        </tr>
       
        <tr>
           <td style = 'font-weight: bold; background-color: #d7a1f9;'> COMPANY NAME </td>
           <td style = 'color: green; font-weight: bold;'> {$this->company} </td>
    
        </tr>
         
        <tr>
        <td style = 'font-weight: bold; background-color: #d7a1f9;'> YEAR FOUNDED </td>
        <td style = 'color: green; font-weight: bold;'> {$this->year} </td>
 
        </tr>

        <tr>
        <td style = 'font-weight: bold; background-color: #d7a1f9;'> TYPE OF COMPANY </td>
        <td> {$this->typeOfCompany} </td>
 
        </tr>


        <tr>
        <td style = 'font-weight: bold; background-color: #d7a1f9;'> LOCATION </td>
        <td style = 'color: green; font-weight: bold;'> {$this->location} </td>
 
        </tr>
        </div>
        </center>";

    } 

}
$first = new Organization("Charm Clothing Co.", 2002, "Corporation", "Malabon City");
$second= new Organization("Infotech Company", 2017, "Subsidiary", "Boston City");
$third = new Organization("EducKids Inc.", 2019, "Incorporation", "Valenzuela City");

$first->printAttributes();
$second->printAttributes();
$third->printAttributes();
echo "<br><br>";

$first->setCompany("Charm Clothing Line");
$first->setyear(2021);
$first->setLocation("Longos, Malabon City");

echo "<br><br>";


$first->updatedAttributes();

echo "<br><br>";


?>

</html>