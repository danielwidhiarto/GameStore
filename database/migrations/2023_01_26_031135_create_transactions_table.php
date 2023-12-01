<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_user_id')->constrained('users', 'id');
            $table->foreignId('transaction_game_id')->constrained('games', 'id');
            $table->integer('qty');
            $table->dateTime('transaction_date_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
