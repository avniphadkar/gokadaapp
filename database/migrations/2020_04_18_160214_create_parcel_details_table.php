<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_details', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('parcel_id');
			$table->foreign('parcel_id')->references('id')->on('parcel_requests')->onDelete('cascade');
			$table->string('recepient_name');
			$table->string('recepient_phone');
			$table->string('parcel_info')->nullable();
			$table->string('pickup_location');
			$table->string('pickup_latitude');
			$table->string('pickup_longitude');
			$table->string('dropoff_location');
			$table->string('dropoff_latitude');
			$table->string('dropoff_longitude');
			$table->smallInteger('order_status')->default(0)->comment('0=>pending diver, 1=>no drivers found, 2=> driver assigned, 3=>driver arrived at pickup,4=>driver pickup complete,5=>driver dropoff complete');
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
		Schema::table('parcel_details', function (Blueprint $table) {
			$table->dropForeign(['parcel_id']); // drop the foreign key.
			$table->dropColumn('parcel_id'); // drop the column
		});
        Schema::dropIfExists('parcel_details');
    }
}
