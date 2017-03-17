<?php

namespace Shippinno\WishList\Infrastructure\Persistence\Filesystem;

use Shippinno\WishList\Domain\Model\Wish;
use Shippinno\WishList\Domain\Model\WishId;
use Shippinno\WishList\Domain\Model\WishRepository;

class FilesystemWishRepository implements WishRepository
{
	public function wishOfId(WishId $aWishId) {
		$file = __DIR__.'/wishes.txt';
		
		if (!file_exists($file)) {
			file_put_contents($file, serialize([]));
		}
		
		$wishes = unserialize(file_get_contents($file));
		
		if (! isset($wishes[$aWishId->id()])) {
			$wish = $wishes[$aWishId->id()];
		} else {
			$wish = null;
		}
		
		return $wish;
	}
	
	public function add(Wish $aWish): void
	{
		$file = __DIR__.'/wishes.txt';
		
		if (!file_exists($file)) {
			file_put_contents($file, serialize([]));
		}
		
		$wishes = unserialize(file_get_contents($file));
		$wishes[$aWish->wishId()->id()] = $aWish;
		file_put_contents($file, serialize($wishes));
	}
}