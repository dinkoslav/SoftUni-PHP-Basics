<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="get">
    <textarea name="text" cols="100" rows="20">song5 | Pop | Pudio, Koro, asd, Nakov, Joro, Pesho, Penio | 12850 | 1.8
song2 | Jazz | Pencho, Nakov, Joro | 7728 | 1.3
song6 | Rock | Jero, Tosho, Joro | 19310 | 5.4
song4 | Rap | Joro | 10299 | 0.1
song3 | RnB | MC, Kilata Maika | 12485 | 3.2
song0 | RnB | joro | 2073 | 4.0
song11 | Pop | Pudio, Koro, asd, Nakov, Joro, Pesho, Penio | 1250 | 4.8
song55 | Jazz | Pencho, Nakov, Joro | 7268 | 1.3
song66 | Rock | Jero, Tosho, Joro | 19530 | 5.4
song44 | Rap | Joro | 10429 | 1.1
songsad | RnB | MC| 124353 | 3.2
songgg | RnB | joro | 2023 | 2.0
song12 | Pop | Pudio, Koro, asd, Nakov, Joro, Pesho, Penio | 12250 | 3.8
songzz | MC| Pencho, Nakov, Joro | 7128 | 1.3
song13 | Rock | Jero, MC, Joro | 19230 | 5.4
song122 | Rap | Joro | 1029 | 4.1
song100 | RnB | Joro | 12453 | 3.2
song99 | RnB | joro | 203 | 4.0
song100 | Classical | Nakov | 0 | 0.0
4i4ka mi | Rap| Nakov, MC, Kilata maika | 1 | 4.0
pra6ka mi | Jazz | Nakov, Jorkata, Kilata maika | 1 | 5.0
ga6ta mi | Jazz | Nakov, Jorkata, Kilata maika | 1 | 5.0
bajaka mi | Jazz | Nakov, Jorkata, Kilata maika | 1 | 4.0
vodata mi | Rap| Nakov, Rico | 1 | 3.0
kilata mi | Jazz | Nakov, Jorkata, Kilata maika | 1 | 2.2
cigarata mi | Jazz | Nakov, Jorkata, Kilata maika | 1 | 3.0
parcala mi | Jazz | Nakov, Rico, Kilata maika | 1 | 1.0
1song | Rap | Joro | 10299 | 0.1
2song | RnB | Joro, MC | 12485 | 3.2
3song | RnB | joro | 2073 | 4.2
4song | Pop | MC | 1250 | 3.8
5song | Jazz | Pencho, Nakov, Joro | 22| 2.3
6song | Rock | Jero, Tosho, Joro | 15530 | 1.4
7song | Rap | MC| 11| 1.7
8song | RnB | Joro | 23| 3.5</textarea><br>
    <input type="text" name="artist" value="MC"/><br>
    <input type="text" name="property" value="name"/><br>
    <input type="text" name="order" value="ascending"/><br>
    <input type="submit" value="Submit">
</form>
<?php
$artist = $_GET['artist'];
$property = $_GET['property'];
$secProperty = "name";
$order = $_GET['order'];
$text = $_GET['text'];
$textRows = preg_split("/\n/", $text, -1, PREG_SPLIT_NO_EMPTY);
foreach ($textRows as $row) {
    $elements = explode("|", $row);
    if(strpos($elements[2], $artist) !== false){
        $art = explode(", ", trim($elements[2]));
        asort($art);
        $artStr = implode(", ", $art);
        $data[] = array('name' => trim($elements[0]), 'genre' => trim($elements[1]), 'artists' => $artStr, 'downloads' => trim($elements[3]), 'rating' => trim($elements[4]));
    }
}
if(sizeof($data) != 0){
    foreach ($data as $key => $row) {
        $sortKey[$key]  = $row[$property];
        $secondSortKey[]  = $row[$secProperty];
    }

    if ($order == 'ascending') {
        array_multisort($sortKey, SORT_ASC, $secondSortKey, SORT_ASC, $data);
    } else {
        array_multisort($sortKey, SORT_DESC, $secondSortKey, SORT_ASC, $data);
    }

    echo '<table>'."\n";
    echo '<tr><th>Name</th><th>Genre</th><th>Artists</th><th>Downloads</th><th>Rating</th></tr>'."\n";
    foreach ($data as $key => $value) {
        echo '<tr><td>'.htmlspecialchars($value["name"]).'</td><td>'.htmlspecialchars($value["genre"]).'</td><td>'.htmlspecialchars($value["artists"]).'</td><td>'.intval($value["downloads"]).'</td><td>'.floatval($value["rating"]).'</td></tr>'."\n";
    }
    echo '</table>';
}
else{
    echo '<table>'."\n";
    echo '<tr><th>Name</th><th>Genre</th><th>Artists</th><th>Downloads</th><th>Rating</th></tr>'."\n";
    echo '</table>'."\n";
}
?>
</body>
</html>