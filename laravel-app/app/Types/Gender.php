<?php

namespace App\Types;

use http\Exception\InvalidArgumentException;

/**
 * 性別表現 value object
 */
class Gender
{
    /** @var string 定数 */
    const MEN = 'MEN'; // 男性
    const WOMEN = 'WOMEN'; // 女性

    /** @var string 値 */
    private string $value;

    /**
     * コンストラクタ
     * @param string $value
     */
    public function __construct(string $value)
    {
        if (!in_array($value, [self::MEN, self::WOMEN])) throw new InvalidArgumentException("value is not 'MEN' or 'WOMEN'");
        $this->value = $value;
    }

    /**
     * 文字列 => 値生成
     * @param string $value 生成値
     * @return Gender 性別
     */
    public static function of(string $value) { return new Gender($value); }

    /**
     * @return string 文字列値
     */
    public function __toString(): string { return $this->value; }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

}
