<!DOCTYPE HTML>
@include('includes.head')
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>報名&繳費資訊</title>
	</head>
	<body id="top">
    
        <div class="bg">
            <img src="../images/background2-1.jpg">
        </div>
        
		<!-- Header -->
            @include('layouts.navbar')
		<!-- Main -->
			<section id="main" class="wrapper withimg ">
                <div class="container" style="max-width: 100%; ">
                    <div class="box-1" style="padding:5em 3%;" >
                        <header class="major">
                            <h2 style="font-size:4vh;">報名 & 繳費資訊</h2>
                            <p style="font-size:3vh;">Register & Payment</p>
                        </header>
                        <section>
                            <h2 class="p-3 mb-2 bg-dark text-white">報名辦法</h2>
                            <div class="d-flex justify-content-center ">
                                <div class="d-flex text-left p-3 mb-2 " style="font-size:20px;">
                                    <ul style="margin:0;">
                                        <li><black style="color: #000000;">營隊時間</black> : 2019/07/15(一)〜2019/07/19(五)</li><br>
                                        <li><black style="color: #000000;">營隊地點</black> : 國立中央大學</li><br>
                                        <li><black style="color: #000000;">招生對象</black> : 國三應屆畢業生〜高三應屆畢業生</li><br>
                                        <li><black style="color: #000000;">報名時間</black> : 即日起〜2019/05/19(日)</li><br>
                                        <li><black style="color: #000000;">報名方式</black> : 填寫並送出表單後，七天內，將有以電話或電子郵件通知報名結果，若未接到電話通知或未收到電子郵件，請來電詢問。</li><br>
                                        <li><black style="color: #ff0000;">家長同意書</black>: <a  style="text-decoration:none;" href="/files/家長同意書.pdf">下載</a></li><br>
                                    </ul>      
                                </div>
                            </div>    
                            <!--button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.open('https://docs.google.com/forms/d/1j3eUy5cWgFJJ0ecW1GAe3J6KhawpzObeVy7e2g54Da0', '_blank');">點我立刻報名！</button-->
                            <button type="button" class="btn btn-secondary btn-lg btn-block" >報名截止囉 QAQ</button>
                            <hr class="major" />
                            <h2 class="p-3 mb-2 bg-dark text-white">報名費用</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" style="font-size:20px;">
                                  <tbody>
                                    <tr>
                                      <th scope="row">一人報名</th>
                                      <td>NT$ 4900 元整</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">三人團報</th>
                                      <td>NT$ 4700 元整</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">四人團報</th>
                                      <td colspan="2">NT$ 4500 元整</td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                            <hr class="major" />
                            <h2 class="p-3 mb-2 bg-dark text-white">退費機制</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" style="font-size:20px;">
                                  <tbody>
                                    <tr>
                                      <th scope="row">6/14 23:59:59 前</th>
                                      <td>退還 8 成</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">6/15 至 7/3</th>
                                      <td>退還 5 成</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">7/4 至 7/11</th>
                                      <td colspan="2">退還 3 成</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">7/12 至 7/15</th>
                                      <td colspan="2">不退費</td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                            
                        </section>
                        

                    </div>
				</div>
			</section>

		<!-- Footer -->
        @include('layouts.footer')
	</body>
</html>