<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('id_group')->nullable();
            $table->foreign('id_group')->references('id_group')->on('m_group');     
            $table->string('no_kta')->nullable();
            $table->string('username')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('no_telpon')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('activation_code')->nullable();
            $table->string('type_user')->nullable();
            $table->string('active')->nullable();
            $table->text('alamat_perusahaan')->nullable();
            $table->string('forgotten_password_code')->nullable();
            $table->timestamp('forgotten_password_time')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('update_by')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
