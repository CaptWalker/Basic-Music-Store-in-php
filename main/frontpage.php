<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>HOME PAGE</title>
    
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
	
	<script src='jquery-1.8.0.min.js'></script>
	<script type="text/javascript">
			$(window).load(function() {
								$(".loader").delay(2000).slideUp(3000);
									});
</script>
    <!-- End of head section HTML codes --->
<style>
 
 .slide{
 	width:40%;
	float:right;
    margin-right:100px;
		 }
.leftsidebar{
    width:30%;
	float:left;
	margin-left:20px;
	margin-top:7%;
	 }	  	 
.player
 {
 padding-top:50%;
   }	
  
.footer{
	border-radius:25px;
	bottom: 20px;
	background-color: #CCFFFF;
	border-top-width: 5cm;
	border-right-width: 5cm;
	border-bottom-width: 5cm;
	border-left-width: 5cm;
	border-top-color: #CC6600;
	border-right-color: #CC6600;
	border-bottom-color: #CC6600;
	border-left-color: #CC6600;
	width:30%;
	text-align:center;
	padding-top:10px;
}  

</style>
<link href="home.css" rel="stylesheet" type="text/css">
<link href="load.css" rel="stylesheet" type="text/css">
</head>
<body background="congruent_pentagon.png">
		<div class='loader'>	</div>
<div class="head">
	 <div align="center">
			<p>
			<img src="image (3).png" width="965" height="147" alt="LOGO" >			</p>
	</div>
    <!-- -------------------------------->
	
		 <div>
	    <div style="border-radius:2px;background-color:grey; height:4.5px;"/>&nbsp;</div>
	    <table width="95%" align="center" >
          <tbody >
            <tr>
             <th scope="col"><a href="frontpage.php">HOME</a></th>
             <th scope="col"><a href="MyMovie.php">Latest Movie Song</a></th>
			 <th scope="col"><a href="About Us.php">About Us</a></th>
             <th scope="col"><a href="Contact Us.php">Contact Us</a></th>
            </tr>
          </tbody>
        </table>
  </div>
		 <div style="border-radius:2px;background-color:grey; height:4.5px;"/>&nbsp;</div>
	    <!-- Insert to your webpage where you want to display the slider -->
		<div style="height:20px;">
		&nbsp;
		</div>
</div>		
	
	<!------------------------------------>
    <!-- Insert to your webpage where you want to display the slider -->
	
	<div class="leftsidebar" align="left"> 
		      	<div align="center">	
		      	  <p><img src="software-music-icon.png" width="155" height="154" alt=""/>
	      	      
		      	  <form action="search.php" method="post"><input type="text" name="t1" id="textfield" placeholder="search" style="color:green"/>
                <input type="submit" name="sub" id="sub" value="Search"/>
		      	<div style="font-family:Calibri; font-size:24px; color:#FFFFFF; text-align:center;"></p>
		      		<p align="center">
		      		  <select name="select" id="select">
                      <option value="songname">By Song Name</option>
                      <option value="movie">By Movie Name</option>
                      <option value="artist">By Artists</option>
                      <option value="type">By Type</option>
                      </select>
		      		</p>
		      	</div>	
		      	</form>
			<div align="center" style="margin-top:40px;">
			<p><span class="style1"><span class="style3">SEARCH BY ALPHABETS</span>:
            	  <a href="alphabet.php?sn=a"> A</a>
            	  <a href="alphabet.php?sn=b"> B</a>
            	  <a href="alphabet.php?sn=c"> C</a>
            	  <a href="alphabet.php?sn=d"> D</a>
            	  <a href="alphabet.php?sn=e"> E</a>
            	  <a href="alphabet.php?sn=f"> F</a>
            	  <a href="alphabet.php?sn=g"> G</a>
            	  <a href="alphabet.php?sn=h"> H</a>
            	  <a href="alphabet.php?sn=i"> I</a>
            	  <a href="alphabet.php?sn=j"> J</a>
            	  <a href="alphabet.php?sn=k"> K</a>
            	  <a href="alphabet.php?sn=l"> L</a>
            	  <a href="alphabet.php?sn=m"> M</a>
            	  <a href="alphabet.php?sn=n"> N</a>
            	  <a href="alphabet.php?sn=o"> O</a>
            	  <a href="alphabet.php?sn=p"> P</a>
            	  <a href="alphabet.php?sn=q"> Q</a>
            	  <a href="alphabet.php?sn=r"> R</a>
            	  <a href="alphabet.php?sn=s"> S</a>
            	  <a href="alphabet.php?sn=t"> T</a>
            	  <a href="alphabet.php?sn=u"> U</a>
            	  <a href="alphabet.php?sn=v"> V</a>
            	  <a href="alphabet.php?sn=w"> W</a>
            	  <a href="alphabet.php?sn=x"> X</a>
            	  <a href="alphabet.php?sn=y"> Y</a>
            	  <a href="alphabet.php?sn=z"> Z</a>          	  </p>
			</div>		
      </div>
</div>
	
	
	<!------------------------------------------------------>
    <div class="slide" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:600px;padding-left:0px; padding-right:20%;">
      <div id="amazingslider-1" style="display:block;position:relative;margin-right:20%;">
        <ul class="amazingslider-slides ,slide" style="display:none;">
          <li><img src="ALBUMS/55f8c67f7c4c2singhisbliing.jpeg" alt="Singh is Bling"  title="Singh is Bling" data-texteffect="Color box" /> </li>
          <li><img src="ALBUMS/561bc48c16a7ePrem-Ratan-Dhan-Payo.jpg" alt="Prem Ratan Dhan Payo"  title="Prem Ratan Dhan Payo" data-texteffect="Color box" data-duration="5000" /> </li>
          <li><img src="ALBUMS/ab-tak-chhappan-2.jpg" alt="Ab Tak Chhappan 2"  title="Ab Tak Chhappan 2" data-texteffect="Color box" data-duration="5000" /> </li>
          <li><img src="ALBUMS/BABY.jpg" alt="BABY"  title="BABY" data-texteffect="Color box" data-duration="5000" /> </li>
          <li><img src="ALBUMS/Bajrangi-Bhaijaan.jpg" alt="Bajrangi Bhaijaan"  title="Bajrangi Bhaijaan" data-texteffect="Color box" data-duration="5000" /> </li>
          <li><img src="ALBUMS/GOW-tn.jpg" alt="Gangs Of Waasseyur"  title="Gangs Of Waasseyur" data-texteffect="Color box" /> </li>
          <li><img src="ALBUMS/Katti-Batti-tn.jpg" alt="Katti Batti"  title="Katti Batti" /> </li>
          <li><img src="ALBUMS/KISE-PYAR-KAROON-tn.jpg" alt="KISE PYAR KAROON"  title="KISE PYAR KAROON" data-texteffect="Color box" data-duration="5000" /> </li>
          <li><img src="ALBUMS/MASAAN-tn.jpg" alt="MASAAN"  title="MASAAN" data-texteffect="Color box" data-duration="5000" /> </li>
          <li><img src="ALBUMS/pyaar-ka-punchnama.jpg" alt="Pyaar Ka Punchnama"  title="Pyaar Ka Punchnama" data-texteffect="Color box" data-duration="5000" /> </li>
          <li><img src="ALBUMS/RAES.jpg" alt="RAES"  title="RAES" data-texteffect="Color box" data-duration="5000" /> </li>
          <li><img src="ALBUMS/Shaandaar-Official-Poster-2.jpg" alt="Shaandaar"  title="Shaandaar" data-texteffect="Color box" data-duration="5000" /> </li>
          <li><img src="ALBUMS/TalvarFilmPoster-tn.jpg" alt="Talvar"  title="Talvar" data-texteffect="Color box" data-duration="5000" /> </li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
          <li><img src="ALBUMS/55f8c67f7c4c2singhisbliing-tn.jpeg" alt="Singh is Bling" title="Singh is Bling" /></li>
          <li><img src="ALBUMS/561bc48c16a7ePrem-Ratan-Dhan-Payo-tn.jpg" alt="Prem Ratan Dhan Payo" title="Prem Ratan Dhan Payo" /></li>
          <li><img src="ALBUMS/ab-tak-chhappan-2-tn.jpg" alt="Ab Tak Chhappan 2" title="Ab Tak Chhappan 2" /></li>
          <li><img src="ALBUMS/BABY-tn.jpg" alt="BABY" title="BABY" /></li>
          <li><img src="ALBUMS/Bajrangi-Bhaijaan-tn.jpg" alt="Bajrangi Bhaijaan" title="Bajrangi Bhaijaan" /></li>
          <li><img src="ALBUMS/GOW-tn-tn.jpg" alt="Gangs Of Waasseyur" title="Gangs Of Waasseyur" /></li>
          <li><img src="ALBUMS/Katti-Batti-tn-tn.jpg" alt="Katti Batti" title="Katti Batti" /></li>
          <li><img src="ALBUMS/KISE-PYAR-KAROON-tn-tn.jpg" alt="KISE PYAR KAROON" title="KISE PYAR KAROON" /></li>
          <li><img src="ALBUMS/MASAAN-tn-tn.jpg" alt="MASAAN" title="MASAAN" /></li>
          <li><img src="ALBUMS/pyaar-ka-punchnama-tn.jpg" alt="Pyaar Ka Punchnama" title="Pyaar Ka Punchnama" /></li>
          <li><img src="ALBUMS/RAES-tn.jpg" alt="RAES" title="RAES" /></li>
          <li><img src="ALBUMS/Shaandaar-Official-Poster-2-tn.jpg" alt="Shaandaar" title="Shaandaar" /></li>
          <li><img src="ALBUMS/TalvarFilmPoster-tn-tn.jpg" alt="Talvar" title="Talvar" /></li>
        </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="jQuery Image Slideshow">jQuery Image Slideshow</a></div>
      </div>
    </div>
	<script type="text/javascript" src="wimpy/wimpy_7.5.51/wimpy.js"></script>
	<div class="player" data-wimpyplayer data-skin="/AVDVR/wimpy/wimpy_7.5.51/wimpy.skins/arc.tsv" data-width=1450 data-height=300 data-startUpText="LISTEN MUSIC" data-random=1  data-volume=20 data-downloadEnable=1 data-glyphFile="F" data-glyphList="A" data-glyphDownload="C" data-glyphLink="a"></div>
		
    <!-- End of body section HTML codes -->
	<div style="height:40px;">
		&nbsp;
</div>
	
	
	<div align="center">
		<footer>
   	   <div align="center" class="footer">Copyright &copy; 2015. All Right Reserved<br/><a href="Back End/login.php"><h7>Admin</h7></a></div>
  		</footer>
	</div>
</div>
</body>
</html>