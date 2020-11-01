# dfk-api-php
PHP code for accessing the Dataflow Kit API

## Manual way

1. Follow installation instructions at https://github.com/rmccue/Requests and install Requests package. 
2. Open file dfk-api.php
3. Exchange API-KEY  with the actual one from https://account.dataflowkit.com/settings
4. Run dfk-api.php


## Following the steps below to build/ run docker image:

1. Open file dfk-api.php
2. Exchange API-KEY  with the actual one from https://account.dataflowkit.com/settings
3. ```docker build -t dfk-api-php . ```
4. ``` docker run -it --rm --name dfk-api-php  dfk-api-php```
