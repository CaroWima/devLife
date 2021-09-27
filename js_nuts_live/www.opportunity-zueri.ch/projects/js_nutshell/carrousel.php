
    
<!--CAROUSEEL! SYLE -->
<style>
    #myCarousel{
        width: 500px;
        box-shadow: inset black 10px 10px 40px:
    }

    .carousel-item {
    height: 20rem;
    background-color: black;
    color: white;
    position: relative;}

    .conteiner {
      position: absolute;
      left: 200px;
      top: 80px;}  

    .overlay-image {
    position: absolute;
    left: 0;
    bottom:0;
    right:0;
    top: 0;
    background-position: center;
    background-size:cover;
    opacity:1;}

</style>

<!--CAROUSEEL! -->

<div id="myCarousel" class="carousel slide carousel-fade pb-5" data-ride="carousel">

   <ol class="carousel-indicators">
      <li data-target="$myCarousel"
          data-slide-to="0" class="active"></li>
      <li data-target="$myCarousel"
          data-slide-to="1"></li>
      <li data-target="$myCarousel"
          data-slide-to="2"></li>  
    </ol>

<div class="carousel-inner">
                  

      <div class="carousel-item active" data-interval="3000">
        <div class="overlay-image"  style="background-color:green;"></div>
           <div class="container conteiner">

            <h1>bla bla bla</h1>
            <h2>bla bla bla</h2>
            <h3>bla bla bla</h3>
            <h1>bla bla bla</h1>

          </div>
      </div>


    <div class="carousel-item " data-interval="3000" >
        <div class="overlay-image"  style="background-image: url(projects/js_nutshell/images/atmospheric.jpg);"></div>
          <div class="container conteiner">
            <h1>Hier Auch</h1>   
          </div>
     </div>


    <div class="carousel-item" data-interval="3000">
        <div class="overlay-image"  style="background-image: url(/IMG/FOTOOO!.png);">
         </div>
          <div class="container conteiner">
            <h1>WTF</h1>
         </div>
    </div>   


  <!-- 3 Comandos del carusel -->
  <a href="#myCarousel"
               class="carousel-control-prev" role="button"
               data-slide="prev"> 
               <span class="sr-only"></span>
               <span class="carousel-control-prev-icon"
                aria-hidden="true"></span>
</a>
   <a href="#myCarousel"
                 class="carousel-control-next" role="button"
                 data-slide="next"> 
                <span class="sr-only"></span>
                <span class="carousel-control-next-icon"
                 aria-hidden="true"></span>
    </a>

  </div>  
 </div>
</div>
