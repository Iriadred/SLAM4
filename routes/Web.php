<?php

namespace routes;

use routes\base\Route;
use controllers\Account;
use controllers\TodoWeb;
use controllers\VideoWeb;
use utils\SessionHelpers;
use controllers\SampleWeb;
use controllers\LoginWeb;


class Web
{
    function __construct()
    {
        $main = new SampleWeb();
        $todo = new TodoWeb();
        $con = new LoginWeb();

        Route::Add('/', [$main, 'home']);
        Route::Add('/about', [$main, 'about']);
        Route::Add('/todo/liste', [$todo, 'liste']);
        Route::Add('/todo/ajouter', [$todo, 'ajouter']);
        Route::Add('/todo/terminer', [$todo, 'terminer']);
        Route::Add('/todo/supprimer', [$todo, 'supprimer']);
        Route::Add('/sample/{id}', [$main, 'sample']);
        Route::add('/authentification',[$con, 'login']);
        Route::add('/inscription',[$con, 'inscript']);
        Route::add('/authentification/lol',[$con, 'lol']);
        Route::add('/authentification/deco',[$con, 'deco']);
        Route::add('/inscription/new',[$con, 'newInscript']);

        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

