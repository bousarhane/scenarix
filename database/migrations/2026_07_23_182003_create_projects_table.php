<?php

use App\Enums\ProjectStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('title', 200);
            $table->string('slug', 220)->unique();

            $table->string('kind', 50);
            $table->string('status', 50)
                ->default(ProjectStatus::DEVELOPMENT->value);

            $table->string('language', 10)->default('ar');
            $table->text('synopsis')->nullable();

            $table->timestamp('archived_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['user_id', 'status']);
            $table->index(['user_id', 'kind']);
            $table->index('archived_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};