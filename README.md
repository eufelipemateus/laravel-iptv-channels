
# Laravel IPTV Channels -  FelipeMateus\IPTVChannels

[![Latest Stable Version](http://poser.pugx.org/felipemateus/iptv-channels/v)](https://packagist.org/packages/felipemateus/iptv-channels) [![Total Downloads](http://poser.pugx.org/felipemateus/iptv-channels/downloads)](https://packagist.org/packages/felipemateus/iptv-channels) [![Latest Unstable Version](http://poser.pugx.org/felipemateus/iptv-channels/v/unstable)](https://packagist.org/packages/felipemateus/iptv-channels) [![License](http://poser.pugx.org/felipemateus/iptv-channels/license)](https://packagist.org/packages/felipemateus/iptv-channels) [![PHP Version Require](http://poser.pugx.org/felipemateus/iptv-channels/require/php)](https://packagist.org/packages/felipemateus/iptv-channels)

![Lista de Canais  here](https://felipemateus.com/wp-content/uploads/2021/08/list_channel.png)


Esta é uma biblioteca que controla lista de canais iptv e gera uma lista m3u
 
## Instalação
 
  Para instalar você precisa ter laravel 8x.

### Execute o comando abaixo na raiz do projeto para baixar.


```bash
composer require felipemateus/iptv-channels
```

### Depois adicione no arquivo 'config/app.php'

  
```php  

<?php

...

'providers' => [

...  

FelipeMateus\IPTVChannels\IPTVProvider::class,

...

];
```
### Migre o banco de dados


```bash
php artisan migrate
```

[Informações complementares](https://felipemateus.com/blog/2021/08/pacote-gerenciador-de-canais-iptv-no-laravel) 

## Author

**[Felipe Mateus](https://eufelipemateus.com)** - [eufelipemateus](https://github.com/eufelipemateus)
