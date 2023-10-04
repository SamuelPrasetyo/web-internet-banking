<?php

// database/migrations/{timestamp}_create_token_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenTable extends Migration
{
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tokens');
    }
};
