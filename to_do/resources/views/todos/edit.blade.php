@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card ">
                <div class="card-header">
                 ویرایش تسک
                </div>
                <div class="card-body">
                    <form action="{{route('todos.update', ['id'=> $id->id])}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title"> نام تسک</label>
                            <input class="form-control form-control-invalid" id="title" type="text" name="title" value="{{$id->title}}" >
                            @error('title')
                                <p class="invalid-feedback d-block"> {{$message}} </p>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="description"> توضیحات</label>
                            <textarea class="form-control form-control-invalid" name="description" id="description" >{{$id->description}}</textarea>
                            @error('description')
                                 <p class="invalid-feedback d-block"> {{$message}} </p>
                            @enderror

                        </div>
                        <button class="btn btn-dark mt-3" type="submit">ویرایش</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>




@endsection
