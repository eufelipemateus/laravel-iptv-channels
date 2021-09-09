
# Laravel IPTV Channels -  FelipeMateus\IPTVChannels

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
