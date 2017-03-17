<?php
namespace Shippinno\WishList\Domain\Model;

interface WishRepository
{
	/**
	 * @param \Shippinno\WishList\Domain\Model\WishId $aWishId
	 */
	public function wishOfId(WishId $aWishId);
	
	/**
	 * @param \Shippinno\WishList\Domain\Model\Wish $aWish
	 */
	public function add(Wish $aWish): void;
}
