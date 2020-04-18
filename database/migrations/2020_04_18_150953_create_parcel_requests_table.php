<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_requests', function (Blueprint $table) {
            $table->id();
			$table->string('parcel_info')->nullable();
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->unsignedBigInteger('driver_id')->nullable();
			$table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
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
		Schema::table('parcel_requests', function (Blueprint $table) {
			$table->dropForeign(['user_id']); // drop the foreign key.
			$table->dropColumn('user_id'); // drop the column
			$table->dropForeign(['driver_id']); // drop the foreign key.
			$table->dropColumn('driver_id'); // drop the column
		});
        Schema::dropIfExists('parcel_requests');		
    }
}
