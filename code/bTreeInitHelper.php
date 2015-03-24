private static function b_tree_initialize_helper(jsdot_graph $jsdot_graph, $json_row, $height, $index_array, $spacing_x, $spacing_y, $t) {
  /* ... */
  $index_node = 0;
  foreach($json_row as $e){
    if(gettype($e) == "string"){
	  $node = new jsdot_node (/* ... */);
	  $jsdot_graph->nodes [] = $node;
	  $index_node++;
    } else {
	  $left = self::b_tree_initialize_helper (/* ... */);
    }
  }
}