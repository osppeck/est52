<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });


        Schema::create('persona', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->string('sexo');
            $table->date('fecha_nacimiento');
            $table->timestamps();
        });

            Schema::create('tutor', function (Blueprint $table) {
                $table->id('id');
                $table->BigInteger('telefono_1');
                $table->BigInteger('telefono_2');
                $table->string('correo');
                $table->string('estado');
                $table->string('municipio');
                $table->string('colonia');
                $table->string('calle');
                $table->string('numero');

                $table->unsignedBigInteger("persona_id");
                $table->foreign('persona_id')->references('id')->on('persona');
            });

            
            Schema::create('trabajador', function (Blueprint $table) {
                $table->id('id');
                $table->string('puesto');
                $table->BigInteger('telefono');
                $table->string('correo');
                $table->integer('horas');
                $table->boolean('status');

                $table->unsignedBigInteger("persona_id");
                $table->foreign('persona_id')->references('id')->on('persona');
            });


                Schema::create('docente', function (Blueprint $table) {
                    $table->id('id');

                    $table->unsignedBigInteger("trabajador_id");
                    $table->foreign('trabajador_id')->references('id')->on('trabajador');

                });

                    Schema::create('aula', function (Blueprint $table) {
                        $table->id('id');
                        $table->string('nombre');
                        $table->text('comentarios');

                    });

                    Schema::create('materia', function (Blueprint $table) {
                        $table->id('id');
                        $table->string('nombre');
                        $table->string('programa');

                    });

                    //tabla inicial
                    Schema::create('grupo', function (Blueprint $table) {
                        $table->id('id');
                        $table->string('nombre');
                        $table->string('ciclo');
                        $table->timestamps();
                    });

                Schema::create('clase', function (Blueprint $table) {
                    $table->id('id');
                    $table->time('horaE');
                    $table->time('horaS');

                    $table->unsignedBigInteger("docente_id");
                    $table->foreign('docente_id')->references('id')->on('docente');

                    $table->unsignedBigInteger("materia_id");
                    $table->foreign('materia_id')->references('id')->on('materia');

                    $table->unsignedBigInteger("grupo_id");
                    $table->foreign('grupo_id')->references('id')->on('grupo');

                    $table->unsignedBigInteger("aula_id");
                    $table->foreign('aula_id')->references('id')->on('aula');
                });



        Schema::create('alumno', function (Blueprint $table) {
            $table->id('id');
            $table->string('curp');
            $table->string('status');
            $table->date('fechaInscripcion');
            $table->integer('grado');

            $table->unsignedBigInteger("persona_id");
            $table->foreign('persona_id')->references('id')->on('persona');

            $table->unsignedBigInteger("tutor_id")->nullable();
            $table->foreign('tutor_id')->references('id')->on('tutor');

            $table->unsignedBigInteger("grupo_id")->nullable();
            $table->foreign('grupo_id')->references('id')->on('grupo');

        });

            Schema::create('calificaciones', function (Blueprint $table) {
                $table->id('id');
                $table->integer('periodo');
                $table->boolean('examenR');
                $table->float('calificacion');
                $table->integer('faltas');
                
                $table->unsignedBigInteger("alumno_id");
                $table->foreign('alumno_id')->references('id')->on('alumno');

                $table->unsignedBigInteger("clase_id");
                $table->foreign('clase_id')->references('id')->on('clase');

                $table->timestamps();
            });

            Schema::create('reporte', function (Blueprint $table) {
                $table->id('id');
                $table->integer('puntaje');
                $table->string('asunto');
                $table->text('observaciones');
                $table->date('fecha');
                
                $table->unsignedBigInteger("alumno_id");
                $table->foreign('alumno_id')->references('id')->on('alumno');

                $table->unsignedBigInteger("trabajador_id");
                $table->foreign('trabajador_id')->references('id')->on('trabajador');

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
};
