<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('access_codes', function (Blueprint $table) {
            $table->string('type')->default('user');
        });
    }

    public function down()
    {
        Schema::table('access_codes', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
