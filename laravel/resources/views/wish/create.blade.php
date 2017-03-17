<form action="{{ route('wish.store') }}" method="POST">
  {{ csrf_field() }}
  <div>
	<input type="text" name="item_name" placeholder="item name">
  </div>
  <div>
	<input type="text" name="item_url" placeholder="item url">
  </div>
  <div>
	<input type="text" name="comment" placeholder="comment">
  </div>
  <button type="submit">
	送信
  </button>
</form>



