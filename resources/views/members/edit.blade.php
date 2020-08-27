@extends('members.base')

@section('main')
會員--修改
<!-- /members/{{ $member->id }} -->
<form action="{{ route('members.update', $member->id)}}" method="post" >
 
	<!-- _token 隱藏欄位-->
    @csrf	  
 	
    <label>會員名稱：
        <input name="mem_name" value="{{$member->mem_name}}"></input>
    </label><br>
	
	<!--PUT/PATCH	/members/{member}	update		members.update -->
	<!--用POST方法傳送,然後再送出一個隱藏屬性PUT -->
	@method('PUT')
    <input type="submit" value="送出">
</form>
@endsection