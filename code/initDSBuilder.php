 // call initialize graph function
$this->page->requires->js_init_call('M.mod_dsbuilder.init_jsdot_show', array(
		$div_id_graph_2,
		json_encode($com_object->graph)
), false, self::get_jsdot_module_info());