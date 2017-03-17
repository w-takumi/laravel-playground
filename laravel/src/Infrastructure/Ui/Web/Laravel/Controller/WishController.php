<?php
namespace Shippinno\WishList\Infrastructure\Ui\Web\Laravel\Controller;

use \Illuminate\Http\Request;
use \Illuminate\Routing\Controller;
use \Shippinno\WishList\Application\Service\CreateWishService;
use \Shippinno\WishList\Domain\Model\WishRepository;

class WishController extends Controller
{
	public function create()
	{
		return view('wish.create');
	}
	
	public function store(Request $request, WishRepository $wishRepository)
	{
//		dd(app(WishRepository::class));
		
		(new CreateWishService($wishRepository))->execute(
			$request->input('item_name'),
			$request->input('item_url'),
			$request->input('comment')
		);
	}
}
