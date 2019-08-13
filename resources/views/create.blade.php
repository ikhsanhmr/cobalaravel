<div class="html">
<body>
<h1>
{{'tets'}};
</h1>

<form action="{{ route('post.store') }}" method='post'>
    {{csrf_field()}}
<input type="text" name='title' id='title'>
<br>
<textarea name="body" id="body" cols="30" rows="10"></textarea>
<br>
<button type='submit'>Submit</button>
</form>
</body>
</div>

