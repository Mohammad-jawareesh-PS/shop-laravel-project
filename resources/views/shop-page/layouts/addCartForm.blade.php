<form method="post" action="/cart">
    @csrf
    <input type="hidden" name="user_id" value="{{Auth::id()}}">
    <input type="hidden" name="glasse_id" value="{{$item->id}}">
    <input type="submit" value="Add to cart">
 </form>
