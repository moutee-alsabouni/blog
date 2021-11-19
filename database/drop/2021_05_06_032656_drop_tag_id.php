<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTagId extends Migration
{
    public function drop()
    {
        Schema::table('posts', function (Blueprint $table) {
        $table->dropColumn('tag_id');
    });
}
}
