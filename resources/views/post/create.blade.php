<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create new post</title>
</head>
<body>
    <form method = "POST" action="{{ route('add-post')}}" >
        @csrf
        <input type="text" name="title" placeholder="title"><br>

        <textarea name="body" placeholder="body"
           rows="9" cols="50" type="text"
           ></textarea><br>
        <button type="submit">create</button>
    </form>

</body>
</html>
