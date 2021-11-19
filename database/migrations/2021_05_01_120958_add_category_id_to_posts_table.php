<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToPostsTable extends Migration
{

    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('category_id')->after('content');
        });
    }

    // public function down()
    // {
    //     Schema::table('posts', function (Blueprint $table) {
    //         $table->dropcolumn('category_id');
    //     });
    // }
}
