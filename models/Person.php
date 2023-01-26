<?php

class Person {
    private $name;
    private $surname;
    private $birthdate;
    private $birthplace;
    private $fiscalcode;

    public function __construct($name, $surname, $birthdate, $birthplace, $fiscalcode) {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setBirthdate($birthdate);
        $this->setBirthplace($birthplace);
        $this->setFiscalcode($fiscalcode);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function getBirthdate() {
        return $this->birthdate;
    }

    public function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    public function getBirthplace() {
        return $this->birthplace;
    }

    public function setBirthplace($birthplace) {
        $this->birthplace = $birthplace;
    }

    public function getFiscalcode() {
        return $this->fiscalcode;
    }

    public function setFiscalcode($fiscalcode) {
        $this->fiscalcode = $fiscalcode;
    }

    public function getHtml() {
        $html = '<div class="person">';
        $html .= '<p>Name: ' . $this->name . '</p>';
        $html .= '<p>Surname: ' . $this->surname . '</p>';
        $html .= '<p>Birthdate: ' . $this->birthdate . '</p>';
        $html .= '<p>Birthplace: ' . $this->birthplace . '</p>';
        $html .= '<p>Fiscal code: ' . $this->fiscalcode . '</p>';
        $html .= '</div>';
        return $html;
    }
}
