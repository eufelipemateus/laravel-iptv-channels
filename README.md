
# Laravel IPTV FelipeMateus\IPTV

![Lista de Canais  here](https://felipemateus.com/wp-content/uploads/2021/08/list_channel.png)


Esta é uma biblioteca que controla lista de canais iptv e gera uma lista m3u
 
## Instalação
 
  Para instalar você precisa ter laravel 8x.

### Execute o comando abaixo na raiz do projeto para baixar.


```bash
composer require felipefm32/laravel-iptv

```

### Depois adicione no arquivo 'config/app.php'

  
```php  

<?php

...

'providers' => [

...  

FelipeMateus\IPTV\IPTVProvider::class,

...

];
```
### Migre o banco de dados


```bash
php artisan migrate
```

[Informações complementares](https://felipemateus.com/?p=3254) 

## Author

**[Felipe Mateus](https://eufelipemateus.com)** - [eufelipemateus](https://github.com/eufelipemateus)
