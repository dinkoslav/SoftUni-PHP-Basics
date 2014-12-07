<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="get">
    <textarea name="text" cols="100" rows="20">Ttile%25Mr.+a.%3B26-03-1981-elements+of+a+document+or+visual+presentation.+Replacing+meaningful+content+that+could+be+distracting+with+placeholder+text+may+allow+viewers+to+focus+on+graphic+aspects+such+as+font%2C+typography%2C+and+page+layout..%0D%0ATtirle%25Mr.+a.%3B26-12-1991-elements+of+a+document+or+visual+presentation.+Replacing+meaningful+content+that+could+be+distracting+with+placeholder+text+may+allow+viewers+to+focus+on+graphic+aspects+such+as+font%2C+typography%2C+and+page+layout..%0D%0ATtsile%25Mr.+a.%3B26-NO-1983-elements+of+a+document+or+visual+presentation.+Replacing+meaningful+content+that+could+be+distracting+with+placeholder+text+may+allow+viewers+to+focus+on+graphic+aspects+such+as+font%2C+typography%2C+and+page+layout..%0D%0Aztile%25...%3B26-03-1988-+e%2F*mails</textarea><br>
    <input type="submit" value="Submit">
</form>

<?php
    date_default_timezone_set('Europe/Sofia');
    $text = $_GET['text'];
    $matcher = '/^\s*([\w\s\-]+)\s*\%\s*([\w\s\.\-]+)\s*;\s*([\d]{2}\-[\d]{2}\-[\d]{4})\s*-\s*(.{0,100})/';
    $textRows = preg_split("/\n/", $text, -1, PREG_SPLIT_NO_EMPTY);
    for($i=0; $i < count($textRows); $i++){
        $check = preg_match_all($matcher,$textRows[$i], $row);
        if($check){
            $article = substr(trim($row[4][0]), 0, 100).'...';
            $data[] = array('article'=>trim($row[1][0]), 'author' => trim($row[2][0]), 'date' => trim($row[3][0]), 'text' => $article );
        }
    }
    foreach ($data as $key => $value) {
        echo '<div>'."\n";
        echo '<b>Topic:</b> <span>'.htmlspecialchars($value["article"]).'</span>'."\n";
        echo '<b>Author:</b> <span>'.htmlspecialchars($value["author"]).'</span>'."\n";
        echo '<b>When:</b> <span>'.date("F",strtotime($value["date"])).'</span>'."\n";
        echo '<b>Summary:</b> <span>'.htmlspecialchars($value["text"]).'</span>'."\n";
        echo '</div>'."\n";
    }
?>
</body>
</html>