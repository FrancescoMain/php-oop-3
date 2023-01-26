<?php
class Manager extends Person {
    private $dividend;
    private $bonus;

    public function __construct($name, $surname, $birthdate, $birthplace, $fiscalcode, $dividend, $bonus) {
        parent::__construct($name, $surname, $birthdate, $birthplace, $fiscalcode);
        $this->setDividend($dividend);
        $this->setBonus($bonus);
    }

    public function getDividend() {
        return $this->dividend;
    }

    public function setDividend($dividend) {
        $this->dividend = $dividend;
    }

    public function getBonus() {
        return $this->bonus;
    }

    public function setBonus($bonus) {
        $this->bonus = $bonus;
    }

    public function getAnnualIncome() {
        return $this->dividend * 12 + $this->bonus;
    }

    public function getHtml() {
        $html = parent::getHtml();
        $html .= '<p>Dividend: ' . $this->dividend . '</p>';
        $html .= '<p>Bonus: ' . $this->bonus . '</p>';
        $html .= '<p>Annual Income: ' . $this->getAnnualIncome() . '</p>';
        return $html;
    }
}
