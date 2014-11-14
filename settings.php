<?php
use Phergie\Irc\Connection;
return array(
    // Plugins to include for all connections
    'plugins' => array(
        // new \Vendor\Plugin\PluginName(array(
        // /* configuration goes here */
        // )),
        new Phergie\Irc\Plugin\React\Pong\Plugin(),
        new Phergie\Irc\Plugin\React\AutoJoin\Plugin(
            [
                'channels' => [
                    '#phergie123'
                ]
            ]
        ),
        new Phergie\Irc\Plugin\React\Quit\Plugin(
            ['message' => 'because I am tired.',]
        ),
        new Phergie\Irc\Plugin\React\Command\Plugin(
            [
                'prefix' => '!', // string denoting the start of a command
            ]
        ),
        new Phergie\Irc\Plugin\React\Daddy\Plugin()
    ),
    'connections' => array(
        new Connection(array(
                // Required settings
                'serverHostname' => 'irc.freenode.net',
                'username' => 'phbot',
                'realname' => 'Bart McGarfle',
                'nickname' => 'Phergie1234',
                // Optional settings
                // 'hostname' => 'user server name goes here if needed',
                // 'serverport' => 6667,
                // 'password' => 'password goes here if needed',
                // 'options' => array(
                //     'transport' => 'ssl',
                //     'force-ipv4' => true,
                // )
            )),
    )
);
