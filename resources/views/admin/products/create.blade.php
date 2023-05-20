@extends('layouts.admins')
@section('content')
    <div class="py-3">

        <form action="{{ url('product/store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameFormControlInput1" class="form-label">اسم المنتج</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج">
            </div>

            <div class="mb-3">
                <label for="nameFormControlInput1" class="form-label">سعر المنتج</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="سعر المنتج">
            </div>

            <div class="mb-3">
                <label for="quntityFormControlInput1" class="form-label">كمية المنتج</label>
                <input type="number" class="form-control" id="quntity" name="quntity" placeholder="كمية المنتج">
            </div>

            <div class="mb-3">
                <label for="discrptionFormControlTextarea1" class="form-label">وصف المنتج</label>
                <textarea class="form-control" id="discrption" name="discrption" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="discrptionFormControlTextarea1" class="form-label"> اختر الصنف </label>
                <select class="form-control" name="category" id="category">
                    <option value="#"></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="cb-3">
                <input type="supmit" value="احفظ" class="btn btn-info">
            </div>
        </form>
    </div>
@endsection
