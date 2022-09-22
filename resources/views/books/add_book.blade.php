@extends('layout.master')
@include('layout.navbar')
<main class="container" style="max-width: 720px">
{{-----------------------    strat form input--------------------}}
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="card mt-3">
        <div class="card-header bg-danger">
           ADD NEW BOOK
        </div>
        <div class="card-body">
            <h4 class="card-title">{{__('messages.Book Details')}}</h4>
            <form method="post" action="{{route('book.store')}}">
                @csrf
                <div class="row">
                    <div class="col">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">{{__('messages.Book name English')}}</label>
                    <input type="text" class="form-control" name="book_name_en" placeholder="Enter The Book name">
                    @error('book_name_en')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">{{__('messages.Book name Arabic')}} </label>
                    <input type="text" class="form-control" name="book_name_ar" placeholder="Enter The Book ar">
                    @error('book_name_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">{{__('messages.book_author_name_en')}} </label>
                    <input type="text" class="form-control" name="book_author_name_en" placeholder="Enter The Book ar">
                    @error('book_author_name_en')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">{{__('messages.book_author_name_ar')}} </label>
                    <input type="text" class="form-control" name="book_author_name_ar" placeholder="Enter The Book ar">
                    @error('book_author_name_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">{{__('messages.book_author_decs_eng')}}</label>
                    <input type="text" class="form-control" name="book_author_decs_en" placeholder="Another input placeholder">
                    @error('book_author_decs_en')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">{{__('messages.book_author_decs_ar')}}</label>
                    <input type="text" class="form-control" name="book_author_decs_ar" placeholder="Another input placeholder">
                    @error('book_author_decs_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">{{__('messages.book_date')}}</label>
                    <input type="date" class="form-control" name="book_date" placeholder="Another input placeholder" >
                    @error('book_date')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info mt-3 w-100">Save data </button>
            </form>
        </div>
    </div>

</main>

