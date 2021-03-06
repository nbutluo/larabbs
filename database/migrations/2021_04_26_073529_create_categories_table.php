<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index()->comment('名称');
            $table->string('description')->nullable()->comment('描述');
            $table->string('post_count')->default(0)->comment('描述');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
