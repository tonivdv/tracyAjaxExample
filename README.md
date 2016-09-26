# Tracy Ajax Issue Example ?

## Run the example

```
composer install

docker-compose up -d 
```

Simulate the issue:

1. Go to the page: `http://dockerhost:docker-port/web/index.php`

2. The page will load *without* deprecation errors

3. Hit the 'Load As Ajax' button (will load the same page but through ajax)
 
4. The deprecation error is displayed!