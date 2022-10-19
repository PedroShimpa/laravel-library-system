<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 190);
            $table->string('email', 90);
            $table->string('cpf', 13);
            $table->string('rg', 13);
            $table->string('ddd', 4);
            $table->string('cel', 12);
            $table->date('birth_date');
            $table->string('zipcode', 9);
            $table->string('address', 190);
            $table->string('number', 12)->nullable();;
            $table->string('state', 30);
            $table->string('complement', 20)->nullable();;
            $table->string('district', 80);
            $table->string('country', 60);
            $table->boolean('blocked')->default(0);
            $table->timestamp('blocked_at')->nullable();
            $table->boolean('status')->default(1);
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE clients AUTO_INCREMENT = 5000000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
