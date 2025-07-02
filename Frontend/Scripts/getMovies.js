
document.addEventListener("DOMContentLoaded", function() {


  window.onload = function fetchMovies() {
    const container = document.querySelector(".movie_cards");
      axios.get('http://localhost/Cinema/Backend/Controllers/User/getMovies.php') 
      .then(response => response.json())
      .then(movies => {
        for (let i = 0; i < movies.length; i++) {
        const movie = movies[i];
        container.innerHTML += `<div class="movie_card">
                              <img class="cover " src= "${movie.poster_url}"/>
                              <video class="trailer " src= "${movie.trailer_url}"></video>
                              <div class="movie_info">
                                <h2 class="Title">${movie.name}</h2><span class="release_year">${movie.release_year}</span>
                                <span class="Rating">${movie.rating}</span>
                                <p>Genre: <span class="Genre">${movie.genre}</span></p>
                                <p>Date & Time: <span class="Showtime">${movie.screening_date}</span></p>
                                <p>Locaton: <span class="Location">${movie.location}</span></p>
                                <p>Cast: <span class="Cast">${movie.cast}</span></p>
                              </div>
                              </div>`;
        }
  })
  .catch(error => console.error('Error:', error));
  console.log("hi");
  };

});