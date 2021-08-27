<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('father');
            $table->enum('male', ['Male', 'Female']);
            $table->date('birthday');
            $table->unsignedBigInteger('operator_id');
            $table->integer('number');
            $table->unsignedBigInteger('region_id');
            $table->text('address');
            $table->string('profile_image');
            $table->float('balance')->default(0);
            $table->integer('star')->default(0);
            $table->string('email');
            $table->string('password');
            $table->unsignedBigInteger('reference_id')->nullable();
            $table->rememberToken();
            $table->timestamp('banned_at')->nullable();
            $table->timestamp('email_verify_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
