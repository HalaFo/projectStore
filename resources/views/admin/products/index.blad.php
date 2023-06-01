@extends('layouts.admins')
@section('content')
@foreach ($products as $product)
<!-- Display product details -->
@endforeach

{{ $products->links() }}
<div class="py-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">اسم المنتج</th>
                <th scope="col">سعر المنتج</th>
                <th scope="col">كمية المنتج</th>
                <th scope="col"> الصنف</th>
                <th scope="col">الاحداث</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">1</th>
                <td>{{$product->name}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>
                    <a href="{{url('product/delete/'.$product->id)}}" class="btn btn-danger">حذف</a>
                    <a href="{{url('product/edit'.$product->id)}}" class="btn btn-info">تعديل</a>
                </td>
            </tr>
            @endforeach




        </tbody>
    </table>
</div>
@endsection