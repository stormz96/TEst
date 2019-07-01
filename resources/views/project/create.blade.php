<html>
<body>

<form action="/project" method="post">
{{ csrf_field() }}

<div>
    <input type="text" name="title" placeholder='Title'><br>
</div><br>

<div>
    <textarea name="description" placeholder="Description">
</textarea>
</div>

<br>

<div>
    <button type="submit">Create Project</button>
</div>

</form>

</body>
</html>