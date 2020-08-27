@extends('members.base')

@section('main')
<div style='color:red'>會員清單</div>
<a href="{{ route('members.create') }}">新增</a>
 

	<hr />
	@foreach($members as $m)
		{{ $m->mem_name }}
		
		<!-- /members/{{ $m->id }} -->
		<a href="{{ route('members.edit',$m->id)}}" class="btn btn-primary">Edit</a>
		
		<form action="{{ route('members.destroy', $m->id)}}" method="post">
	 
			<!-- _token 隱藏欄位-->
			@csrf
			
			<!--用POST方法傳送,裡面含一個隱藏屬性DELETE -->			
			@method('DELETE')
			<button class="btn btn-danger" type="submit">Delete</button>
		</form>		
			
	<hr />
	@endforeach	
@endsection

	
 