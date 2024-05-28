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
        Schema::create('mahasiswa', function(Blueprint $table) {
            $table->increments('idmahasiswa');
            $table->string('nama', 200);
            $table->string('nim', 10);
            $table->string('no_wa', 20) -> nullable();
            $table->timestamp('created_at') -> nullable();
            $table->timestamp('updated_at') -> nullable();
            $table->boolean('status') -> default(true);

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');

    }
};
