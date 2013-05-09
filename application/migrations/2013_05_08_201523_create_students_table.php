<?php

class Create_Students_Table {    

    public function up()
    {
        Schema::create('students', function($table) {
            $table->increments('id');
            $table->text('FirsName');
            $table->string('email', 100)->unique();
            $table->timestamps();
            
    });

    }    

    public function down()
    {
        Schema::drop('students');
    }

}