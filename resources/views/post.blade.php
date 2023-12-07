<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon article en détails</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <img src="/images/icone_coeur.svg" height="17" alt="icone like">
    <img src="./images/icone_comment.svg" height="17" alt="icone commentaire"> 
      
</body>
</html>