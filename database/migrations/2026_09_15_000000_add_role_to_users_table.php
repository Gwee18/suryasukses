<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('co_admin')->after('email');
        });

        // Akun bawaan admin@suryasukses.test dijadikan Head Admin.
        // Head Admin adalah satu-satunya akun yang boleh menghapus akun admin lain.
        DB::table('users')
            ->where('email', 'admin@suryasukses.test')
            ->update(['role' => 'head_admin']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
