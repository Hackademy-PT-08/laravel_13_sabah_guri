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
        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('costumer_id')
            ->nullable()->costrained()
            //!si usa nullable perchè 
            // ->onUpdate('cascade')--> questa non serve perchè l'id è univoco oer sempre
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //! fare il drop con l'utilizzo di un array
            $table->dropForeign(['costumer_id']);
        });
    }
};
