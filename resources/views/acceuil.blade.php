@extends("layouts.master")

@section("contenu")
<br><br><br><br><br><br>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

  <div class="container marketing">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">All in Time 💡 : <span class="text-muted">Ce que vous pouvez faire.</span></h2>
        <p class="lead">
            ✅ Définir une liste d'activités à faire plus tard <br>
            ✅ Concevoir un programme de réalisation de vos tâches dans la semaine <br>
            ✅ Lancer un compte à rebour pour un évènement à venir
        </p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image
        img-fluid mx-auto acc_img" src="{{asset('img/blog57.jpg')}}" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">All in Time 💡 : <span class="text-muted">Rester informer .</span></h2>
        <p class="lead">
            ✅ Recevoir les derniers nouvelles d'ici et d'ailleurs <br>
            ✅ Envoyer et recevoir des messages <br>
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg
         featurette-image img-fluid mx-auto  acc_img" src="{{asset('img/blog9.jpg')}}" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">All in Time 💡 : <span class="text-muted">Birth chat .</span></h2>
        <p class="lead">
            ✅ Recevoir des notifiation le jour de l'anniversaire d'un contact <br>
            ✅ Envoyer des messages personnalisés ou automatiques <br>
        </p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image
        img-fluid mx-auto  acc_img" src="{{asset('img/blog57.jpg')}}" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

  </div><!-- /.container -->

</div>


<br><!--{{asset('img/blog9.jpg')}}-->
