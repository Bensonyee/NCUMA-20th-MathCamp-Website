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
        @include('layouts.footer')

</html>
