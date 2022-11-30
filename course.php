<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Coder's Desk</title>
  <link rel="stylesheet" href="stylee.css">
  
<style> 
body{
    background: url("img/home.jpg")
}
#background-video {
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: -1;
  }
.crs{

}
img {
    height:30%;
    width:100%;
}
#c_cont{
    align:center;
}
.container {
    background-color:#000000;
    align:left ;
    height:30%;
    width:40%;
    border: 4px solid skyblue;
}
.container1 {
    background-color:#000000;
    align:left ;
    height:30%;
    width:40%;
    border: 4px solid violet;
}
.vertical-center {
  margin: 0;
  position:relative;
  top:90%;
  bottom:90%;
  -ms-transform: translateY(-100%);
  transform: translateY(-100%);
}
.flex-parent {
  display: flex;
}
.jc-center {
  justify-content:left;
}
button.margin-right {
  margin-right: 20px;
}
button {
  background-color: #000000; /* black */
  border: none;
  color: white;
  padding:1%;
  text-align:center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>

<body>
<video id="background-video" autoplay loop muted poster="img/vid1.mp4">
<source src="img/vid1.mp4" type="video/mp4">
</video>

<br<nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="index.php">HOME</a></li>
      <li><a href="course.php">COURSES</a></li>
      <li><a href="ide1.html">CODE ARENA</a></li>
      <li><a href="help.php">HELP DESK</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
     
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <img src="img/avatar.png" class="avatar"><br><br>
    <h4 align="center" style="color:red">
    </h4>     
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.php">HOME</a>
    <a href="course.php">COURSES</a>
    <a href="ide1.html">CODE ARENA</a>
    <a href="help.php">HELP DESK</a>
    <br>
    <button onclick="document.location='logout.php'">Logout</button>
  </div>
  
  <br>
  <br>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
</div>
<br>
<div class="crs">
<div align="center">
<div id="c_cont" class="container">
    <img src="img/img2.jpg">
    <button type="submit" class="green margin-right">Inteteractive Python</button>
</div>
<br>
<div id="c_cont" class="container1">
    <img src="img/img3.jpg">
    <button type="submit" class="green margin-right"> JAVA</button>
</div>
<br>
<div id="c_cont" class="container">
    <img src="img/img4.jpg">
    <button type="submit" class="green margin-right">Interacting with C++</button>
</div>
<br>
<div id="c_cont" class="container">
    <img src="img/img6.jpg">
    <button type="submit" class="green margin-right">Introduction to JavaScript</button>
</div>
<br>
<div id="c_cont" class="container1">
    <img src="img/img7.jpg">
    <button type="submit" class="green margin-right">HTML</button>
</div>
</div>
<br>
</div>
</div>
</body>
</html>