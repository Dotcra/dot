<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

namespace Dotcra\Dot;

class DOTNode extends \DOMNode{
	private $firstElementChild;
	private $lastElementChild;
	private $nextElementSibling;
	private $previousElementSibling;
	private $parentElement;
	private $childElementCount;
	private $children;
	function __construct(){
	}

	function __destruct(){
	}

	function getElementsByClassName(){
	}
	function querySelector(){
	}
	function querySelectorAll(){
	}
}
