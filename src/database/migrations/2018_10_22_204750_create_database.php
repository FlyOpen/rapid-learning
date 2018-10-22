<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('is_super_admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');

            $table->timestamp('created_at')->nullable();
        });

        Schema::create('trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->text('description')->nullable();
            $table->string('file_thumb')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->text('description')->nullable();
            $table->string('file_thumb')->nullable();
            $table->string('file_video')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('users_enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('resource_id');
            $table->string('resource_type');


            $table->index(['resource_id', 'resource_type']);
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('stats_resources_views', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('resource_id');
            $table->string('resource_type');
            $table->dateTime('view_at');

            $table->timestamps();

            $table->index(['resource_id', 'resource_type']);
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('stats_resources_durations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('resource_id');
            $table->string('resource_type');
            $table->unsignedInteger('duration');

            $table->timestamps();

            $table->index(['resource_id', 'resource_type']);
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('stats_users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->dateTime('connected_at');

            $table->timestamps();


            $table->index(['user_id', 'connected_at']);
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats_users');
        Schema::dropIfExists('stats_resources_durations');
        Schema::dropIfExists('stats_resources_views');
        Schema::dropIfExists('users_enrollments');
        Schema::dropIfExists('videos');
        Schema::dropIfExists('trainings');
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_resets');
    }
}
