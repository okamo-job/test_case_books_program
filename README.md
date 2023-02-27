# test_case_books_program

## setup

```
% docker-compose up -d --build
```

```
% docker exec -it (container Id) bash
$ composer install
```

## run unit test

```
$ vendor/bin/codecept run unit MyTestCest
```
