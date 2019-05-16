<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1 bg">Cuisine's Blog</span>
  <a href="http://127.0.0.1:8000/admin/article" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">管理文章</a>

</nav>

<br>





@foreach($articles as $article)
<!-- <div class="alert alert-primary" role="alert">
{{$article -> title}}
</div> -->
<!-- <h1 style="bold" color="#000088"></h1> -->

<!-- <a herf="/article/{{$article->id}}"><img src = "{{$article->image}}" alt=""></a>
<br>

<br>
{{$article -> content}} 
<br><br><br><br><br> -->


<a herf="/article/{{$article->id}}">
 <div class="card" >
  <img src="{{$article->image}}" class="card-img-top" alt="">
  <div class="card-body">
    <h4 class="card-title font-weight-bold">{{$article -> title}}</h4>
    <p class="card-text">{{$article -> content}} </p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
 </div>
</a>

<br><br><br>





@endforeach