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
        Schema::create('bullet_train_routes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false)->comment('走行ルート名');
            $table->foreignId('station_id')->nullable(false)->comment('駅ID');
            $table->foreignId('route_code_id')->nullable(false)->comment('走行ルートコードID');
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
        Schema::dropIfExists('bullet_train_routes');
    }
};
