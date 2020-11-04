<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a463021397.js" crossorigin="anonymous"></script>
    
    <title>Momo's</title>
  </head>

  <body>
    <!--Menu-->
    <header>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Momo's</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-center" id="nav-bar">
          <ul class="navbar-nav">
            <li class="nav-item"><a href="#1" class="nav-link">Profile</a></li>
            <li class="nav-item"><a href="#2" class="nav-link">Skill</a></li>
            <li class="nav-item"><a href="#3" class="nav-link">Works</a></li>
            <li class="nav-item"><a href="#4" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!--Profile-->
    <div class="about" id="1">
      <p class="occ">Web Developer</p>
      <h1>Momoka Aoyama</h1>
      <div class="picture">
        <img src="profile.jpg" alt="プロフィール写真">
      </div>
      <div class="profile">
        <p>1997.3.4</p>
        <p>23歳、都内在住、エンジニア志望で就職活動をしています。</p>
        <p></p>
      </div>
    </div>
    
    
    <!--Skills-->
    <h2 class="skill" id="2">SKILL</h2>
    <div class="container">
      <div class="row">
        <div id="Web" class="col-md-6">
          <div class="sub-title">
            <i class="fas fa-desktop"></i>
            <h3>WEB</h3>
          </div>
          
          <div class="web-skill">
            <div class="programming">
              <div class="skill-name">HTML  <img src="https://img.icons8.com/ios/20/000000/html-5.png"/></div>
              <div class="skill-bar">
                <div class="skill-par" style="width: 80%;"></div>
              </div>
            </div>
            
            <div class="programming">
              <div class="skill-name">CSS  <img src="https://img.icons8.com/ios/20/000000/css3.png"/></div>
              <div class="skill-bar">
                <div class="skill-par" style="width: 80%;"></div>
              </div>
            </div>
            
            <div class="programming">
              <div class="skill-name">Javascript  <img src="https://img.icons8.com/ios/20/000000/javascript.png"/></div>
              <div class="skill-bar">
                <div class="skill-par" style="width: 60%;"></div>
              </div>
            </div>
            
            <div class="programming">
              <div class="skill-name">PHP <img src="https://img.icons8.com/ios/25/000000/php-logo.png"/ class="logo php"></div>
              <div class="skill-bar">
                <div class="skill-par" style="width: 60%;"></div>
              </div>
            </div>
            
            <div class="programming">
              <div class="skill-name">Laravel  <img src="https://img.icons8.com/ios/20/000000/laravel.png"/></div>
              <div class="skill-bar">
                <div class="skill-par" style="width: 50%;"></div>
              </div>
            </div>
          </div>
        </div>
        
        <div id="Language" class="col-md-6">
          <div class="sub-title">
            <i class="far fa-comment"></i>
            <h3>Language</h3>
          </div>
          
          <div class="lan-1">
            <div class="english">English  
              <img src="https://img.icons8.com/color/30/000000/australia-circular.png"/>
              <img src="https://img.icons8.com/color/30/000000/philippines-circular.png"/>
            </div>
            <p>大学在学中に休学し、フィリピンのバギオに3ヵ月、オーストラリアのシドニーにて9ヵ月の語学留学を経験しました。</br>日常会話レベルの英会話が可能。TOEIC 710点(2019)。</p>
          </div>
          
          <div class="lan-2">
            <div class="korean">Korean  <img src="https://img.icons8.com/color/30/000000/south-korea-circular.png"/></div>
            <p>高校時代にK-POPを好きになり勉強を始め、大学では第二外国語として学習していました。</br>ハングル能力検定試験4級合格(2018)。</p>
          </div>
        </div>
      </div>
    </div>
    
    
    <!--Works-->
    <h2 class="works" id="3">WORKS</h2>
    <div class="items">  
      <div class="item">
	      <div class="workImg todolist" onclick="item1()">
		      <img src="works/todolist.png" width="300" height="200">
        </div>
        <a href="https://github.com/Momokhun/Mini-pro" class="btn-light">
          <i class="fab fa-github"></i>  Github
        </a>
      </div>

      <div class="item">
	      <div class="workImg flower" onclick="item2()">
		      <img src="works/flower.png" width="300" height="200">
        </div>
        <a href="https://github.com/Momokhun/flower" class="btn-light">
          <i class="fab fa-github"></i>  Github
        </a>
      </div>

      <div class="item">
	      <div class="workImg " onclick="item3()">
		      <img src="works/aus.png" width="300" height="200">
        </div>
        <a href="https://github.com/Momokhun/australia" class="btn-light">
          <i class="fab fa-github"></i>  Github
        </a>
      </div>
    </div>
      
  
    
    
    <!--Contact-->
    <h2 class="contanct" id="4">CONTACT</h2>
    
    
    <form id="form" method="post" action="send.php">
      <div class="form-group row justify-content-center">
        <label for="name" class="col-md-1 col-form-label">Name</label>
        <div class="col-md-4 ">
          <input type="text" class="form-control" name="name" required="required">
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label for="email" class="col-md-1 col-form-label">Email</label>
        <div class="col-md-4">
          <input type="text" class="form-control" name="email" required="required" >
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <label for="content" class="col-md-1 col-form-label">Message</label>
        <div class="col-md-4">
          <textarea class="form-control" name="message"></textarea>
        </div>
      </div>
      <div class="form-group row justify-content-center">
        <button name="submitted" type="submit" class="col-md-1 btn btn-outline-success">送信</button>
      </div>
    </form>
    <div class="mysns">
      <ul class="contact-me">
        <li><a href="https://www.facebook.com/profile.php?id=100015844651424" class="snsbtn facebook"><i class="fab fa-facebook"></i></a></li>
        <li><a href="" class="snsbtn github"><i class="fab fa-github"></i></a></li>
        <li><a href="" class="snsbtn skype"><i class="fab fa-skype"></i></a></li>
      </ul>
    </div>
    
    <footer class="text-center pt-3 border-top">
        &copy; Momo's Portfolio 2020
    </footer>
    
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>