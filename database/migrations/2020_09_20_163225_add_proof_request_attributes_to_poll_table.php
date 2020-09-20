<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProofRequestAttributesToPollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('polls', function (Blueprint $table) {
                $table->text('proof_request_re')->nullable()->after('content');
                $table->text('proof_request_pre')->nullable()->after('content');
                $table->text('proof_request_desc')->nullable()->after('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('polls', function (Blueprint $table) {
            $table->dropColumn(['proof_request_re', 'proof_request_pre','proof_request_desc']);
        });
    }
}
