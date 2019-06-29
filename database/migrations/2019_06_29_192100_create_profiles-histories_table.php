<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //{
            Schema::create('profiles-histories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name'); // 名前
                $table->string('gender'); // 性別
                $table->string('hobby'); // 趣味
                $table->string('introduction');  // 自己紹介
                $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
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
      Schema::dropIfExists('profiles-histories');
    }
}
