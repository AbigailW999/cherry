<?php

namespace App\Providers;

use App\Order;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Order::created(function ($obj){
            
            $email = 'adminemail@site.by';
            $thema = 'Уважаемый '. $obj->username . ' это сообщение с сайта cherry.ru';
            $body = '<h1>Ваш заказ принят</h1>';

            $headers = "MIME-Version: 1.0\r\n";
            $headers = "From: admin@tut.by\r\n";
            $headers = "Content-Type: text/plain;charset=utf-8\r\n";
            $headers = "X-Mailer: PHP/" . phpversion();

            @mail($email, $thema, $body);//стандартный метод Laravel, @ - для того чтобы если появится ошибка то непоказывать ее, headers - устраняет ошибку кодировки, см фото
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
