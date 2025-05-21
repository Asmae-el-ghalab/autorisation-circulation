<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('street_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('request_number')->unique();
            $table->text('selected_streets');
            $table->string('status')->default('pending'); // pending, approved, rejected
            $table->dateTime('admin_scheduled_date')->nullable();
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });

        Schema::create('rabat_streets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('district');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('street_requests');
        Schema::dropIfExists('rabat_streets');
    }
}; 