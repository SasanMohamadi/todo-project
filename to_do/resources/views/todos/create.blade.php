@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card ">
                <div class="card-header">
                   ایجاد تسک جدید
                </div>
                <div class="card-body">
                    <form action="{{route('todos.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title"> نام تسک</label>
                            <input class="form-control form-control-invalid" id="title" type="text" name="title" value="{{old('title')}}" >
                            @error('title')
                                <p class="invalid-feedback d-block"> {{$message}} </p>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="description"> توضیحات</label>
                            <textarea class="form-control form-control-invalid" name="description" id="description" >{{old('description')}}</textarea>
                            @error('description')
                                 <p class="invalid-feedback d-block"> {{$message}} </p>
                            @enderror

                        </div>
                        <button class="btn btn-dark mt-3" type="submit"> ارسال </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>




@endsection
