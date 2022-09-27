<h1>Add new post</h1>
<form method="post" action="{{route('post.update',$post->id)}}">
    @csrf
    <input type="text" name="name_ar" placeholder="name ar" value="{{$post->name_ar}}"><br>
    <br>
    <input type="text" name="name_en" placeholder="name en" value="{{$post->name_en}}"><br>
    <br>
    <input type="text" name="details_ar" placeholder="details_ar" value="{{$post->details_ar}}"><br>
    <br>
    <input type="text" name="details_en" placeholder="details_en" value="{{$post->details_en}}"><br>
    <br>
    <button type="submit">Save</button>
</form>
