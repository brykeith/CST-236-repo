<?php

require_once 'autoloader.php';

class BankingBusinessService
{
  function getCheckingBalance()
  {

    $db = new Database();
    $conn = $db->getConnection();

    $checkingservice = new CheckAccountDataService($conn);
    $balance = $checkingservice->getBalance();

    $conn->close();
    return $balance;
  }

  function getSavingsBalance()
  {
    $db = new Database();
    $conn = $db->getConnection();

    $savingsService = new SavingsAccountDataService($conn);
    $balance = $savingsService->getBalance();

    $conn->close();
    return $balance;
  }

  function transaction($transfer)
  {
    $db = new Database();
    $conn = $db->getConnection();

    $conn->autocommit(FALSE);
    $conn->begin_transaction();

    $checking = new CheckAccountDataService($conn);
    $savings = new SavingsAccountDataService($conn);

    $checkingBalance = $checking->getBalance();
    $savingsBalance = $savings->getBalance();

    $okchecking = $checking->updateBalance($checkingBalance - $transfer);
    $oksavings = $savings->updateBalance($savingsBalance + $transfer);

    if ($okchecking && $oksavings) {
      $conn->commit();
    } else {
      $conn->rollback();
    }

    $conn->close();
  }
}
