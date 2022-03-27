<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->foreignId('parent_id')->references('id')->on('users');
            $table->foreignId('partner_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
