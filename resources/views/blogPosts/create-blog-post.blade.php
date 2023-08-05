@extends('layout')

@section('head')

<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

   @endsection 

@section('main')


<main class="container" style="background-color:white">
<section id="contact-us">
    <h1 style="padding-top:50px;">Create New Post!</h1>

    @if (session('status'))
        <p style="color:white; font-size:18px;font-weigth:500;;background:#1abd1a;padding:10px;margin-bottom:10px;border-radius:10px">{{session('status')}}</p>
    @endif
    <div class="contact-form">
        <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
        @csrf    
        <label for="title"><span>Title</span></label>
            <input type="text" id="title" name="title" value="{{old('title')}}"/>

            @error('title')
            <p style="color:red;margin-bottom:25px">{{$message}}</p>
            @enderror
            <label for="image"><span>Image</span></label>
            <input type="file" id="image" name="image"/>
            @error('image')
            <p style="color:red;margin-bottom:25px">{{$message}}</p>
            @enderror
            <label for="body"><span>Body</span></label>
            <textarea  id="body" name="body">{{old('body')}}</textarea>
            @error('body')
            <p style="color:red;margin-bottom:25px;margin-top:10px">{{$message}}</p>
            @enderror
            <input type="submit" value ="Submit"/>
            

@endsection

@section('scripts')
<script>
        ClassicEditor
                .create( document.querySelector( '#body' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script>
@endsection


