<?php 
require_once 'models/Salary.php';
require_once 'models/Person.php';
require_once 'db.php';

echo "<h2>SALARY</h2>";
echo $salary1->getHtml();
echo "<br><br>";
echo "<h2>PERSON</h2>";
echo $person1->getHtml();

