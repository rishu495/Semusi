<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\PhpExecutableFinder;
require 'D:/Rishabh Agrawal/Documents/laravel projects/security/vendor/autoload.php';
class ping extends Controller
{
    public function new(){
        $output=shell_exec("ping www.google.com");
        echo $output;

    }
}
