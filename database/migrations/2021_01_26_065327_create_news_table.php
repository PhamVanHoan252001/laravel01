<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('news_type_id');
            $table->foreign('news_type_id')
            ->references('id')
            ->on('news_type')
            ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->longText('tieu_de');
            $table->longText('tom_tat');
            $table->longText('noi_dung');
            $table->longText('url_img');
            $table->integer('so_lan_xem')->nullable();
            $table->integer('tin_noi_bat')->nullable();
            $table->integer('so_luot_like')->nullable();
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
        Schema::dropIfExists('news');
    }
}
