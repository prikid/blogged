<?php

namespace BinaryTorch\Blogged\Traits;

//use ParsedownExtra;

use Michelf\MarkdownExtra;

trait HasMarkdownParser
{
	/**
	 * @param $text
	 * @return null|string|string[]
	 * @throws \Exception
	 */
	public function parse($text)
	{
//		return (new ParsedownExtra)->text($text);
		return MarkdownExtra::defaultTransform($text);
	}
}