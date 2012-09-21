<?php

class BankAccount {

    protected $balance = 0;

    /**
     * 
     * @return type $balance
     */
    public function getBalance() {
        return $this->balance;
    }

    /**
     * 
     * @param type $balance
     * @throws BankAccountException
     */
    protected function setBalance($balance) {
        if ($balance >= 0) {
            $this->balance = $balance;
        } else {
            throw new BankAccountException("Balance may not be under zero.");
        }
    }

    /**
     * 
     * @param type $balance
     * @return type
     */
    public function depositMoney($balance) {
        $this->setBalance($this->getBalance() + $balance);

        return $this->getBalance();
    }

    /**
     * 
     * @param type $balance
     * @return type
     */
    public function withdrawMoney($balance) {
        $this->setBalance($this->getBalance() - $balance);

        return $this->getBalance();
    }

}

?>
