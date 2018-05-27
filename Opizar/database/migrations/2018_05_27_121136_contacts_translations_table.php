<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('contacts_translation'))
        {
             Schema::create('contacts_translation', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('contact_id')->unsigned();
                $table->string('locale',10)->index();

                $table->string('ltd_name');
                $table->string('address');
                $table->string('country');

                $table->unique(['contact_id','locale']);
                $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts_translation');
    }
}
