<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/style1.css" rel="stylesheet" >
</head>

<body>
<div  id="container" > 
      	<div id="header">
  			<a href="#"><img src="images/logo.jpg" alt="DPU Book"  width="180px" height="150px" style="float:left;"  /></a> 
  			<a href="#"><img src="images/banner.jpg" alt="Banner"  width="780px" height="150px"  style="display:block;"  /></a>
  		</div><!-- end header -->
  		<div id="menu">
            <ul>
                <li><a href="{{ route('page1') }}">หน้าหลัก</a></li>
                <li><a href="{{ route('page2') }}">สินค้า</a></li>
                <li><a href="{{ route('page3') }}">สมัครสมาชิก</a></li>
            </ul>   	     	 
  		</div><!-- end menu -->      
		<div id="sidebar1">
            <div id="nav">
                <ul>
                    <li><a href="http://www.dpu.ac.th">			Link 1</a></li>
                    <li><a href="http://www.facebook.com">	Link 2</a></li>
                    <li><a href="http://www.gmail.com">		Link 3</a></li>
                </ul>                          
            </div><!-- end navigation -->  	 
  		</div><!-- end sidebar1 -->
        <div id="content">
            @yield('content') 
        </div><!-- end content -->
        <div id="footer">
    		<h1>Footer</h1>
  		</div><!-- end footer -->
    </div><!-- end container -->
</body>
</html>