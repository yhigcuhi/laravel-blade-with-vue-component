<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            // PK
            $table->id();
            // フィールド
            $table->string('last_name')->comment('名前（姓）');
            $table->string('first_name')->comment('名前（名）');
            $table->string('last_name_kana')->comment('ふりがな（姓）');
            $table->string('first_name_kana')->comment('ふりがな（名）');
            $table->string('belong_team_cd')->comment('所属チームコード'); // FK
            $table->enum('gender', ['MEN', 'WOMEN'])->comment('性別');
            // created_at, updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
