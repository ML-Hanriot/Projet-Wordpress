<?php
// On vérifie si le script est appelé par wordpress
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}

// Dans le cas de plugins plus complexe On supprimera les options, les tables, etc, pouvant être présente.
delete_option('nom_plugin_option');