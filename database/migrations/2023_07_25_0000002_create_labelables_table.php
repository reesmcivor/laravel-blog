<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('labelables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('label_id');
            $table->unsignedBigInteger('labelable_id');
            $table->string('labelable_type');
            $table->timestamps();
            $table->index(['labelable_id', 'labelable_type']);
        });
    }
    public function down()
    {
        Schema::dropIfExists('labelables');
    }
};
