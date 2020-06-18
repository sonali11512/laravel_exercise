<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sap_id',18);
            $table->string('hostname',14);
            $table->ipAddress('loopback');
            $table->macAddress('mac_address');
            $table->string('type');   
            // $table->softDeletes();  //add this line
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routers');
        // Schema::table('routers', function (Blueprint $table) {

        //     $table->dropSoftDeletes(); //add this line
        // });
    }
}
