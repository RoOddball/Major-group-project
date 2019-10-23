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

$links = array();
foreach($html->find('div[id]') as $element) {
    $links[] = $element->plaintext;
}

print_r($links);
/*
foreach ($html->find('.uabb-blog-post-section') as $postDiv)
{
    foreach ($postDiv->find( 'a') as $a)
    {
        echo $a->attr['href']. "<br>";

    }
}*/
echo array_search(12,$links,true);