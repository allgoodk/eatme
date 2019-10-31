#!/bin/sh
set -e

#switch on xdebug
disabled_xdebug="/usr/local/etc/php/conf.d/docker-php-ext-xdebug.disabled"
if [ "${DEBUG}" = "1" ]; then
        if [ -e "$disabled_xdebug" ]; then
           mv "$disabled_xdebug" /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
        fi
fi

#switch on ssh
if [ "${ENABLE_SSH}" = "1" ]; then
       sudo service ssh start
fi

# first arg is `-f` or `--some-option`
if [ "${1#-}" != "$1" ]; then
        set -- php-fpm "$@"
fi

exec "$@"