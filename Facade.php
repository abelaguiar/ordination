<?php 

namespace AbelAguiar\Ordination;

class Facade extends \Illuminate\Support\Facades\Facade 
{
    protected static function getFacadeAccessor() 
    { 
        return 'order'; 
    }
}