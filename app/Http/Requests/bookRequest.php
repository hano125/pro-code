<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'book_name_ar'=>"required|max:225|unique:books",
            'book_name_en'=>"required|max:225|unique:books",
            'book_author_name_ar'=>'required',
            'book_author_name_en'=>'required',
            'book_author_decs_ar'=>'required',
            'book_author_decs_en'=>'required',
            'book_date'=>'required'
        ];
    }
    public function  messages()
    {
       return $messages=[
           'book_name_ar.required'=>__('messages.book_name_ar'),
           'book_name_en.required'=>__('messages.book_name_ar'),
           'book_name_ar.unique'=>__('messages.book_name_ar_unique'),
           'book_name_en.unique'=>__('messages.book_name_en_unique'),
            'book_author_name_ar.required'=>__('messages.book_author_name_ar'),
            'book_author_name_en.required'=>__('messages.book_author_name_ar'),
           'book_author_decs_ar.required'=>__('messages.book_author_decs_ar_required'),
           'book_author_decs_en.required'=>__('messages.book_author_decs_en_required'),
           'book_author_decs_ar.max'=>__('messages.book_author_decs_ar'),
            'book_author_decs_en.max'=>__('messages.book_author_decs_en'),
           'book_author_decs_ar.min'=>__('messages.book_author_decs_ar'),
           'book_author_decs_en.min'=>__('messages.book_author_decs_en')
       ];
    }
}
