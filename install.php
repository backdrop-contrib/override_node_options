<?php
// $Id$

/**
 * Implementation of hook_install().
 */
function override_node_options_install() {
  // nothing to do
}

/**
 * Implementation of hook_uninstall().
 */
function override_node_options_uninstall() {
  db_query("DELETE FROM {variable} WHERE name LIKE 'override_node_options_%'");
  db_query("DELETE FROM {system} WHERE name = 'override_node_options'");
  // TODO we could be leaving permissions in the permission table, but they're tricky to remove
}

