<?php

class Kurs extends Basemodel
{
    public static $timestamps = true;

    public static $rules = array(
        'id' => 'required',
        'name' => 'required',
        
    );


}