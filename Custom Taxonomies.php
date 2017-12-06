function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Catalogue Categories.
	 */

	$labels = array(
		"name" => __( "Catalogue Categories", "" ),
		"singular_name" => __( "Catalogue Category", "" ),
	);

	$args = array(
		"label" => __( "Catalogue Categories", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Catalogue Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'cat_cats', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "cat_cats", array( "cat_posts" ), $args );

	/**
	 * Taxonomy: Learning Categories.
	 */

	$labels = array(
		"name" => __( "Learning Categories", "" ),
		"singular_name" => __( "Learning Category", "" ),
	);

	$args = array(
		"label" => __( "Learning Categories", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Learning Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'learn_cats', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "learn_cats", array( "learn_posts" ), $args );

	/**
	 * Taxonomy: Help Categories.
	 */

	$labels = array(
		"name" => __( "Help Categories", "" ),
		"singular_name" => __( "Help Category", "" ),
	);

	$args = array(
		"label" => __( "Help Categories", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Help Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'help_cats', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "help_cats", array( "help_posts" ), $args );

	/**
	 * Taxonomy: Related Services.
	 */

	$labels = array(
		"name" => __( "Related Services", "" ),
		"singular_name" => __( "Related Service", "" ),
	);

	$args = array(
		"label" => __( "Related Services", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Related Services",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'related_svcs', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "related_svcs", array( "post", "cat_posts", "learn_posts", "help_posts" ), $args );

	/**
	 * Taxonomy: Related Activities.
	 */

	$labels = array(
		"name" => __( "Related Activities", "" ),
		"singular_name" => __( "Related Activities", "" ),
	);

	$args = array(
		"label" => __( "Related Activities", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Related Activities",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'related_acts', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "related_acts", array( "post", "cat_posts", "learn_posts", "help_posts" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
