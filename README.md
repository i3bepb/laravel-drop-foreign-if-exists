# Drop foreign if exist

Add method dropForeignIfExists in Blueprint for Postgresql. 

This package is no longer maintained. No further compatibility updates are planned.

# Support Policy

| Package Version | Laravel Version |
|:---------------:|:---------------:|
|        1        |        9        |
|        1        |        8        |
|   not support   |       <=7       |

The final compatibility limits are PHP `>=7.4 <8.2` and Illuminate 8.x or 9.x.
PHP 8.2+ and Illuminate / Laravel 10+ are
excluded by the Composer requirements.

These restrictions apply only to versions containing the updated requirements;
previously published releases retain their original constraints. The abandoned
status is a maintenance notice and does not prevent installation.

# Testing

See workflow testing.yml. For example Laravel 9.
```shell
docker pull i3bepb/php-for-test:1.0.0-php-8.1.16-cli-alpine3.17
```

Run container with volume
```shell
docker run --rm -it -v $(pwd):/home/www-data/application i3bepb/php-for-test:1.0.0-php-8.1.16-cli-alpine3.17 sh
```

In container
```shell
composer install && php vendor/bin/testbench package:test --do-not-cache-result
```

## Support orchestra/testbench

| laravel  | testbench  |
|:--------:|:----------:|
|   9.x    |    7.x     |
|   8.x    |    6.x     |
|   7.x    |    5.x     |
|   6.x    |    4.x     |

## Support nunomaduro/collision

| testbench | nunomaduro/collision |
|:---------:|:--------------------:|
|    7.x    |         6.x          |
|    6.x    |         5.x          |
|    5.x    |         4.x          |
