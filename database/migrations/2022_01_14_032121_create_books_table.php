<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Shelfs;
use App\Models\Categories;
class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('book_code')->unique();
            $table->foreignId('shelf_id');
            $table->foreign('shelf_id')->references('id')->on('shelfs');
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('original_number')->nullable();
            $table->integer('current_quantity')->nullable();
            $table->string('author')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('books');
    }
}
