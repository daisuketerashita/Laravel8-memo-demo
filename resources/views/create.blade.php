@extends('layout')

@section('content')
<form action="{{ route('store') }}" method="post">
    @csrf
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <button type="submit">作成</button>
    <a href="{{ route('index') }}">キャンセル</a>
</form>
@endsection