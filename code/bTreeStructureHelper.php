private static function b_tree_structure_helper($nodeList, $nodesPerTier, $i, $j, $t){
   $result = array();
   $index = 0;
   foreach ($nodeList as $node){
   	  if ($nodesPerTier[$i+1][$j*$t + $index]){
		$r = self::b_tree_structure_helper(/* ... */);
		array_push($result, $r);
	  }
	  array_push($result,	$node->label->value);
	  if ($nodesPerTier[$i+1][$j*$t + $index+1]  && sizeof($nodeList)-1 == $index){
		$r = self::b_tree_structure_helper(/* ... */);
		array_push($result, $r);
	  }
	  $index++;
   }
   return $result;
}