<?php

namespace App\Models;

use App\Enum\Gender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Players extends Model
{
    use HasFactory;
    // 登録更新できないフィールド
    protected $guarded = ['id'];
    // 登録する際に設定できる項目(カラム)
    protected $fillable = [
        'last_name',
        'first_name',
        'last_name_kana',
        'first_name_kana',
        'belong_team_cd',
        'gender',
    ];
    // Carbon インスタンスとして扱うところ
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    // シリアライズさせないところ
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    // シリアライズに含める リレーション
    protected $with = [
      'team'
    ];
    // 型変換
    protected $casts = [
        'gender' => Gender::class
    ];

    /**
     * 新規登録値へ
     * @param array $input 入力値
     * @return Players 新規登録値
     */
    public static function makeOfCreate(array $input): Players
    {
        // 新規登録値 へ
        $result = new Players($input);
        // 新規登録値固定
        // id = 新規発行
        $result->setAttribute('id', null);
        // タイムスタンプはDBで設定
        $result->setAttribute('created_at', null);
        $result->setAttribute('updated_at', null);
        // 結果返却
        return $result;
    }

    /**
     * @return HasOne 所属チーム
     */
    public function team(): HasOne
    {
        return $this->hasOne(Teams::class, 'team_cd', 'belong_team_cd');
    }
}
