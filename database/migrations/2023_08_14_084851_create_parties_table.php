<?php

use App\Models\Party;
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
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('email')->unique()->nullable();
            $table->string('type')->default(Party::RECEIVABLE);
            $table->string('phone_number')->nullable();
            $table->datetime('start_date')->default(now());
            $table->unsignedBigInteger('credit_limit')->default(0);
            $table->unsignedDecimal('opening_balance', 8, 2)->default(0.00);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->boolean('enabled')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parties');
    }
};
