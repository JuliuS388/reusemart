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
        //
        Schema::table("users", function (Blueprint $table) {
            $table->renameColumn('id', 'id_user');
            $table->renameColumn('name','nama');
            $table->string('role');
            $table->removeColumn('email_verified_at');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
