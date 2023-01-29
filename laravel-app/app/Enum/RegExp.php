<?php
namespace App\Enum;

/**
 * PHP8.1から composer php バージョンあげる必要あり
 * 正規表現
 */
enum RegExp: string
{
    case ONLY_KANJI = '/^\p{Han}+$/u';
    case ONLY_KANA = '/^[ぁ-ゞ]+$/u';
}
