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
        Schema::create('students', function (Blueprint $table) {
            $table->id('id_personal_date');
            //$table->enum ('document_type', ['CC', 'TI','PS','CE','RC]'])->default('CC');
            $table->string ('document_number');
            $table->string('name');
            $table->enum('sex', ['M', 'F','U']);
            $table->enum('marital_status', ['S', 'C','V','D','U']);
            $table->date('date_of_birth');
            $table->string ('residence_address');
            $table->char('stratum',1);
            $table->enum('residence_type', ['URBANA', 'RURAL']);
            $table->float('height',8,2)->nullable()->comment('Altura en metros');
            $table->string('institutional_email');
            $table->string('cell_phone_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
