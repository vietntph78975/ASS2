@extends('layouts.master')
@section('content')
<h1>Chi tiết sản phẩm: {{ $product['name'] }}</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Trường</th>
                <th>Giá trị</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($product as $field => $value)
                <tr>
                    <td>{{ $field }}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
