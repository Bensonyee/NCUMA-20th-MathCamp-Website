<!DOCTYPE HTML>
@include('includes.head')
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>交通方式</title>
	</head>
	<body id="top">
    
        <div class="bg">
            <img src="../images/background3-1.jpg">
        </div>
        
		<!-- Header -->
            @include('layouts.navbar')
		<!-- Main -->
			<section id="main" class="wrapper withimg" >
                <div class="container" style="max-width: 100%">
                    <div class="box-1" style="padding:5em 5%;" >
                        <header class="major">
                            <h2 style="font-size:4vh;">交通資訊</h2>
                            <p style="font-size:3vh;">Traffic Information</p>
                        </header>
                        <section>
                            <h2 class="p-3 mb-2 bg-dark text-white">大眾運輸</h2>
                            <div class="d-flex justify-content-center ">
                                <div class="d-flex text-left p-3 mb-2 " style="font-size:20px;">
                                    <ul style="margin:0;">
                                        <li><black style="font-size: 120%; color: #000000;">飛機</black> : 從桃園國際機場搭統聯705客運或搭乘機場捷運至桃園高鐵站。</li><br>
                                        <li><black style="font-size: 120%; color: #000000;">火車</black> : 台鐵中壢站下車，前站出站後轉乘132、133、172市區公車或計程車（車程20~30分鐘）抵達本校。</li><br>
                                        <li><black style="font-size: 120%; color: #000000;">高鐵</black> : 高鐵桃園站下車，出站後於公車站8號月台搭乘132、172市區公車直達中央大學</li><br>
                                        <li><black style="font-size: 120%; color: #000000;">客運</black> : 請見國道客運9025路線圖及時刻表。</li><br>
                                        <li><black style="font-size: 120%; color: #000000;">火雞</black> : 請洽嘉義市運輸用火雞總局。</li><br>
                                    </ul>      
                                </div>
                            </div>    
                            <h2 class="p-3 mb-2 bg-dark text-white">地圖資訊</h2>
                            <div style="text-align: center;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.881744602536!2d121.19039506500495!3d24.970137734002375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346823e9eb7cd8f7%3A0x2a40f754ff1a6598!2z5Lit5aSu5aSn5a246bS757aT6aSo!5e0!3m2!1szh-TW!2stw!4v1521542035844" width="9999" height="450" frameborder="0" style="border:0; max-width: 100%; max-height: 350px;" allowfullscreen=""></iframe>
                                <h4>中央大學鴻經館 桃園市中壢區中大路300號</h4>
                            </div>
                           
                            
                        </section>
                        

                    </div>
				</div>
			</section>

		<!-- Footer -->
        @include('layouts.footer')
	</body>
</html>