<!DOCTYPE html>
<html>
    <head>
        <title>jquery

        </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="jquerylib/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="boot/css/bootstrap.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
        <script type="text/javascript" src="boot/js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 
        <script type="text/javascript">
       
            $(document).ready(function(){

                $('#button1').css('background-color','aqua');
                $('#button').css('background-color','yellow');
                $('#butto').css('background-color','red');
                $('#butt').css('background-color','orange');
                $('#but').css('background-color','purple');
                $('#bu').css('background-color','green');
                $('#koe').css('background-color','blue');
                $('#roti').css('background','slateblue');
               $('#button').click(function(){
                    $('p').hide(10000);
                });
                $('#butto').click(function(){
                    $('p').show(10000);
                });

                $('#button1').click(function(){
                    $('p').toggle(9000);
                });
                $('#butt').click(function(){
                    $('p').fadeIn(10000);
                });
                $('#but').click(function(){
                    $('p').fadeOut(1000);
                });
                $('#bu').click(function(){
                    $('p').fadeToggle(9000);
                });
                $('#koe').click(function(){
                    $('p').fadeTo('slow',300);
                });
                $('#roti').click(function(){
                    $('#kibet').slideDown();
                });
                $('#ann').dblclick(function(){
                    $('#annn').animate({left:'250px',height:'toggle'});
                });

                $('#riot').dblclick(function(){
                    $('#iot').html('hey iam debra cheptoo!!');
                });
                $('#tot').click(function(){
                    alert($('#iot').html());
                });
            

            });
    
        </script>
        <script>  
            var grade='B';  
            var result;  
            switch(grade){  
            case 'A':  
            result="A Grade";  
            break;  
            case 'B':  
            result="B Grade";  
            break;  
            case 'C':  
            result="C Grade";  
            break;  
            default:  
            result="No Grade";  
            }  
            document.write(result);  
            </script> 
            <style>
                img:hover{color: rgb(167, 135, 129);zoom:0.5;}
                #soom{zoom:2.0;}
                
ul {  
  list-style-type: none;  
  margin: 0;  
  padding: 0px;  
  overflow: hidden;  
  background-color: lightgray;  
}  
  
li {  
  float: right;  
}  
  
li a {  
  display: block;  
  color: blue;  
 font-size:20px;  
  text-align: center;  
  padding: 10px 20px;  
  text-decoration: none;  
}  
.active{  
background-color: gray;  
color: white;  
}  
li a:hover {  
  background-color: orange;  
  color: white;  
}  
  
               
            </style> 
    </head>
    <body>
        <br />
        <br />
        <ul>  
            <li><a class="active" href="#home">Home</a></li>  
            <li><a href="#">Java</a></li>  
            <li><a href="#">HTML</a></li>  
            <li><a href="#">CSS</a></li>  
          </ul>  
        <br />
        <center>
        <img src="kitu.jpg" alt="rot"width="300px"height="300px" style="border-radius: 300px;float: center;border: solid 2px yellow;">
        <p>rotich robert;</p>
        <p>rotich robert;</p>
        <p>rotich robert;</p>
        <p>rotich robert;</p>
    </center>
    <br />
    <br />
    
    <center>
        <img src="kitu.jpg" alt="rot"width="300px"height="300px" title="i am bolt " style="border-radius: 300px;float: center;border: solid 2px yellow;margin: 30px;"
     
        
        <img src="kitu.jpg" alt="rot"width="300px"height="300px" style="border-radius: 300px;float: left;border: solid 2px yellow;margin: 30px;">
        <img src="kitu.jpg" alt="rot"width="300px"height="300px" style="border-radius: 300px;float: right;border: solid 2px yellow;margin: 30px;">
        <img src="kitu.jpg" alt="rot"width="300px"height="300px" style="border-radius: 300px;float: left;border: solid 2px yellow;margin: 30px;">
        <img src="kitu.jpg" alt="rot"width="300px"height="300px" style="border-radius: 300px;float: right;border: solid 2px yellow;margin: 30px;">
    </center>

        <br />
       <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
       
        <br />
        <div class="container">
        <div class="row">
        <div class="col-sm-12">
        <nav class="navbar navbar-default">  
            <div class="container-fluid">  
              <div class="navbar-header">  
                <a class="navbar-brand" href="#">WebSiteName</a>  
              </div>  
              <ul class="nav navbar-nav">  
                <li class="active"><a href="#">Home</a></li>  
                <li><a href="#">Page 1</a></li>  
                <li><a href="#">Page 2</a></li>  
                <li><a href="#">Page 3</a></li>  
              </ul>  
            </div>  
          </nav>  
        </div>
    </div>
</div>
          <br />
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div><p id="iot" style="border:solid 4px red;text-align: center;padding: 15px;">i am rotichrobert</p></div>
                    <button id="riot" class="btn btn-primary">changing html </button>
                    <button id="tot" class="btn btn-danger">returning html </button>

                </div>

            </div>

        </div>
        <br />
        <div class="container">
           <form>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav-tabs nav-justified" id="soom" >
                        
                            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-home"></span>home</a></li>
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-earphone"></span>contacts</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span>about</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-bell"></span>subscribe</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-plane"></span>flight</a></li>
                            <li class="dropdown"><a class="dropdown-toggle"data-toggle="dropdown" href="#">
                                <span class="glyphicon glyphicon-envelope"></span>email
                               <span class="caret"></span>
                            </a>
                            
                            <ul class="dropdown-menu">
                                <li><a href="#">mission</a></li>
                                <li><a href="#">vission</a></li>
                                <li><a href="#">motto</a></li>
                                <li><a href="#">target</a></li>

                            </ul>
                        </li>
                  
                        </ul>

                    </div>

                </div>
            </form>
        </div>
        <br />
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <br />
                    <button class="btn btn-warning">search <span class="glyphicon glyphicon-search"></span> </button>
                    <button class="btn btn-warning">search <span class="glyphicon glyphicon-search"></span> </button>
                    

                </div>

            </div>

        </div>
        <br />
        <br />
        <div class="container">
            <div class="row">
                <div class="col-ms-12">
        <button id="button1">show/hide</button>
        <button id="button">hide</button>
        <button id="butto">show</button>
        <button id="butt">fadein</button>
        <button id="but">fadeout</button>
        <button id="bu">fadeToggle</button>
        <button id="koe">fadeTo</button>
        <button id="roti">slide</button>
    </div>
    </div>
    </div>
    <br />
    <br />
    <br />

    

            <div class="table-responsive">
    <div class="container">
        <h1>residents table</h1>
        <table class="table table-striped table-bordered table-hover table-condensed ">
            <thead class="thead-dark">
            <tr class="warning">
                <th>Name</th>
                <th>Age</th>
                <th>gender</th>
                <th>nationality</th>
                <th>occupation</th>
                <th>email address</th>
            </tr>
            <tr class="active">
                <td>robert rotich</td>
                <td>20yrs</td>
                <td>male</td>
                <td>kenyan</td>
                <td>developer</td>
                <td>rotichrobert@gmail.com</td>
            </tr>
            <tr class="warning">
                <td>clement rotich</td>
                <td>30yrs</td>
                <td>male</td>
                <td>kenyan</td>
                <td>farmer</td>
                <td>clement@gmail.com</td>
            </tr>
            <tr class="danger">
                <td>mercy chebet</td>
                <td>20yrs</td>
                <td>female</td>
                <td>ugandan</td>
                <td>doctor</td>
                <td>mercy@gmail.com</td>
            </tr>
            <tr class="success">
                <td>frank</td>
                <td>20yrs</td>
                <td>male</td>
                <td>kenyan</td>
                <td>developer</td>
                <td>frank@gmail.com</td>
            </tr>
            <tr class="info">
                <td>harriet </td>
                <td>22yrs</td>
                <td>female</td>
                <td>kenyan</td>
                <td>nurse</td>
                <td>harriet@gmail.com</td>
            </tr>
            <tr class="active">
                <td>prince</td>
                <td>15yrs</td>
                <td>male</td>
                <td>tanzanian</td>
                <td>developer</td>
                <td>prince@gmail.com</td>
            </tr>
            <tr class="danger">
                <td>ian</td>
                <td>10yrs</td>
                <td>male</td>
                <td>kenyan</td>
                <td>developer</td>
                <td>ian@gmail.com</td>
            </tr>
        </tbody>
        </table>
    </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button id="ann" >animate</button>

            </div>

        </div>
    </div>
    <br />
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="annn"style="background-color: blue;width:100px;height: 100px;position:absolute;">

                </div>
            </div>

        </div>

    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <div class="jumbotron"style="background:aqua">
    <div class="container">
        <div class="row">
           <div id="kibet"> 
                <h1>BOOTSTRAP REVISION</h1>
                <p>web development is the sweetest career in the world</p>
                <p>web development is the sweetest career in the world</p>
                <p>web development is the sweetest career in the world</p>
                <p>web development is the sweetest career in the world</p>
                <p>web development is the sweetest career in the world</p>
                <p>web development is the sweetest career in the world</p>
               <p> <button id="rotich" class="btn btn-info">getstarted</button></p>
            </div>

            </div>

        </div>

    </div>
    <div class="container">
        <form action="" role="form"style="width:300px"method="post"class="form-inline">

            <div class="form-group">
                <label for="username"><b> username</b></label>
                <input type="text"class="form-control" placeholder="username">
            </div><br /><br />
            <div class="form-group">
                <label for="password"><b> password:</b></label>
                <input type="text"class="form-control" placeholder="userpassword">
            </div><br /><br />

            <button class="btn btn-warning">login:</button>

        </form>

    </div>
    <div class="container">
        <ul class="pagination pagination-lg">
            <li class="active"><a href="table.html">1</a> </li>
            <li><a href="#">2</a> </li>
            <li><a href="#">3</a> </li>
            <li><a href="#">4</a> </li>
            <li class="disabled"><a href="#">5</a> </li>
            <li><a href="#">6</a> </li>
            <li><a href="#">7</a> </li>

        </ul>

    </div><br />
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="table.html">1</a> </li>
            <li><a href="#">2</a> </li>
            <li><a href="#">3</a> </li>
            <li class="active"><a href="#">4</a> </li>
            <li class="disabled"><a href="#">5</a> </li>
            <li><a href="#">6</a> </li>
            <li><a href="#">7</a> </li>

        </ul>

    </div>
    <div class="container">
        <ul class="pager">
            <li class="previous"><a href="table.html"><span style="background-color:greenyellow;">&larr; previous</span></a></li>
            <li class="next"><a href="querry.html">next &rarr;</a></li>

        </ul>

    </div>

    <div class="container">
        
        <img src="sly.jpg" alt="abc"width="250px"height="250"class="img-circle">
        <img src="she.jpg" alt="abc"width="250px"height="250"class="img-circle">
        <img src="kitu.jpg" alt="abc"width="250px"height="250"class="img-circle">
        <img src="car.jpg" alt="abc"width="250px"height="250"class="img-circle float-right">


    
    </div>
    <br />
    <br />
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success"><span class="badge">5</span> new</li>
            <li class="list-group-item list-group-item-danger"><span class="badge">10</span> deleted</li>
            <li class="list-group-item list-group-item-info"><span class="badge">5</span> starred</li>
            <li class="list-group-item list-group-item-warning"><span class="badge">20</span> viewed</li>

        </ul>

    </div>
    <br />
    <div class="container">
    <div class="dropdown">
        <button class="btn btn-info dropdown-toggle"data-toggle="dropdown">dropdown
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">mission</a></li>
            <li><a href="#">vission</a></li>
            <li><a href="#">products</a></li>
            <li><a href="#">objective</a></li>

        </ul>
    </div>
    </div>
    <br />
    <br />
    <br />
    <div class="container">
        <button class="btn btn-warning"data-toggle="collapse"data-target="#idiom">collapse</button>
        <div id="idiom"class="collapse">
            bootstrap is the esiest to use  bootstrap is the esiest to use <br />
            bootstrap is the esiest to use  bootstrap is the esiest to use <br />
            bootstrap is the esiest to use  bootstrap is the esiest to use <br />
            bootstrap is the esiest to use  bootstrap is the esiest to use <br />
            bootstrap is the esiest to use  bootstrap is the esiest to use <br />
            bootstrap is the esiest to use  bootstrap is the esiest to use <br />

        </div>

    </div>
    <br />
    <br />
    <div class="container">
    <button type="button" class="close" aria-label="Close">  
        <span aria-hidden="true">×</span>  
      </button> 
    </div> 
    <br />
    <br />
    <br />
    <div class="container">  
        <h3>Popover Example</h3>  
        <ul class="list-inline">  
          <li><a href="#" title="Header" data-toggle="popover" data-placement="top" data-content="Content">Top</a></li>  
          <li><a href="#" title="Header" data-toggle="popover" data-placement="bottom" data-content="Content">Bottom</a></li>  
          <li><a href="#" title="Header" data-toggle="popover" data-placement="left" data-content="Content">Left</a></li>  
          <li><a href="#" title="Header" data-toggle="popover" data-placement="right" data-content="Content">Right</a></li>  
        </ul>  
      </div>  
        
      <script>  
      $(document).ready(function(){  
          $('[data-toggle="popover"]').popover();     
      });  
      </script>  
    <br />
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
   
        <h1 class="center">register</h1>
        <form action=""method=""class="form-inline"role="form">
            <div class="form-group">
            <label for="name">username</label>
            <input class="form-control" type="text"name="username">
        </div>
        <div class="form-group">
            <label for="password" >userpassword</label>
            <input class="form-control" type="text"name="password">
        </div>
            <div class="center">
              <input type="submit"name="submit"value="submit"class="btn brand z-depth-0 ">
            </div>
        </form>
    
</div>
</div>
</div>
    <br />
    <br> /
    </body>
</html>