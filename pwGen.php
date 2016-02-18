<?php

    # declare array to hold our list of words
    $wordList = [];

    # load words
    $words = 'words/words.txt';
    $data = file($words);

    # build array full of words provided in text file
    foreach($data as $word) {
        array_push($wordList, $word);
    }

    # print out array values for debugging
    # print_r($wordList);

    # declare array to hold our list of symbols
    $symbolList = [];

    # load symbols
    $symbols = 'words/symbols.txt';
    $data = file($symbols);

    # build array full of symbols provided in text file
    foreach($data as $symbol) {
        array_push($symbolList, $symbol);
    }

    # print out array values for debugging
    # print_r($symbolList);

    # generate random integers to be used as indices to retrieve array values, corresponding to
    # how many symbols and words there are in the input .txt files
    $intRandWordIndex = rand(0,44);
    $intRandSymbolIndex = rand(0,11);

    # generate random number to be used if user requests number in password
    $intRandNumber = rand(0,9999);

    

?>
