parcelRequire=function(e,r,t,n){var i,o="function"==typeof parcelRequire&&parcelRequire,u="function"==typeof require&&require;function f(t,n){if(!r[t]){if(!e[t]){var i="function"==typeof parcelRequire&&parcelRequire;if(!n&&i)return i(t,!0);if(o)return o(t,!0);if(u&&"string"==typeof t)return u(t);var c=new Error("Cannot find module '"+t+"'");throw c.code="MODULE_NOT_FOUND",c}p.resolve=function(r){return e[t][1][r]||r},p.cache={};var l=r[t]=new f.Module(t);e[t][0].call(l.exports,p,l,l.exports,this)}return r[t].exports;function p(e){return f(p.resolve(e))}}f.isParcelRequire=!0,f.Module=function(e){this.id=e,this.bundle=f,this.exports={}},f.modules=e,f.cache=r,f.parent=o,f.register=function(r,t){e[r]=[function(e,r){r.exports=t},{}]};for(var c=0;c<t.length;c++)try{f(t[c])}catch(e){i||(i=e)}if(t.length){var l=f(t[t.length-1]);"object"==typeof exports&&"undefined"!=typeof module?module.exports=l:"function"==typeof define&&define.amd?define(function(){return l}):n&&(this[n]=l)}if(parcelRequire=f,i)throw i;return f}({"LGpM":[function(require,module,exports){function e(e,o){(null==o||o>e.length)&&(o=e.length);for(var l=0,r=new Array(o);l<o;l++)r[l]=e[l];return r}module.exports=e,module.exports.default=module.exports,module.exports.__esModule=!0;},{}],"o3SL":[function(require,module,exports){var r=require("./arrayLikeToArray.js");function e(e){if(Array.isArray(e))return r(e)}module.exports=e,module.exports.default=module.exports,module.exports.__esModule=!0;},{"./arrayLikeToArray.js":"LGpM"}],"lZpU":[function(require,module,exports){function e(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)}module.exports=e,module.exports.default=module.exports,module.exports.__esModule=!0;},{}],"Vzqv":[function(require,module,exports){var r=require("./arrayLikeToArray.js");function e(e,t){if(e){if("string"==typeof e)return r(e,t);var o=Object.prototype.toString.call(e).slice(8,-1);return"Object"===o&&e.constructor&&(o=e.constructor.name),"Map"===o||"Set"===o?Array.from(e):"Arguments"===o||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(o)?r(e,t):void 0}}module.exports=e,module.exports.default=module.exports,module.exports.__esModule=!0;},{"./arrayLikeToArray.js":"LGpM"}],"NCaH":[function(require,module,exports){function e(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}module.exports=e,module.exports.default=module.exports,module.exports.__esModule=!0;},{}],"I9dH":[function(require,module,exports){var e=require("./arrayWithoutHoles.js"),r=require("./iterableToArray.js"),o=require("./unsupportedIterableToArray.js"),u=require("./nonIterableSpread.js");function t(t){return e(t)||r(t)||o(t)||u()}module.exports=t,module.exports.default=module.exports,module.exports.__esModule=!0;},{"./arrayWithoutHoles.js":"o3SL","./iterableToArray.js":"lZpU","./unsupportedIterableToArray.js":"Vzqv","./nonIterableSpread.js":"NCaH"}],"Mzb7":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=t(require("@babel/runtime/helpers/toConsumableArray"));function t(e){return e&&e.__esModule?e:{default:e}}var a=function(t){if(!t)return!1;var a=document.createElementNS("http://www.w3.org/2000/svg","svg");return[{name:"version",value:"1.1"},{name:"xmlns",value:"http://www.w3.org/2000/svg"},{name:"viewBox",value:"0 0 ".concat(t.width," ").concat(t.height)},{name:"height",value:t.referenceHeight?t.referenceHeight:t.height},{name:"width",value:t.referenceHeight?"100%":t.width},{name:"class",value:t.class?t.class:""}].concat((0,e.default)(function(e){return e.fill?[{name:"fill",value:e.fill}]:[]}(t)),(0,e.default)(function(e){return e.y?[{name:"y",value:e.y}]:[]}(t)),(0,e.default)(function(e){return e.x?[{name:"x",value:e.x}]:[]}(t))).forEach(function(e){var t=e.name,n=e.value;return a.setAttribute(t,n)}),t.paths.forEach(function(e){var t=document.createElementNS("http://www.w3.org/2000/svg","path");t.setAttribute("d",e),a.appendChild(t)}),a},n=a;exports.default=n;},{"@babel/runtime/helpers/toConsumableArray":"I9dH"}],"ZFee":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.isDebug=exports.debugTimeLog=exports.debugTimeEnd=exports.debugTime=exports.debugTable=exports.debugGroupEnd=exports.debugGroupCollapsed=exports.debugGroup=exports.debugError=exports.debugWarn=exports.debugInfo=exports.debugLog=void 0;var e=function(e){return function(){var o;r()&&(o=console)[e].apply(o,arguments)}},r=function(){return window.MV_GROW_DEBUG||new URLSearchParams(window.location.search).has("MV_GROW_DEBUG")};exports.isDebug=r;var o=e("log");exports.debugLog=o;var u=e("info");exports.debugInfo=u;var p=e("warn");exports.debugWarn=p;var t=e("error");exports.debugError=t;var s=e("group");exports.debugGroup=s;var d=e("groupCollapsed");exports.debugGroupCollapsed=d;var g=e("groupEnd");exports.debugGroupEnd=g;var a=e("table");exports.debugTable=a;var b=e("time");exports.debugTime=b;var n=e("timeEnd");exports.debugTimeEnd=n;var x=e("timeLog");exports.debugTimeLog=x;},{}],"LvEJ":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=o(require("./utils/create-svg-icon")),t=require("./utils/debug");function o(e){return e&&e.__esModule?e:{default:e}}var n=function(){[].slice.call(document.getElementsByClassName("dpsp-network-btn")).forEach(function(o){if(o.getElementsByTagName("svg").length>0)return!0;var n=o.classList[1].split("-")[1],a=window.mvGrowData.buttonSVG[n],r=(0,e.default)(a);try{o.getElementsByClassName("dpsp-network-icon-inner")[0].appendChild(r)}catch(s){(0,t.debugGroup)("MV Grow: Icon Loading Failed for ".concat(n)),(0,t.debugLog)(s),window.mvGrowData&&window.mvGrowData.buttonSVG?a?r||(0,t.debugLog)("Malformed SVG for ".concat(n)):(0,t.debugLog)("Missing Icon Data for ".concat(n)):(0,t.debugLog)("All Icon Data Missing"),(0,t.debugGroupEnd)()}})},a=n;exports.default=a;},{"./utils/create-svg-icon":"Mzb7","./utils/debug":"ZFee"}],"qbcG":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var t=require("./utils/debug"),e={width:700,height:300,toolbar:!1,location:!1,status:!1,menubar:!1,scrollbars:!1,resizable:!0,top:200},n={width:800,height:575},r={width:720,height:520,scrollbars:!0},o=function(n){n.blur();var r=Object.assign({},e,s(n.classList));return(0,t.debugTable)(r),window.open(n.href||n.getAttribute("data-href"),"targetWindow",i(r))},i=function(t){var e=Object.keys(t).reduce(function(e,n){return"".concat(e).concat(n,"=").concat(a(t[n]),",")},"");return t.hasOwnProperty("left")||(e="".concat(e,"left=").concat((window.innerWidth-t.width)/2)),e},a=function(t){return"boolean"!=typeof t?t:t?"yes":"no"},s=function(t){return t.contains("dpsp-buffer")?n:t.contains("dpsp-pinterest")||t.contains("dpsp-pin-it-button")?r:{}},c=o;exports.default=c;},{"./utils/debug":"ZFee"}],"CR0T":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.initializeButtonHover=n,exports.initializeButtons=r;var t=e(require("./open-popup"));function e(t){return t&&t.__esModule?t:{default:t}}function n(){var t=document.querySelectorAll(".dpsp-networks-btns-wrapper li .dpsp-network-btn");Array.prototype.forEach.call(t,function(t){t.addEventListener("mouseenter",function(t){t.target.parentNode.classList.add("dpsp-hover")}),t.addEventListener("mouseleave",function(t){t.target.parentNode.classList.remove("dpsp-hover")})})}function r(){var e=document.querySelectorAll(".dpsp-networks-btns-share .dpsp-network-btn, .dpsp-click-to-tweet, .dpsp-pin-it-button");Array.prototype.forEach.call(e,function(e){e.addEventListener("click",function(n){e.classList.contains("dpsp-whatsapp")||e.classList.contains("dpsp-email")||(n.preventDefault(),/#$/.test(e.href)||/#$/.test(e.getAttribute("data-href"))?n.stopPropagation():(0,t.default)(e))})})}},{"./open-popup":"qbcG"}],"jsG1":[function(require,module,exports){"use strict";function e(){var e=document.querySelectorAll(".dpsp-network-btn.dpsp-print");Array.prototype.forEach.call(e,function(e){e.addEventListener("click",function(){window.print()})})}Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var t=e;exports.default=t;},{}],"fkUf":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=function(){return window.mvGrowData&&window.mvGrowData.shouldRun};exports.default=e;},{}],"i355":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=function(e){var t=e.target,r=e.callback,o=e.options,s=new IntersectionObserver(r,o);return s.observe(t),s},t=e;exports.default=t;},{}],"tCTD":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var t=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"mv-grow-data";return window.mvGrowData&&window.mvGrowData.init?window.mvGrowData:(document.getElementById(t)&&document.getElementById(t).dataset.settings&&(window.mvGrowData=JSON.parse(document.getElementById(t).dataset.settings),window.mvGrowData.init=!0),{init:!0})},e=t;exports.default=e;},{}],"VRvp":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=o(require("./utils/should-run")),t=o(require("./utils/observe-intersection")),r=o(require("./utils/get-settings"));function o(e){return e&&e.__esModule?e:{default:e}}function i(){var o=document.getElementById("dpsp-floating-sidebar");if(o&&(0,e.default)()){var i=(0,r.default)(),n=Number(o.getAttribute("data-trigger-scroll"));if(n?window.addEventListener("scroll",function(){Number(window.scrollY/document.body.clientHeight*100)>n?o.classList.add("opened"):o.classList.remove("opened")}):o.classList.add("opened"),i.floatingSidebar&&i.floatingSidebar.stopSelector){var d=document.querySelector(i.floatingSidebar.stopSelector);d&&(0,t.default)({target:d,callback:function(e){var t=e[0].intersectionRect,r=o.getBoundingClientRect();t.top-50<=r.bottom&&e[0].isIntersecting?o.classList.add("stop-hidden"):o.classList.remove("stop-hidden")},options:{threshold:s()}})}}}function s(){for(var e=[],t=1;t<=20;t++){var r=t/20;e.push(r)}return e.push(0),e}var n=i;exports.default=n;},{"./utils/should-run":"fkUf","./utils/observe-intersection":"i355","./utils/get-settings":"tCTD"}],"rtwc":[function(require,module,exports){function e(e){if(null==e)throw new TypeError("Cannot destructure undefined")}module.exports=e,module.exports.default=module.exports,module.exports.__esModule=!0;},{}],"X18c":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.manageNoPinSingle=void 0;var t=e(require("@babel/runtime/helpers/objectDestructuringEmpty"));function e(t){return t&&t.__esModule?t:{default:t}}var n=function(e){return(0,t.default)(e),function(t){return!t.classList.contains("dpsp-post-pinterest-image-hidden-inner")&&(t.setAttribute("data-pin-nopin","true"),!0)}},r=function(t){var e=t.content;return function(t){return!e.contains(t)&&(t.setAttribute("data-pin-nopin","true"),!0)}},i={post_custom_images:n,post_images:r,all_images:function(){return function(){return!0}}},u=function(t){var e=t.pinnableImages,n=t.content;return function(t){return Object.keys(i).includes(e)||(e="all_images"),i[e]({content:n})(t)}};exports.manageNoPinSingle=u;},{"@babel/runtime/helpers/objectDestructuringEmpty":"rtwc"}],"DKSj":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=function(){if(window.mvGrowData&&window.mvGrowData.general&&window.mvGrowData.general.contentSelector)return document.querySelector(window.mvGrowData.general.contentSelector);if(document.getElementsByTagName("body")[0].classList.contains("mediavine-trellis"))return document.getElementById("content").getElementsByClassName("article")[0];var e=document.getElementById("theme-content-section");if(e)return e;var t=document.getElementById("dpsp-post-content-markup");return t&&t.parentNode?t.parentNode:document.body},t=e;exports.default=t;},{}],"XSCr":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.getSettings=void 0;var e=t(require("../utils/get-content-wrapper"));function t(e){return e&&e.__esModule?e:{default:e}}var i={minimumImageHeight:200,minimumImageWidth:200,buttonPosition:"top_left",buttonShareBehavior:"post_image",hoverButtonShareBehavior:"hover_image",showImageOverlay:!0,showButtonLabel:!0,buttonLabelText:"Save",buttonShape:"rectangular",pinImageURL:"",pinnableImages:"all_images",pinDescriptionSource:"image_alt_tag",pinDescription:"",pinTitle:"",postTypeDisplay:["post"],postImageHidden:!1,postImageHiddenMultiple:!1,lazyLoadCompatibility:!1,disableIframes:!1,imagePinIt:!1,hasContent:!1,shareURL:"",ignoreSelectors:[],bypassClasses:[]},a=function(){return Object.assign({},i,window.mvGrowData.pinterest,{content:(0,e.default)()})};exports.getSettings=a;},{"../utils/get-content-wrapper":"DKSj"}],"QgJj":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.addButtonSingle=void 0;var t='<svg xmlns="http://www.w3.org/2000/svg" width="23" height="32" viewBox="0 0 23 32"><path d="M0 10.656q0-1.92 0.672-3.616t1.856-2.976 2.72-2.208 3.296-1.408 3.616-0.448q2.816 0 5.248 1.184t3.936 3.456 1.504 5.12q0 1.728-0.32 3.36t-1.088 3.168-1.792 2.656-2.56 1.856-3.392 0.672q-1.216 0-2.4-0.576t-1.728-1.568q-0.16 0.704-0.48 2.016t-0.448 1.696-0.352 1.28-0.48 1.248-0.544 1.12-0.832 1.408-1.12 1.536l-0.224 0.096-0.16-0.192q-0.288-2.816-0.288-3.36 0-1.632 0.384-3.68t1.184-5.152 0.928-3.616q-0.576-1.152-0.576-3.008 0-1.504 0.928-2.784t2.368-1.312q1.088 0 1.696 0.736t0.608 1.824q0 1.184-0.768 3.392t-0.8 3.36q0 1.12 0.8 1.856t1.952 0.736q0.992 0 1.824-0.448t1.408-1.216 0.992-1.696 0.672-1.952 0.352-1.984 0.128-1.792q0-3.072-1.952-4.8t-5.12-1.728q-3.552 0-5.952 2.304t-2.4 5.856q0 0.8 0.224 1.536t0.48 1.152 0.48 0.832 0.224 0.544q0 0.48-0.256 1.28t-0.672 0.8q-0.032 0-0.288-0.032-0.928-0.288-1.632-0.992t-1.088-1.696-0.576-1.92-0.192-1.92z"></path></svg>',e=function(e){return function(i){if(!n(e)(i))return!1;var a=e.buttonPosition,s=e.hoverButtonShareBehavior,r=e.showImageOverlay,o=e.showButtonLabel,p=e.buttonLabelText,c=e.buttonShape,d=e.pinImageURL,l=e.pinDescription,u=e.shareURL,m=i.getAttribute("data-pin-media")||i.getAttribute("data-media")||i.getAttribute("data-lazy-src")||i.getAttribute("data-src")||i.getAttribute("src"),b=i.getAttribute("data-pin-description")||"";if("post_image"===s&&(m=d||m,b=l||b),!m)return!1;var g=i.getAttribute("class"),h=i.getAttribute("style");if(g){var v=["lazyloaded","lazyload","td-animation-stack"];g=g.split(" ").filter(function(t){return!v.includes(t)}).join(" ")}var A=document.createElement("div");A.setAttribute("class","dpsp-pin-it-wrapper ".concat(g||"")),h&&A.setAttribute("style",h),g&&g.split(" ").forEach(function(t){t.trim()&&i.classList.remove(t)}),i.setAttribute("style",""),i.parentNode.insertBefore(A,i),A.appendChild(i);var L=i.getAttribute("data-pin-id"),f=L?"https://pinterest.com/pin/".concat(L,"/repin/x"):"https://pinterest.com/pin/create/bookmarklet/?media=".concat(encodeURIComponent(m),"&url=").concat(encodeURIComponent(u),"&is_video=false&description=").concat(encodeURIComponent(b)),q=document.createElement("a");if(q.classList.add("dpsp-pin-it-button"),q.classList.add("dpsp-pin-it-button-".concat(a)),q.classList.add("dpsp-pin-it-button-shape-".concat(c)),q.setAttribute("target","_blank"),q.rel="noopener",q.innerHTML='<span class="dpsp-network-icon">'+t+"</span>",o&&(q.classList.add("dpsp-pin-it-button-has-label"),q.title=p,q.setAttribute("aria-label",p)),q.href=f,r){var y=document.createElement("span");y.setAttribute("class","dpsp-pin-it-overlay"),A.appendChild(y)}return A.appendChild(q),!0}};exports.addButtonSingle=e;var n=function(t){var e=t.imagePinIt,n=t.imageInContent,i=t.minimumImageWidth,a=t.minimumImageHeight;return function(t){return"1"===e&&(!!n&&("IFRAME"!==t.nodeName&&(!t.parentNode.parentNode.classList.contains("rll-youtube-player")&&(!t.parentNode.classList.contains("dpsp-pin-it-wrapper")&&(!!t.parentNode.parentNode.classList.contains("blocks-gallery-item")||(!(t.clientWidth<=0||t.clientHeight<=0)||"lazy"===t.loading)&&(!t.getAttribute("data-pin-nopin")&&(t.classList.contains("dpsp_no_pin")||t.classList.contains("nopin")||t.parentNode.classList.contains("nopin")?(t.setAttribute("data-pin-nopin","true"),!1):!(t.clientWidth<Number(i)||t.clientHeight<Number(a))&&!t.classList.contains("emoji"))))))))}};},{}],"a47m":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.addDescriptionSingle=void 0;var t=function(t){var i=t.pinDescriptionSource,r=t.pinDescription,n=t.imageInContent;return function(t){if(!e({imageInContent:n})(t))return!1;var o="";"image_alt_tag"===i&&t.getAttribute("alt")&&(o=t.getAttribute("alt")),"image_title"===i&&t.getAttribute("title")&&(o=t.getAttribute("title")),r&&"post_pinterest_description"===i&&(o=r),!o&&r&&(o=r);var a=document.querySelector('[property="og:title"]');return!o&&a&&(o=a.getAttribute("content")),o&&t.setAttribute("data-pin-description",o),!0}};exports.addDescriptionSingle=t;var e=function(t){var e=t.imageInContent;return function(t){return!!e&&!t.getAttribute("data-pin-description")}};},{}],"QfZG":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.addTitleSingle=void 0;var t=function(t){var n=t.pinTitle,r=t.imageInContent;return function(t){if(!e({imageInContent:r})(t))return!1;var i="";!i&&n&&(i=n);var o=document.querySelector('[property="og:title"]');return!i&&o&&(i=o.getAttribute("content")),!!i&&(t.setAttribute("data-pin-title",i),!0)}};exports.addTitleSingle=t;var e=function(t){var e=t.imageInContent;return function(t){return!!e&&!t.getAttribute("data-pin-title")}};},{}],"UfYi":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.removeBrowserExtensionButton=void 0;var e=t(require("@babel/runtime/helpers/objectDestructuringEmpty"));function t(e){return e&&e.__esModule?e:{default:e}}var r=function(t){return(0,e.default)(t),function(e){return!e.parentNode.classList.contains("dpsp-pin-it-wrapper")&&(e.addEventListener("mouseenter",function(){var e=Array.prototype.slice.call(document.querySelectorAll('[style*="z-index: 8675309"][style*="data:image/svg+xml"]')),t=Array.prototype.slice.call(document.querySelectorAll('span[class^="PIN_"][data-pin-log^="button_pinit_floating"]'));e.concat(t).forEach(function(e){return e.remove()})}),!0)}};exports.removeBrowserExtensionButton=r;},{"@babel/runtime/helpers/objectDestructuringEmpty":"rtwc"}],"kZhX":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=function(e,s){var t=e.minimumImageHeight,a=e.minimumImageWidth,i=e.disableIframes,n=e.bypassClasses;return!e.bypassDenyClasses.some(function(e){return s.classList.contains(e)})&&("true"===s.dataset.pinNopin||!s.parentNode.parentNode.classList.contains("blocks-gallery-item")&&(s.height<t||(s.width<a||("yes"===i&&"IFRAME"===s.nodeName||n.some(function(e){return s.classList.contains(e)})))))},s=e;exports.default=s;},{}],"xUEp":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=require("./add-button"),t=require("./add-descriptions"),r=require("./add-titles"),n=require("./remove-extension"),i=o(require("./filter-image"));function o(e){return e&&e.__esModule?e:{default:e}}var u=function(o){return function(u){return(0,i.default)(o,u)?(u.setAttribute("data-pin-nopin","true"),!1):(o.imageInContent=o.content.contains(u),[t.addDescriptionSingle,r.addTitleSingle,e.addButtonSingle,n.removeBrowserExtensionButton].forEach(function(e){return e(o)(u)}),!0)}},d=u;exports.default=d;},{"./add-button":"QgJj","./add-descriptions":"a47m","./add-titles":"QfZG","./remove-extension":"UfYi","./filter-image":"kZhX"}],"Bmo8":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=function(){return function(e){e.parentNode.classList.contains("dpsp-post-pinterest-image-hidden")&&(e.parentNode.style.cssText="position:absolute;height:0;width:0;"),e.removeAttribute("loading")}},t=e;exports.default=t;},{}],"xtn3":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=require("./get-settings"),t=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],n=(0,e.getSettings)();[].slice.call(document.getElementsByTagName("img")).map(function(e){t.forEach(function(t){return t(n)(e)})})},n=t;exports.default=n;},{"./get-settings":"XSCr"}],"h63O":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.addShareURL=void 0;var t=function(t){var e=t.shareURL;return function(t){return!t.getAttribute("data-pin-url")&&(!!e&&(t.setAttribute("data-pin-url",e),!0))}};exports.addShareURL=t;},{}],"axgK":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var t=require("../utils/debug"),e=function(){var e=document.createElement("script"),s=(0,t.isDebug)()?"https://cdn.mediavine.com/pinmarklet.js":"https://assets.pinterest.com/js/pinmarklet.js";e.setAttribute("type","text/javascript"),e.setAttribute("charset","UTF-8"),e.setAttribute("src",s),document.body.appendChild(e)},s=e;exports.default=s;},{"../utils/debug":"ZFee"}],"dCCy":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=function(e){var t=e.target,r=e.callback,s=new MutationObserver(r);return s.observe(t,{childList:!0,subtree:!0}),s},t=e;exports.default=t;},{}],"AalF":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=n(require("../utils/observe-mutation")),t=require("../pinterest/manage-nopin"),r=require("../pinterest");function n(e){return e&&e.__esModule?e:{default:e}}var a=function(){[].slice.call(document.getElementsByClassName("tl-widget-container")).forEach(function(n){(0,e.default)({target:n,callback:function(){Array.prototype.forEach.call(document.querySelectorAll("img"),(0,t.manageNoPinSingle)((0,r.getPinterestSettings)()))}})})},i=a;exports.default=i;},{"../utils/observe-mutation":"dCCy","../pinterest/manage-nopin":"X18c","../pinterest":"b4YO"}],"dRtE":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=r(require("@babel/runtime/helpers/toConsumableArray"));function r(e){return e&&e.__esModule?e:{default:e}}var t=function(r){var t=r.ignoreSelectors;(void 0===t?[]:t).forEach(function(r){(0,e.default)(document.querySelectorAll("".concat(r,", ").concat(r," img"))).forEach(function(e){return"IMG"===e.tagName&&e.classList.add("mv-grow-bypass")})})},o=t;exports.default=o;},{"@babel/runtime/helpers/toConsumableArray":"I9dH"}],"b4YO":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.initializePinterest=p,exports.initializeProPinterest=g,Object.defineProperty(exports,"getPinterestSettings",{enumerable:!0,get:function(){return r.getSettings}});var e=c(require("@babel/runtime/helpers/toConsumableArray")),t=require("./manage-nopin"),r=require("./get-settings"),n=c(require("./process-image")),i=c(require("./un-lazy-image")),a=c(require("./on-demand-data")),u=require("./add-share-url"),o=c(require("./load-grid")),d=c(require("../observations/thrive-leads")),l=c(require("../utils/get-content-wrapper")),s=c(require("../utils/should-run")),f=c(require("./ignore-images"));function c(e){return e&&e.__esModule?e:{default:e}}function p(){if(!(0,s.default)())return!1;(0,e.default)(document.querySelectorAll(".dpsp-networks-btns-share .dpsp-network-btn.dpsp-pinterest")).forEach(function(e){e.addEventListener("click",function(t){/#$/.test(e.href)||/#$/.test(e.getAttribute("data-href"))?(t.preventDefault(),(0,a.default)([i.default,u.addShareURL]),(0,o.default)()):t.preventDefault()}),e.addEventListener("keydown",function(t){"Space"!==t.code&&"Enter"!==t.code||e.click()})})}function g(){if(document.body.classList.contains("tve_editor_page"))return!1;if(!window.mvGrowData||!window.mvGrowData.pinterest)return!1;var i=(0,r.getSettings)();return!(!(0,s.default)()||"1"!==i.hasContent)&&((0,e.default)(document.querySelectorAll("img, iframe")).forEach((0,t.manageNoPinSingle)(i)),(0,f.default)(i),(0,d.default)(),Array.prototype.forEach.call((0,l.default)().querySelectorAll("img, iframe"),(0,n.default)(i)),!0)}},{"@babel/runtime/helpers/toConsumableArray":"I9dH","./manage-nopin":"X18c","./get-settings":"XSCr","./process-image":"xUEp","./un-lazy-image":"Bmo8","./on-demand-data":"xtn3","./add-share-url":"h63O","./load-grid":"axgK","../observations/thrive-leads":"AalF","../utils/get-content-wrapper":"DKSj","../utils/should-run":"fkUf","./ignore-images":"dRtE"}],"nDkI":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=function(){if(document.querySelector(".dpsp-top-shared-post")||document.querySelector(".dpsp-click-to-tweet")||document.querySelector(".dpsp-network-btn")){var e=document.querySelector(".mv-grow-style");e&&(e.rel="stylesheet",e.type="text/css")}},t=e;exports.default=t;},{}],"YvVA":[function(require,module,exports){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var e=t(require("@babel/runtime/helpers/toConsumableArray")),o=t(require("./utils/should-run")),r=t(require("./utils/create-svg-icon"));function t(e){return e&&e.__esModule?e:{default:e}}function n(){if(!(0,o.default)())return!1;window.growMe?window.growMe(d):(window.growMe=function(e){window.growMe._.push(e)},window.growMe._=[d])}var d=function(){var o=(0,e.default)(document.querySelectorAll(".dpsp-networks-btns-share .dpsp-network-list-item.dpsp-network-list-item-grow"));o.forEach(function(e){var r=e.querySelector(".dpsp-network-label"),t=e.querySelector(".dpsp-network-btn"),n=window.growMe.getIsBookmarked();i(t),n&&(r.innerText="Saved!"),window.growMe.on("isBookmarkedChanged",function(e){(n=e.isBookmarked)&&(r.innerText="Saved!")}),e.classList.add("dpsp-grow-load-in"),setTimeout(function(){e.classList.remove("dpsp-grow-load-in"),e.classList.add("dpsp-grow-loaded")},900),t.addEventListener("click",function(e){e.preventDefault(),window.growMe.addBookmark({source:"grow_social_pro",tooltipReferenceElement:t}).then(function(e){o.forEach(function(e){var o=e.querySelector(".dpsp-network-label");o&&(o.innerText="Saved!"),e.querySelector(".dpsp-network-btn").classList.add("dpsp-grow-saved")})}).catch(function(e){o.forEach(function(e){var o=e.querySelector(".dpsp-network-label");o&&(o.innerText="Saved!"),e.querySelector(".dpsp-network-btn").classList.add("dpsp-grow-saved")})})}),t.addEventListener("keydown",function(e){"Space"!==e.code&&"Enter"!==e.code||t.click()})})},i=function(e){var o=(0,r.default)({paths:["M9.19481 0L3.14304 6.31111L0.80576 3.8777L0 4.71887L3.14304 8L10 0.841163L9.19481 0Z"],height:8,width:10,class:"dpsp-grow-check-icon",referenceHeight:"5",y:3}),t=e.querySelector(".dpsp-network-icon-inner > svg");t&&t.appendChild(o.cloneNode(!0))},s=n;exports.default=s;},{"@babel/runtime/helpers/toConsumableArray":"I9dH","./utils/should-run":"fkUf","./utils/create-svg-icon":"Mzb7"}],"gSkV":[function(require,module,exports){"use strict";var e=l(require("./fn/add-missing-icons")),i=require("./fn/init-buttons"),t=l(require("./fn/init-print")),n=l(require("./fn/init-sidebar")),r=require("./fn/pinterest"),u=require("./fn/utils/debug"),d=l(require("./fn/utils/get-settings")),o=l(require("./fn/load-styles")),a=l(require("./fn/init-grow-me"));function l(e){return e&&e.__esModule?e:{default:e}}var s=function(){(0,d.default)(),(0,u.debugLog)(window.mvGrowData),(0,o.default)();window.addEventListener("scroll",function(){Number(window.scrollY/document.body.clientHeight*100)}),(0,i.initializeButtonHover)(),(0,r.initializePinterest)(),(0,t.default)(),(0,i.initializeButtons)(),(0,n.default)(),(0,a.default)(),(0,e.default)()};"loading"===document.readyState?window.addEventListener("DOMContentLoaded",s):s();},{"./fn/add-missing-icons":"LvEJ","./fn/init-buttons":"CR0T","./fn/init-print":"jsG1","./fn/init-sidebar":"VRvp","./fn/pinterest":"b4YO","./fn/utils/debug":"ZFee","./fn/utils/get-settings":"tCTD","./fn/load-styles":"nDkI","./fn/init-grow-me":"YvVA"}]},{},["gSkV"],null)