@extends('layouts.master')

@section('content')
<h1>Cập nhật người dùng: {{ $user['name'] }}</h1>

@if (!empty($_SESSION['errors']))
<div class="alert alert-warning">
    <ul>
        @foreach ($_SESSION['errors'] as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@php
unset($_SESSION['errors']);
@endphp
@endif

@if (isset($_SESSION['status']) && $_SESSION['status'])
<div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

@php
unset($_SESSION['status']);
unset($_SESSION['msg']);
@endphp
@endif

<form action="{{ url("admin/products/{$product['id']}/update") }}" enctype="multipart/form-data" method="POST">
    <div class="mb-3 mt-3">
        <label for="category_id" class="form-label">Category:</label>

        <select name="category_id" id="category_id" class="form-select">
            @foreach ($categoryPluck as $id => $name)
            <option @if ($product['category_id']==$id) selected @endif value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{ $product['name'] }}" name="name">
    </div>

    <div class="mb-3 mt-3">
        <label for="img_thumbnail" class="form-label">Img Thumbnail:</label>
        <input type="file" class="form-control" id="img_thumbnail" placeholder="Enter img_thumbnail" name="img_thumbnail">
        <img src="{{ asset($product['img_thumbnail']) }}" width="100px" alt="">
    </div>

    <div class="col-md-6">
        <div class="mb-3 mt-3">
            <label for="overview" class="form-label">Overview:</label>
            <textarea class="form-control" id="overview" placeholder="Enter overview" name="overview">{{ $product['overview'] }}</textarea>
        </div>

        <div class="mb-3 mt-3">
            <label for="content" class="form-label">Content:</label>
            <textarea class="form-control" id="content" rows="4" placeholder="Enter content" name="content">{{ $product['content'] }}</textarea>
        </div>
    </div>
    <div class="mb-3 mt-3">
        <label for="price_regular" class="form-label">Price Regular</label>
        <input type="text" class="form-control" id="price_regular" placeholder="Enter Price Regular" name="price_regular" value="{{ $product['price_regular'] }}">
    </div>
    <div class="mb-3 mt-3">
        <label for="price_sale" class="form-label">Price Sale</label>
        <input type="text" class="form-control" id="price_sale" placeholder="Enter Price Sale" name="price_sale" value="{{ $product['price_sale'] }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-info" href="{{ url('admin/products/') }}">Danh sách
    </a>

</form>
@endsection