<?php
use Agats\Trycatch\BankAccount;
use PHPUnit\Framework\TestCase;

class BankAccountTest extends TestCase
{
    private $bankaccount;

    protected function setUp():void
    {
        $this->bankaccount=new BankAccount(0);
    }

    public function testDeposit()
    {
        $this->assertSame($this->BankAccount->deposit(100),100);
    }

    public function testwithdraw()
    {
        $this->assertSame($this->BankAccount->withdraw(100),0);
    }

}