<?php

class Employee extends Person {
    private $salary;
    private $hireDate;

    public function __construct($name, $surname, $birthdate, $birthplace, $fiscalcode, $salary, $hireDate) {
        parent::__construct($name, $surname, $birthdate, $birthplace, $fiscalcode);
        $this->setSalary($salary);
        $this->setHireDate($hireDate);
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getHireDate() {
        return $this->hireDate;
    }

    public function setHireDate($hireDate) {
        $this->hireDate = $hireDate;
    }

    public function getAnnualSalary() {
        return $this->salary->getAnnual();
    }

    public function getHtml() {
        $html = parent::getHtml();
        $html .= '<p>Salary: ' . $this->salary->getAnnual() . '</p>';
        $html .= '<p>Hire Date: ' . $this->hireDate . '</p>';
        return $html;
    }
}
