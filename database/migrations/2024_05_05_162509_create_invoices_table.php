<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('project');
            $table->string('client');
            $table->dateTime('timeIn');
            $table->dateTime('timeOut');
            $table->decimal('hourlyRate', 8, 2);
            $table->string('workingHours');
            $table->decimal('amount', 8, 2);
            $table->string('formattedDateTime');
            $table->string('uniqueCode');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
