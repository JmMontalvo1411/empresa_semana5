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

        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('id'); // Clave primaria autoincrementable
            $table->bigInteger('nPerCodigo')->unsigned(); // Eliminada la propiedad auto_increment
            $table->string('cPerNombres', 50)->nullable();
            $table->string('cPerApellido', 50)->nullable();
            $table->string('cPerDireccion', 100)->nullable();
            $table->date('cPerFecNac');
            $table->integer('nPerEdad');
            $table->decimal('cPerSueldo', 6, 2);
            $table->string('cPerRnd', 50);
            $table->char('cPerEstado', 1)->default('1');
            $table->rememberToken();
            $table->timestamps();
        });

        // Schema::create('persona', function (Blueprint $table) {
        //     $table->bigIncrements('nPerCodigo');
        //     $table->string('cPerNombres', 50)->nullable()->index();
        //     $table->string('cPerApellido', 50)->nullable()->index();
        //     $table->string('cPerDireccion', 100)->nullable();
        //     $table->date('cPerFecNac');
        //     $table->integer('nPerEdad');
        //     $table->decimal('cPerSueldo', 6, 2);
        //     $table->string('cPerRnd', 50);
        //     $table->char('cPerEstado', 1)->default('1');
        //     $table->string('remember_token', 100)->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
