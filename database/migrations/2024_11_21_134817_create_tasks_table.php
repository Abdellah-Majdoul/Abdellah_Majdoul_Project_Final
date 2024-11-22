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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->foreignId("team_id")->nullable()->constrained()->cascadeOnDelete();
            $table->string("name");
            $table->string("description");
            $table->dateTime("start");
            $table->dateTime("end");
            $table->enum('status', ['Pending', 'In_progress', 'Done'])->default('Pending');
            $table->enum("priority",["High","Medium","Low"]);
            // $table->foreignId("assign_to")->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
