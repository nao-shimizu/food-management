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
        Schema::create('foods', function (Blueprint $table) {
            $table->comment('レシピテーブル');
            $table->id()->comment('ID');
            $table->string('name')->comment('料理名');
            $table->foreignId('category_id')->comment('料理カテゴリーID');
            $table->text('description')->nullable()->comment('レシピ');
            $table->integer('cook_count')->default(0)->comment('料理回数');
            $table->timestamp('created_at')->useCurrent()->nullable()->comment('レシピ登録日');
            $table->timestamp('updated_at')->useCurrent()->nullable()->comment('レシピ編集日');
            $table->timestamp('cooked_at')->useCurrent()->nullable()->comment('最終調理日');
            $table->softDeletes()->comment('論理削除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
};
