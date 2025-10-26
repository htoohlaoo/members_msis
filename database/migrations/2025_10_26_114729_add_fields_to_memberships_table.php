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
        Schema::table('memberships', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
            $table->string('brand')->nullable()->after('user_id');
            $table->string('model')->nullable()->after('brand');
            $table->string('country')->nullable()->after('model');
            $table->string('status')->default('active')->after('country');
        });
    }

    public function down(): void
    {
        Schema::table('memberships', function (Blueprint $table) {
            $table->dropColumn(['user_id', 'brand', 'model', 'country', 'status']);
        });
    }
};
