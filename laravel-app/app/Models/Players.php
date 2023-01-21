<?php

namespace App\Models;

// TODO: 一旦DBなし 今後
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * 選手モデル
 *  TODO: 一旦DBなし 今後
 */
//class Players extends Model
class Players
{
//    use HasFactory;

    public static function all(): Collection
    {
        return collect([
            [
                'id' => 1,
                'last_name' => '園田',
                'first_name' => '賢',
                'last_name_kana' => 'そのだ',
                'first_name_kana' => 'けん',
                'belong_team_cd' => '001', // 所属チームコード外部キー TODO:今後
                'team' => ['id' => 1, 'team_cd' => '001', 'name' => '赤坂ドリブンズ'], // チーム テーブル TODO:今後外部テーブル実装
                'gender' => 'MEN', // 性別(Enum) TODO:今後 定数共有？
            ],
            [
                'id' => 2,
                'last_name' => '村上',
                'first_name' => '淳',
                'last_name_kana' => 'むらかみ',
                'first_name_kana' => 'じゅん',
                'belong_team_cd' => '001', // 所属チームコード外部キー TODO:今後
                'team' => ['id' => 1, 'team_cd' => '001', 'name' => '赤坂ドリブンズ'], // チーム テーブル TODO:今後外部テーブル実装
                'gender' => 'MEN', // 性別(Enum) TODO:今後 定数共有？
            ],
            [
                'id' => 3,
                'last_name' => '鈴木',
                'first_name' => 'たろう',
                'last_name_kana' => 'すずき',
                'first_name_kana' => 'たろう',
                'belong_team_cd' => '001', // 所属チームコード外部キー TODO:今後
                'team' => ['id' => 1, 'team_cd' => '001', 'name' => '赤坂ドリブンズ'], // チーム テーブル TODO:今後外部テーブル実装
                'gender' => 'MEN', // 性別(Enum) TODO:今後 定数共有？
            ],
            [
                'id' => 4,
                'last_name' => '丸山',
                'first_name' => '奏子',
                'last_name_kana' => 'まるやま',
                'first_name_kana' => 'かなこ',
                'belong_team_cd' => '001', // 所属チームコード外部キー TODO:今後
                'team' => ['id' => 1, 'team_cd' => '001', 'name' => '赤坂ドリブンズ'], // チーム テーブル TODO:今後外部テーブル実装
                'gender' => 'WOMEN', // 性別(Enum) TODO:今後 定数共有？
            ],
            [
                'id' => 4,
                'last_name' => '二階堂',
                'first_name' => '亜樹',
                'last_name_kana' => 'にかいどう',
                'first_name_kana' => 'あき',
                'belong_team_cd' => '002', // 所属チームコード外部キー TODO:今後
                'team' => ['id' => 2, 'team_cd' => '002', 'name' => 'EX風林火山'], // チーム テーブル TODO:今後外部テーブル実装
                'gender' => 'WOMEN', // 性別(Enum) TODO:今後 定数共有？
            ],
        ]);
    }
}
