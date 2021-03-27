<?php
require_once 'autoloader.php';

$bankingService = new BankingBusinessService();
$checkingBalance = $bankingService->getCheckingBalance();
$savingsBalance = $bankingService->getSavingsBalance();
?>

<p>the initial <strong>checking</strong> balance is: <?= $checkingBalance ?></p>
<p>the initial <strong>savings</strong> balance is: <?= $savingsBalance ?></p>

<aside>let's transfer 100 to savings</aside>

<?php
$bankingService->transaction(100);
$checkingBalance = $bankingService->getCheckingBalance();
$savingsBalance = $bankingService->getSavingsBalance();
?>

<p>the final <strong>checking</strong> balance is: <?= $checkingBalance ?></p>
<p>the final <strong>savings</strong> balance is: <?= $savingsBalance ?></p>