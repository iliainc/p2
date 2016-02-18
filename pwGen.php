<?php

    # declare array to hold our list of words
    $wordList = [];

    # load words into memory
    $words = 'words.txt';
    $data = file($words);

    # build array full of words provided in text file
    foreach($data as $word) {
        array_push($wordList, $word);
    }

    # print out array values for debugging
    print_r($wordList);

?>
