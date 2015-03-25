try {
  if ($action === DSBUILDER_AJAX_ACTION_CHECK) {
    $result = $dsbuilder_ajax->action_check_valid_graph($jsdot_graph_raw, $additional_info);
  } elseif ($action === DSBUILDER_AJAX_ACTION_NEXT_STEP) {
    $result = $dsbuilder_ajax->action_submit_current_step($jsdot_graph_raw, $additional_info);
  } elseif ($action === DSBUILDER_AJAX_DELETE_LAST_STEP) {
    $result = $dsbuilder_ajax->action_delete_last_step();
  }
}