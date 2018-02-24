<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
  private $arrayPeliculas = array(
      array(
        'title' => 'El padrino',
        'year' => '1972',
        'director' => 'Francis Ford Coppola',
        'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjEyMjcyNDI4MF5BMl5BanBnXkFtZTcwMDA5Mzg3OA@@._V1_SX214_AL_.jpg',
        'rented' => false,
        'synopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.'
      ),
  		array(
  			'title' => 'El Padrino. Parte II',
  			'year' => '1974',
  			'director' => 'Francis Ford Coppola',
  			'poster' => 'http://ia.media-imdb.com/images/M/MV5BNDc2NTM3MzU1Nl5BMl5BanBnXkFtZTcwMTA5Mzg3OA@@._V1_SX214_AL_.jpg',
  			'rented' => false,
  			'synopsis' => 'Continuación de la historia de los Corleone por medio de dos historias paralelas: la elección de Michael Corleone como jefe de los negocios familiares y los orígenes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, llegó a ser un poderosísimo jefe de la mafia de Nueva York.'
  		),
  		array(
  			'title' => 'La lista de Schindler',
  			'year' => '1993',
  			'director' => 'Steven Spielberg',
  			'poster' => 'http://ia.media-imdb.com/images/M/MV5BMzMwMTM4MDU2N15BMl5BanBnXkFtZTgwMzQ0MjMxMDE@._V1_SX214_AL_.jpg',
  			'rented' => true,
  			'synopsis' => 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones públicas, organiza un ambicioso plan para ganarse la simpatía de los nazis. Después de la invasión de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación le hace prosperar rápidamente. Su gerente (Ben Kingsley), también judío, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.'
  		)
    );
  public function index()
  {
    return view('catalog.index', array('arrayPeliculas'=>$this->arrayPeliculas));
  }

  public function show($id)
  {
    return view('catalog.show', array('pelicula'=>$this->arrayPeliculas[$id], 'movie_id' => $id));
  }

  public function create()
  {
    return view('catalog.create');
  }

  public function edit($id)
  {
    return view('catalog.edit', array('id'=>$id));
  }

  public function store(){
    return "hola";
  }
}
