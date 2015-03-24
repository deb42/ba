public static function get_b_tree_data_structure(jsdot_graph $jsdot_graph, $t) {
	$nodesPerTier = self::get_b_tree_nodes_per_tier_structure($jsdot_graph, $t);
	$result = self::b_tree_structure_helper($nodesPerTier[0][0], $nodesPerTier, 0, 0, $t);
	return json_encode ( [$result, $t] );
}