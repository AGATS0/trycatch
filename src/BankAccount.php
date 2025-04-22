<?php

namespace Agats\Trycatch;

class BankAccount
{
    private float $balance;

    public function __construct(float $initialBalance)
    {
        
        try{
            if ($initialBalance<0){throw new Exception('Нельзя ввести отрицательный баланс');}
            $this->balance = $initialBalance;

        } catch (Exception $InvalidAmountException){
            echo $InvalidAmountException->getMessage();
            die();
        }
        
    }
    
    public function getBalance():void
    {
        echo $this->balance;
    } 

    public function deposit($amount):float
    {
        try{
            if ($amount<=0){throw new Exception('Нельзя внести ноль или колличество меньше нуля');}
            $this->balance = $this->balance + $amount;
            return $this->balance;

        } catch (Exception $InvalidAmountException){
            echo $InvalidAmountException->getMessage();
            die();
        }
    }

    public function withdraw($amount):float
    {
        try{
            if ($amount<=0){throw new Exception('Нельзя ввести ноль или колличество больше баланса');}
            $this->balance = $this->balance - $amount;
            return $this->balance;

        } catch (Exception $InsufficientFundsException){
            echo $InsufficientFundsException->getMessage();
            die();
        }
    }
}



