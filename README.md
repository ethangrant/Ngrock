# Magento 2 Dynamic base url for Ngrock

## Credit

This module is based on the Magento 1 module 'StudioForty9/Ngrok' https://github.com/StudioForty9/Ngrok

## Features

Allows you to use [ngrok](https://ngrok.com/) freely without worrying about updating your Magento Base URL every time you publish your new ngrok URL.

## Usage

Ngrock is tool that allows you to create a public HTTP or HTTPS URL for your local application.

Ngrock can be downloaded for free from https://ngrok.com/download.

If you're running your installation of Magento 2 from localhost typically the following will get ngrock up and running:

```
ngrock http 80
```

The UI in your terminal should look something like this:

```
ngrok by @inconshreveable
  
Tunnel Status                 online
Version                       2.0/2.0
Web Interface                 http://127.0.0.1:4040
Forwarding                    http://92832de0.ngrok.io -> localhost:80
Forwarding                    https://92832de0.ngrok.io -> localhost:80
  
Connnections                  ttl     opn     rt1     rt5     p50     p90
                              0       0       0.00    0.00    0.00    0.00
```

'Forwarding' being your publicly accessible URL.

If your local installation you wish to share is in a docker container, you should specify the docker container hostname followed by the port number:

```
ngrock http magento2.docker:80
```

This module can be installed via composer. Once installed you should be ready to go.

```
composer require ethangrant/ngrock
```