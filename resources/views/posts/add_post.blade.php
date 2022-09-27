<h1>Add new post</h1>
<form method="post" action="{{route('post.store')}}">
    @csrf
    <input type="text" name="name_ar" placeholder="name ar"><br>
    <br>
    <input type="text" name="name_en" placeholder="name ar"><br>
    <br>
    <input type="text" name="details_ar" placeholder="name ar"><br>
    <br>
    <input type="text" name="details_en" placeholder="name ar"><br>
    <br>
    <button type="submit">Save</button>
</form>
