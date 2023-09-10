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
        Schema::create('ingredients', function (Blueprint $table) {
            $table->comment('食材テーブル');
            $table->id()->comment('ID');
            $table->string('name')->comment('食材名');
            $table->foreignId('category_id')->comment('食材カテゴリーID');
            $table->integer('quantity')->comment('食材数量');
            $table->string('unit')->nullable()->comment('食材単位');
            $table->timestamp('created_at')->useCurrent()->nullable()->comment('食材登録日');
            $table->timestamp('updated_at')->useCurrent()->nullable()->comment('食材編集日');
            $table->timestamp('expiration_date')->useCurrent()->nullable()->comment('賞味期限');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
};
