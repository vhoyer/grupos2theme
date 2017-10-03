<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<style><?php //{{{ ?>
/*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,footer,header,nav,section{display:block}h1{font-size:2em;margin:0.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{-webkit-box-sizing:content-box;box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace, monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted}b,strong{font-weight:inherit}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace, monospace;font-size:1em}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-0.25em}sup{top:-0.5em}audio,video{display:inline-block}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}button,html [type="button"],[type="reset"],[type="submit"]{-webkit-appearance:button}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring,[type="button"]:-moz-focusring,[type="reset"]:-moz-focusring,[type="submit"]:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:0.35em 0.75em 0.625em}legend{-webkit-box-sizing:border-box;box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{display:inline-block;vertical-align:baseline}textarea{overflow:auto}[type="checkbox"],[type="radio"]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0}[type="number"]::-webkit-inner-spin-button,[type="number"]::-webkit-outer-spin-button{height:auto}[type="search"]{-webkit-appearance:textfield;outline-offset:-2px}[type="search"]::-webkit-search-cancel-button,[type="search"]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details,menu{display:block}summary{display:list-item}canvas{display:inline-block}template{display:none}[hidden]{display:none}/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2017 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*!
 * Generated using the Bootstrap Customizer (https://getbootstrap.com/docs/3.3/customize/?id=9559ee61daf437c3383c619c7aaaf209)
 * Config saved to config.json and https://gist.github.com/9559ee61daf437c3383c619c7aaaf209
 *//*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */[role="button"]{cursor:pointer}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width: 768px){.container{width:750px}}@media (min-width: 992px){.container{width:970px}}@media (min-width: 1200px){.container{width:1170px}}.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.row{margin-left:-15px;margin-right:-15px}.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0%}@media (min-width: 768px){.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0%}}@media (min-width: 992px){.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0%}}@media (min-width: 1200px){.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0%}}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}.pull-right{float:right !important}.pull-left{float:left !important}.hide{display:none !important}.show{display:block !important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none !important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-xs,.visible-sm,.visible-md,.visible-lg{display:none !important}.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block{display:none !important}@media (max-width: 767px){.visible-xs{display:block !important}table.visible-xs{display:table !important}tr.visible-xs{display:table-row !important}th.visible-xs,td.visible-xs{display:table-cell !important}}@media (max-width: 767px){.visible-xs-block{display:block !important}}@media (max-width: 767px){.visible-xs-inline{display:inline !important}}@media (max-width: 767px){.visible-xs-inline-block{display:inline-block !important}}@media (min-width: 768px) and (max-width: 991px){.visible-sm{display:block !important}table.visible-sm{display:table !important}tr.visible-sm{display:table-row !important}th.visible-sm,td.visible-sm{display:table-cell !important}}@media (min-width: 768px) and (max-width: 991px){.visible-sm-block{display:block !important}}@media (min-width: 768px) and (max-width: 991px){.visible-sm-inline{display:inline !important}}@media (min-width: 768px) and (max-width: 991px){.visible-sm-inline-block{display:inline-block !important}}@media (min-width: 992px) and (max-width: 1199px){.visible-md{display:block !important}table.visible-md{display:table !important}tr.visible-md{display:table-row !important}th.visible-md,td.visible-md{display:table-cell !important}}@media (min-width: 992px) and (max-width: 1199px){.visible-md-block{display:block !important}}@media (min-width: 992px) and (max-width: 1199px){.visible-md-inline{display:inline !important}}@media (min-width: 992px) and (max-width: 1199px){.visible-md-inline-block{display:inline-block !important}}@media (min-width: 1200px){.visible-lg{display:block !important}table.visible-lg{display:table !important}tr.visible-lg{display:table-row !important}th.visible-lg,td.visible-lg{display:table-cell !important}}@media (min-width: 1200px){.visible-lg-block{display:block !important}}@media (min-width: 1200px){.visible-lg-inline{display:inline !important}}@media (min-width: 1200px){.visible-lg-inline-block{display:inline-block !important}}@media (max-width: 767px){.hidden-xs{display:none !important}}@media (min-width: 768px) and (max-width: 991px){.hidden-sm{display:none !important}}@media (min-width: 992px) and (max-width: 1199px){.hidden-md{display:none !important}}@media (min-width: 1200px){.hidden-lg{display:none !important}}html *{-webkit-box-sizing:border-box;box-sizing:border-box}body{font-family:'Open Sans', sans-serif}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.person{display:inline-block}.clear{clear:both}#branding::after,#services .card:after{content:' '}#cards h2{font-weight:normal}#cards div[class*="panel-"]{padding-bottom:1em}.case .comment-text{text-align:center}.case .feature{margin-top:1em;max-height:400px;overflow:hidden;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}#clients div.clients>div.client{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:250px;height:250px;margin:1em;overflow:hidden}#clients div.clients>div img{z-index:-1;position:absolute;display:block;width:250px;height:auto;-webkit-transition:-webkit-filter .2s ease-out;transition:-webkit-filter .2s ease-out;transition:filter .2s ease-out;transition:filter .2s ease-out, -webkit-filter .2s ease-out}#clients div.clients>div:hover img{-webkit-filter:blur(3px);filter:blur(3px);-webkit-transition:-webkit-filter .2s ease-out;transition:-webkit-filter .2s ease-out;transition:filter .2s ease-out;transition:filter .2s ease-out, -webkit-filter .2s ease-out}#clients div.clients>div p{display:none;margin:0 1em}#clients div.clients>div:hover p{display:block}#contato{margin-bottom:5em;margin-top:5em}#contato .contato-info{margin:1.5em;padding:0}#contato .contato-info dt{float:left;width:10%;margin:0.6em 0;padding:0}#contato .contato-info dd{float:left;width:90%;margin:0.6em 0;padding:0}#copyright{margin:.5em 0;font-size:.5em;text-align:center}.social{padding-top:1.63em}.social i{margin:.2em;width:1em;height:1em;text-align:center}.social [class*="facebook"]:hover{color:#3b5998}.social [class*="twitter"]:hover{color:#009eed}.social [class*="instagram"]:hover{color:#bc2a8d}.social [class*="linkedin"]:hover{color:#0077b5}#branding{background-size:cover;background-position:center;min-height:30vh;padding-top:6em;position:relative}#branding *{z-index:1}#branding::after{position:absolute;top:0;width:100%;height:100%;background-color:rgba(0,0,0,0.6)}#branding .owl-theme{margin-bottom:2em;color:#fff;text-align:center;font-size:1.2em}#branding .owl-theme .owl-stage{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}#branding .owl-theme .owl-stage em{display:block;font-size:1.2em;font-weight:bold;font-style:normal}#branding .owl-theme .owl-stage em .quote{position:absolute}#branding .owl-theme .owl-stage .quote{display:inline;font-size:1.3em}#header .slide{width:80%;margin:0 auto;padding:5em 0}#header .btn-group{width:80%;margin:0 auto}#header .btn-group .btn{margin-bottom:1em;width:100%}@media screen and (min-width: 995px){#header #branding{height:100vh;padding-top:8em}#header #branding.small{height:40vh}#header .btn-group{position:absolute;top:47%;left:calc(77% - (19em)/2);width:19em}#header .btn-group .btn{font-size:1.2em}#branding .owl-theme .owl-stage{margin-bottom:2em}#branding .owl-theme .owl-stage .item{padding:0 10em}#branding .owl-theme .owl-stage em{display:inline}#branding .owl-theme .owl-stage em .quote{position:relative}}#menu,#menu .nav-main_menu{width:100%;position:fixed;left:0;margin:0;padding:0 1.5em}#menu,#menu.scrolled{-webkit-transition:color .1s ease, background-color .5s ease-in, -webkit-box-shadow .3s ease;transition:color .1s ease, background-color .5s ease-in, -webkit-box-shadow .3s ease;transition:color .1s ease, background-color .5s ease-in, box-shadow .3s ease;transition:color .1s ease, background-color .5s ease-in, box-shadow .3s ease, -webkit-box-shadow .3s ease}@media screen and (min-width: 600px){.admin-bar #menu{top:46px}}@media screen and (min-width: 782px){.admin-bar #menu{top:32px}}#menu{z-index:2;top:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;height:4em;color:#eee;background-color:transparent;-webkit-box-shadow:none;box-shadow:none}#menu.scrolled{color:#333;background-color:#fff;-webkit-box-shadow:0 0 2px #000;box-shadow:0 0 2px #000}#menu.scrolled>.nav-main_menu{background-color:inherit}#menu a img{max-height:calc(4em - .5em)}#menu #nav-menu-laucher{padding:10px}#menu .nav-main_menu{background-color:rgba(0,0,0,0.8);-webkit-box-shadow:0 0 2px #000;box-shadow:0 0 2px #000;display:none;top:4em;padding-top:1em;padding-bottom:1em}#menu .nav-main_menu ul.menu,#menu .nav-main_menu .menu ul{list-style:none;margin:0;padding:0}#menu .nav-main_menu ul.menu li,#menu .nav-main_menu .menu ul li{width:100%;margin-bottom:1em}#menu .nav-main_menu ul.menu a,#menu .nav-main_menu .menu ul a{display:inline-block;width:100%;color:inherit;text-decoration:none;text-align:center}#menu .nav-main_menu.open{display:block}@media screen and (min-width: 995px){#menu.scrolled>.nav-main_menu{background-color:transparent}#menu #nav-menu-laucher{display:none}#menu .nav-main_menu{position:initial;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-shadow:none;box-shadow:none;background-color:transparent;width:auto;height:100%;padding:0 0;font-weight:900}#menu .nav-main_menu ul.menu,#menu .nav-main_menu .menu ul{margin-right:1em;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}#menu .nav-main_menu ul.menu>li,#menu .nav-main_menu .menu ul>li{margin-bottom:0;width:auto;float:left}#menu .nav-main_menu ul.menu a,#menu .nav-main_menu .menu ul a{padding:.5em 1em;-webkit-transition:all .1s ease;transition:all .1s ease;-webkit-transition-property:color, border;transition-property:color, border}#menu .nav-main_menu ul.menu a:hover,#menu .nav-main_menu .menu ul a:hover{border-top:#4b7082 3px solid;border-bottom:#4b7082 3px solid;color:#4b7082}#menu .nav-main_menu .btn{text-transform:uppercase}}#rdstation{width:200px;height:auto}#services .card{position:relative;height:20em;color:#fff}#services .card *{z-index:1}#services .card .center-img-inside{position:absolute;top:0;left:0;z-index:-1;width:100%;height:100%;overflow:hidden}#services .card .center-img-inside img{width:100%;height:auto}#services .card:after{-webkit-box-sizing:border-box;box-sizing:border-box;position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,0.6);opacity:0.75;-webkit-transition:opacity .5s ease-in;transition:opacity .5s ease-in}#services .card:hover:after{opacity:0.93;-webkit-transition:opacity .5s ease-in;transition:opacity .5s ease-in}#services a:nth-child(5n+0)>.card:after{background-color:#D14747}#services a:nth-child(5n+1)>.card:after{background-color:#4B7082}#services a:nth-child(5n+2)>.card:after{background-color:#1AA5BA}#services a:nth-child(5n+3)>.card:after{background-color:#F58634}#services a:nth-child(5n+4)>.card:after{background-color:#1B998B}#services .full-size{width:100%}.btn{display:block;padding:.4em 1em;cursor:pointer;color:#fff;text-decoration:none;text-align:center}.btn.round{border-radius:7px}.btn.btn-orange{background-color:#f58634}.btn.btn-blue{background-color:#1aa5ba}.btn.btn-bluegray{background-color:#4b7082}.center-text-within p,.center-text-within h1,.center-text-within h2,.center-text-within h3,.center-text-within h4,.center-text-within h5,.center-text-within h6,.center-text-within span{display:block;width:auto;margin-left:auto;margin-right:auto;text-align:center}.normalize-anchor a,.normalize-anchor a:visited,.normalize-anchor a:active,.normalize-anchor a:focus{color:#333;text-decoration:none;-webkit-transition:color ease-in .2s;transition:color ease-in .2s}.flex-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.flex-wrapper.col{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-flow:column;flex-flow:column}.flex-wrapper.wrap{-ms-flex-flow:wrap;flex-flow:wrap}.flex-wrapper.space-around{-ms-flex-pack:distribute;justify-content:space-around}.flex-wrapper.align-left{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.heading{margin:2em;color:#1aa5ba;font-size:2em}.full-img-inside>img{width:100%;height:auto}.center-img-inside{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.panel-1{background-color:#6e97ab}.panel-1 i.fa{margin-top:1em}.panel-1 p{margin-bottom:0;padding-bottom:1em}.panel-2{background-color:#7ea3b5}.panel-2 i.fa{margin-top:1em}.panel-2 p{margin-bottom:0;padding-bottom:1em}.panel-3{background-color:#8eaebe}.panel-3 i.fa{margin-top:1em}.panel-3 p{margin-bottom:0;padding-bottom:1em}.panel-4{background-color:#9fbac7}.panel-4 i.fa{margin-top:1em}.panel-4 p{margin-bottom:0;padding-bottom:1em}
		</style><?php //}}} ?>
		<style type='text/css'>
#branding{background-image:url('<?php header_image() ?>')}
		</style>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
			<nav id="menu"><!--{{{-->
				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
					<?php //set-up header logo
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$header_logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
					<?php if ($header_logo[0]!=""): ?>
					<img src="<?php echo $header_logo[0] ?>" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
					<?php endif; ?>
					<div id='site-title' class='<?php if($header_logo[0]!="") { echo "sr-only"; } ?>'>
						<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><?php echo esc_html( get_bloginfo( 'name' ) ); ?><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
					</div>
				</a>
				<a id='nav-menu-laucher' role='button'>
					<i class='fa fa-2x fa-bars' role='menu'></i>
				</a>
				<div class='nav-main_menu'>
					<?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?>
					<div class='flex-wrapper col'>
						<a class='btn btn-orange round' role='button' href='<?php get_theme_mod("btnConsultorLink") ?>'><?php //TODO: chage dynamic text ?>Falar com um consultor</a>
					</div>
				</div>
			</nav><!--}}}-->
		</div>
		<div id="container">
<?php $front_or_home = is_front_page() || is_home() || is_front_page() && is_home(); ?>
<header id="header"><!--{{{-->
	<div id="branding" <?php if( !($front_or_home) ){echo 'class="small"';} ?>>
		<?php if ( $front_or_home ) : ?>
		<div class='owl-carousel owl-theme'>
			<div class='item'>
				Somos especializados em <em>MARKETING DIGITAL</em>
			</div>
			<div class='item'>
				Conectamos <em>EMPRESAS</em> e <em>CLIENTES</em> através do <em>INBOUND MARKETING</em>
			</div>
			<div class='item'>
				<em class='quote'>“</em>Conteúdo constrói <em>RELACIONAMENTOS.</em> Relacionamentos são baseados em <em>CONFIANÇA.</em> Confiança gera <em>RECEITA.<em class='quote'>”</em></em> <span class='person'>Andrew Davis</span>
			</div>
		</div>
		<div class="btn-group flex-wrapper col">
			<a class="btn round btn-bluegray" href="<?php get_theme_mod("btnConsultorLink") ?>" role="button">Receba um Orçamento</a>
			<a class="btn round btn-blue" href="<?php get_theme_mod("btnConsultorLink") ?>" role="button">Faça uma Avaliação Gratuita</a>
		</div>
		<?php endif; ?>
	</div>
</header><!--}}}-->
