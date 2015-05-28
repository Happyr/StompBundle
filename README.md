HappyR StompBundle
=====================

A Symfony2 bundle that integrates the Fusesource Stomp PHP library.

## Installation

1. Install with composer:

    ```
    php composer.phar require happyr/stomp-bundle
    ```

2. Enable the bundle:

    ```php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new HappyR\StompBundle\HappyRStompBundle(),
        );
    }
    ```

## Using the service

```php
//get the connection
$con = $this->container->get('happyr.stomp.broker');

// send a message to the queue
$con->send("/queue/test", "test");
echo "Sent message with body 'test'\n";

// subscribe to the queue
$con->subscribe("/queue/test");

// receive a message from the queue
$msg = $con->readFrame();

// do what you want with the message
if ( $msg != null) {
    echo "Received message with body '$msg->body'\n";

    // mark the message as received in the queue
    $con->ack($msg);
} else {
    echo "Failed to receive a message\n";
}

// disconnect
$con->disconnect();
```


## Full Default Configuration

```yaml
happy_r_stomp:
    borker_uri: tcp://localhost:61613
    client_id: ~
```

## More documentation

Since this bundle is just a wrapper for the [fusesource/stomp-php](https://github.com/dejanb/stomp-php) library
you should checkout [their configuration](http://stomp.fusesource.org/documentation/php/book.html).