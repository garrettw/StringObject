<?php

namespace StringObject\Decorator;

use StringObject\AnyString;

class TextString
{
    protected static $asciimap = [
        'a' => ['à', 'á', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'â', 'ấ',
                'ầ', 'ẩ', 'ẫ', 'ậ', 'ā', 'ą', 'å', 'α', 'ά', 'ἀ', 'ἁ', 'ἂ', 'ἃ',
                'ἄ', 'ἅ', 'ἆ', 'ἇ', 'ᾀ', 'ᾁ', 'ᾂ', 'ᾃ', 'ᾄ', 'ᾅ', 'ᾆ', 'ᾇ', 'ὰ',
                'ά', 'ᾰ', 'ᾱ', 'ᾲ', 'ᾳ', 'ᾴ', 'ᾶ', 'ᾷ', 'а', 'أ'],
        'b' => ['б', 'β', 'Ъ', 'Ь', 'ب'],
        'c' => ['ç', 'ć', 'č', 'ĉ', 'ċ'],
        'd' => ['ď', 'ð', 'đ', 'ƌ', 'ȡ', 'ɖ', 'ɗ', 'ᵭ', 'ᶁ', 'ᶑ', 'д', 'δ', 'د', 'ض'],
        'e' => ['é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ', 'ë', 'ē',
                'ę', 'ě', 'ĕ', 'ė', 'ε', 'έ', 'ἐ', 'ἑ', 'ἒ', 'ἓ', 'ἔ', 'ἕ', 'ὲ',
                'έ', 'е', 'ё', 'э', 'є', 'ə'],
        'f' => ['ф', 'φ', 'ف'],
        'g' => ['ĝ', 'ğ', 'ġ', 'ģ', 'г', 'ґ', 'γ', 'ج'],
        'h' => ['ĥ', 'ħ', 'η', 'ή', 'ح', 'ه'],
        'i' => ['í', 'ì', 'ỉ', 'ĩ', 'ị', 'î', 'ï', 'ī', 'ĭ', 'į', 'ı', 'ι', 'ί',
                'ϊ', 'ΐ', 'ἰ', 'ἱ', 'ἲ', 'ἳ', 'ἴ', 'ἵ', 'ἶ', 'ἷ', 'ὶ', 'ί', 'ῐ',
                'ῑ', 'ῒ', 'ΐ', 'ῖ', 'ῗ', 'і', 'ї', 'и'],
        'j' => ['ĵ', 'ј', 'Ј'],
        'k' => ['ķ', 'ĸ', 'к', 'κ', 'Ķ', 'ق', 'ك'],
        'l' => ['ł', 'ľ', 'ĺ', 'ļ', 'ŀ', 'л', 'λ', 'ل'],
        'm' => ['м', 'μ', 'م'],
        'n' => ['ñ', 'ń', 'ň', 'ņ', 'ŉ', 'ŋ', 'ν', 'н', 'ن'],
        'o' => ['ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ',
                'ờ', 'ở', 'ỡ', 'ợ', 'ø', 'ō', 'ő', 'ŏ', 'ο', 'ὀ', 'ὁ', 'ὂ', 'ὃ',
                'ὄ', 'ὅ', 'ὸ', 'ό', 'о', 'و', 'θ'],
        'p' => ['п', 'π'],
        'r' => ['ŕ', 'ř', 'ŗ', 'р', 'ρ', 'ر'],
        's' => ['ś', 'š', 'ş', 'с', 'σ', 'ș', 'ς', 'س', 'ص'],
        't' => ['ť', 'ţ', 'т', 'τ', 'ț', 'ت', 'ط'],
        'u' => ['ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự', 'û', 'ū',
                'ů', 'ű', 'ŭ', 'ų', 'µ', 'у'],
        'v' => ['в'],
        'w' => ['ŵ', 'ω', 'ώ'],
        'x' => ['χ'],
        'y' => ['ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ', 'ÿ', 'ŷ', 'й', 'ы', 'υ', 'ϋ', 'ύ', 'ΰ', 'ي'],
        'z' => ['ź', 'ž', 'ż', 'з', 'ζ', 'ز'],
        'aa' => ['ع'],
        'ae' => ['ä', 'æ'],
        'ch' => ['ч'],
        'dj' => ['ђ', 'đ'],
        'dz' => ['џ'],
        'gh' => ['غ'],
        'kh' => ['х', 'خ'],
        'lj' => ['љ'],
        'nj' => ['њ'],
        'oe' => ['ö', 'œ'],
        'ps' => ['ψ'],
        'sh' => ['ш'],
        'shch' => ['щ'],
        'ss' => ['ß'],
        'th' => ['þ', 'ث', 'ذ', 'ظ'],
        'ts' => ['ц'],
        'ue' => ['ü'],
        'ya' => ['я'],
        'yu' => ['ю'],
        'zh' => ['ж'],
        '(c)' => ['©'],
        'A' => ['Á', 'À', 'Ả', 'Ã', 'Ạ', 'Ă', 'Ắ', 'Ằ', 'Ẳ', 'Ẵ', 'Ặ', 'Â', 'Ấ',
                'Ầ', 'Ẩ', 'Ẫ', 'Ậ', 'Å', 'Ā', 'Ą', 'Α', 'Ά', 'Ἀ', 'Ἁ', 'Ἂ', 'Ἃ',
                'Ἄ', 'Ἅ', 'Ἆ', 'Ἇ', 'ᾈ', 'ᾉ', 'ᾊ', 'ᾋ', 'ᾌ', 'ᾍ', 'ᾎ', 'ᾏ', 'Ᾰ',
                'Ᾱ', 'Ὰ', 'Ά', 'ᾼ', 'А'],
        'B' => ['Б', 'Β'],
        'C' => ['Ç', 'Ć', 'Č', 'Ĉ', 'Ċ'],
        'D' => ['Ď', 'Ð', 'Đ', 'Ɖ', 'Ɗ', 'Ƌ', 'ᴅ', 'ᴆ', 'Д', 'Δ'],
        'E' => ['É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ', 'Ë', 'Ē',
                'Ę', 'Ě', 'Ĕ', 'Ė', 'Ε', 'Έ', 'Ἐ', 'Ἑ', 'Ἒ', 'Ἓ', 'Ἔ', 'Ἕ', 'Έ',
                'Ὲ', 'Е', 'Ё', 'Э', 'Є', 'Ə'],
        'F' => ['Ф', 'Φ'],
        'G' => ['Ğ', 'Ġ', 'Ģ', 'Г', 'Ґ', 'Γ'],
        'H' => ['Η', 'Ή'],
        'I' => ['Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị', 'Î', 'Ï', 'Ī', 'Ĭ', 'Į', 'İ', 'Ι', 'Ί',
                'Ϊ', 'Ἰ', 'Ἱ', 'Ἳ', 'Ἴ', 'Ἵ', 'Ἶ', 'Ἷ', 'Ῐ', 'Ῑ', 'Ὶ', 'Ί', 'И',
                'І', 'Ї'],
        'K' => ['К', 'Κ'],
        'L' => ['Ĺ', 'Ł', 'Л', 'Λ', 'Ļ'],
        'M' => ['М', 'Μ'],
        'N' => ['Ń', 'Ñ', 'Ň', 'Ņ', 'Ŋ', 'Н', 'Ν'],
        'O' => ['Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ', 'Ơ', 'Ớ',
                'Ờ', 'Ở', 'Ỡ', 'Ợ', 'Ø', 'Ō', 'Ő', 'Ŏ', 'Ο', 'Ό', 'Ὀ', 'Ὁ', 'Ὂ',
                'Ὃ', 'Ὄ', 'Ὅ', 'Ὸ', 'Ό', 'О', 'Θ', 'Ө'],
        'P' => ['П', 'Π'],
        'R' => ['Ř', 'Ŕ', 'Р', 'Ρ'],
        'S' => ['Ş', 'Ŝ', 'Ș', 'Š', 'Ś', 'С', 'Σ'],
        'T' => ['Ť', 'Ţ', 'Ŧ', 'Ț', 'Т', 'Τ'],
        'U' => ['Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự', 'Û', 'Ū',
                'Ů', 'Ű', 'Ŭ', 'Ų', 'У'],
        'V' => ['В'],
        'W' => ['Ω', 'Ώ'],
        'X' => ['Χ'],
        'Y' => ['Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ', 'Ÿ', 'Ῠ', 'Ῡ', 'Ὺ', 'Ύ', 'Ы', 'Й', 'Υ', 'Ϋ'],
        'Z' => ['Ź', 'Ž', 'Ż', 'З', 'Ζ'],
        'AE' => ['Ä', 'Æ'],
        'CH' => ['Ч'],
        'DJ' => ['Ђ'],
        'DZ' => ['Џ'],
        'KH' => ['Х'],
        'LJ' => ['Љ'],
        'NJ' => ['Њ'],
        'OE' => ['Ö'],
        'PS' => ['Ψ'],
        'SH' => ['Ш'],
        'SHCH' => ['Щ'],
        'SS' => ['ẞ'],
        'TH' => ['Þ'],
        'TS' => ['Ц'],
        'UE' => ['Ü'],
        'YA' => ['Я'],
        'YU' => ['Ю'],
        'ZH' => ['Ж'],
        ' ' => ["\xC2\xA0", "\xE2\x80\x80", "\xE2\x80\x81", "\xE2\x80\x82",
                "\xE2\x80\x83", "\xE2\x80\x84", "\xE2\x80\x85", "\xE2\x80\x86",
                "\xE2\x80\x87", "\xE2\x80\x88", "\xE2\x80\x89", "\xE2\x80\x8A",
                "\xE2\x80\xAF", "\xE2\x81\x9F", "\xE3\x80\x80"],
    ];


    protected $anystring;

    public function __construct(AnyString $anystring)
    {
        $this->anystring = $anystring;
    }

    /**
     * @return mixed
     */
    public function __call($name, $args)
    {
        return $this->anystring->$name($args);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->anystring->__toString();
    }


    public function toASCII()
    {
        $str = $this->__toString();
        foreach (self::$asciimap as $key => $value) {
            $str = \str_replace($value, $key, $str);
        }
        return self::duplicate($this->anystring, $str);
    }

    public function toPureASCII()
    {
        $asciiobj = self::toASCII();
        $str = \preg_replace('/[^\x20-\x7E]/u', '', $asciiobj->__toString());
        return self::duplicate($this->anystring, $str);
    }

    /**
     * @param string $str
     */
    protected static function duplicate(AnyString $anystring, $str)
    {
        $classname = \get_class($anystring);
        return new self(new $classname($str));
    }

}
