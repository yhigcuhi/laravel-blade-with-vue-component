<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlayerRequest;
use App\Services\PlayerService;
use Illuminate\Http\JsonResponse;
use Illuminate\View\Factory;
use Illuminate\View\View;

/**
 * 選手一覧
 */
class PlayersController
{
    /* 利用サービス */
    private PlayerService $service;

    /**
     * コンストラクタ
     * @param PlayerService $service サービス
     */
    public function __construct(PlayerService $service)
    {
        $this->service = $service;
    }

    /**
     * 一覧画面 描画
     * メソッド命名規約 ref:https://qol-kk.com/wp2/blog/2018/10/31/post-887/
     * @return Factory|View 一覧画面
     */
    public function index(): Factory|View
    {
        // 選手一覧取得
        return view('pages.players', [
            'players' => $this->service->findAll(),
        ]);
    }

    /**
     * 登録
     * @param CreatePlayerRequest $request リクエスト
     * @return JsonResponse レスポンス
     */
    public function store(CreatePlayerRequest $request): JsonResponse
    {
        // バリデーションチェック実行
        $input = $request->validated();
        // 新規登録実行
        return response()->json($this->service->create($input));
    }
}
