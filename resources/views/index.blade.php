<!DOCTYPE HTML>
@include('includes.head')
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>二十屆松數營</title>
	</head>
    
	<body id="top">
        
        <div class="bg">
            <img src="../images/background1-3.jpg">
        </div>
        
        <!-- Header -->
        @include('layouts.navbar')

		<!-- Banner -->
        @include('layouts.banner')
        
        
 		<!-- timeline -->
        @include('layouts.timeline')
        
		<!-- News -->
        @include('layouts.news')
       
		<!-- Introduction -->
        @include('layouts.introduction')

		<!-- Informations -->
        @include('layouts.information')

		<!-- Contact us -->
        @include('layouts.contact')
			
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
                    <div class="footer_text" style="text-align:center;text-justify:distribute;">
                        <h2 style="margin-bottom:0;">2019 第二十屆松數營</h2>
                        <ul class="icons" style="margin-bottom:0.5em; margin-top:0.5em;">
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        </ul>
                        <p>主辦單位 國立中央大學數學系</p>
                        <p>執行長: 簡延叡 &nbsp | &nbsp 副執行長: 沈右任</p>

                    </div>
				</div>
			</footer>    

</html>
