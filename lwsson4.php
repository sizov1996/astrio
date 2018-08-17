<?php
$корректная_структура = ['<a>', '<div>', '</div>', '</a>', '<span>', '</span>'];
$некорректная_структура = ['<a>', '<div>', '</a>', '<p>' , '</tr>'];

function validate_html_tags($html_tags) {

$tags = htmlspecialchars(implode("", $html_tags));
$html_doc="<!DOCTYPE html>" . "<html><body>" . $tags . "</body></html>";    
// $html_doc="<!DOCTYPE html>" . $tags . ;    
$dom = new DOMDocument;
$dom->loadHTML($html_doc);
$dom->saveHTML();

if ($dom->validate()) {
    echo "This document is valid!\n";
} else {
    echo "This document is invalid!\n";
}
}
return $tags;   
?>