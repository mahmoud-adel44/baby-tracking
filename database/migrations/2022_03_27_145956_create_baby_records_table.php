<?php

use App\Models\Baby;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabyRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('baby_records', function (Blueprint $table) {
            $table->id();

            $table->string('description');
            $table->foreignIdFor(Baby::class)->constrained();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('baby_records');
    }
}
