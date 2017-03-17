<?php

use \Shippinno\WishList\Domain\Model\WishRepository;
use \Shippinno\WishList\Infrastructure\Persistence\Filesystem\FilesystemWishRepository;

$app = app();

$app->bind(WishRepository::class, FilesystemWishRepository::class);
