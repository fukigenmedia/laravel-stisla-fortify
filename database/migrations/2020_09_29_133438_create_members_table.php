<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('member_code')->nullable();
            $table->text('address')->nullable();
            $table->string('institute')->nullable();
            $table->text('bio')->nullable();
            $table->string('sex')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->dateTime('date_of_birth')->nullable();

            $table->boolean('is_paid')->default(0);

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
        Schema::dropIfExists('members');
    }
}
