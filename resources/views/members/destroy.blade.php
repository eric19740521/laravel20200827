新增會員

<form action="{{ route('members.store') }}" method="POST">
    @csrf
    <label>會員名稱：
        <textarea name="mem_name"></textarea>
    </label><br>
    <input type="submit" value="送出">
</form>