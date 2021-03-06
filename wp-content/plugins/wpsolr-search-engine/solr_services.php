<?php

include( dirname( __FILE__ ) . '/class-wp-solr.php' );

function solr_format_date( $thedate ) {
	$datere  = '/(\d{4}-\d{2}-\d{2})\s(\d{2}:\d{2}:\d{2})/';
	$replstr = '${1}T${2}Z';

	return preg_replace( $datere, $replstr, $thedate );
}

add_action( 'wp_head', 'add_scripts' );
function add_scripts() {
	wp_enqueue_style( 'solr_auto_css', plugins_url( 'css/bootstrap.min.css', __FILE__ ) );
	wp_enqueue_style( 'solr_frontend', plugins_url( 'css/style.css', __FILE__ ) );
	wp_enqueue_script( 'solr_auto_js1', plugins_url( 'js/bootstrap-typeahead.js', __FILE__ ), array( 'jquery' ), false, true );
	wp_enqueue_script( 'solr_autocomplete', plugins_url( 'js/autocomplete_solr.js', __FILE__ ), array( 'solr_auto_js1' ), false, true );
}

function fun_search_indexed_data() {
	if ( session_id() == '' ) {
		session_start();
	}


	$search_que = '';
	if ( isset( $_GET['search'] ) ) {
		$search_que = $_GET['search'];
	}

	$ad_url        = admin_url();
	$get_page_info = get_page_by_title( 'Search Results' );
	$url           = get_permalink( $get_page_info->ID );
	$solr_options  = get_option( 'wdm_solr_conf_data' );


	$k     = '';
	$sec   = '';
	$proto = '';


	if ( $solr_options['host_type'] == 'self_hosted' ) {
		$_SESSION['wdm-host'] = $solr_options['solr_host'];
		$_SESSION['wdm-port'] = $solr_options['solr_port'];
		$_SESSION['wdm-path'] = $solr_options['solr_path'];


	} else {

		//$wdm_typehead_request_handler = 'wdm_return_goto_solr_rows';
		$_SESSION['wdm-ghost']  = $solr_options['solr_host_goto'];
		$_SESSION['wdm-gport']  = $solr_options['solr_port_goto'];
		$_SESSION['wdm-gpath']  = $solr_options['solr_path_goto'];
		$_SESSION['wdm-guser']  = $solr_options['solr_key_goto'];
		$_SESSION['wdm-gpwd']   = $solr_options['solr_secret_goto'];
		$_SESSION['wdm-gproto'] = $solr_options['solr_protocol_goto'];

	}

	$wdm_typehead_request_handler = 'wdm_return_solr_rows';

	echo "<div class='cls_search' style='width:100%'> <form action='$url' method='get'  class='search-frm' >";
	echo '<input type="hidden" value="' . $wdm_typehead_request_handler . '" id="path_to_fold">';
	echo '<input type="hidden" value="' . $ad_url . '" id="path_to_admin">';
	echo '<input type="hidden" value="' . $search_que . '" id="search_opt">';

	$ajax_nonce = wp_create_nonce( "nonce_for_autocomplete" );


	$solr_form_options = get_option( 'wdm_solr_res_data' );
	$opt               = $solr_form_options['default_search'];

	$fac_opt = get_option( 'wdm_solr_facet_data' );

	$get_page_info = get_page_by_title( 'Search Results' );
	$url           = get_permalink( $get_page_info->ID );

	echo $form = '
        <div class="ui-widget">
	<input type="hidden" name="page_id" value="' . $get_page_info->ID . '" />
	<input type="hidden"  id="ajax_nonce" value="' . $ajax_nonce . '">
        <input type="text" placeholder="Search ..." value="' . $search_que . '" name="search" id="search_que" class="search-field sfl2" autocomplete="off"/>
	<input type="submit" value="Search" id="searchsubmit" style="position:relative;width:auto"> <div style="clear:both"></div>
        </div>
        </form>';

	echo '</div>';
	echo "<div class='cls_results'>";
	if ( $search_que != '' && $search_que != '*:*' ) {

		$solr = new wp_Solr();

		$res     = 0;
		$options = $fac_opt['facets'];
		if ( $res == 0 ) {

			$final_result = $solr->get_search_results( $search_que, '', '', '', '' );

			if ( $final_result[2] == 0 ) {
				echo "<span class='infor'>No results found for $search_que</span>";
			} else {
				echo '<div class="wdm_resultContainer">
                    <div class="wdm_list">';
				$sort_select = "<label class='wdm_label'>Sort By</label>
                                    <select class='select_field'>
                                    <option value='new'>Newest</option>
                                    <option value='old'>Oldest</option>
                                    <option value='mcomm'>Most Comments</option>
                                    <option value='lcomm'>Least Comments</option>
                                    </select>";

				echo '<div>' . $sort_select . '</div>';

				$res_array = $final_result[3];
				if ( $final_result[1] != '0' ) {


					if ( $options != '' && $res_array != 0 ) {

						$facets_array = explode( ',', $fac_opt['facets'] );


						$groups = '
                                    <div><label class="wdm_label">Filter Results</label>
                                    <input type="hidden" name="sel_fac_field" id="sel_fac_field" value="all" >
                                    <ul >
				    <li class="select_opt" id="all">ALL</li>
				    ';

						foreach ( $facets_array as $arr ) {
							$field = ucfirst( $arr );
							if ( isset( $final_result[1][ $arr ] ) && count( $final_result[1][ $arr ] ) > 0 ) {
								$arr_val = $field;
								if ( substr( $arr_val, ( strlen( $arr_val ) - 4 ), strlen( $arr_val ) ) == "_str" ) {
									$arr_val = substr( $arr_val, 0, ( strlen( $arr_val ) - 4 ) );
								}
								$arr_val = str_replace( '_', ' ', $arr_val );
								$groups .= "<lh >By $arr_val</lh><br>";

								foreach ( $final_result[1][ $arr ] as $val ) {
									$name  = $val[0];
									$count = $val[1];
									$groups .= "<li class='select_opt' id='$field:$name:$count'>$name($count)</li>";
								}
							}

						}

						$groups .= '</ul></div>';


					}

					echo $groups;

				}

				echo '</div>
                    <div class="wdm_results">';
				if ( $final_result[0] != '0' ) {
					echo $final_result[0];
				}

				if ( $solr_form_options['res_info'] == 'res_info' && $res_array != 0 ) {
					echo '<div class="res_info">' . $final_result[4] . '</div>';
				}

				if ( $res_array != 0 ) {
					$img = plugins_url( 'images/gif-load.gif', __FILE__ );
					echo '<div class="loading_res"><img src="' . $img . '"></div>';
					echo "<div class='results-by-facets'>";
					foreach ( $res_array as $resarr ) {
						echo $resarr;
					}
					echo "</div>";
					echo "<div class='paginate_div'>";
					$total         = $final_result[2];
					$number_of_res = $solr_form_options['no_res'];
					if ( $total > $number_of_res ) {
						$pages = ceil( $total / $number_of_res );
						echo '<ul id="pagination-flickr">';
						for ( $k = 1; $k <= $pages; $k ++ ) {
							echo "<li ><a class='paginate' href='#' id='$k'>$k</a></li>";
						}
					}
					echo '</ul></div>';

				}


				echo '</div>';
				echo '</div><div style="clear:both;"></div>';
			}
		} else {
			echo 'Unable to detect Solr instance';
		}

	}

	echo '</div>';
}


function return_solr_instance() {

	$path = plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
	require_once $path;


	$spath    = $_POST['spath'];
	$port     = $_POST['sport'];
	$host     = $_POST['shost'];
	$username = $_POST['skey'];
	$password = $_POST['spwd'];
	$protocol = $_POST['sproto'];

	if ( $username == '' ) {
		$config = array(
			"endpoint" =>
				array(
					"localhost" => array(
						'scheme'   => $protocol,
						"host" => $host,
						"port" => $port,
						"path" => $spath
					)
				)
		);

	} else {
		$config = array(
			'endpoint' => array(
				'localhost1' => array(
					'scheme'   => $protocol,
					'host'     => $host,
					'port'     => $port,
					'path'     => $spath,
					'username' => $username,
					'password' => $password
				)
			)
		);
	}


	$client = new Solarium\Client( $config );

	$ping = $client->createPing();

	try {
		$result = $client->ping( $ping );

	} catch ( Exception $e ) {

		$str_err = "";
		$solrCode = $e->getCode();
		$solrMessage = $e->getMessage();

		// 401: authentification
		switch ($e->getCode()) {

			case 401:
				$str_err .= "<br /><span>The server authentification failed. Please check your user/password (Solr code http $solrCode)</span><br />";
				break;

			case 400:
			case 404:

				$str_err .= "<br /><span>Your Solr path could be malformed (Solr code $solrCode)</span><br />";
				break;

			default:


				$str_err .= "<span>$solrMessage ($solrCode)</span><br /><br />\n";

				break;

		}


		echo $str_err;
		return;

	}


}

add_action( 'wp_ajax_nopriv_return_solr_instance', 'return_solr_instance' );
add_action( 'wp_ajax_return_solr_instance', 'return_solr_instance' );
function return_solr_status() {

	$solr = new wp_Solr();
	echo $words = $solr->get_solr_status();

}

add_action( 'wp_ajax_nopriv_return_solr_status', 'return_solr_status' );
add_action( 'wp_ajax_return_solr_status', 'return_solr_status' );


function return_solr_results() {

	$query = $_POST['query'];
	$opt   = $_POST['opts'];
	$num   = $_POST['page_no'];
	$sort  = $_POST['sort_opt'];


	$solr          = new wp_Solr();
	$final_result  = $solr->get_search_results( $query, $opt, $num, $sort );
	$solr_options  = get_option( 'wdm_solr_conf_data' );
	$output        = array();
	$search_result = array();

	$res_opt = get_option( 'wdm_solr_res_data' );

	$res1  = array();
	$f_res = '';
	foreach ( $final_result[3] as $fr ) {
		$f_res .= $fr;
	}
	$res1[] = $final_result[3];


	$total         = $final_result[2];
	$number_of_res = $res_opt['no_res'];
	$paginat_var   = '';
	if ( $total > $number_of_res ) {
		$pages = ceil( $total / $number_of_res );
		$paginat_var .= '<ul id="pagination-flickr">';
		for ( $k = 1; $k <= $pages; $k ++ ) {
			$paginat_var .= "<li ><a class='paginate' href='#' id='$k'>$k</a></li>";
		}
		$paginat_var .= '</ul>';
	}


	$res1[] = $paginat_var;
	$res1[] = $final_result[4];
	echo json_encode( $res1 );


	die();
}

add_action( 'wp_ajax_nopriv_return_solr_results', 'return_solr_results' );
add_action( 'wp_ajax_return_solr_results', 'return_solr_results' );

