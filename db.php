<?php

$salary1 = new Salary(2000, true, true);
$person1 = new Person('John', 'Doe', '01-01-2000','New York','CF123456');

$employee1 = new Employee("john", "doe", "1990-01-01", "New York", "123456789",$salary1, "2020-01-01");
$manager1 = new Manager("Jane", "Smith", "1985-05-12", "Los Angeles", "987654321", 50000, 10000);