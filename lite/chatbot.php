<html>

<body>

<! — Load Facebook SDK for JavaScript →
 <script>
 window.fbAsyncInit = function() {
 FB.init({
 appId : ‘362231517948196,
 autoLogAppEvents : true,
 xfbml : true,
 version : ‘v3.0’
 });
 };

(function(d, s, id){
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = “https://connect.facebook.net/en_US/sdk.js”;
 fjs.parentNode.insertBefore(js, fjs);
 }(document, ‘script’, ‘facebook-jssdk’));
</script>

<div id=”fb-root”></div>
<script>(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = ‘https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
 fjs.parentNode.insertBefore(js, fjs);
}(document, ‘script’, ‘facebook-jssdk’));</script>

<! — Your customer chat code →
<div class=”fb-customerchat”
 attribution=”setup_tool”
 page_id=”1098531706992524"
 theme_color=”#0084ff”>
</div>
</body>
</html>