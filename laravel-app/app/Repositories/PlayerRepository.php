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
}
