<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

use Symfony\Component\CssSelector\CssSelectorConverter;

require 'vendor/autoload.php';

$d=new DOMDocument();
$d->loadHTMLFile('tpb.html');

$converter=new CssSelectorConverter;
$q=$converter->toXPath('.detName');

$xpath=new DOMXpath($d);
//var_dump($xpath);

$detname=$xpath->query($q);


//var_dump($detname->item(1)->nextSibling->nextSibling->getAttribute('href'));

$a=[];
$i=0;
foreach($detname as $v){
	//var_dump($v);
	$a[$i++]['name']=$v->nodeValue;
}
var_dump($a);
