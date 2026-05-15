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
        Schema::create('campaign_requests', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name');
            $table->string('full_name');
            $table->string('phone', 20);
            $table->string('email')->nullable();
            $table->string('business_type');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('campaign_goal');
            $table->string('estimated_budget');
            $table->string('campaign_duration');
            $table->text('current_channels')->nullable();
            $table->string('website_url')->nullable();
            $table->text('description');
            $table->string('status')->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_requests');
    }
};
