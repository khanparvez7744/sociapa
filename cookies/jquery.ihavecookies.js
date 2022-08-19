!function(a){a.fn.ihavecookies=function(e,o){var t,i,n=a(this),c=a.extend({cookieTypes:[{type:"Site Preferences",value:"preferences",description:"These are cookies that are related to your site preferences, e.g. remembering your username, site colours, etc."},{type:"Analytics",value:"analytics",description:"Cookies related to site visits, browser types, etc."},{type:"Marketing",value:"marketing",description:"Cookies related to marketing, e.g. newsletters, social media, etc"}],title:"Cookies & Privacy",message:"Cookies enable you to use shopping carts and to personalize your experience on our sites, tell us which parts of our websites people have visited, help us measure the effectiveness of ads and web searches, and give us insights into user behavior so we can improve our communications and products.",link:"/privacy-policy",delay:2e3,expires:30,moreInfoLabel:"",acceptBtnLabel:"Accept Cookies",advancedBtnLabel:"Customise Cookies",cookieTypesTitle:"Select cookies to accept",fixedCookieTypeLabel:"Necessary",fixedCookieTypeDesc:"These are cookies that are essential for the website to work correctly.",onAccept:function(){},uncheckBoxes:!1},e),r=d("cookieControl"),e=d("cookieControlPrefs");r&&e&&"reinit"!=o?s("false"==r?!1:!0,c.expires):(a("#gdpr-cookie-message").remove(),t='<li><input type="checkbox" name="gdpr[]" value="necessary" checked="checked" disabled="disabled"> <label title="'+c.fixedCookieTypeDesc+'">'+c.fixedCookieTypeLabel+"</label></li>",preferences=JSON.parse(e),a.each(c.cookieTypes,function(e,o){var i;""!==o.type&&""!==o.value&&(i="",!1!==o.description&&(i=' title="'+o.description+'"'),t+='<li><input type="checkbox" id="gdpr-cookietype-'+o.value+'" name="gdpr[]" value="'+o.value+'" data-auto="on"> <label for="gdpr-cookietype-'+o.value+'"'+i+">"+o.type+"</label></li>")}),i='<div id="gdpr-cookie-message"><h4>'+c.title+"</h4><p>"+c.message+' <a href="'+c.link+'">'+c.moreInfoLabel+'</a><div id="gdpr-cookie-types" style="display:none;"><h5>'+c.cookieTypesTitle+"</h5><ul>"+t+'</ul></div><p><button id="gdpr-cookie-accept" type="button">'+c.acceptBtnLabel+'</button><button id="gdpr-cookie-advanced" type="button">'+c.advancedBtnLabel+"</button></p></div>",setTimeout(function(){a(n).append(i),a("#gdpr-cookie-message").hide().fadeIn("slow",function(){"reinit"==o&&(a("#gdpr-cookie-advanced").trigger("click"),a.each(preferences,function(e,o){a("input#gdpr-cookietype-"+o).prop("checked",!0)}))})},c.delay),a("body").on("click","#gdpr-cookie-accept",function(){s(!0,c.expires),a('input[name="gdpr[]"][data-auto="on"]').prop("checked",!0);var i=[];a.each(a('input[name="gdpr[]"]').serializeArray(),function(e,o){i.push(o.value)}),p("cookieControlPrefs",encodeURIComponent(JSON.stringify(i)),365),c.onAccept.call(this)}),a("body").on("click","#gdpr-cookie-advanced",function(){a('input[name="gdpr[]"]:not(:disabled)').attr("data-auto","off").prop("checked",!1),a("#gdpr-cookie-types").slideDown("fast",function(){a("#gdpr-cookie-advanced").prop("disabled",!0)})})),!0===c.uncheckBoxes&&a('input[type="checkbox"].ihavecookies').prop("checked",!1)},a.fn.ihavecookies.cookie=function(){var e=d("cookieControlPrefs");return JSON.parse(e)},a.fn.ihavecookies.preference=function(e){var o=d("cookieControl"),i=d("cookieControlPrefs"),i=JSON.parse(i);return!1!==o&&(!1!==i&&-1!==i.indexOf(e))};var s=function(e,o){p("cookieControl",e,o),a("#gdpr-cookie-message").fadeOut("fast",function(){a(this).remove()})},p=function(e,o,i){var t=new Date;t.setTime(t.getTime()+24*i*60*60*1e3);t="expires="+t.toUTCString();return document.cookie=e+"="+o+";"+t+";path=/",d(e)},d=function(e){for(var o=e+"=",i=decodeURIComponent(document.cookie).split(";"),t=0;t<i.length;t++){for(var n=i[t];" "==n.charAt(0);)n=n.substring(1);if(0===n.indexOf(o))return n.substring(o.length,n.length)}return!1}}(jQuery);