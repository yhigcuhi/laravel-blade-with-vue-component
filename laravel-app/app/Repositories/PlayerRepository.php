<?php

namespace App\Repositories;

use App\Models\Players;
use Illuminate\Support\Collection;

/**
 * 選手 リポジトリ
 */
class PlayerRepository
{

    /**
     * 一覧検索
     * @return Collection
     */
    public function findAll(): Collection
    {
        return Players::all();
    }

    /**
     * 新規登録
     * @param Players|array $players 入力値
     * @return Players 結果
     */
    public function create(Players|array $players): Players
    {
        // 型べつ
        if (!($players instanceof Players)) return $this->create(Players::makeOfCreate($players));
        // Players 新規登録
        return $players->create();
    }
}
