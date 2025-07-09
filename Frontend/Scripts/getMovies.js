document.addEventListener("DOMContentLoaded", function fetchMovies() 
{
    const container = document.querySelector(".movie_cards");
    axios.get('http://localhost/Cinema_/Backend/movies') 
    .then(response => response.json())
    .then(movies => {
      for (let i = 0; i < movies.length; i++) {
        const movie = movies[i];
        container.innerHTML += `<div class="movie_card">
                              <img class="cover " src= "${movie.poster_url}"/>
                              <div class="movie_info">
                                <h2 class="Title">${movie.name}</h2><span class="release_year">${movie.release_year}</span>
                              </div>
                              </div>`;
      }
  })
  .catch(error => console.error('Error:', error));

});