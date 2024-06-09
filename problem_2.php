<?php

// Given a few paragraphs in a file, read the file and count how many words are there. 

$fileName = 'text.txt';
if(file_exists($fileName)){
$str = file_get_contents($fileName);

echo 'there are <b><u>'.str_word_count($str)."</u></b> words in {$fileName} file.";
}
else{
    echo 'Invalid file name or ext.';
}