<?php
class Actor
{
  private $first_name;
  private $last_name;
  private $rating;
  private $actor_id;
  private $favorite_movie_id;
  private $movie_title;

  public function __construct($first_name, $last_name, $rating)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->rating = $rating;

  }

  public function setFirstName($first_name)
  {
    $this->title = $first_name;
  }

  public function getFirstName()
  {
    return $this->first_name;
  }

  public function setRating($rating)
  {
    $this->rating = $rating;
  }

  public function getRating()
  {
    return $this->rating;
  }

  public function setLastName($last_name)
  {
    $this->last_name = $last_name;
  }

  public function getLastName()
  {
    return $this->last_name;
  }
  public function setMovieTitle($movie_title)
  {
    $this->movie_title = $movie_title;
  }

  public function getMovieTitle()
  {
    if ($this->movie_title) {
      return $this->movie_title;
    }
    return 'Sin película favorita';
  }

  public function setFavoriteMovieId($favorite_movie_id)
  {
    $this->favorite_movie_id = $favorite_movie_id;
  }

  public function getFavoriteMovieId()
  {
    return $this->favorite_movie_id;
  }
  public function getActorId()
  {
    return $this->actor_id;
  }
  public function setActorId($actor_id){
    $this->actor_id = $actor_id;
  }
}
