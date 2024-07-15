<?php
require_once 'utils/autoloader.php';
$dictionary = new TempDicContext();

// ############ CHINESE  & VIETNAME DICTIONARY ADDING TO DB########
$lotteryTypesDictionaries = [
    new ChineseLotteryType(),
    new VietnamLotteryType(),
];

foreach($lotteryTypesDictionaries as $dictionarytype) {
    $dictionary->setDictionary($dictionarytype);
    $managedDictionary = $dictionary->getDictionary(); // Use a different variable
    $managedDictionary->saveToDB();
}
