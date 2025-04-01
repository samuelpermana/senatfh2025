<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJabatanToBeritasTable extends Migration
{
    public function up()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->string('jabatan')->nullable();
        });
    }

    public function down()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropColumn('jabatan');
        });
    }
}