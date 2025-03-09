<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('add_new_employees', function (Blueprint $table) {
            $table->id();
            $table->string('employeeId')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('middleName');
            $table->string('IdNumber');
            $table->string('picture');
            $table->date('dateOfBirth');
            $table->string('gender')->check("gender IN ('M', 'F', 'male', 'female')");
            $table->string('department');
            $table->string('function');
            $table->integer('dependant');
            $table->string('phone');

            $table->string('title');
            $table->string('relationship');
            $table->string('name');
            $table->string('adress');
            $table->string('phoneEmercency');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_new_employees');
    }
};
