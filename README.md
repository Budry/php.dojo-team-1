# php.dojo
Basic project skeleton for PHP dojo

## Requirements
- composer
- xdebug - for code coverage

## Installation
1. `make install` - Installs composer dependencies
2. Configure XDebug
   - Mac path: /opt/homebrew/etc/php/8.1/php.ini
   - Linux path: /etc/php/conf.d/xdebug.ini

Example configuration:

       zend_extension=xdebug.so
       xdebug.mode=coverage
       xdebug.remote_enable=on
       xdebug.remote_host=127.0.0.1
       xdebug.remote_port=9000
       xdebug.remote_handler=dbgp


## Usage
    $ make
    help                           list available targets (this page)
    install                        install composer dependencies
    test-all                       run all tests
    test-one <pathToTest>          run one test
    test-cov                       run tests and generate code coverage using xdebug
