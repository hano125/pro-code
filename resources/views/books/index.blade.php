@extends('layout.master')
@include('layout.navbar')
<div class="container">
    <table class="table table-bordered table-striped mt-3" style="text-align: center">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('messages.Book Name')}}</th>
            <th scope="col">{{__('messages.Author Name')}}</th>
            <th scope="col">{{__('messages.Description')}}</th>
            <th scope="col">{{__('messages.date')}} </th>
            <th scope="col">{{__('messages.operation')}} </th>

        </tr>
        </thead>
        <tbody>
        @foreach($books as $data)
        <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->author}}</td>
                <td>{{$data->decs}}</td>
                <td>{{$data->book_date}}</td>
                 <td>
                     <a type="submit" href="{{url('book/edit/'.$data->id)}}" class="btn btn-warning">{{__('messages.Edit')}}</a>
                     <a type="submit" class="btn btn-danger">{{__('messages.Delete')}}</a>

                 </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
