@extends('layout.master')
<table class="table">
    <tr>
        <th>name_ar</th>
        <th>name_en</th>
        <th>detils ar</th>
        <th>detils en</th>
    </tr>

        @foreach($post as $item)
        <tr>
            <th>{{$item->name_ar}}</th>
            <th>{{$item->name_en}}</th>
            <th>{{$item->details_ar}}</th>
            <th>{{$item->details_en}}</th>
            <th>
                <a href="{{url('post/edit',$item->id)}}" class="btn btn-warning" type="submit">Edit</a>
                <button type="submit" class="btn btn-danger">delete</button>
            </th>
    </tr>
        @endforeach


</table>
