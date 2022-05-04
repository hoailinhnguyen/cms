<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('post_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('bank_id')->nullable();
            $table->string('post_group_id')->nullable();
            $table->string('limit')->nullable();
            $table->string('account_number')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('active_master')->nullable();
            $table->boolean('active_visa')->nullable();
            $table->boolean('active_jcb')->nullable();
            $table->boolean('active_napas')->nullable();
            $table->string('master')->nullable();
            $table->string('visa')->nullable();
            $table->string('jcb')->nullable();
            $table->string('napas')->nullable();
            $table->longText('description')->nullable();

            $table->string('created_by')->nullable()->index();
            $table->string('updated_by')->nullable()->index();
            $table->string('deleted_by')->nullable()->index();
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
        Schema::dropIfExists('posts');
    }
}
