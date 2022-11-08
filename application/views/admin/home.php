<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f3e04be5d1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <style>
  
  *{margin:0; padding:0;font-family: 'Poppins', sans-serif;}
  
  body{background:#efefef;}  
  #wthr_info
  {
  width:calc(100%-60px);
  height:100%;
  background:#fff;
  margin:70px 30px 20px 30px;
  padding:0 0 60px 0;
  border-radius:1.5rem;
  }
  
  #location
  {
  text-align:center;
  
  }
  
  #icon
  {
  font-size:90px;
  color:#FACC2E;
  text-align:center;
  
  }
  
  #icon img
  {
  width:100px;
  height:100px;
  padding-top:40px;
  }
  
  #details
  {
  width:calc(100%-30%);
  height:100%;
  margin-left:15%;
  }
  
  #details h1
  {
  font-size:42px;
  font-weight:200;
  }
  
  #details p
  {
   opacity:0.6;
   line-height:1.6;
  }
  
  #details p span
  {
  
  font-weight:bold;
  margin-right:10px;
  }
  
  #details #name{font-weight:200;}
  
  #highlight,#week
  {
  
  width:calc(100%-10%);
  height:100%;
  margin:50px 5%;
  
  }
  
  #highlight h1,#week h1
  {
  margin-top:20px;
  font-size:22px;
  }
  
  #highlight_container
  {
  width:100%;
  height:100%;
  display:flex;
  flex-wrap:wrap;
  margin-top:20px;
  padding-bottom:40px;
  }
  .highlight-box
  {
  padding:20px;
  margin:auto;
  text-align: center;
  background:#fff;
  width:100px;
  height:100px;
  border-radius:1.5rem;
  margin-top:40px;
  }
  .highlight-box i
  {
   text-align:center;
   margin-bottom:20px;
   font-size:22px;
  }
  .highlight-box p:nth-child(2){font-weight:bold; opacity:0.7;}
  .week_box
  {
  width:20px;
  height:250px;
  background:#fff;
  margin:60px 0 0 0;
  text-align:center;
  border-radius:1.5rem;
  
  
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        flex-direction:column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        
  
  
  }
  .week_box img
  {
   width:80px;
   height:80px;
   display:block;
   object-fit:cover;
  }
  .week_box p:nth-child(2)
  {
  font-weight:bold;
  
  }
  
  .week_box h2
  {
  font-weight:200;
  
  }
  .week_box .d_t{font-weight:bold; opacity:0.7;}
  .swiper{width:100%; height:100%; display:block; position:relative;}
  
  #dlg{
  display:none;
  position:fixed;
  top:5%;
  z-index:3;
  width:calc(100%-6%);
  height:250px;
  margin:30px 3% 0 3%;
  background:#000;
  color:#fff;
  line-height:1.5;
  border-radius:1.5rem;
  
  }
  
  #dlg p
  {
  margin:80px 20px 30px 20px;
  
  }
  #week_container
  {
  width:100%;
  height:100%;
  
  }
  
  @media only screen and (min-width:900px) {
  
  #wthr_info{
  margin:120px 20% 20% 20%;
  width:calc(100%-40%);
  
  
  }
  #resp
  {
  display:flex;
  
  }
  
  #week{
  
  width:400px;
  height:100%;
  
  }
  
  
}
  
  
   
  </style>
 
 
 </head>
 <body>
 
 <div id="wthr_info">
 <div id="icon">
 <img src="http://openweathermap.org/img/w/02d.png" alt="Weather Icon"/>
 </div>
 <div id="details">
 <h1 id="temp">_ _°C</h1>
 <p id="dt">_ _</p>
 <p><i class="fas fa-map-marked-alt"></i><span id="name">_ _</span></p>
 <p id="des">_ _</p>
 </div>
 
 </div>
 <!--end of weather info card-->
 
 <div id="resp">
 <div id="highlight">
 <h1>Today's Highlights</h1>
 <div id="highlight_container">
 
 <div class="highlight-box">
 <i class="fas fa-tint"></i>
 <p id="humidity">22</p>
 <p>Humidity</p>
 
 </div>
 
 <!--end of box-->
 
 <div class="highlight-box">
 <i class="fas fa-fan"></i>
 <p id="wind">30 Km/Hr</p>
 <p>Wind</p>
 
 </div>

<!--end of box-->


 <div class="highlight-box">
 <i class="fas fa-temperature-low"></i>
 <p id="temp_min">25°C</p>
 <p>Min Temperature</p>
 
 </div>

<!--end of box-->



 <div class="highlight-box">
 <i class="fas fa-temperature-high"></i>
 <p id="temp_max">31°C</p>
 <p>Max Temperature</p>
 
 </div>

<!--end of box-->


 <div class="highlight-box">
 <i class="fas fa-smog"></i>
 <p id="fog">20</p>
 <p>Visibility</p>
 
 </div>

<!--end of box-->


 <div class="highlight-box">
 <i class="fas fa-wind"></i>
 <p id="pressure">12 hpa</p>
 <p>Pressure</p>
 
 </div>

<!--end of box-->
 
 
 </div>
 <!--end of highlight container-->
 
 </div>
 <!--end of highlight-->
 
 <div id="week">
 
 <h1>Weekly Highlight</h1>
 <div class="swiper">
 <div class="swiper-wrapper" id="week_container">
 
 <!--
 
 <div class="week_box">
 <img src="http://openweathermap.org/img/w/01d.png" alt="weekly Highlights"/>
 <h2>30°C</h2>
 <p>Tuesday</p>
 <p>Rainy</p>
 
 </div>
 -->
 
 </div>
 </div>

 <!--end of week container-->
 
 
 </div>
 <!--end of week -->
 
 </div>
 <!--end of responsive box-->
 
 <div id="dlg">
 <p>
 Please turn on your location
 and <a href="JavaScript:location.reload();">Click Here</a>
 </p>
 </div>
 <!--Dialogue-->

 
 <script>
 
 
 const swiper = new Swiper('.swiper', {
 direction: 'horizontal',
 spaceBetween:30,

 });
 
 $(document).ready(function(){
 

 
 var d=new Date();
 var day=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
 var t,ini;
 
 if(d.getHours()>12)
 t=d.getHours()-12,ini="PM";
 else if(d.getHours()<12)
 t=d.getHours(),ini="AM";
 else
 t=d.getHours(),ini="PM";
 
 $("#dt").html("<span>"+day[d.getDay()]+"</span>"+t+":"+d.getMinutes()+" "+ini);
 
 function send(link)
 {
 $.getJSON(link,function(data){
 
 $("#temp").html(Math.round((data.main.temp-273.15)*10)/10+"°C");
 $("#name").html(" "+data.name);
 var src="http://openweathermap.org/img/w/";
 $("#icon img").attr("src",src+data.weather[0].icon+".png")
 $("#des").html("<span>"+data.weather[0].description+"</span>");
 $("#humidity").html(data.main.humidity+"%");
 $("#wind").html(Math.round((data.wind.speed*3.68)*10)/10+" Km/Hr");
 $("#temp_min").html(Math.round((data.main.temp_min-273.15)*10)/10+" °C");
 $("#temp_max").html(Math.round((data.main.temp_max-273.15)*10)/10+" °C");
 $("#fog").html(data.visibility/1000+" Km");
 $("#pressure").html(data.main.pressure*0.01+" hpa");
 });
 
 
 }
 
 
 function forecast(link)
 {
 
 $.getJSON(link,function(data){
 
 var lstr=" ";
 var d_arr=[],d_t=[];
 var c=0,cond=0;
 var sk;
 
 $.each(data.list,function(k,v){
 
 d_arr[k]=v.dt_txt.split(" ")[0].split("-")[2]-d.getDate()+d.getDay();
 
 if(d_arr[k]>6)
 {
 
 if(cond==0)
 {
 sk=d_arr[k];
 d_arr[k]=c;
 cond=1;
 
 }
 else
 {
 
 if(sk==d_arr[k])
 {
 
 d_arr[k]=c;
 
 }
 else
 {
 sk=d_arr[k];
 c++;
 d_arr[k]=c;
 
 }}}
 
 
 
 var hr=v.dt_txt.split(" ")[1].split(":")[0];
 var min=v.dt_txt.split(" ")[1].split(":")[1];
 
 if(hr>12)
 {
 
 d_t[k]=hr-12+":"+min+"PM";
 
 }
 else if(hr<12)
 {
 if(hr==0)
 {
 hr=12;
 }
 d_t[k]=hr+":"+min+"AM";
 
 }
 else
 {
 d_t[k]=hr+":"+min+"PM";
 
 }
 
 
  
 lstr=lstr+' <div class="week_box swiper-slide">'+
 '<img src="http://openweathermap.org/img/w/'+v.weather[0].icon+'.png" alt="weekly Highlights"/>'+
 '<h2>'+Math.round((v.main.temp-273.15)*10)/10+'°C</h2>'+
 '<p class="d_t">'+ day[d_arr[k]]+' '+d_t[k]+'</p>'+
 '<p>'+v.weather[0].description+'</p>'+
 
 '</div>';
 
 });
 
 
 
 $("#week_container").html(lstr);
 
 
 });
 
 
 }
 
 
 function success(position)
 {
 var lat=position.coords.latitude;
 var long=position.coords.longitude;
 var key="447aed95826b39ebe03a4819d1f90c1d";
 var url="https://api.openweathermap.org/data/2.5/weather?lat="+lat+"&lon="+long+"&appid="+key;
 var wrl="https://api.openweathermap.org/data/2.5/forecast?lat="+lat+"&lon="+long+"&appid="+key;
 send(url);
 forecast(wrl);
 }
 
 function err(res)
 {
 $("#dlg").css("display","block");
 $("body").css("background","rgba(0,0,0,0.5)");
 }
 
 
  if (navigator.geolocation) 
  {
    navigator.geolocation.getCurrentPosition(success,err);
  }
  
 
 
 
 });
 
 
 </script>
 
 
 </body>
 </html>