function cptui_register_my_cpts() {

	/**
	 * Post Type: Catalogue Posts.
	 */

	$labels = array(
		"name" => __( "Catalogue Posts", "" ),
		"singular_name" => __( "Catalogue Post", "" ),
	);

	$args = array(
		"label" => __( "Catalogue Posts", "" ),
		"labels" => $labels,
		"description" => "These posts are for projects and services that will appear in the Catalogue section of the site. They are for listing and detailing services and projects that users can search and browse.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "cat_posts", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ),
		"taxonomies" => array( "post_tag", "cat_cats", "related_svcs", "related_acts" ),
	);

	register_post_type( "cat_posts", $args );

	/**
	 * Post Type: Learning Posts.
	 */

	$labels = array(
		"name" => __( "Learning Posts", "" ),
		"singular_name" => __( "Learning Post", "" ),
	);

	$args = array(
		"label" => __( "Learning Posts", "" ),
		"labels" => $labels,
		"description" => "These are for posts that will appear on the Learning page e.g. Learning X content",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "learn_posts", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ),
		"taxonomies" => array( "post_tag", "learn_cats", "related_svcs", "related_acts" ),
	);

	register_post_type( "learn_posts", $args );

	/**
	 * Post Type: Help Posts.
	 */

	$labels = array(
		"name" => __( "Help Posts", "" ),
		"singular_name" => __( "Help Post", "" ),
	);

	$args = array(
		"label" => __( "Help Posts", "" ),
		"labels" => $labels,
		"description" => "These posts are for Help content - basically Knowledgebase entries",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "help_posts", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ),
		"taxonomies" => array( "post_tag", "help_cats", "related_svcs", "related_acts" ),
	);

	register_post_type( "help_posts", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
