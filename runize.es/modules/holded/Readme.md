# Holded

Please have into account that the file must be named **holded.zip** in order to work when placing it in the plugins folder of your own PrestaShop installation.

## Reinstall prestashop docker

* docker-compose down
* docker volume rm <name-of-folder>_mariadb_data
* docker volume rm <name-of-folder>_prestashop_data
* remove _data_ folded
* docker-compose up

## Admin login

* user@example.com
* bitnami1
