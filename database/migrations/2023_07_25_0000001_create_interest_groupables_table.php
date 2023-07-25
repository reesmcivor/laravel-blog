<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('groupables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('groupable_id');
            $table->string('groupable_type');
            $table->timestamps();
            $table->index(['groupable_id', 'groupable_type']);
        });
    }
    public function down()
    {
        Schema::dropIfExists('groupables');
    }
};
