<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

namespace Dotcra\Dot;

use Symfony\Component\CssSelector\CssSelectorConverter;

class DOTDocument extends \DOMDocument{
	private $a;
	private $b;
	private $c;


	/**
	 * should return a HTMLCollection
	 */
	public function getElementsByClassName($selector){
		$xpath = new \DOMXpath($this);
		return $xpath->query($this->cssToXPath("." . $selector));
	}

	/**
	 * 
	 */
	public function querySelectorAll($selector){
		$xpath = new \DOMXpath($this);
		return $xpath->query($this->cssToXPath($selector));
	}

	/**
	 * @selecter 
	 */
	public function querySelector($selector){
		$xpath = new \DOMXpath($this);
		return $xpath->query($this->cssToXPath($selector))->item(0);
	}

	public function cssToXPath($selector){
		$converter=new CssSelectorConverter;
		return $converter->toXPath($selector);

	}
}

//$a=new DOTDocument;
//$a->loadHTMLFile('tpb.html');
//var_dump($a->querySelectorAll('.detName')->item(0));
//var_dump($a->querySelectorAll('.detName'));
//var_dump($a->getElementsByClassName('detName'));
