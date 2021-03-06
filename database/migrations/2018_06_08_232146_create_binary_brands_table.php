<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinaryBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binary_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand_name')->unique();
            $table->string('slug')->unique();
            $table->string('from_name')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('from_email')->nullable();
            $table->string('reply_to')->nullable();
            $table->string('query_string')->nullable();
            $table->string('allowed_files')->nullable();
            $table->string('brand_logo')->nullable();
            $table->text('settings')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('binary_brands');
    }
}
