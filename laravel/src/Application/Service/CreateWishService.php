<?php
namespace Shippinno\WishList\Application\Service;

use Shippinno\WishList\Domain\Model\Wish;
use Shippinno\WishList\Domain\Model\WishId;
use Shippinno\WishList\Domain\Model\WishRepository;

class CreateWishService
{
	/**
	 * @var type 
	 */
	private $wishRepository;
	
	/**
	 * @param WishRepository $wishRepository
	 */
	public function __construct(WishRepository $wishRepository) {
		$this->wishRepository = $wishRepository;
	}

		public function execute(string $itemName, string $itemUrl, string $comment)
	{
		$wish = new Wish(
			WishId::create(),
			$itemName,
			$itemUrl,
			$comment
		);
		
		$this->wishRepository->add($wish);
//		dd($wish);
	}
}

