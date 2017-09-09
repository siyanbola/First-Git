<?php  
	  require_once 'include/db_con.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	  <title> Online Solar Store | Solar Panel | Solar Accessories | Solar Chargers </title>

  	  <meta charset="UTF-8">

  	  <link rel="icon" href="star.png"/>

  	  <link rel="stylesheet" type="text/css" href="indx.css">

  	  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

  	  <meta name="viewport" content="width=device-width, initial-scale=1">

  	  <meta name="description" content="Online Solar Store | Solar Panel | Solar Accessories | Solar Chargers" />
      
      <mata name="author" content="Siyanbola">	  

<style type="text/css">

* { padding: 0; margin: 0; }


#top-header { background-color: #2eb767;
		      color: white;
		      height: auto;
              padding: 4px 0;
              letter-spacing: 1px;

}


#top-header .contact { float: right;
	                   padding: 4px 0;
}


#top-header .media-icons { width: 20px;
						   height: 19px;
	                   	   margin: 0 8px;

}


#top-header .media-icons:hover { opacity: 0.8; }




#slider .col-md-12 { width: 100%;
			         height: 305px;
	                 background-image: url(images/tailor.jpg); 
	                 background-repeat: no-repeat;
	                 background-size: 100%;

}




#navbar { padding-top: 10px;		   
 		  text-align: center; 
	      font-family: arial;
	      letter-spacing: 0.5px;
	      border-bottom: 1px solid #e1e1e1; 
}


#navbar ul { list-style: none; }


#navbar li { display: inline; 
			 margin: 0 15px;
}

#navbar li:hover { padding-bottom: 10px;
			       border-bottom: 2px solid gray; 
} 


#navbar li a { color: #666;
			   text-decoration: none;
}





#top-content { text-align: center;

}


#top-content img { margin: 20px 0;
		           width: 140px;
		           height: auto;
		           -webkit-transition:-webkit-transform;
                   transition:-webkit-transform;
}

#top-content img:hover { cursor: pointer;
	                     -webkit-transform:rotate(1deg);
                         transform:rotate(1deg);
}


#top-content p { font-family: contact; 
				 font-size: 13px;
		         font-weight: bold;
			     color: #777;
			     letter-spacing: 1px;
			     line-height: 25px;
}




#bottom-content { 
	              padding-top: 40px;
				  padding-bottom: 100px;
				  background-color: #f1f1f1;
				  border-top: 1px solid #e3e3e3;
				  border-bottom: 1px solid #e3e3e3;
}


#bottom-content .box { background-color: white;
					   font-family: sans-serif;
					   text-align: center;
					   width: 220px;
					   height: auto;
					   padding: 3px;
					   border-radius: 3px;
					   box-shadow: 0 2px 4px 2px #e0e0e0;
}


#bottom-content .box .image {
							  width: 100%;
							  height: 210px;
							  border-radius: 3px;

}


#bottom-content .box .price { color: #2eb767;
							  padding: 8px 0;
}



#footer { font-family: arial;
		  text-align: center;
		  font-size: 13px;
		  color: #888;
		  padding: 10px 0;
}

</style>

</head>

<body> 
	  <script src="bootstrap/jquery.js"></script>

	  <script src="bootstrap/js/bootstrap.min.js"></script>
	  
	  <div class="container-fluid">

	   <div class="row" id="top-header">
	   	 
	   	 <div class="col-xs-6 col-md-6" style="font-size:22px;letter-spacing:1.5px;"> <span style="font-family:contact;font-size:15px;">Welcome to</span> Rilox Concepts </div>

	   	 <div class="col-xs-6 col-md-6" style="font-family: contact;"> 

	   	 	<div class="contact">
	   	 		<span class="glyphicon glyphicon-earphone"></span> <span style="margin:0 5px;">0816-9459-318</span> <a href=""><img class="media-icons" src="images/f.png" title="follow on facebook"></a> <a href=""><img class="media-icons" src="images/t.png" title="follow on twitter"></a> <a href=""><img class="media-icons" src="images/i.png" title="follow on instagram"></a> 
	   	 	</div>
	   	 </div>	   	
	   </div>
<script> 
$(function(){ 
 
$("#myCarousel").carousel('cycle'); 

$(".pause-slide").click(function(){ 
$("#myCarousel").carousel('pause'); }); 
$(".prev-slide").click(function(){ $("#myCarousel").carousel('prev'); 
}); 
 $(".next-slide").click(function(){ 
 $("#myCarousel").carousel('next'); }); 
  $(".slide-one").click(function(){
   $("#myCarousel").carousel(0); }); 
  $(".slide-two").click(function(){ 
    $("#myCarousel").carousel(1); }); 
  $(".slide-three").click(function(){ 
    $("#myCarousel").carousel(2); 
  }); });
     </script>

  <div class="row" id="slider">

		   	 <!-- <div class="col-xs-12 col-md-12">  </div> -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="1"></li>
	<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
	<div class="item active">
	<img src="images/tailor1.jpg" alt="First slide" style="width:100%;height:305px;"> 
	</div>
	<div class="item">
	<img src="images/tailor2.jpg" alt="Second slide" style="width:100%;height:305px;"> 
	</div>
	<div class="item">
	<img src="images/tailor3.jpg" alt="Third slide" style="width:100%;height:305px;"> 
	</div>
	</div>
	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
	</div>

  </div>


	   <div class="row" id="navbar">

	   	 <div class="col-xs-12 col-md-12">

<!-- Popup Menu-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" style="background-color:white; border-radius: 4px;">
<div class="modal-content">  </div>

<!-- Header-->
<div class="modal-header" style="background-color: #2eb767;">
<button type="button" class="close" data-dismiss="modal">
<!-- <span aria-hidden="true">&times;</span>
<span class="sr-only">Close</span> -->
</button>
<h4 class="modal-title" id="myModalLabel" style="float:left;color:white;letter-spacing:0.1em;">Shop Address:</h4>
</div>
<!-- Body -->
<div class="modal-body" style="letter-spacing:0.1em;"> <br><br><address><b>No. 56 Ajeluwa street, off Unilorin road Tanke Ilorin.</b></address><br> </div>

<!-- Footer -->
<div class="modal-footer" style="border-top: 1px solid #e1e1e1;">
 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>

	   	 	<ul>
	   	 		<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home </a></li> <li><a href=""><span class="glyphicon glyphicon-stats"></span> Training </a></li> <li><a href=""><span class="glyphicon glyphicon-cutlery"></span> Services </a></li> <li><a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-map-marker"></span> My Location </a></li>
	   	 	</ul> 
	   	 </div>
	   </div>


	   <div class="row" id="top-content">

	   	 <div class="col-xs-12 col-md-12"> 

	   	 	<img src="images/portriat.jpg">

	   	 	<p> Hello! My name is Siyanbola Yazid<!--Omolewa Barakat Yetunde Ridwan Olagunju -->, a certified fashion designer with 10 years experience of work.
	   	 		<br>
	   	 		Below are collection of my designs over the past years;
	   	 	</p>
	   	 </div>
	   </div>


	   <div class="row" id="bottom-content">

	   	 <div class="col-xs-12 col-md-12"> 
	   	 	<div class="box"> 

	   	 	  <img class="image" src="images/sis.jpg">

	   	 	  <div class="price"> &#8358 5000 </div>

	   	    </div> 
	   	 </div>
	   </div>

	  <div class="row" id="footer">

	  	<div class="col-xs-12 col-md-12"> <footer> &copy <?php echo date('Y'); ?>. All rights reserved </footer> </div>
	  </div>
	  </div>
</body>
</html>