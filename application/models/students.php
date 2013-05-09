<?php

class Students extends Basemodel
{
    public static $timestamps = true;

    public static $rules = array(
        'id' => 'required',
        'FirsName' => 'required',
        'email' => 'required|mail',
        
    );

    public function kurs() {
        return $this->belongs_to('Kurs');
    }


}