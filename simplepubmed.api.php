<?php

/**
 * @file
 * Pubmedidget hook function api documentation.
 */

/**
 * Triggered when a PubMed Field was updated.
 *
 * The hook will only be triggered if the resolved data has changed and
 * not the value set by the user.
 *
 * @param array $publications
 *   An associative array of the form (id => title) containing new publications.
 * @param string $nid
 *   The Node id of the field the given field is associated to.
 */
function hook_simplepubmed_field_update($publications, $nid) {

}
