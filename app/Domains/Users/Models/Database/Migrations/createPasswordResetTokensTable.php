<?php

namespace App\Domains\Users\Models\Database\Migrations;

use App\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasswordResetTokensTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $this->schema->create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->schema->dropIfExists('password_reset_tokens');
    }
};
