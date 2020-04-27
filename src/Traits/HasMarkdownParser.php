<?php

namespace BinaryTorch\Blogged\Traits;

use Illuminate\Support\Str;
use ParsedownExtra;

trait HasMarkdownParser
{
	/**
	 * @param $text
	 * @return null|string|string[]
	 * @throws \Exception
	 */
	public function parse($text)
	{
		//        return (new ParsedownExtra)->text($text);
		$text = (new ParsedownExtra)->text($text);
		if (function_exists('asset_path')) {
			$text = preg_replace_callback(
				"/(<img.+?src=[\"'])(.+?)([\"'].+?>)/",
				function ($m) {
					$s = Str::startsWith($m[2], 'http') ? $m[2] : asset_path($m[2]);
					return $m[1] . $s . $m[3];
				},
				$text
			);
		}
		return $text;
	}
}