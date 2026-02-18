<style>
 .hero {
 
  color: white;
  text-align:start;
  
  font-size: 1.4rem;
  width: 100%;
  height:350px;
  overflow: hidden;
  margin: 0;
  padding: 0;
}

.hero img {
  width: 100%;
  height: 1000px;
  display: block;
  object-fit: cover;
}

</style>

<main class="hero">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="banner">
</main>