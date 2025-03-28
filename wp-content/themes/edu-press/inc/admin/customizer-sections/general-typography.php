<?php
/**
 * Panel and Group Typography
 *
 * @package Hair_Salon
 */

thim_customizer()->add_section(
	array(
		'id'       => 'typography',
		'panel'    => 'general',
		'priority' => 60,
		'title'    => esc_html__( 'Typography', 'edu-press' ),
	)
);

// Body Typography Group
thim_customizer()->add_group( array(
	'id'       => 'body_typography',
	'section'  => 'typography',
	'priority' => 10,
	'groups'   => array(
		array(
			'id'     => 'body_group',
			'label'  => esc_html__( 'Body', 'edu-press' ),
			'fields' => array(
				array(
					'id'        => 'font_body',
					'label'     => esc_html__( 'Body Font', 'edu-press' ),
					'tooltip'   => esc_html__( 'Allows you to select all the font properties of the body tag for your site', 'edu-press' ),
					'type'      => 'typography',
					'priority'  => 10,
					'default'   => array(
						'font-family'    => 'Jost',
						'variant'        => 'regular',
						'font-size'      => '16px',
						'line-height'    => '1.6em',
						'letter-spacing' => '0',
						'color'          => '#000',
						'text-transform' => 'none',
					),
					'transport' => 'postMessage',
					'js_vars'   => array(
						array(
							'choice'   => 'font-family',
							'element'  => 'body',
							'property' => 'font-family',
						),
						array(
							'choice'   => 'variant',
							'element'  => 'body',
							'property' => 'font-weight',
						),
						array(
							'choice'   => 'font-size',
							'element'  => 'body',
							'property' => 'font-size',
						),
						array(
							'choice'   => 'line-height',
							'element'  => 'body',
							'property' => 'line-height',
						),
						array(
							'choice'   => 'letter-spacing',
							'element'  => 'body',
							'property' => 'letter-spacing',
						),
						array(
							'choice'   => 'color',
							'element'  => 'body',
							'property' => 'color',
						),
						array(
							'choice'   => 'text-transform',
							'element'  => 'body',
							'property' => 'text-transform',
						),
					)
				),
			),
		),
	)
) );

// Heading Typography Group
thim_customizer()->add_group( array(
	'id'       => 'heading_typography',
	'section'  => 'typography',
	'priority' => 30,
	'groups'   => array(
		array(
			'id'     => 'heading_group',
			'label'  => esc_html__( 'Headings', 'edu-press' ),
			'fields' => array(
				array(
					'id'        => 'font_title',
					'label'     => esc_html__( 'Heading Font-Family', 'edu-press' ),
					'tooltip'   => esc_html__( 'Allows you to select the font-family for headings (h1, h2, h3, h4, h5, h6)', 'edu-press' ),
					'type'      => 'typography',
					'priority'  => 10,
					'default'   => array(
						'font-family' => 'Jost',
						'color'       => '#000',
						'variant'     => '600',
					),
					'transport' => 'postMessage',
					'js_vars'   => array(
						array(
							'choice'   => 'font-family',
							'element'  => 'h1, h2, h3, h4, h5, h6',
							'property' => 'font-family',
						),
						array(
							'choice'   => 'color',
							'element'  => 'body h1, body h2, body h3, body h4, body h5, body h6, article .entry-title a,
                                            .comment-edit-link:hover,
                                            .comment-reply-link:hover,
                                            .reply-title,
                                            body .sc-heading.article_heading .heading_primary,
                                            body .site-content .blog-content article .entry-title a, 
                                            body .site-content .page-content article .entry-title a',
							'property' => 'color',
						),
						array(
							'choice'   => 'variant',
							'element'  => 'h1, h2, h3, h4, h5, h6',
							'property' => 'font-weight',
						),
					)
				),

				// H1  Fonts
				array(
					'id'        => 'font_h1',
					'label'     => esc_html__( 'Heading 1', 'edu-press' ),
					'tooltip'   => esc_html__( 'Allows you to select all the font properties of the H1 tag for your site', 'edu-press' ),
					'type'      => 'typography',
					'priority'  => 10,
					'default'   => array(
						'font-size'      => '30px',
						'line-height'    => '1.3em',
						'text-transform' => 'none',
					),
					'transport' => 'postMessage',
					'js_vars'   => array(
						array(
							'choice'   => 'font-size',
							'element'  => 'body h1',
							'property' => 'font-size',
						),
						array(
							'choice'   => 'line-height',
							'element'  => 'body h1',
							'property' => 'line-height',
						),
						array(
							'choice'   => 'text-transform',
							'element'  => 'body h1',
							'property' => 'text-transform',
						),
					),
				),
				// H2  Fonts
				array(
					'id'        => 'font_h2',
					'label'     => esc_html__( 'Heading 2', 'edu-press' ),
					'tooltip'   => esc_html__( 'Allows you to select all the font properties of the H2 tag for your site', 'edu-press' ),
					'type'      => 'typography',
					'priority'  => 20,
					'default'   => array(
						'font-size'      => '26px',
						'line-height'    => '1.2em',
						'text-transform' => 'none',
					),
					'transport' => 'postMessage',
					'js_vars'   => array(
						array(
							'choice'   => 'font-size',
							'element'  => 'body h2',
							'property' => 'font-size',
						),
						array(
							'choice'   => 'line-height',
							'element'  => 'body h2',
							'property' => 'line-height',
						),
						array(
							'choice'   => 'text-transform',
							'element'  => 'body h2',
							'property' => 'text-transform',
						),
					)
				),
				// H3 Fonts
				array(
					'id'        => 'font_h3',
					'label'     => esc_html__( 'Heading 3', 'edu-press' ),
					'tooltip'   => esc_html__( 'Allows you to select all the font properties of the H3 tag for your site', 'edu-press' ),
					'type'      => 'typography',
					'priority'  => 30,
					'default'   => array(
						'font-size'      => '24px',
						'line-height'    => '1.2em',
						'text-transform' => 'none',
					),
					'transport' => 'postMessage',
					'js_vars'   => array(
						array(
							'choice'   => 'font-size',
							'element'  => 'body h3',
							'property' => 'font-size',
						),
						array(
							'choice'   => 'line-height',
							'element'  => 'body h3',
							'property' => 'line-height',
						),
						array(
							'choice'   => 'text-transform',
							'element'  => 'body h3',
							'property' => 'text-transform',
						),
					)
				),
				// H4 Fonts
				array(
					'id'        => 'font_h4',
					'label'     => esc_html__( 'Heading 4', 'edu-press' ),
					'tooltip'   => esc_html__( 'Allows you to select all the font properties of the H4 tag for your site', 'edu-press' ),
					'type'      => 'typography',
					'priority'  => 40,
					'default'   => array(
						'font-size'      => '20px',
						'line-height'    => '1.6em',
						'text-transform' => 'none',
					),
					'transport' => 'postMessage',
					'js_vars'   => array(
						array(
							'choice'   => 'font-size',
							'element'  => 'body h4',
							'property' => 'font-size',
						),
						array(
							'choice'   => 'line-height',
							'element'  => 'body h4',
							'property' => 'line-height',
						),
						array(
							'choice'   => 'text-transform',
							'element'  => 'body h4',
							'property' => 'text-transform',
						),
					)
				),
				// H5 Fonts
				array(
					'id'        => 'font_h5',
					'label'     => esc_html__( 'Heading 5', 'edu-press' ),
					'tooltip'   => esc_html__( 'Allows you to select all the font properties of the H5 tag for your site', 'edu-press' ),
					'type'      => 'typography',
					'priority'  => 50,
					'default'   => array(
						'font-size'      => '18px',
						'line-height'    => '1.2em',
						'text-transform' => 'none',
						'variant'        => get_theme_mod( 'thim_font_title_variant', 600 ) 
					),
					'transport' => 'postMessage',
					'js_vars'   => array(
						array(
							'choice'   => 'font-size',
							'element'  => 'body h5',
							'property' => 'font-size',
						),
						array(
							'choice'   => 'line-height',
							'element'  => 'body h5',
							'property' => 'line-height',
						),
						array(
							'choice'   => 'text-transform',
							'element'  => 'body h5',
							'property' => 'text-transform',
						),
						array(
                            'choice'   => 'variant',
                            'element'  => 'h5',
                            'property' => 'font-weight',
                        ),
					)
				),
				// H6 Fonts
				array(
					'id'        => 'font_h6',
					'label'     => esc_html__( 'Heading 6', 'edu-press' ),
					'tooltip'   => esc_html__( 'Allows you to select all the font properties of the H6 tag for your site', 'edu-press' ),
					'type'      => 'typography',
					'priority'  => 60,
					'default'   => array(
						'font-size'      => '16px',
						'line-height'    => '1.2em',
						'text-transform' => 'none',
						'variant'        => get_theme_mod( 'thim_font_title_variant', 600 ) 
					),
					'transport' => 'postMessage',
					'js_vars'   => array(
						array(
							'choice'   => 'font-size',
							'element'  => 'body h6',
							'property' => 'font-size',
						),
						array(
							'choice'   => 'line-height',
							'element'  => 'body h6',
							'property' => 'line-height',
						),
						array(
							'choice'   => 'text-transform',
							'element'  => 'body h6',
							'property' => 'text-transform',
						),
						array(
                            'choice'   => 'variant',
                            'element'  => 'h6',
                            'property' => 'font-weight',
                        ),
					)
				),
			),
		),
	)
) );
