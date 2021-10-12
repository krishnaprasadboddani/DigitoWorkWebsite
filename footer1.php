 <!--Main Footer-->
  

 <?php

  include('dbcon.php');


  $result = mysqli_query($con, "SELECT * FROM footer");
  while ($row = mysqli_fetch_assoc($result)) {


  ?>
   <footer class="main-footer" style="background-image:url(images/testimonial-bg.jpg)">

     <div class="auto-container">

       <!--Widgets Section-->
       <div class="widgets-section">
         <div class="row clearfix">

           <!--big column-->
           <div class="big-column col-lg-6 col-md-12 col-sm-12">
             <div class="row clearfix">

               <!--Footer Column-->
               <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                 <div class="footer-widget logo-widget">
                   <div class="logo2" style="width:235px;margin-top:45px">
                     <a href="index.php"><img src="images/digitworklog.jpg" alt="" /></a>
                   </div>



                 </div>
               </div>

               <!--Footer Column-->
               <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                 <div class="footer-widget links-widget">
                   <?php echo $row['p1']; ?>
                 </div>
               </div>

             </div>
           </div>

           <!--big column-->
           <div class="big-column col-lg-6 col-md-12 col-sm-12">
             <div class="row clearfix">

               <!--Footer Column-->
               <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                 <div class="footer-widget news-widget">
                   <?php echo $row['p2']; ?>

                 </div>
               </div>

               <!--Footer Column-->
               <div class="footer-column col-lg-6 col-md-12 col-sm-12">
                 <div class="footer-widget map-widget">
                   <div class="social-media">
                     <?php echo $row['p3']; ?>
                   </div>
                 </div>
               </div>

             </div>
           </div>

         </div>
       </div>

     </div>

     <!--Footer Bottom-->
     <div class="footer-bottom">
       <div class="auto-container">
         <div class="row clearfix">
           <div class="column col-lg-6 col-md-6 col-sm-12">
             <div class="copyright">Copyrights 2020. All Rights are Reserved by <a href="#"><span class="fodigtiowork" style="background-color:#fff"><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span></span></a></div>
           </div>
           <div class="column col-lg-6 col-md-6 col-sm-12">
             <ul class="footer-nav">
               <!--<div class="copyright">Designed By Navaneetha</div> -->
             </ul>
           </div>
         </div>
       </div>
     </div>

   </footer>
 <?php }
  ?>

 </div>
<!--End pagewrapper-->

<!--Scroll to top-->
<!--
<script type="text/javascript">function add_chatinline(){var hccid=81176819;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>  -->


<!--
<script type='text/javascript'>
var onWebChat={ar:[], set: function(a,b){if (typeof onWebChat_==='undefined'){this.ar.
push([a,b]);}else{onWebChat_.set(a,b);}},get:function(a){return(onWebChat_.get(a));},
w:(function(){ var ga=document.createElement('script'); ga.type = 'text/javascript';
ga.async=1;ga.src=('https:'==document.location.protocol?'https:':'http:') + 
'//www.onwebchat.com/clientchat/7cf62ea6f227c60d675b6297aea00244';var s=
document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})()}
</script>
 -->
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '11d98da9-1e30-4567-a1a7-849dafe85e97', f: true }); done = true; } }; })();</script>
<script src="js/jquery.js"></script> 
<script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/color-settings.js"></script>
<script src="js/jquery-3.4.1.min.js"></script> 





<script src="js1/jquery.js"></script>
<script src="js1/owl.js"></script>


<script src="js1/script.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAOvgMzMavm0loFdwqNrzzVh42X_-lDZ3w"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>

</html>