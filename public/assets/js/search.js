;(function($) {
    'use strict';
    if ( $('.mercado-google-maps').length == 1) {
        var wfm  = document.createElement('script');
        wfm.src  = 'http://maps.googleapis.com/maps/api/js?key=AIzaSyBpXkIHekTsMPHuS_yuG1cIK0j5TvVjFkE';
        wfm.type = 'text/javascript';
        var sm   = document.getElementsByTagName('script')[ 0 ];
        sm.parentNode.insertBefore(wfm, sm);
    }
    var MERCADO_JS = {
    	init: function(){
    		this.mercado_chosen();
    		this.mercado_clone_all_zan_menus();
    		this.mercado_control_mobile_menu();
    		this.mercado_control_panel();
    		this.mercado_tabs();
    		this.mercado_countdown();
    		this.mercado_better_equal_elems();
    		this.mercado_toggle_slide_menu();
    		this.mercado_price_range();
    		this.mercado_price_quantity();
    		this.mercado_remove_product_in_cart();
    		this.mercado_product_slider();
    		this.mercado_toggle_vertical_main_menu();
            this.mercado_sticky_menu();
            this.mercado_google_maps();
    	},
    	onReady: function(){
    		this.mercado_innit_carousel();
    	},

    	onResize: function(){
            this.mercado_innit_carousel();
            this.mercado_better_equal_elems();
            this.mercado_product_slider();
            this.mercado_tabs();
            this.mercado_sticky_menu();
		},
mercado_chosen: function(){
    if($('.wrap-search-form .wrap-list-cate').length > 0){
        $('.wrap-search-form .wrap-list-cate').on('click', '.link-control', function (event) {
            event.preventDefault();
            $(this).siblings('ul').slideToggle();
        });
        $('.wrap-search-form .wrap-list-cate .list-cate').on('click', 'li', function (event) {
            var _this 	 = $(this),
               // _value 	 = _this.attr('value'),
               _value 	 = _this.text(),
                _content = _this.text(),
                _title 	 = _this.text();
            _content = _content.slice(0, 12);
            _this.parent().siblings('a').text(_content).attr('title',_title);
            _this.parent().siblings('input[name="product_cat"]').val(_value);
            _this.parent().siblings('input[name="product_cat_id"]').val(_this.data("id"));

            _this.parent().slideUp();
        });
    }
    if($("select:not(.except-chosen)").length > 0){
        $("select:not(.except-chosen)").each(function(){
            $(this).chosen();
        });
    }
},
}
})
