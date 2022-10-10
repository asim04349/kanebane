<?php
namespace Kanebane\Trello;
use Illuminate\Support\ServiceProvider;
class CommonServiceProvider extends ServiceProvider{
    // bootstrap/run web services
    // listen events
    // publish configurations and migrations
    public function boot(){

    }
    // extends functionality for other classes
    // register service providers
    // create singleton classes
    public function register(){

    }
    static function get(){
        return "first call!";
    }
}
?>
