<?php
namespace Shippinno\WishList\Domain\Model;

use Ramsey\Uuid\Uuid;

class WishId
{
	/**
	 * @var type 
	 */
	private $id;
	
	/**
	 * @param string $anId
	 */
	public function __construct(string $anId)
	{
		$this->id = $anId;
	}
	
	/**
	 * @return string
	 */
	public function id(): string
	{
		return $this->id;
	}
	
	/**
	 * 
	 * @return self
	 */
	public static function create(): self
	{
		return new static(Uuid::uuid4()->toString());
	}
	
}
