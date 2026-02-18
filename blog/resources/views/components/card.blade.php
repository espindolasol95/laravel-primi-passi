<div class="card">
   <img src="{{ Vite::asset('resources/img/landing.png') }}" alt="intestazione img a card" class='card-img-top'>
   <div class="card-title">
       <h3>{{ $titolo }}</h3>
   <h4>{{ $sottotitolo }}</h4>
   <h6>{{$testo}}</h6>
   
   </div>
  
   <div class= "card-body">
      {{$slot}}
   </div>
</div>