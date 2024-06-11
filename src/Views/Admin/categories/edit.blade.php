@extends('layouts.master')
@section('content')
<h1>Cập nhật Danh Mục: {{ $categories['name'] }}</h1>

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

    <form action="{{ url("admin/categories/{$category['id']}/update") }}" enctype="multipart/form-data" method="POST">

        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{ $category['name'] }}" name="name">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-info"
            href="{{ url('admin/categories/') }}">Danh sách
        </a>

    </form>
@endsection
