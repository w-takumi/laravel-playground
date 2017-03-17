<?php
namespace Shippinno\WishList\Domain\Model;

class Wish
{
	/**
	 * @var type 
	 */
	private $wishId;
	
	/**
	 * @var type 
	 */
	private $itemName;
	
	/**
	 * @var type 
	 */
	private $itemUrl;
	
	/**
	 * @var type 
	 */
	private $comment;
	
	/**
	 * @param \Shippinn\WishList\Domain\Model\WishId $aWishId
	 * @param string $anItemName
	 * @param string $anItemUrl
	 * @param string $aComment
	 */
	public function __construct(
		WishId $aWishId,
		string $anItemName,
		string $anItemUrl,
		string $aComment
	) {
		$this->wishId = $aWishId;
		$this->itemName = $anItemName;
		$this->itemUrl = $anItemUrl;
		$this->comment = $aComment;
	}
	
	/**
	 * @return type
	 */
	public function wishId() {
		return $this->wishId;
	}
}
