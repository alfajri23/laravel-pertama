<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Grammars\ChangeColumn;

class AddNullableToPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('profil_id')->nullable()->change();
            $table->date('tanggal_diperbarui')->nullable()->change();
            $table->unsignedBigInteger('jawaban_tepat_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            //
        });
    }
}
