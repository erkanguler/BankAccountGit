<?php

class BankAccount {

    protected $balance = 0;

    /**
     * 
     * @return int $balance
     */
    public function getBalance() {
        return $this->balance;
    }

    /**
     * 
     * @param int $balance
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
     * @param int $balance
     * @return int
     */
    public function depositMoney($balance) {
        $this->setBalance($this->getBalance() + $balance);

        return $this->getBalance();
    }

    /**
     * 
     * @param int $balance
     * @return int
     */
    public function withdrawMoney($balance) {
        $this->setBalance($this->getBalance() - $balance);

        return $this->getBalance();
    }

}

?>
