<?phpfunction kutetheme_ovic_add_google_fonts($fonts_list){    $fonts = array();    return array_merge($fonts_list, $fonts);}add_filter('vc_google_fonts_get_fonts_filter', 'kutetheme_ovic_add_google_fonts');