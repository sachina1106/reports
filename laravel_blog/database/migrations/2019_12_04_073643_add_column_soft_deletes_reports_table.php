<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSoftDeletesReportsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
}