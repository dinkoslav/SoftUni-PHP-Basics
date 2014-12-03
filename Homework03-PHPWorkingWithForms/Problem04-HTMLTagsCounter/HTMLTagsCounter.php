<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="get">
    Enter HTML Tags:<br>
    <input type="text" name="input">
    <input type="submit">
</form>
<?php
session_start();
$htmlTags = array('html', 'head', 'title', 'base', 'link', 'meta', 'style',
    'script', 'noscript', 'template', 'body', 'section', 'nav',
    'article', 'aside', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
    'header', 'footer', 'address', 'main', 'p', 'hr', 'pre',
    'blockquote', 'ol', 'ul', 'li', 'dl', 'dt', 'figure',
    'figcaption', 'div', 'a', 'em', 'strong', 'small', 's',
    'cite', 'q', 'dfn', 'abbr', 'data', 'time', 'code', 'var',
    'samp', 'kbd', 'sub', 'sup', 'i', 'b', 'u', 'mark', 'ruby',
    'rt', 'rp', 'bdi', 'bdo', 'span', 'br', 'wbr', 'ins', 'del',
    'img', 'iframe', 'embed', 'object', 'param', 'video', 'audio',
    'source', 'track', 'canvas', 'map', 'area', 'svg', 'math',
    'table', 'caption', 'colgroup', 'col', 'tbody', 'thead',
    'tfoot', 'tr', 'td', 'th', 'form', 'fieldset', 'legend',
    'label', 'input', 'button', 'select', 'datalist', 'optgroup',
    'option', 'textarea', 'keygen', 'output', 'progress',
    'meter', 'details', 'summary', 'menuitem', 'menu');
if(isset($_GET['input'])){
    if (!isset($_SESSION['count'])){
        $_SESSION['count'] = 0;
    }
    if(in_array($_GET['input'], $htmlTags)){
        $_SESSION['count']++;
        $count = $_SESSION['count'];
        echo "<p><strong>Valid HTML Tag!</strong></p>";
        echo "<p><strong>Score: $count</strong></p>";
    }
    else{
        $count = $_SESSION['count'];
        echo "<p><strong>Invalid HTML Tag!</strong></p>";
        echo "<p><strong>Score: $count</strong></p>";
    }
}
?>
</body>
</html>