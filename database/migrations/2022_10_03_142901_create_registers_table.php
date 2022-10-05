<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->timestamp('dob');
            $table->string('phone_number');
            $table->longText('describe_yourself');
            $table->string('gender');
            $table->unsignedBigInteger('user_id');
            $table->string('parent_guardian_contact');
            $table->string('pastor_name_contact');
            $table->string('residency');
            $table->longText('family_info');
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
        Schema::dropIfExists('registers');
    }
}
