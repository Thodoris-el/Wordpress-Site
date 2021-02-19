/**handles:ivory-search-scripts,wp-embed**/
function ivory_search_analytics(s,e,i){try{var t="function"==typeof __gaTracker?__gaTracker:"function"==typeof ga&&ga,a="function"==typeof gtag&&gtag;if(!1!==a)return void a("event","Ivory Search - "+s,{event_label:e,event_category:i});!1!==t&&t("send",{hitType:"event",eventCategory:i,eventAction:"Ivory Search - "+s,eventLabel:e})}catch(s){}}!function(s){"use strict";s(window).on("load",function(){(s(".is-menu a, .is-menu a svg").on("click",function(e){if(e.stopPropagation(),e.preventDefault(),"static"===s(this).closest("ul").css("position")&&s(this).closest("ul").css("position","relative"),s(this).closest(".is-menu-wrapper").length&&(s(this).closest(".is-menu").hasClass("sliding")||s(this).closest(".is-menu").hasClass("full-width-menu"))&&s(this).closest(".is-menu-wrapper").addClass("is-expanded"),s(this).closest(".is-menu").hasClass("sliding")||s(this).closest(".is-menu").hasClass("full-width-menu")){s(this).closest(".is-menu").find("button.is-search-submit").hide();var i=s(this).closest("li.is-menu").outerHeight();i/=2,s(this).closest(".is-menu").find("form").css({top:i-18+"px"}),s(this).closest(".is-menu").find(".search-close").css({top:i-10+"px"})}if(s(this).closest(".is-menu").hasClass("is-dropdown"))s(this).closest(".is-menu").find("form").fadeIn();else if(s(this).closest(".is-menu").hasClass("sliding"))s(this).closest(".is-menu").find("form").animate({width:"310"},function(){s(this).closest(".is-menu").find("button.is-search-submit").show()});else if(s(this).closest(".is-menu").hasClass("full-width-menu")){s(this).closest(".is-menu").addClass("active-search");var t=s(this).closest("ul").outerWidth();if(s(this).closest(".is-menu-wrapper").hasClass("is-expanded"))t=s(window).width(),s(this).closest(".is-menu").find("form").css("right","-5px"),s(this).closest(".is-menu").find(".search-close").hide();else{var a=s(this).offset();if(!s(this).closest(".is-menu").hasClass("is-first")&&a.left<t){t=a.left;var n=s(this).closest("li").outerWidth();n>t&&(t=n)}}s(this).closest(".is-menu").find("form").animate({width:t+"px"},function(){s(this).closest(".is-menu").find("button.is-search-submit").show()})}else s(this).closest(".is-menu").hasClass("popup")&&(s("#is-popup-wrapper").fadeIn(),s('#is-popup-wrapper form input[type="text"], #is-popup-wrapper form input[type="search"]').focus());(s(this).closest(".is-menu").hasClass("sliding")||s(this).closest(".is-menu").hasClass("full-width-menu"))&&(s(this).closest(".is-menu").addClass("open"),s(this).closest(".is-menu").find('form input[type="search"], form input[type="text"]').focus()),s(this).closest(".is-menu").find('form input[type="search"], form input[type="text"]').focus()}),s("#is-popup-wrapper").on("click",function(e){s(e.target).closest("form").length||s("#is-popup-wrapper, .is-ajax-search-result, .is-ajax-search-details").fadeOut()}),"undefined"!=typeof IvorySearchVars&&void 0!==IvorySearchVars.is_analytics_enabled)&&ivory_search_analytics(void 0!==IvorySearchVars.is_id?IvorySearchVars.is_id:"Default",void 0!==IvorySearchVars.is_label?IvorySearchVars.is_label:"",void 0!==IvorySearchVars.is_cat?IvorySearchVars.is_cat:"");window.matchMedia("(max-width: 1024px)").matches&&s(".is-menu a").attr("href",""),s(window).resize(function(){window.matchMedia("(max-width: 1024px)").matches&&s(".is-menu a").attr("href","")})}),s(document).keyup(function(e){27===e.keyCode&&s("#is-popup-wrapper, .is-ajax-search-result, .is-ajax-search-details").hide()}),s('.is-menu form input[type="search"], .is-menu form input[type="text"]').on("click",function(s){return s.stopPropagation(),!1}),s("form.is-search-form, form.search-form").on("mouseover",function(e){s(this).next(".is-link-container").length&&s(this).append(s(this).next(".is-link-container").remove())}),s(window).click(function(e){0===e.button&&0===s(e.target).closest(".is-search-input").length&&0===s(e.target).closest(".is-search-submit").length&&0===s(e.target).closest(".is-ajax-search-result").length&&0===s(e.target).closest(".is-ajax-search-details").length&&(s(".is-menu").hasClass("open")?(s(".is-menu button.is-search-submit").hide(),s(".is-menu form").animate({width:"0"},400,function(){s(".is-menu").removeClass("active-search"),s(".is-menu").removeClass("open"),s(".is-menu-wrapper").removeClass("is-expanded")}),s(".is-ajax-search-result, .is-ajax-search-details").hide()):s(".is-menu").hasClass("is-dropdown")&&(s(".is-menu form").fadeOut(),s(".is-ajax-search-result, .is-ajax-search-details").hide()))})}(jQuery);
/*! This file is auto-generated */
!function(c,d){"use strict";var e=!1,n=!1;if(d.querySelector)if(c.addEventListener)e=!0;if(c.wp=c.wp||{},!c.wp.receiveEmbedMessage)if(c.wp.receiveEmbedMessage=function(e){var t=e.data;if(t)if(t.secret||t.message||t.value)if(!/[^a-zA-Z0-9]/.test(t.secret)){for(var r,a,i,s=d.querySelectorAll('iframe[data-secret="'+t.secret+'"]'),n=d.querySelectorAll('blockquote[data-secret="'+t.secret+'"]'),o=0;o<n.length;o++)n[o].style.display="none";for(o=0;o<s.length;o++)if(r=s[o],e.source===r.contentWindow){if(r.removeAttribute("style"),"height"===t.message){if(1e3<(i=parseInt(t.value,10)))i=1e3;else if(~~i<200)i=200;r.height=i}if("link"===t.message)if(a=d.createElement("a"),i=d.createElement("a"),a.href=r.getAttribute("src"),i.href=t.value,i.host===a.host)if(d.activeElement===r)c.top.location.href=t.value}}},e)c.addEventListener("message",c.wp.receiveEmbedMessage,!1),d.addEventListener("DOMContentLoaded",t,!1),c.addEventListener("load",t,!1);function t(){if(!n){n=!0;for(var e,t,r=-1!==navigator.appVersion.indexOf("MSIE 10"),a=!!navigator.userAgent.match(/Trident.*rv:11\./),i=d.querySelectorAll("iframe.wp-embedded-content"),s=0;s<i.length;s++){if(!(e=i[s]).getAttribute("data-secret"))t=Math.random().toString(36).substr(2,10),e.src+="#?secret="+t,e.setAttribute("data-secret",t);if(r||a)(t=e.cloneNode(!0)).removeAttribute("security"),e.parentNode.replaceChild(t,e)}}}}(window,document);