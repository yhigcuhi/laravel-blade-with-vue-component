<?php

namespace App\Services;

use App\Models\Players;
use App\Repositories\PlayerRepository;
use Illuminate\Support\Collection;

/**
 * 選手 サービス
 */
class PlayerService
{
    /* 利用リポジトリ */
    private PlayerRepository $repository;

    /**
     * コンストラクタ
     * @param PlayerRepository $repository リポジトリ
     */
    public function __construct(PlayerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * 一覧 検索
     * @return Collection<Players> 検索結果
     */
    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }
}
