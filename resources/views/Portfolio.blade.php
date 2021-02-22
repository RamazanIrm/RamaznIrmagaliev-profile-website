<!DOCTYPE html>
<html>
<head>
<title>My portfolio</title>
<link rel="stylesheet" type="text/css" href="Portfolio.css"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
<div>
<img src="img/main.png" style="width:100%;height:400px;"/>
</div>
<div class="todark">
<img src="img/log.png" style="width:150px;"/>
<div class="texts">
<h1 class="names">RAMAZAN IRMAGALIYEV</h1>
<p class="dev">DEVELOPER,DESIGNER,CODER MAN</p>

</div>

<div class="me"><img src="img/heh.jpg" style="width:25%;border:10px solid #F6F5F5;border-radius:50%;"/>
<div class="tuh">
<a href="{{route('about')}}"><h2 class="about">about</h2></a>
<a href = "{{route('skills')}}"><h2 class="about">skills</h2></a>
<a href ="{{route('resume')}}"><h2 class="about">resume</h2></a>
<a href="#"><h2 class="about">favorites</h2></a>

</div>
</div>
</div>


<div class="contacts">
<h2 class="about">contact</h2>
<h1 class="per2">IF YOU HAVE QUSTIONS CONTACT TO ME</h1>
<div class="signs">
<div><a href="http://t.me/77772961965"><i class="fab fa-telegram"></i></a></div>
<div><a href="http://wa.me/77772961965"><i class="fab fa-whatsapp" id="wh"></i></a></div>
<div><i class="fab fa-facebook"></i></div>
<div><a href="http://instagram.com/bhytzhn"><i class="fab fa-instagram" id="insta"></i></div>
<div><i class="fab fa-vk"></i></div>
</div>
</div>
</div>
</div>
</div>
<script src="Portfolio.js"></script>
</body>
</html>