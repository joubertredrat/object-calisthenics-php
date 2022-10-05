<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Good\NotificationService;
use JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Good\NotificationTerminal;
use JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Good\User;
use JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Good\UserCollection;

$userCollection = new UserCollection();
$userCollection->addUser(new User(nickname: "Foo", active: true));
$userCollection->addUser(new User(nickname: "Bar", active: true));
$userCollection->addUser(new User(nickname: "Baz", active: false));
$userCollection->addUser(new User(nickname: "Qux", active: true));

$notificationService = new NotificationService($userCollection, new NotificationTerminal());
$notificationService->sendEmailActiveUsers('Seja bem vindo');
