aravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#29 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Routing/Router.php(798): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#32 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Routing/Router.php(777): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#33 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Routing/Router.php(741): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#34 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Routing/Router.php(730): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#35 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(200): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#36 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#37 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/livewire/livewire/src/Features/SupportDisablingBackButtonCache/DisableBackButtonCacheMiddleware.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#38 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(180): Livewire\\Features\\SupportDisablingBackButtonCache\\DisableBackButtonCacheMiddleware->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#39 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#46 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php(99): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 /Volumes/UBUNTU 20_0/www/saims-demo/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(180): Illuminate\\Found