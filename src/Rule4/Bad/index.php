<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Bad\NotificationTerminal;
use JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Bad\User;
use JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Bad\UserCollection;

$userCollection = new UserCollection(new NotificationTerminal());
$userCollection->addUser(new User(nickname: "Foo", active: true));
$userCollection->addUser(new User(nickname: "Bar", active: true));
$userCollection->addUser(new User(nickname: "Baz", active: false));
$userCollection->addUser(new User(nickname: "Qux", active: true));

$userCollection->sendEmailActiveUsers('Seja bem vindo');
