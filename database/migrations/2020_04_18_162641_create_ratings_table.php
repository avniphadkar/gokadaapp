<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('parcel_id');
			$table->foreign('parcel_id')->references('id')->on('parcel_requests')->onDelete('cascade');
			$table->smallInteger('rating');
			$table->string('comment')->nullable();
			$table->softDeletes();
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
		Schema::table('ratings', function (Blueprint $table) {
			$table->dropForeign(['parcel_id']); // drop the foreign key.
			$table->dropColumn('parcel_id'); // drop the column
		});
        Schema::dropIfExists('ratings');
    }
}
