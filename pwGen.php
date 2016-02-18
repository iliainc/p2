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

# generate random integers to be used as indices to retrieve array values, corresponding to
# how many symbols and words there are in the input .txt files
$intRandWordIndex = rand(0,44);
$intRandSymbolIndex = rand(0,11);
# generate random number to be used if user requests number in password
$intRandNumber = rand(0,9999);

# validate input
if(isset($_GET["wordAmount"])) {
    if($_GET["wordAmount"] === "") {
        $passwordResult = "Please specify the Amount of Words below.\n";
    };
    if(!empty($_GET["wordAmount"])) {
        if (ctype_digit($_GET["wordAmount"])) {
            $passwordResult = intval($_GET["wordAmount"]) ."\n";
        } else {
            $passwordResult = "Amount of Words must only contain numbers.\n";
        }
    };
};

if(isset($_GET["symbol"])) echo "symbol is set\n";

if(isset($_GET["number"])) echo "number is set\n";




?>
