@extends('layouts.admins')
@section('content')
    <div class="py-3">

        <form action="{{ url('categories/store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameFormControlInput1" class="form-label">اسم الصنف</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج">
            </div>
            <div class="cb-3">
                <input type="supmit" value="احفظ" class="btn btn-info">
            </div>
        </form>
    </div>
@endsection
