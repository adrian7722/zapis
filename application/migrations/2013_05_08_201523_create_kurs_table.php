<?php

class Create_Kurs_Table {    

    public function up()
    {
        Schema::create('kurs', function($table) {
            $table->increments('id');
            $table->text('name');
            $table->timestamps();
            
    });

    }    

    public function down()
    {
        Schema::drop('kurs');
    }

}