<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) // где notes, это имя таблицы во множественном числе
        { // "ДЕЛАЕМ" поля таблицы:
            $table->increments('id');       // Поле id (первое поле)
            $table->string('name');         // Поле имен товаров (второе поле)
            $table->unsignedFloat('price'); // Поле цен товаров (третье поле)
            $table->timestamps();                  // Штатное поле для временных меток.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
