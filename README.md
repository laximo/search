
# Laximo.Search SDK
*Документация: [doc.laximo.ru](https://doc.a-motive.ru)*

## Установка

Выполнить команду

    composer require laximo/search

## Использование

Необходимо импортировать классы Config и SearchService. Например:

```php
use Laximo\Search\Config;
use Laximo\Search\SearchService;


$service = new SearchService(new Config(['login' => $login, 'password' => $password]));
```

Далее можно использовать методы экземпляра SearchService для получения данных веб-сервиса:

```php
    print_r($service->user());
    print_r($service->search('фильтр маслянный XW8ZZZ7PZHG003807'));
```
