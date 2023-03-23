<form action="" method="get">
    <label for="word">Upišite riječ</label>
    <input type="text" name="word">
    <input type="submit" value="Pošalji">
</form>

<a href="/">Prikaži riječi</a>
<br><br>

<?php

if (!file_exists('words.json')){
    touch('words.json');
}

$wordsJson = file_get_contents('words.json');
$words = json_decode($wordsJson, true);

if (!empty($_GET['word'])){
    $word = $_GET['word'];

    $numberOfLetters = 0;
    $numberOfVowels = 0;
    $numberOfConsonants = 0;

    // we must install mbstring extension to use this function
    // sudo apt install php-mbstring
    foreach(mb_str_split($word) as $wordChar) {
        if (preg_match('/[aeiou]/i', $wordChar)) {
            $numberOfVowels++;
        } else {
            $numberOfConsonants++;
        }

        $numberOfLetters++;
    }


    $wordToSave = [
        'word' => $word,
        'numberOfLetters' => $numberOfLetters,
        'numberOfVowels' => $numberOfVowels,
        'numberOfConsonants' => $numberOfConsonants,
    ];

    $words[] = $wordToSave;

    file_put_contents('words.json', json_encode($words));
}

?>

<table border="1">
    <tr>
        <th>Riječ</th>
        <th>Broj slova</th>
        <th>Broj suglasnika</th>
        <th>Broj samoglasnika</th>
    </tr>
    <?php
        foreach ($words as $word) {
            echo '<tr>';
            echo '<td>'. $word['word'] . '</td>';
            echo '<td>'. $word['numberOfLetters'] . '</td>';
            echo '<td>'. $word['numberOfVowels'] . '</td>';
            echo '<td>'. $word['numberOfConsonants'] . '</td>';
            echo '</tr>';
        }
    ?>
</table>