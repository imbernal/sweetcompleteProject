<?php

class View{

  public function displayProducts($page , $linesPerPage, $maxProducts , $products){
  	$offset = $page * $linesPerPage;
  	$output = '';
  	for($x = 0; $x < $linesPerPage ; $x++){
  		if( $x + $offset >= $maxProducts ){
  			break;
  		}
  		$output .= '<li>' . '<div class="image">' .
  		'<a href="detail.html">' .
  				'<img src="images/' . $products[$x + $offset]["link"] . '.scale_20.JPG" alt="Ambrosia Salad" width="190" height="130"/>'.
  				'</a>' .
  			'</div>' .
  			'<div class="detail">'.
  				'<p class="name"><a href="detail.html">' . $products[$x + $offset]["title"] . '</a></p>' .
  				'<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>'.
  			'</div>'.
  		'</li>';
   	}
   return $output;
  }

}
