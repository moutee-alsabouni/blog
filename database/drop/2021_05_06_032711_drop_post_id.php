<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropPostId extends Migration
{
    public function drop()
    {
        Schema::table('tags', function (Blueprint $table) {
        $table->dropColumn('post_id');
    });
}
}
