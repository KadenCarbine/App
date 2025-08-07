<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('name');
            $table->string('type');
            $table->string('img');
            $table->string('baked_img');
            $table->string('sc_baked_img')->nullable();
            $table->string('short_desc')->nullable();
            $table->string('rarity');
            $table->string('team');
            $table->string('team_short');
            $table->integer('overall');
            $table->string('series');
            $table->string('series_texture');
            $table->integer('series_year');
            $table->string('position');
            $table->boolean('has_augment');
            $table->string('augment_text')->nullable();
            $table->string('augment_end')->nullable();
            $table->boolean('has_matchup');
            $table->string('stars')->nullable();
            $table->string('trend')->nullable();
            $table->integer('new_rank');
            $table->boolean('has_rank_change');
            $table->boolean('event');
            $table->string('set_name');
            $table->boolean('is_live_set');
            $table->integer('ui_anim_index');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
