<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->tinyIncrements('id');

            $table->char('name', 15);

            $table->char('description', 200);

            $table->decimal('price', 7,2);

            $table->decimal('hours', 2,0);

            $table->enum('product', ['digital', 'hardcopy']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('packages');
    }
}
