<script>
        function getCookie(name){var nameEQ=name+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' ')c=c.substring(1,c.length);if(c.indexOf(nameEQ)==0)return c.substring(nameEQ.length,c.length);}
return null;}
function isApp(){return getCookie('client')=='app';}
function isAndroid(){return/Android/.test(navigator.userAgent||navigator.vendor||window.opera);}
function isIOS(){return/iPad|iPhone|iPod/.test(navigator.userAgent||navigator.vendor||window.opera)&&!window.MSStream;}
function loadAppJS(){var element=document.createElement("script");element.async=true;element.defer=true;element.src='/js/addons/nk_mp_mobile/app/libs/requirejs/require.js';element.setAttribute('data-main','/js/addons/nk_mp_mobile/app/AppLoader.js?t=1804115');document.head.appendChild(element);}
if(location.search.indexOf("phone_app=Y")>=0)document.cookie="client=app";var bodyClass=document.body.getAttribute('class');bodyClass+=isApp()?' app':'';bodyClass+=isIOS()?' ios':isAndroid()?' android':'';document.body.setAttribute('class',bodyClass);if(isApp()){if(document.addEventListener){document.addEventListener("DOMContentLoaded",function(){document.removeEventListener("DOMContentLoaded",arguments.callee,false);loadAppJS();},false);}else if(document.attachEvent){document.attachEvent("onreadystatechange",function(){if(document.readyState==="complete"){document.detachEvent("onreadystatechange",arguments.callee);loadAppJS();}});}}</script>