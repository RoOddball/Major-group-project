<?php
/**
 * Created by PhpStorm.
 * User: denas
 * Date: 08/10/2019
 * Time: 22:10
 */


include ('simple_html_dom.php');

//$websiteUrl = "http://www.palmbeachcodeschool.com/news/";


$websiteUrl = "https://www.ufc.com/rankings";
$html = file_get_html($websiteUrl);

$fighters = array();
foreach($html->find('div[id]') as $element) {
    $fighters[] = $element->plaintext;
}

//print_r($links);

$rankings = $fighters[4];
//$stripped = str_replace(' ', '', $rankings);
print_r($rankings);
