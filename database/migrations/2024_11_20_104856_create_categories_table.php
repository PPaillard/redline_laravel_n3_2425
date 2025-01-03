<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->timestamps();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignIdFor(Category::class)
                ->nullable()
                ->constrained()
                ->onUpdate("restrict")
                ->onDelete("SET NULL");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeignIdFor(Category::class);
        });
        Schema::dropIfExists('categories');
    }
};
