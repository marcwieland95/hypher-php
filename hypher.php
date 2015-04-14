<?php

/**
 * Main Hypher Class
 *
 * @since 1.0
 */
class Hypher
{

	/**
	 * Default settings
	 *
	 * @var ???
	 * @since 1.0
	 */
	public $parent;

	/**
	 * Use options
	 *
	 * @var ???
	 * @since 1.0
	 */
	public $options;

	/**
	 * Text to hyphenate
	 *
	 * @var ???
	 * @since 1.0
	 */
	public $nodeValue;

	/**
	 * Language
	 *
	 * @var string
	 * @since 1.0
	 */
	public $language;

	public function __construct($parent, $options, $nodeValue, $language) {
		$this->parent    = $parent;
		$this->options   = $options;
		$this->nodeValue = $nodeValue;
		$this->language  = $language;

		$this->hyphenateText($nodeValue);
	}

	public function test()
	{
		return $this->nodeValue;
	}

	/*
	public function createTrie(patternObject)
	{
		private $size = 0;
		private $i = 0;
		private $c = 0;
		private $p = 0;
		private $chars = null;
		private $points = null;
		private $codePoint = null;
		private $t = null;
		private $tree = array(
			    "_points" => [],
			);
		private $patterns;
	}
	*/



	public function hyphenateText($str) // minLength
	{
		$words = 'Dokumentation ist schwierig'; //$str;

		$minLength = 4;
		//echo $words;

		// $word_length = mb_strlen($words);

		function mb_split_chars($string) {
			$strlen = mb_strlen($string);
			while($strlen) {
				$array[] = mb_substr($string, 0, 1, 'utf-8');
				$string = mb_substr($string, 1, $strlen, 'utf-8');
				$strlen = mb_strlen($string);
			}
			return $array;
		}


		$text_word = '_' . $words . '_';
		$word_length = mb_strlen($text_word);
		$single_character = mb_split_chars($text_word);
		$text_word = mb_strtolower($text_word);

		echo $text_word;


		for ($i = 0; $i < $word_length; $i += 1) {

			// echo $word_length;
/*
			// Don't insert a zero width space if the slash is at the beginning or end of the text, or right after or before a space.
			if ($words[$i] != ' ') { // not correct

			} elseif ($word_length > $minLength) {

			}
*/


			//echo $i . ' | ';

		}

/*
		for ($i = 0; $i < $words.length; $i += 1) {
            if ($words[$i].indexOf('/') !== -1) {
                // Don't insert a zero width space if the slash is at the beginning or end
                // of the text, or right after or before a space.

                if ($i !== 0 && $i !== $words.length - 1 && !(/\s+\/|\/\s+/.test($words[$i]))) {
                    $words[$i] += '\u200B';
                }

            } else if ($words[$i].length > minLength) {
                // Allow preview for hyphenation
                if(this.options.hypenChar) {
                        $words[$i] = this.hyphenate($words[$i]).join('|');
                } else {
                     $words[$i] = this.hyphenate($words[$i]).join('\u00AD');
                }
            }
        }

        return $words.join('');
*/



	}

}








function hyphenation($text) {
	$hyphenation = new Hypher(null, null, $text, 'haha');
	//echo $hyphenation->test();
}

