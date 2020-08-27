@extends('members.base')

@section('main')
會員--新增
<form action="{{ route('members.store') }}" method="POST">

    @csrf
    <label>會員名稱：
        <input name="mem_name" value=""></input>
    </label><br>
    <input type="submit" value="送出">
</form>
@endsection