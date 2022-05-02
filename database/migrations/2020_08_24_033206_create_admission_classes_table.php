<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hindi_name')->nullable();
            $table->string('english_name')->nullable();
            $table->string('description')->nullable();
            $table->boolean('active')->default(True);
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
        Schema::dropIfExists('admission_classes');
    }
}
