try {
    if ($action === DSBUILDER_AJAX_ACTION_CHECK) {
        $jsdot_graph_raw = required_param('jsdot_graph', PARAM_TEXT);
        $result = $dsbuilder_ajax->action_check_valid_graph($jsdot_graph_raw);
        $dsbuilder_ajax->add_to_log($action, $step_no);
    } elseif ($action === DSBUILDER_AJAX_ACTION_NEXT_STEP) {
        $jsdot_graph_raw = required_param('jsdot_graph', PARAM_TEXT);
        $result = $dsbuilder_ajax->action_submit_current_step($jsdot_graph_raw);
        $dsbuilder_ajax->add_to_log($action, $step_no);
    } elseif ($action === DSBUILDER_AJAX_DELETE_LAST_STEP) {
        $result = $dsbuilder_ajax->action_delete_last_step();
        $dsbuilder_ajax->add_to_log($action, $step_no);
    }
}