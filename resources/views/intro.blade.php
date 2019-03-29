<!DOCTYPE HTML>
@include('includes.head')
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>營隊介紹</title>
	</head>
	<body id="top">
    
        <div class="bg">
            <img src="../images/background4-1.jpg">
        </div>
        
		<!-- Header -->
            @include('layouts.navbar')
		<!-- Main -->
			<section id="main" class="wrapper withimg ">
                <div class="container" style="max-width: 100%; ">
                    <div class="box-1" style="padding:5em 3%;" >
                        <header class="major">
                            <h2 style="font-size:4vh;">松數營介紹</h2>
                            <p style="font-size:3vh;">Introduction</p>
                        </header>
                        <section>
                            <h2 class="p-3 mb-2 bg-dark text-white">關於松數營</h2>
                            <div class="d-flex justify-content-center ">
                                <div class="d-flex text-left p-3 mb-2 " style="font-size:20px;">
                                    <h4>在你的印象中，數學是否只剩下無止境的練習和背誦呢？那你就大錯特錯囉！數學其實既神奇又充滿魔力，我們會讓你知道學習數學是可以沒有壓力的，重拾對數學的熱情。</h4>
                                </div>
                            </div> 
                            <div class="d-flex justify-content-center ">
                                <div class="d-flex text-left p-3 mb-2 " style="font-size:20px;">
                                    <h4>在這裡不只能學習到數學的奧妙，還能遇到志同道合的朋友，一起走在數學的大道上，面對各式各樣的難題和關卡，互相切磋合作，除此之外還有可能成為你一生的知己。</h4>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center ">
                                <div class="d-flex text-left p-3 mb-2 " style="font-size:20px;">
                                    <h4>我們準備了一連串緊張又刺激的活動，不只能輕鬆的學習，還能交到許多新朋友。總共五天的營期，每一刻都高潮迭起絕無冷場，將是這個炎炎夏日最與眾不同的冒險，你還在等什麼？</h4>
                                </div>
                            </div>
                            <h2 class="p-3 mb-2 bg-dark text-white">第十九屆活動剪影</h2>
                            <div id="quad">
                                <figure>
                                    <img src="../images/snip/3.jpg" alt="rose-red-wine">
                                    <figcaption>活動剪影</figcaption>
                                </figure>
                                <figure>
                                    <img src="../images/snip/2.jpg" alt>
                                    <figcaption>活動剪影</figcaption>
                                </figure>
                                <figure>
                                    <img src="../images/snip/1.jpg" alt>
                                    <figcaption>活動剪影</figcaption>
                                </figure>
                                <figure>
                                    <img src="../images/snip/21.JPG" alt>
                                    <figcaption>活動剪影</figcaption>
                                </figure>
                            </div>
                        </section>
                        

                    </div>
				</div>
			</section>

		<!-- Footer -->
        @include('layouts.footer')
	</body>
</html>
<script>
var quadimages = document.querySelectorAll("#quad figure");
for(i=0; i<quadimages.length; i++) {
  quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); quad.classList.toggle("full") }); 
}
</script>
