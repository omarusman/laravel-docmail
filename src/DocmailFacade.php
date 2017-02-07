<?php namespace Oozman\Docmail;


use Illuminate\Support\Facades\Facade;

class DocmailFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'docmail';
    }

}