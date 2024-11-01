<?php

class Wha_Social_Icons_Widget extends WP_Widget {

	/**
	 * @var string Path to plugin file.
	 */
	protected $plugin_file;


	/**
	 * @var array $icons
	 * Collection of icon kits including socicon, dashicons, fontawesome and genericons
	 */
	protected $icons = array(
		'socicon'   => array(
			array(
				'icon'     => '500px',
				'category' => array( 'photography' ),
				'color'    => '#58a9de'
			),
			array(
				'icon'     => 'airbnb',
				'category' => array( 'travel' ),
				'color'    => '#FF5A5F'
			),
			array(
				'icon'     => 'android',
				'category' => array( 'software' ),
				'color'    => '#8ec047'
			),
            array(
                'icon'     => 'angieslist',
                'category' => array( 'business' ),
                'color'    => '#299F37'
            ),
			array(
				'icon'     => 'apple',
				'category' => array( 'software' ),
				'color'    => '#B9BFC1'
			),
			array(
				'icon'     => 'appnet',
				'category' => array( 'software' ),
				'color'    => '#494949'
			),
            array(
                'icon'     => 'appstore',
                'category' => array( 'software' ),
                'color'    => '#007AFF'
            ),
			array(
				'icon'     => 'baidu',
				'category' => array( 'search-engines' ),
				'color'    => '#2319DC'
			),
			array(
				'icon'     => 'bandcamp',
				'category' => array( 'music' ),
				'color'    => '#619aa9'
			),
            array(
                'icon'     => 'beatport',
                'category' => array( 'music' ),
                'color'    => '#94d500'
            ),
			array(
				'icon'     => 'bebo',
				'category' => array( 'software', 'communication' ),
				'color'    => '#EF1011'
			),
			array(
				'icon'     => 'behance',
				'category' => array( 'design' ),
				'color'    => '#1769ff'
			),
			array(
				'icon'     => 'blogger',
				'category' => array( 'blogging' ),
				'color'    => '#ec661c'
			),
			array(
				'icon'     => 'bloglovin',
				'category' => array( 'blogging' ),
				'color'    => '#000000'
			),
			array(
				'icon'     => 'buffer',
				'category' => array( 'blogging', 'social-media' ),
				'color'    => '#000000'
			),
            array(
                'icon'     => 'codered',
                'category' => array( 'learning', 'programming' ),
                'color'    => '#FF033B'
            ),
			array(
				'icon'     => 'coderwall',
				'category' => array( 'learning', 'programming' ),
				'color'    => '#3E8DCC'
			),
            array(
                'icon'     => 'crunchbase',
                'category' => array( 'business' ),
                'color'    => '#0288d1'
            ),
			array(
				'icon'     => 'dailymotion',
				'category' => array( 'video' ),
				'color'    => '#004e72'
			),
			array(
				'icon'     => 'delicious',
				'category' => array( 'web-tools' ),
				'color'    => '#020202'
			),
			array(
				'icon'     => 'deviantart',
				'category' => array( 'design' ),
				'color'    => '#c5d200'
			),
            array(
                'icon'     => 'deezer',
                'category' => array( 'music' ),
                'color'    => '#32323d'
            ),
			array(
				'icon'     => 'digg',
				'category' => array( 'news' ),
				'color'    => '#1d1d1b'
			),
            array(
                'icon'     => 'discord',
                'category' => array( 'chat' ),
                'color'    => '#7289da'
            ),
            array(
                'icon'     => 'discord2',
                'category' => array( 'chat' ),
                'color'    => '#7289da'
            ),
			array(
				'icon'     => 'disqus',
				'category' => array( 'communication', 'web-tools' ),
				'color'    => '#2e9fff'
			),
			array(
				'icon'     => 'dribbble',
				'category' => array( 'design' ),
				'color'    => '#e84d88'
			),
			array(
				'icon'     => 'drupal',
				'category' => array( 'blogging', 'web-tools', 'programming' ),
				'color'    => '#00598e'
			),
			array(
				'icon'     => 'ebay',
				'category' => array( 'ecommerce' ),
				'color'    => '#E53238'
			),
            array(
                'icon'     => 'ello',
                'category' => array( 'design' ),
                'color'    => '#000'
            ),
			array(
				'icon'     => 'envato',
				'category' => array( 'ecommerce' ),
				'color'    => '#82B540'
			),
			array(
				'icon'     => 'eyeem',
				'category' => array( 'ecommerce', 'photography' ),
				'color'    => '#000000'
			),
			array(
				'icon'     => 'facebook',
				'category' => array( 'social-media' ),
				'color'    => '#3b5998'
			),
			array(
				'icon'     => 'feedburner',
				'category' => array( 'web-tools', 'news' ),
				'color'    => '#FFCC00'
			),
			array(
				'icon'     => 'feedly',
				'category' => array( 'web-tools' ),
				'color'    => '#34B151'
			),
			array(
				'icon'     => 'flattr',
				'category' => array( 'web-tools', 'payment' ),
				'color'    => '#F67C1A'
			),
            array(
                'icon'     => 'flipboard',
                'category' => array( 'news', 'reader' ),
                'color'    => '#E12828'
            ),
            array(
                'icon'     => 'flipboard2',
                'category' => array( 'news', 'reader' ),
                'color'    => '#E12828'
            ),
			array(
				'icon'     => 'flickr',
				'category' => array( 'web-tools', 'photography' ),
				'color'    => '#ff0084'
			),
			array(
				'icon'     => 'foursquare',
				'category' => array( 'travel' ),
				'color'    => '#F94877'
			),
			array(
				'icon'     => 'friendfeed',
				'category' => array( 'news' ),
				'color'    => '#2F72C4'
			),
			array(
				'icon'     => 'github',
				'category' => array( 'programming' ),
				'color'    => '#221e1b'
			),
			array(
				'icon'     => 'goodreads',
				'category' => array( 'learning' ),
				'color'    => '#463020'
			),
			array(
				'icon'     => 'google',
				'category' => array( 'search-engines' ),
				'color'    => '#d93e2d'
			),
			array(
				'icon'     => 'grooveshark',
				'category' => array( 'music' ),
				'color'    => '#000000'
			),
            array(
                'icon'     => 'hellocoton',
                'category' => array( 'news' ),
                'color'    => '#D50066'
            ),
            array(
                'icon'     => 'homeadvisor',
                'category' => array( 'business' ),
                'color'    => '#EF8B1D'
            ),
			array(
				'icon'     => 'houzz',
				'category' => array( 'design' ),
				'color'    => '#7CC04B'
			),
			array(
				'icon'     => 'identica',
				'category' => array( 'blogging', 'social-media' ),
				'color'    => '#000000'
			),
			array(
				'icon'     => 'instagram',
				'category' => array( 'photography', 'social-media' ),
				'color'    => '#E1306C'
			),
            array(
                'icon'     => 'itunes',
                'category' => array( 'music' ),
                'color'    => '#ff5e51'
            ),
			array(
				'icon'     => 'lanyrd',
				'category' => array( 'learning' ),
				'color'    => '#3c80c9'
			),
			array(
				'icon'     => 'lastfm',
				'category' => array( 'audio' ),
				'color'    => '#d41316'
			),
            array(
                'icon'     => 'line',
                'category' => array( 'communication' ),
                'color'    => '#00BA27'
            ),
			array(
				'icon'     => 'linkedin',
				'category' => array( 'programming', 'social-media' ),
				'color'    => '#3371b7'
			),
			array(
				'icon'     => 'lookbook',
				'category' => array( 'social-media' ),
				'color'    => '#000000'
			),
			array(
				'icon'     => 'mail',
				'category' => array( 'web-tools', 'communication' ),
				'color'    => '#000000'
			),
            array(
                'icon'     => 'mastodon',
                'category' => array( 'social-media' ),
                'color'    => '#2B8BD0'
            ),
			array(
				'icon'     => 'medium',
				'category' => array( 'blogging' ),
				'color'    => '#01AB6C'
			),
			array(
				'icon'     => 'meetup',
				'category' => array( 'social-media' ),
				'color'    => '#e2373c'
			),
            array(
                'icon'     => 'messenger',
                'category' => array( 'social-media', 'communication' ),
                'color'    => '#0084ff'
            ),
			array(
				'icon'     => 'myspace',
				'category' => array( 'social-media' ),
				'color'    => '#323232'
			),
            array(
                'icon'     => 'mywed',
                'category' => array( 'community' ),
                'color'    => '#000'
            ),
			array(
				'icon'     => 'newsvine',
				'category' => array( 'news' ),
				'color'    => '#075B2F'
			),
            array(
                'icon'     => 'nextdoor',
                'category' => array( 'business' ),
                'color'    => '#01B247'
            ),
			array(
				'icon'     => 'odnoklassniki',
				'category' => array( 'social-media' ),
				'color'    => '#f48420'
			),
			array(
				'icon'     => 'outlook',
				'category' => array( 'communication', 'web-tools' ),
				'color'    => '#0072C6'
			),
            array(
                'icon'     => 'overwatch',
                'category' => array( 'social-media', 'video', 'games' ),
                'color'    => '#9E9E9E'
            ),
			array(
				'icon'     => 'patreon',
				'category' => array( 'payment', 'web-tools' ),
				'color'    => '#E44727'
			),
			array(
				'icon'     => 'paypal',
				'category' => array( 'payment', 'web-tools' ),
				'color'    => '#009cde'
			),
			array(
				'icon'     => 'periscope',
				'category' => array( 'video', 'social-media' ),
				'color'    => '#40A4C4'
			),
			array(
				'icon'     => 'persona',
				'category' => array( 'web-tools' ),
				'color'    => '#e6753d'
			),
			array(
				'icon'     => 'pinterest',
				'category' => array( 'social-media' ),
				'color'    => '#c92619'
			),
			array(
				'icon'     => 'play',
				'category' => array( 'ecommerce' ),
				'color'    => '#000000'
			),
            array(
                'icon'     => 'playstation',
                'category' => array( 'games', 'video' ),
                'color'    => '#000000'
            ),
			array(
				'icon'     => 'reddit',
				'category' => array( 'news', 'social-media' ),
				'color'    => '#e74a1e'
			),
            array(
                'icon'     => 'researchgate',
                'category' => array( 'education' ),
                'color'    => '#00CCBB'
            ),
            array(
                'icon'     => 'reverbnation',
                'category' => array( 'music', 'audio' ),
                'color'    => '#000'
            ),
			array(
				'icon'     => 'rss',
				'category' => array( 'news', 'communication', 'web-tools' ),
				'color'    => '#f26109'
			),
			array(
				'icon'     => 'skype',
				'category' => array( 'software', 'communication', 'video' ),
				'color'    => '#28abe3'
			),
            array(
                'icon'     => 'slack',
                'category' => array( 'communication' ),
                'color'    => '#4B6BC6'
            ),
			array(
				'icon'     => 'slideshare',
				'category' => array( 'web-tools' ),
				'color'    => '#4ba3a6'
			),
			array(
				'icon'     => 'smugmug',
				'category' => array( 'photography', 'web-tools' ),
				'color'    => '#ACFD32'
			),
			array(
				'icon'     => 'snapchat',
				'category' => array( 'communication', 'social-media' ),
				'color'    => '#000000'
			),
            array(
                'icon'     => 'songkick',
                'category' => array( 'audio' ),
                'color'    => '#F80046'
            ),
			array(
				'icon'     => 'soundcloud',
				'category' => array( 'audio' ),
				'color'    => '#fe3801'
			),
			array(
				'icon'     => 'spotify',
				'category' => array( 'audio' ),
				'color'    => '#7bb342'
			),
			array(
				'icon'     => 'stackoverflow',
				'category' => array( 'audio' ),
				'color'    => '#FD9827'
			),
			array(
				'icon'     => 'steam',
				'category' => array( 'games' ),
				'color'    => '#8F8D8A'
			),
            array(
                'icon'     => 'stitcher',
                'category' => array( 'audio' ),
                'color'    => '#00BDE8'
            ),
            array(
                'icon'     => 'strava',
                'category' => array( 'fitness', 'sport'),
                'color'    => '#FC4C02'
            ),
			array(
				'icon'     => 'stumbleupon',
				'category' => array( 'search-engines' ),
				'color'    => '#e64011'
			),
			array(
				'icon'     => 'swarm',
				'category' => array( 'games' ),
				'color'    => '#FC9D3C'
			),
			array(
				'icon'     => 'technorati',
				'category' => array( 'search-engines', 'software' ),
				'color'    => '#5cb030'
			),
			array(
				'icon'     => 'telegram',
				'category' => array( 'communication', 'software' ),
				'color'    => '#0088cc'
			),
            array(
                'icon'     => 'tidal',
                'category' => array( 'music' ),
                'color'    => '#01FFFF'
            ),
			array(
				'icon'     => 'tripadvisor',
				'category' => array( 'travel' ),
				'color'    => '#589442'
			),
			array(
				'icon'     => 'tripit',
				'category' => array( 'travel' ),
				'color'    => '#1982C3'
			),
			array(
				'icon'     => 'triplej',
				'category' => array( 'audio' ),
				'color'    => '#E53531'
			),
			array(
				'icon'     => 'tumblr',
				'category' => array( 'blogging' ),
				'color'    => '#45556c'
			),
            array(
                'icon'     => 'tunein',
                'category' => array( 'audio' ),
                'color'    => '#36b4a7'
            ),
			array(
				'icon'     => 'twitter',
				'category' => array( 'social-media' ),
				'color'    => '#55acee'
			),
            array(
                'icon'     => 'unsplash',
                'category' => array( 'photography'),
                'color'    => '#000'
            ),
            array(
                'icon'     => 'udemy',
                'category' => array( 'learning'),
                'color'    => '#17aa1c'
            ),
			array(
				'icon'     => 'viadeo',
				'category' => array( 'social-media' ),
				'color'    => '#e4a000'
			),
			array(
				'icon'     => 'viber',
				'category' => array( 'communication', 'web-tools' ),
				'color'    => '#7b519d'
			),
			array(
				'icon'     => 'vimeo',
				'category' => array( 'video' ),
				'color'    => '#51b5e7'
			),
			array(
				'icon'     => 'vine',
				'category' => array( 'video' ),
				'color'    => '#00b389'
			),
			array(
				'icon'     => 'vkontakte',
				'category' => array( 'social-media' ),
				'color'    => '#5a7fa6'
			),
            array(
                'icon'     => 'whatsapp',
                'category' => array( 'communication' ),
                'color'    => '#20B038'
            ),
			array(
				'icon'     => 'wikipedia',
				'category' => array( 'learning' ),
				'color'    => '#000000'
			),
			array(
				'icon'     => 'windows',
				'category' => array( 'software' ),
				'color'    => '#00BDF6'
			),
			array(
				'icon'     => 'wordpress',
				'category' => array( 'blogging', 'web-tools' ),
				'color'    => '#464646'
			),
			array(
				'icon'     => 'xbox',
				'category' => array( 'games' ),
				'color'    => '#92C83E'
			),
			array(
				'icon'     => 'xing',
				'category' => array( 'social-media' ),
				'color'    => '#005a60'
			),
			array(
				'icon'     => 'yahoo',
				'category' => array( 'search-engines' ),
				'color'    => '#6E2A85'
			),
			array(
				'icon'     => 'yammer',
				'category' => array( 'social-media' ),
				'color'    => '#1175C4'
			),
			array(
				'icon'     => 'yelp',
				'category' => array( 'travel', 'search-engines' ),
				'color'    => '#c83218'
			),
			array(
				'icon'     => 'youtube',
				'category' => array( 'video', 'search-engines' ),
				'color'    => '#e02a20'
			),
			array(
				'icon'     => 'zerply',
				'category' => array( 'video', 'games' ),
				'color'    => '#9DBC7A'
			),
			array(
				'icon'     => 'zynga',
				'category' => array( 'games' ),
				'color'    => '#DC0606'
			),

		)
	);


	/**
	 * @var array protocols that are allowed in esc_url validation function.
	 */
	protected $protocols = array(
		'skype',
		'viber',
		'http',
		'https',
		'mailto',
		'news',
		'irc',
		'feed',
		'tel',
		'fax',
		'mms',
		'xmpp'
	);

	/**
	 * Wha_Social_Icons_Widget constructor.
	 */
	public function __construct() {
		parent::__construct(
			'wha-social-icons-widget',
			esc_html__( 'Social Icons by WHA', 'wha-social-icons-widget' ),
			array(
				'classname'   => 'wha-social-icons-widget',
				'description' => __( 'Sortable widget that supports more than 80+ social networks', 'wha-social-icons-widget' ),
			)
		);

		$this->icons     = apply_filters( 'wha_social_icons_filter', $this->icons );
		$this->protocols = apply_filters( 'wha_social_protocols_filter', $this->protocols );

		$this->plugin_file = dirname( __FILE__ ) . '/wha-social-icons-widget.php';

		add_action('current_screen', array($this, 'check_current_screen'));
		add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );

		//Hooks to enqueue javascript file in SiteOrigin builder.
		add_action( 'siteorigin_panel_enqueue_admin_scripts', array( $this, 'admin_scripts' ) );
		add_action( 'siteorigin_panel_enqueue_admin_scripts', array( $this, 'admin_js_templates' ) );

	}

	/**
	 * Enqueue admin javascript only on widgets and customizer pages.
	 */
	public function check_current_screen() {
		$current_screen = get_current_screen();

		if ( ! empty( $current_screen->id ) && ( $current_screen->id === 'widgets' || $current_screen->id === 'customize' ) ) {
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
			add_action( 'admin_print_footer_scripts', array( $this, 'admin_js_templates' ) );
		}
	}

	/**
	 * JavaScript templates for back-end widget form.
	 */
	public function admin_js_templates() {
		?>
		<script type="text/x-template" id="tmpl-wha-social-modal"><?php $this->get_modal_template(); ?></script>
		<?php
	}

	/**
	 * Modal template render function.
	 */
	public function get_modal_template() {
		?>
		<div class="modal-mask">
			<div class="media-modal wp-core-ui wha-social-modal-wrapper">
				<button type="button" class="media-modal-close" @click="$emit('close')"><span
						class="media-modal-icon"><span class="screen-reader-text">Close media panel</span></span>
				</button>
				<div class="media-modal-content">

					<div class="wha-social-modal-title">
						<slot name="header">
							<h3><?php _e( 'Select Icon', 'wha-social-icons-widget' ) ?></h3>
						</slot>
					</div>

					<div class="wha-social-modal-content">
						<slot name="body">

							<div class="wha-social-modal-form">
								<div class="form-group">
									<div class="wrap-label">
										<label><?php _e( 'Choose icon color', 'wha-social-icons-widget' ) ?></label>

									</div>
									<div class="wrap-input wrap-input-color-picker">
										<input type="text" class="wha-social-icons__field-color-picker"
										       name="wha-social-icons__field-color-picker"
										       v-model="modal_color_picker" :value="modal_color_picker">
									</div>
								</div>
								<div class="form-group">
									<div class="wrap-label">
										<label><?php _e( 'Choose hover color', 'wha-social-icons-widget' ) ?></label>

									</div>
									<div class="wrap-input wrap-input-color-picker-hover">
										<input type="text" class="wha-social-icons__field-color-picker"
										       name="wha-social-icons__field-color-picker-hover"
										       v-model="modal_color_picker_hover" :value="modal_color_picker_hover">
									</div>
								</div>
								<div class="form-group">
									<div class="wrap-label">
										<label><?php _e( 'Select Icon Kit', 'wha-social-icons-widget' ) ?></label>
									</div>
									<div class="wrap-input">
										<select v-model="modal_icon_kit_category">
											<option v-for="cat in getIconCategories" :value="cat">{{cat | spacify |
												capitalize }}
											</option>
										</select>
									</div>
								</div>

								<div class='modal-icons-wrapper'>
									<template v-for="(icons_kit, icon_type) in filterBySocicons">
										<p v-show="searchIconsLength && icons_kit.length ">{{ icon_type |
											humanizeIconType | capitalize
											}}</p>
										<div
											v-show=" modal_icon_kit == icon_type || searchIconsLength && icons_kit.length "
											class="icon-kit" :class="[icon_type+'-wrapper']">
                                            <span
	                                            :style="normalizeStyle(icon.icon, icon_type)"
	                                            :data-icon="icon.icon"
	                                            :data-kit="icon_type"
	                                            @click="clickOnIcon"
	                                            @mouseover="overOnIcon"
	                                            @mouseleave="leaveOnIcon"
	                                            v-for="(icon, icon_key) in icons_kit"
	                                            :class='["wha-social-icons__single-element" ,icon_type , icon_type+"-"+icon.icon, icon_canvas_style, {selected : icon.icon === modal_icon && icon_type === modal_icon_kit }]'
                                            ></span>
										</div>
									</template>
								</div>


								<input type="hidden" v-model="modal_icon" name="wha-social-icons__field-icon"
								       class="wha-social-icons__field-icon"/>
							</div>
						</slot>
					</div>

					<div class="wha-social-modal-toolbar">
						<slot name="footer">
							<input class="search-action-input" style="width: 50%; float: left;" type="text"
							       v-model='searchIcons' placeholder="Type to search icon"/>
							<a href='#' class="button-primary wha-social-modal-save-btn" @click.prevent="saveModal">Save</a>
						</slot>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Included styles and js files in the backend part.
	 */
	public function admin_scripts() {

		wp_enqueue_style( 'socicon', plugin_dir_url( $this->plugin_file ) . 'assets/css/socicon.css', array(), '20190406' );
		wp_enqueue_style( 'social-icons-widget-admin', plugin_dir_url( $this->plugin_file ) . 'assets/css/social-icons-widget-admin.css', array( 'socicon' ), '20190406' );
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_media();

		wp_enqueue_script(
			'wha-social-icons-widget-vue-js',
			plugin_dir_url( $this->plugin_file ) . 'assets/js/vue.js',
			array(),
			'20170209',
			true
		);
		wp_enqueue_script(
			'wha-social-icons-widget-sortable-js',
			plugin_dir_url( $this->plugin_file ) . 'assets/js/sortable.min.js',
			array(),
			'20170209',
			true
		);

		wp_enqueue_script(
			'wha-social-icons-widget-vue-sortable-js',
			plugin_dir_url( $this->plugin_file ) . 'assets/js/vue-sortable.js',
			array(),
			'20170209',
			true
		);

		wp_enqueue_script(
			'wha-social-icons-widget-uri-js',
			plugin_dir_url( $this->plugin_file ) . 'assets/js/URI.min.js',
			array(),
			'20170209',
			true
		);

		wp_enqueue_script(
			'wha-social-icons-widget-scroll-to',
			plugin_dir_url( $this->plugin_file ) . 'assets/js/jquery.scrollTo.min.js',
			array( 'jquery' ),
			'20170209',
			true
		);

		wp_enqueue_script(
			'wha-social-icons-widget',
			plugin_dir_url( $this->plugin_file ) . 'assets/js/social-icons-widget-backend.js',
			array( 'jquery', 'underscore', 'wp-util', 'wp-color-picker' ),
			'20190405',
			true
		);

		wp_localize_script( 'wha-social-icons-widget', 'wha_social_widget_data', array(
			'icons'      => $this->get_icons_pack(),
			'categories' => $this->get_icon_categories()
		) );

	}

	/**
	 * Get icons pack by its name by default return all packs.
	 *
	 * @param string $type
	 *
	 * @return array
	 */
	public function get_icons_pack( $type = 'all' ) {

		return array_key_exists( $type, $this->icons ) ? $this->icons[ $type ] : $this->icons;
	}

	/**
	 * Get icons pack categories.
	 *
	 * @return array
	 */
	public function get_icon_categories() {
		return apply_filters( 'wha_social_icons_get_icon_categories',
			array(
				'socicon'   =>
					array(
						'all',
						'audio',
						'blogging',
						'communication',
						'design',
						'ecommerce',
						'games',
						'learning',
						'music',
						'news',
						'payment',
						'photography',
						'programming',
						'search-engines',
						'social-media',
						'software',
						'travel',
						'video',
						'web-tools'
					)
			) );
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance['title']                     = sanitize_text_field( $new_instance['title'] );
		$instance['description']               = balanceTags( wp_kses( $new_instance['description'], wp_kses_allowed_html() ), true );
		$instance['show_icon_labels']          = (! empty( $new_instance['show_icon_labels'] ) && $new_instance['show_icon_labels'] === 'true' ) ? 'true' : 'false';
		$instance['open_new_tab']              = (! empty( $new_instance['open_new_tab']) && $new_instance['open_new_tab'] === 'true')  ? 'true' : 'false';
		$instance['no_follow']                 = (! empty( $new_instance['no_follow']) && $new_instance['no_follow'] === 'true')  ? 'true' : 'false';
        $instance['no_opener']                 = (! empty( $new_instance['no_opener']) && $new_instance['no_opener'] === 'true')  ? 'true' : 'false';
        $instance['no_referrer']               = (! empty( $new_instance['no_referrer']) && $new_instance['no_referrer'] === 'true')  ? 'true' : 'false';
		$instance['icon_padding_size']         = (int) $new_instance['icon_padding_size'];
		$instance['icon_font_size']            = (int) $new_instance['icon_font_size'];
		$instance['global_color_picker']       = $new_instance['global_color_picker'];
		$instance['global_color_picker_hover'] = $new_instance['global_color_picker_hover'];

		if ( in_array( $new_instance['icon_style'], array( 'with-canvas', 'without-canvas' ) ) ) {
			$instance['icon_style'] = $new_instance['icon_style'];
		}

		if ( in_array( $new_instance['icon_alignment'], array( 'left', 'center', 'right', 'none' ) ) ) {
			$instance['icon_alignment'] = $new_instance['icon_alignment'];
		}

		if ( in_array( $new_instance['icon_canvas_style'], array( 'rounded', 'round', 'square' ) ) ) {
			$instance['icon_canvas_style'] = $new_instance['icon_canvas_style'];
		}

		$field_count = empty( $new_instance['url_fields'] ) ? 0 : count( $new_instance['url_fields'] );

		$instance['fields'] = array();

		for ( $i = 0; $i < $field_count; $i ++ ) {
			$url   = esc_url( $new_instance['url_fields'][ $i ], $this->protocols );
			$label = esc_html( $new_instance['label_fields'][ $i ] );

			if ( $url ) {
				$instance['fields'][] = array(
					'url'                => $url,
					'label'              => $label,
					'icon'               => $new_instance['icon_fields'][ $i ],
					'icon_kit'           => $new_instance['icon_kit_fields'][ $i ],
					'color_picker'       => $new_instance['color_picker_fields'][ $i ],
					'color_picker_hover' => $new_instance['color_picker_hover_fields'][ $i ]
				);
			}
		}

		return $instance;
	}

	/**
	 * Render wigdet form in the backend.
	 *
	 * @param array $instance
	 *
	 * @return void
	 */
	public function form( $instance ) {
		$defaults = $this->get_defaults();

		if ( isset( $instance['show-icon-labels'] ) or
		     isset( $instance['open-new-tab'] ) or
		     isset( $instance['no-follow'] )
		) {
			$instance['show-icon-labels'] = ! empty( $instance['show-icon-labels'] ) ? "true" : "false";
			$instance['open-new-tab']     = ! empty( $instance['open-new-tab'] ) ? "true" : "false";
			$instance['no-follow']        = ! empty( $instance['no-follow'] ) ? "true" : "false";
		}

		$instance = $this->normalize_data_array( $instance );
		$instance = wp_parse_args( $instance, $defaults );

		$this->inject_values( $instance );

		$instance['fields'] = $this->inject_fields_with_data( $instance['fields'] );

		$instance_attr = '';
		$default_field = $this->inject_fields_with_data( $this->get_default_field() );
		$default_field = array_pop( $default_field );
		if ( ! empty( $instance ) ) {
			$encoded = array(
				'id'            => $this->id,
				'instance'      => $instance,
				'default_field' => $default_field
			);

			$instance_attr = 'data-instance="' . htmlentities( json_encode( $encoded ) ) . '"';
		}

		?>
		<div class="form-instance" <?php echo $instance_attr ?> id="<?php echo $this->id ?>">
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'wha-social-icons-widget' ); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" v-model="title" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"/>
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php esc_html_e( 'Text above icons:', 'wha-social-icons-widget' ); ?></label>
                <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" cols="20" v-model="description" rows="3"></textarea>
 			</p>

            <p class="description"><?php _e( 'You can add here a text above the icons. Basic HTML allowed.', 'wha-social-icons-widget' ); ?></p>


			<p>
				<input class="checkbox wha-social-icons-show-icon-labels"
				       type="checkbox"
				       v-model="show_icon_labels"
				       :true-value="'true'"
				       :false-value="'false'"
				       :value="show_icon_labels"
				       id="<?php echo $this->get_field_id( 'show_icon_labels' ); ?>"
				       name="<?php echo $this->get_field_name( 'show_icon_labels' ); ?>"/>
				<label
					for="<?php echo $this->get_field_id( 'show_icon_labels' ); ?>"><?php _e( 'Show icon labels? ', 'wha-social-icons-widget' ); ?></label>
			</p>

			<p>
				<input class="checkbox" type="checkbox"
				       v-model="open_new_tab"
				       :true-value="'true'"
				       :false-value="'false'"
				       :value="open_new_tab"
				       id="<?php echo $this->get_field_id( 'open_new_tab' ); ?>"
				       name="<?php echo $this->get_field_name( 'open_new_tab' ); ?>"/>
				<label for="<?php echo $this->get_field_id( 'open_new_tab' ); ?>"><?php _e( 'Open links in new tab? ', 'wha-social-icons-widget' ); ?></label>
			</p>

			<p>
				<input class="checkbox" type="checkbox"
				       v-model="no_follow"
				       :true-value="'true'"
				       :false-value="'false'"
				       :value="no_follow"
				       id="<?php echo $this->get_field_id( 'no_follow' ); ?>"
				       name="<?php echo $this->get_field_name( 'no_follow' ); ?>"/>
				<label
					for="<?php echo $this->get_field_id( 'no_follow' ); ?>"><?php _e( 'Add <code>rel="nofollow"</code> to links', 'wha-social-icons-widget' ); ?></label>
			</p>

            <p>
                <input class="checkbox" type="checkbox"
                       v-model="no_referrer"
                       :true-value="'true'"
                       :false-value="'false'"
                       :value="no_referrer"
                       id="<?php echo $this->get_field_id( 'no_referrer' ); ?>"
                       name="<?php echo $this->get_field_name( 'no_referrer' ); ?>"/>
                <label
                    for="<?php echo $this->get_field_id( 'no_referrer' ); ?>"><?php _e( 'Add <code>rel="noreferrer"</code> to links', 'wha-social-icons-widget' ); ?></label>
            </p>

            <p>
                <input class="checkbox" type="checkbox"
                       v-model="no_opener"
                       :true-value="'true'"
                       :false-value="'false'"
                       :value="no_opener"
                       id="<?php echo $this->get_field_id( 'no_opener' ); ?>"
                       name="<?php echo $this->get_field_name( 'no_opener' ); ?>"/>
                <label
                    for="<?php echo $this->get_field_id( 'no_opener' ); ?>"><?php _e( 'Add <code>rel="noopener"</code> to links', 'wha-social-icons-widget' ); ?></label>
            </p>

            <p class="description"><?php _e( 'Recommended if links or icons open in a new tab', 'wha-social-icons-widget' ); ?></p>


			<p>
				<label
					for="<?php echo $this->get_field_id( 'icon_alignment' ); ?>"><?php _e( 'Icons Alignment:', 'wha-social-icons-widget' ); ?>
				</label>
				<select name="<?php echo $this->get_field_name( 'icon_alignment' ); ?>"
				        id="<?php echo $this->get_field_id( 'icon_alignment' ); ?>"
				        v-model="icon_alignment"
				        class="widefat">
					<option
						value="none"><?php esc_html_e( 'None', 'wha-social-icons-widget' ); ?></option>
					<option
						value="left"><?php esc_html_e( 'Align Left', 'wha-social-icons-widget' ); ?></option>
					<option
						value="center"><?php esc_html_e( 'Align Center', 'wha-social-icons-widget' ); ?></option>
					<option
						value="right"><?php esc_html_e( 'Align Right', 'wha-social-icons-widget' ); ?></option>
				</select>
			</p>

			<p>
				<label
					for="<?php echo $this->get_field_id( 'icon_style' ); ?>"><?php _e( 'Icon Style:', 'wha-social-icons-widget' ); ?>
				</label>
				<select name="<?php echo $this->get_field_name( 'icon_style' ); ?>"
				        id="<?php echo $this->get_field_id( 'icon_style' ); ?>"
				        v-model="icon_style"
				        class="widefat">
					<option
						value="with-canvas"><?php esc_html_e( 'Color Background / White Icon', 'wha-social-icons-widget' ); ?></option>
					<option
						value="without-canvas"><?php esc_html_e( 'Color Icon / No Background', 'wha-social-icons-widget' ); ?></option>
				</select>
			</p>

			<p>
				<label
					:style="iconCanvasStyleLabel()"
					for="<?php echo $this->get_field_id( 'icon_canvas_style' ); ?>"><?php _e( 'Icon Background Style:', 'wha-social-icons-widget' ); ?></label>
				<select
					:disabled="this.icon_style == 'without-canvas'"
					name="<?php echo $this->get_field_name( 'icon_canvas_style' ); ?>"
					id="<?php echo $this->get_field_id( 'icon_canvas_style' ); ?>"
					v-model="icon_canvas_style"
					class="widefat wha-social-icons-change-icon-canvas-style">
					<option
						value="rounded"><?php esc_html_e( 'Rounded Corners', 'wha-social-icons-widget' ); ?></option>
					<option
						value="round"><?php esc_html_e( 'Round', 'wha-social-icons-widget' ); ?></option>
					<option
						value="square"><?php esc_html_e( 'Square', 'wha-social-icons-widget' ); ?></option>
				</select>
			</p>

			<p class="description">
					<?php echo wp_kses_post( __( 'This option has no effect if <i>Color Icon / No Background</i> icon style is selected.', 'wha-social-icons-widget' ) ); ?>
			</p>

			<p>
				<label
					for="<?php echo $this->get_field_id( 'icon_padding_size' ) ?>"><?php _e( 'Icon Padding (pixels):', 'wha-social-icons-widget' ) ?>
					<input type="number" min="0" max="200"
					       id="<?php echo $this->get_field_id( 'icon_padding_size' ) ?>"
					       name="<?php echo $this->get_field_name( 'icon_padding_size' ) ?>"
					       v-model="icon_padding_size"
					       class="widefat"/>
				</label>
			</p>

			<p>
				<label
					for="<?php echo $this->get_field_id( 'icon_font_size' ) ?>"><?php _e( 'Icon Size (pixels):', 'wha-social-icons-widget' ) ?>
					<input type="number" min="0" max="200"
					       id="<?php echo $this->get_field_id( 'icon_font_size' ) ?>"
					       name="<?php echo $this->get_field_name( 'icon_font_size' ) ?>"
					       v-model="icon_font_size"
					       class="widefat"/>
				</label>
			</p>

			<p>
				<label><?php _e( 'Set color for all icons' ) ?></label>
			<div class="wrap-input-color-picker">
				<input
					v-model="global_color_picker"
					type="text"
					class="wha-social-icons__field-color-picker"
					id="<?php echo $this->get_field_id( 'global_color_picker' ) ?>"
					name="<?php echo $this->get_field_name( 'global_color_picker' ) ?>"
					:value="global_color_picker"
				>
			</div>
			</p>
			<p>
				<label><?php _e( 'Set hover color for all icons' ) ?></label>
			<div class="wrap-input-color-picker">
				<input
					v-model="global_color_picker_hover"
					type="text"
					class="wha-social-icons__field-color-picker"
					id="<?php echo $this->get_field_id( 'global_color_picker_hover' ) ?>"
					name="<?php echo $this->get_field_name( 'global_color_picker_hover' ) ?>"
					:value="global_color_picker_hover"
				>
			</div>
			</p>
			<p style="margin-bottom: 0;"><?php _e( 'Icons:', 'wha-social-icons-widget' ); ?></p>

			<div class="must-remove">
				<input type="hidden" value="<?php echo $defaults['title'] ?>"
				       id="<?php echo $this->get_field_id( 'title' ); ?>"
				       name="<?php echo $this->get_field_name( 'title' ); ?>"/>
				<input type="hidden" value="<?php echo $defaults['description'] ?>"
				       id="<?php echo $this->get_field_id( 'description' ); ?>"
				       name="<?php echo $this->get_field_name( 'description' ); ?>"/>
				<input type='hidden' value="<?php echo $defaults['open_new_tab'] ?>"
				       id="<?php echo $this->get_field_id( 'open_new_tab' ); ?>"
				       name="<?php echo $this->get_field_name( 'open_new_tab' ); ?>"/>
				<input type='hidden' value="<?php echo $defaults['icon_alignment'] ?>"
				       id="<?php echo $this->get_field_id( 'icon_alignment' ); ?>"
				       name="<?php echo $this->get_field_name( 'icon_alignment' ); ?>"/>
				<input type='hidden' value="<?php echo $defaults['no_follow'] ?>"
				       id="<?php echo $this->get_field_id( 'no_follow' ); ?>"
				       name="<?php echo $this->get_field_name( 'no_follow' ); ?>"/>
                <input type='hidden' value="<?php echo $defaults['no_opener'] ?>"
                       id="<?php echo $this->get_field_id( 'no_opener' ); ?>"
                       name="<?php echo $this->get_field_name( 'no_opener' ); ?>"/>
                <input type='hidden' value="<?php echo $defaults['no_referrer'] ?>"
                        id="<?php echo $this->get_field_id( 'no_referrer' ); ?>"
                        name="<?php echo $this->get_field_name( 'no_referrer' ); ?>"/>

				<input type='hidden' value="<?php echo $defaults['show_icon_labels'] ?>"
				       id="<?php echo $this->get_field_id( 'show_icon_labels' ); ?>"
				       name="<?php echo $this->get_field_name( 'show_icon_labels' ); ?>"/>
				<?php

				foreach ( $instance['fields'] as $field ) {
					printf( '<input  type="hidden" id="%1$s" name="%2$s"  value="%3$s">',
						$field['url_field_id'],
						$field['url_field_name'],
						esc_attr( $field['url'] )
					);

					printf( '<input type="hidden" id="%1$s" name="%2$s" value="%3$s">',
						$field['label_field_id'],
						$field['label_field_name'],
						esc_attr( $field['label'] )
					);

					printf( '<input type="hidden"  id="%1$s" name="%2$s" value="%3$s">',
						$field['color_picker_field_id'],
						$field['color_picker_field_name'],
						esc_attr( $field['color_picker'] )
					);

					printf( '<input type="hidden"  id="%1$s" name="%2$s" value="%3$s">',
						$field['color_picker_hover_field_id'],
						$field['color_picker_hover_field_name'],
						esc_attr( $field['color_picker_hover'] )
					);

					printf( '<input type="hidden"  id="%1$s" name="%2$s" value="%3$s">',
						$field['icon_field_id'],
						$field['icon_field_name'],
						esc_attr( $field['icon'] )
					);

					printf( '<input type="hidden"   id="%1$s" name="%2$s" value="%3$s">',
						$field['icon_kit_field_id'],
						$field['icon_kit_field_name'],
						esc_attr( $field['icon_kit'] )
					);

				}
				?>
			</div>

			<ul v-sortable="{ handle: '.wha-social-icons__field-handle', onUpdate : onUpdate  }"
			    class="wha-social-icons__list"
			    :class="{ 'wha-social-icons__list--no-labels' : show_icon_labels !== 'true' }">

				<template v-for="(field, key) in fields">

					<li class="wha-social-icons__field">

						<modal
							@input='field.color_picker = arguments[0];field.icon_kit = arguments[1];field.icon = arguments[2];field.color_picker_hover=arguments[3]'
							@keyup.esc.stop="closeModal(key)"
							@close='closeModal(key)'
							v-if='field.show_modal'
							:icon="field.icon"
							:icon_style="icon_style"
							:icon_canvas_style="icon_canvas_style"
							:icon_kit="field.icon_kit"
							:color_picker="field.color_picker"
							:color_picker_hover="field.color_picker_hover"
							:icon_categories='icons.categories'
							:icons="icons.icons">
						</modal>

						<span class="dashicons dashicons-sort wha-social-icons__field-handle"></span>
            <span class="wha-social-icons__field-icon-handler "
                  :style="normalizeStyle(key)"
                  :class="[ field.icon_kit, field.icon_kit+'-'+field.icon, icon_canvas_style]"
                  @mouseover='mouseoverIcon(key, $event)'
                  @mouseleave='mouseleaveIcon(key, $event)'
                  @click="clickonIconHandler(key)"></span>
						<div class="wha-social-icons__cw">
							<div class="wha-social-icons__inputs">

								<input class="widefat wha-social-icons__field-url"
								       :id="field.url_field_id"
								       :name="field.url_field_name"
								       v-model="field.url"
								       type="text"
								       :value="field.url_field_name"
								       @input="urlFieldNameHandler(key)"
								       @keyup.enter.stop="insertField"
								       placeholder="<?php _e( 'Start typing the URL...', 'wha-social-icons-widget' ) ?>">
								<input class="widefat wha-social-icons__field-label"
								       :id="field.label_field_id"
								       :name="field.label_field_name" v-model="field.label" type="text"
								       :value="field.label_field_name"
								       placeholder="<?php _e( 'Label', 'wha-social-icons-widget' ) ?>">
								<input type="hidden"
								       :id="field.color_picker_field_id"
								       :name="field.color_picker_field_name"
								       v-model='field.color_picker'
								       :value="field.color_picker">
								<input type="hidden"
								       :id="field.color_picker_hover_field_id"
								       :name="field.color_picker_hover_field_name"
								       v-model='field.color_picker_hover' :value="field.color_picker_hover">
								<input type="hidden"
								       :id="field.icon_field_id"
								       :name="field.icon_field_name" v-model="field.icon" :value="field.icon">
								<input type="hidden"
								       :id="field.icon_kit_field_id"
								       :name="field.icon_kit_field_name" v-model="field.icon_kit"
								       :value="field.icon_kit">
							</div>
						</div>


						<a v-show='fields.length > 1' class="wha-social-icons__field-trash" href="#"
						   @click.prevent="clickOnDeleteIconHandler(key)"><span
								class="dashicons dashicons-trash"></span></a>

						<br style="clear:both">
					</li>

				</template>

			</ul>

			<div class="wha-social-icons__add-button">
				<a @click.prevent='insertField'
				   class="button"><?php _e( 'Add more', 'wha-social-icons-widget' ); ?></a>
			</div>

			<p class="description">
				<?php echo wp_kses_post( __( 'To add an icon with an email address, use the <strong><em>mailto:mail@example.com</em></strong> format.', 'wha-social-icons-widget' ) ); ?>
			</p>

            <p class="description">
				<?php echo wp_kses_post( __( 'Note that icons above is not how they will look on front-end. This is just for reference.', 'wha-social-icons-widget' ) ); ?>
			</p>
		</div>
		<?php
	}

	/**
	 * Get default values for the first render when nothing is saved in databases.
	 *
	 * @return array
	 */
	public function get_defaults() {
		return apply_filters( 'wha_social_icons_get_defaults', array(
				'title'                     => esc_html__('Follow us', 'wha-social-icons-widget'),
				'description'               => '',
				'show_icon_labels'          => 'false',
				'open_new_tab'              => 'true',
				'no_follow'                 => 'false',
                'no_opener'                 => 'false',
                'no_referrer'               => 'false',
				'icon_style'                => 'with-canvas',
				'icon_alignment'            => 'none',
				'icon_canvas_style'         => 'rounded',
				'icon_padding_size'         => 8,
				'icon_font_size'            => 18,
				'global_color_picker'       => '#1e73be',
				'global_color_picker_hover' => '#1e73be',
				'fields'                    => array(
					array(
						'url'                => 'https://facebook.com/',
						'label'              => 'Facebook',
						'icon'               => 'facebook',
						'icon_kit'           => 'socicon',
						'color_picker'       => '#3b5998',
						'color_picker_hover' => '#3b5998'
					),
					array(
						'url'                => 'https://twitter.com/',
						'label'              => 'Twitter',
						'icon'               => 'twitter',
						'icon_kit'           => 'socicon',
						'color_picker'       => '#55acee',
						'color_picker_hover' => '#55acee'
					),
					array(
						'url'                => 'https://instagram.com/',
						'label'              => 'Instagram',
						'icon'               => 'instagram',
						'icon_kit'           => 'socicon',
						'color_picker'       => '#e4405f',
						'color_picker_hover' => '#e4405f'
					),
				)
			)
		);
	}

	/**
	 * Recursive function that replace kebab-case keys with snake_case keys for backward compatibility.
	 *
	 * @param $value
	 *
	 * @return array
	 */
	public function normalize_data_array( $value ) {
		$collector = array();
		foreach ( $value as $val_key => $val ) {
			if ( is_array( $val ) ) {
				$val = $this->normalize_data_array( $val );
			}
			$collector[ str_replace( '-', '_', $val_key ) ] = $val;
		}

		return $collector;
	}

	/**
	 * It is a function for backward compatibility that normalize data values between old and new version
	 * in order to work properly after users will make an update to the new version.
	 *
	 * @param $data
	 */
	public function inject_values( &$data ) {
		$socicons = wp_list_pluck( $this->icons['socicon'], 'color', 'icon' );
		foreach ( $data['fields'] as &$field ) {

			$get_icon    = $this->get_icon( $field['url'] );
			$parsed_icon = empty( $get_icon ) ? 'wordpress' : $get_icon;

			if ( empty( $field['icon'] ) && empty( $field['icon_kit'] ) ) {
				$field['icon']     = $parsed_icon;
				$field['icon_kit'] = 'socicon';

				$field['color_picker']       = $socicons[ $parsed_icon ];
				$field['color_picker_hover'] = $socicons[ $parsed_icon ];
			}

			if ( empty( $field['color_picker'] ) or ( strpos( $field['color_picker'], 'rgb' ) !== false ) ) {

				$color                       = empty( $field['color_picker'] ) ? $socicons[ $parsed_icon ] : $this->rgb2hex( $field['color_picker'] );
				$field['color_picker']       = $color;
				$field['color_picker_hover'] = $color;
			}

			if ( empty( $field['color_picker_hover'] ) ) {
				$field['color_picker_hover'] = $field['color_picker'];
			}
		}
	}

	/**
	 * Parse icon name from an url and return it.
	 *
	 * @param $url
	 *
	 * @return mixed|void
	 */
	protected function get_icon( $url ) {
		$icon       = '';
		$parsed_url = $this->extract_domain( $url );
		if ( $url ) {
			if ( strstr( $url, 'feedburner.google.com' )
			     or strstr( $url, 'mailto:' )
			) {
				$icon = 'mail';
			}
			if ( strstr( $url, 'feedburner.com' ) ) {
				$icon = 'rss';
			}
			if ( ! $icon ) {
				$icons = wp_list_pluck( $this->icons['socicon'], 'icon' );
				foreach ( $icons as $icon_id ) {
					if ( strstr( $parsed_url, $icon_id ) ) {
						$icon = $icon_id;
						break;
					}
				}
			}
		}

		return apply_filters( 'wha-social-icons-widget-icon', $icon, $url );
	}

	/**
	 * Extract domain from an url.
	 *
	 * @param $url
	 *
	 * @return mixed
	 */
	public function extract_domain( $url ) {
		$parsed_url = parse_url( trim( $url ) );
		$path       = empty( $parsed_url['path'] ) ? array( $url ) : explode( '/', $parsed_url['path'], 2 );

		return empty( $parsed_url['host'] ) ? array_shift( $path ) : $parsed_url['host'];
	}

	/**
	 * Convert rgb string to hex string.
	 *
	 * @param $rgb
	 *
	 * @return string
	 */
	function rgb2hex( $rgb ) {
		$rgb = $this->parse_rgb( $rgb );

		return '#' . sprintf( '%02x', $rgb['r'] ) . sprintf( '%02x', $rgb['g'] ) . sprintf( '%02x', $rgb['b'] );
	}

	/**
	 * Parse rgb string and covert its to an array.
	 *
	 * @param $rgb_string
	 *
	 * @return array
	 */
	function parse_rgb( $rgb_string ) {
		$rgb      = array( 'r' => 0, 'g' => 1, 'b' => 2 );
		$exploded = explode( ',', $rgb_string );
		foreach ( $rgb as $key => &$value ) {
			$value = filter_var( $exploded[ $value ], FILTER_SANITIZE_NUMBER_INT );
		}

		return $rgb;
	}

	/**
	 * Inject field with data in order to render the correct names ids and other html attributes in the template.
	 *
	 * @param $fields
	 *
	 * @return array
	 */
	private function inject_fields_with_data( $fields ) {

		$merged_fields = array();

		$will_be_merged = array(
			'show_modal'                    => false,
			'url_field_id'                  => $this->get_field_id( 'url_fields' ),
			'url_field_name'                => $this->get_field_name( 'url_fields' ) . '[]',
			'label_field_id'                => $this->get_field_id( 'label_fields' ),
			'label_field_name'              => $this->get_field_name( 'label_fields' ) . '[]',
			'color_picker_field_id'         => $this->get_field_id( 'color_picker_fields' ),
			'color_picker_field_name'       => $this->get_field_name( 'color_picker_fields' ) . '[]',
			'color_picker_hover_field_id'   => $this->get_field_id( 'color_picker_hover_fields' ),
			'color_picker_hover_field_name' => $this->get_field_name( 'color_picker_hover_fields' ) . '[]',
			'icon_field_id'                 => $this->get_field_id( 'icon_fields' ),
			'icon_field_name'               => $this->get_field_name( 'icon_fields' ) . '[]',
			'icon_kit_field_id'             => $this->get_field_id( 'icon_kit_fields' ),
			'icon_kit_field_name'           => $this->get_field_name( 'icon_kit_fields' ) . '[]',
		);

		foreach ( $fields as $field ) {

			$merged_fields[] = array_merge( $field, $will_be_merged );
		}

		return $merged_fields;
	}

	/**
	 * Get default field for a new added element.
	 *
	 * @return array
	 */
	public function get_default_field() {
		return array(
			array(
				'url'                => '',
				'label'              => __( 'Default Label', 'wha-social-icon-widget' ),
				'icon'               => 'wordpress',
				'icon_kit'           => 'socicon',
				'color_picker'       => '#1e73be',
				'color_picker_hover' => '#1e73be'
			)
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$instance = $this->normalize_data_array( $instance );
		$instance = wp_parse_args( (array) $instance, $this->get_defaults() );

		$this->inject_values( $instance );

		echo $args['before_widget'];

		if ( $instance['title'] ) {

			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		$class_list   = array();
		$desc_class ='';
		$class_list[] = 'wha-social-icons-list--' . $instance['icon_style'];
		$class_list[] = 'wha-social-icons-list--' . $instance['icon_canvas_style'];

		if ( ! empty( $instance['icon_alignment'] ) &&
		     in_array( $instance['icon_alignment'], array( 'left', 'center', 'right' ) )
		) {
			$class_list[] = $desc_class = 'wha-social-icons-list--align-' . $instance['icon_alignment'];
			$desc_class = "class='".$desc_class."'";
		}


		if ( is_bool( $instance['show_icon_labels'] ) ) {
			$instance['show_icon_labels'] = $instance['show_icon_labels'] === true ? 'true' : 'false';
		}

		if ( is_bool( $instance['open_new_tab'] ) ) {
			$instance['open_new_tab'] = $instance['open_new_tab'] === true ? 'true' : 'false';
		}

		if ( is_bool( $instance['no_follow'] ) ) {
			$instance['no_follow'] = $instance['no_follow'] === true ? 'true' : 'false';
		}

        if ( is_bool( $instance['no_opener'] ) ) {
            $instance['no_opener'] = $instance['no_opener'] === true ? 'true' : 'false';
        }

        if ( is_bool( $instance['no_referrer'] ) ) {
            $instance['no_referrer'] = $instance['no_referrer'] === true ? 'true' : 'false';
        }

		if ( $instance['show_icon_labels'] === 'false' ) {
			$class_list[] = 'wha-social-icons-list--no-labels';
		}
		?>

		<?php if ( ! empty( $instance['description'] ) ) : ?>

			<p <?php echo $desc_class; ?>><?php echo $instance['description']; ?></p>

		<?php endif; ?>

		<ul class="wha-social-icons-list <?php echo esc_attr( implode( ' ', $class_list ) ); ?>">

			<?php
			foreach ( $instance['fields'] as $field ) : ?>

				<?php
				$rule        = ( $instance['icon_style'] === 'with-canvas' ) ? 'background-color' : 'color';
				$hover_style = empty( $field['color_picker_hover'] ) ? '' : 'data-hover-rule="' . $rule . '" data-hover-color="' . $field['color_picker_hover'] . '"'; ?>
				<li class="wha-social_icons-list__item">
					<a class="wha-social_icons-list__link" href="<?php echo esc_url( $field['url'], $this->protocols ); ?>" <?php echo( $instance['open_new_tab'] === 'true' ? 'target="_blank"' : '' ); ?> <?php echo( $instance['no_follow'] === 'true' ? 'rel="nofollow"' : '' ); ?> <?php echo( $instance['no_opener'] === 'true' ? 'rel="noopener"' : '' ); ?> <?php echo( $instance['no_referrer'] === 'true' ? 'rel="noreferrer"' : '' ); ?>>
						<?php if ( ! empty( $field['icon'] ) && ! empty( $field['icon_kit'] ) && ! empty( $field['color_picker'] ) ) {
							$class = $field['icon_kit'] . ' ' . $field['icon_kit'] . '-' . $field['icon'];
							$style = $rule . ' : ' . $field['color_picker'];
						} else {
							$style = '';

							$class = 'socicon socicon-' . esc_attr( $this->get_icon( $field['url'] ) );
						} ?>
						<?php if ( ! empty( $instance['icon_font_size'] ) ) {
							$style .= '; font-size: ' . $instance['icon_font_size'] . 'px';
						} ?>
						<?php if ( ! empty( $instance['icon_padding_size'] ) ) {
							$style .= '; padding:' . $instance['icon_padding_size'] . 'px';
						} ?>

                        <?php if ( $instance['show_icon_labels'] === 'false' ) : ?>
                            <span class="screen-reader-text"><?php echo esc_html( $field['icon'] ); ?></span>
                        <?php endif; ?>

						<span class="wha-social_icons-list-span <?php echo $class ?>" <?php echo $hover_style ?> style="<?php echo $style ?>"></span>

						<?php
						if ( $instance['show_icon_labels'] === 'true' ) : ?>
							<span class="wha-social_icons-list__label"><?php echo esc_html( $field['label'] ); ?></span>
						<?php endif; ?>
					</a>
				</li>

			<?php endforeach; ?>

		</ul>

		<?php

		echo $args['after_widget'];
	}

	/**
	 * Scripts & styles for front-end display of widget.
	 */
	public function scripts() {
		wp_enqueue_style( 'socicon', plugin_dir_url( $this->plugin_file ) . 'assets/css/socicon.css', array(), '20181009' );

		wp_enqueue_script(
			'wha-social-icons-widget-frontend',
			plugin_dir_url( $this->plugin_file ) . 'assets/js/social-icons-widget-frontend.js',
			array( 'jquery' ),
			'20170209',
			true
		);
	}

}