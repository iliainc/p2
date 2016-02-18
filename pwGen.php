<?php

# declare array to hold our list of words
$wordList = [];

# hold the password result that is generated
$passwordResult = "Please specify the Amount of Words below.";

# load words
$words = 'words/words.txt';
$data = file($words);

# build array full of words provided in text file
foreach($data as $word) {
    array_push($wordList, $word);
}

# declare array to hold our list of symbols
$symbolList = [];

# load symbols
$symbols = 'words/symbols.txt';
$data = file($symbols);

# build array full of symbols provided in text file
foreach($data as $symbol) {
    array_push($symbolList, $symbol);
}

# holder to store wordAmount value when it's provided by user
$howManyWords = 0;

# validate input
if(isset($_GET["wordAmount"])) {
    if($_GET["wordAmount"] === "") {
        $passwordResult = "Please specify the Amount of Words below.\n";
    };
    if(!empty($_GET["wordAmount"])) {
        if (ctype_digit($_GET["wordAmount"])) {
            $howManyWords = intval($_GET["wordAmount"]) ."\n";
            $passwordResult = "";
            if ($howManyWords > 10) {
                $passwordResult = "Amount of Words must be 10 or fewer.";
            }
            else {
                # build the password string
                for ($x = 1; $x <= $howManyWords; $x++) {
                    # generate random integers to be used as indices to retrieve array values
                    # there are 45 words in text file
                    $intRandWordIndex = rand(0,44);
                    $pwWord = trim($wordList[$intRandWordIndex]);
                    $passwordResult = $passwordResult . $pwWord;
                    if ($x < $howManyWords) {
                        $passwordResult = $passwordResult . '-';
                    }
                }
                if(isset($_GET["symbol"])) {
                    # generate random integers to be used as indices to retrieve array values
                    # there are 12 symbols in text file
                    $intRandSymbolIndex = rand(0,11);
                    $pwSymbol = trim($symbolList[$intRandSymbolIndex]);
                    $passwordResult = $passwordResult . '-' . $pwSymbol;
                };
                
                if(isset($_GET["number"])) {
                    # generate random number to be used if user requests number in password
                    $intRandNumber = rand(0,9999);
                    $passwordResult = $passwordResult . '-' . strval($intRandNumber);
                };
            }
        } else {
            $passwordResult = "Amount of Words must contain only numbers.\n";
        }
    };
};






?>
