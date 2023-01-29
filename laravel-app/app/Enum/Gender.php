<?php
namespace App\Enum;

/**
 * PHP8.1から composer php バージョンあげる必要あり
 * 性別
 */
enum Gender: string
{
    case MEN = 'MEN';
    case WOMEN = 'WOMEN';
}
