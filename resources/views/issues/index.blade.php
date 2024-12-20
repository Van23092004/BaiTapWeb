@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh sách vấn đề</h1>
    <a href="{{ route('issues.create') }}" class="btn btn-primary">Thêm vấn đề</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Máy tính</th>
                <th>Người báo cáo</th>
                <th>Ngày báo cáo</th>
                <th>Mức độ</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($issues as $issue)
            <tr>
                <td>{{ $issue->id }}</td>
                <td>{{ $issue->computer->computer_name }}</td>
                <td>{{ $issue->reported_by }}</td>
                <td>{{ $issue->reported_date }}</td>
                <td>{{ $issue->urgency }}</td>
                <td>{{ $issue->status }}</td>
                <td>
                    <a href="{{ route('issues.edit', $issue->id) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('issues.destroy', $issue->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $issues->links() }}
</div>
@endsection
