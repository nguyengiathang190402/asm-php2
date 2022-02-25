<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'php2_asm',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();



use eftec\bladeone\BladeOne;

function view($view, $data = [])
{
    // tham số thứ 1: đường dẫn đến thư mục chứa các file view
    // tham số thứ 2: nơi chứa các file đã được biên dịch sang 
    // code PHP thuần
    // tham số thứ 3: trạng thái sử dụng (có báo lỗi)
    $blade = new BladeOne(
        './app/views',
        './storage',
        BladeOne::MODE_DEBUG
    );
    echo $blade->run($view, $data);
}
function admin($admin, $data = [])
{
    // tham số thứ 1: đường dẫn đến thư mục chứa các file view
    // tham số thứ 2: nơi chứa các file đã được biên dịch sang 
    // code PHP thuần
    // tham số thứ 3: trạng thái sử dụng (có báo lỗi)
    $blade = new BladeOne(
        './app/admin',
        './storage',
        BladeOne::MODE_DEBUG
    );
    echo $blade->run($admin, $data);
}
