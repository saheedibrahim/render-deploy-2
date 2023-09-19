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
        Schema::create('rendertests', function (Blueprint $table) {
            $table->id();
            $table->string('slack_name');
            $table->string('current_day');
            $table->string('utc_time');
            $table->string('track');
            $table->string('github_file_url');
            $table->string('github_repo_url');
            $table->integer('status_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendertests');
    }
};
