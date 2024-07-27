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
        Schema::table('users', function (Blueprint $table) {
            $table->string('address', 255)->after('name')->nullable();
            $table->string('position', 255)->after('address')->nullable();
            $table->string('devision', 255)->after('position')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['address', 'position', 'devision']);
        });
    }
};

// $ php artisan migrate
// $ php artisan migrate:rollback --step=
// $ php artisan migrate:status