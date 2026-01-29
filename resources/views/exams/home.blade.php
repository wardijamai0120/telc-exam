<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="download_date" content="2026-01-29T05:38:47.394Z"/><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script>(()=>{"use strict";var e={15913(e,t){Object.defineProperty(t,"__esModule",{value:!0}),t.decodeString=void 0;t.decodeString=e=>e.toString(),t.default=t.decodeString},35263(e,t,_){var E=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0}),t._$MessageScriptType=t._$MessageContentType=void 0;const o=E(_(15913));t._$MessageContentType=Object.freeze({_$ECOMMERCE_INIT:(0,o.default)("ECOMMERCE_INIT"),_$ECOMMERCE_RE_INIT:(0,o.default)("ECOMMERCE_RE_INIT"),_$ECOMMERCE_TRACK:(0,o.default)("ECOMMERCE_TRACK"),_$ECOMMERCE_STORAGE_SAVE:(0,o.default)("ECOMMERCE_STORAGE_SAVE"),_$ECOMMERCE_STORAGE_REMOVE:(0,o.default)("ECOMMERCE_STORAGE_REMOVE"),_$ERROR_TRACE:(0,o.default)("ERROR_TRACE"),_$ECOMMERCE_INIT_SHOPIFY:(0,o.default)("ECOMMERCE_INIT_SHOPIFY")}),t._$MessageScriptType=Object.freeze({_$INIT_HTTP_CONFIG:(0,o.default)("INIT_HTTP_CONFIG"),_$HTTP_CONFIG_INJECTED:(0,o.default)("HTTP_CONFIG_INJECTED"),_$SAVE_HTTP_DATA:(0,o.default)("SAVE_HTTP_DATA"),_$CUSTOM_ON_URL_CHANGED:(0,o.default)("CUSTOM_ON_URL_CHANGED"),_$SHOPIFY_DETECTED:(0,o.default)("SHOPIFY_DETECTED")})},48885(e,t){Object.defineProperty(t,"__esModule",{value:!0}),t._$debounce=t._$DEFAULT_DEBOUNCE_TIME=void 0,t._$DEFAULT_DEBOUNCE_TIME=150;t._$debounce=(e,_=t._$DEFAULT_DEBOUNCE_TIME)=>{let E=0;return(...t)=>{clearTimeout(E),E=setTimeout(()=>e(...t),_)}}}},t={};function _(E){var o=t[E];if(void 0!==o)return o.exports;var s=t[E]={exports:{}};return e[E].call(s.exports,s,s.exports,_),s.exports}(()=>{const e=_(35263),t=_(48885);(()=>{const t=history.pushState,_=history.replaceState;function E(){window.postMessage({_custom_type_:e._$MessageScriptType._$CUSTOM_ON_URL_CHANGED})}history.pushState=function(...e){t.apply(history,e),E()},history.replaceState=function(...e){_.apply(history,e),E()},window.addEventListener("popstate",E)})(),(()=>{const _=(0,t._$debounce)(function(t){const _={_custom_type_:e._$MessageScriptType._$SHOPIFY_DETECTED,payload:{$shopify:t&&JSON.parse(JSON.stringify(t))}};window.postMessage(_)},4e3);try{if(globalThis.Shopify)return void _(globalThis.Shopify);Object.defineProperty(globalThis,"Shopify",{set(e){this.__Shopify=e,_(e)},get(){return this.__Shopify}})}catch(e){_(globalThis.Shopify)}})()})()})();</script><script>(()=>{"use strict";var e={15913(e,t){Object.defineProperty(t,"__esModule",{value:!0}),t.decodeString=void 0;t.decodeString=e=>e.toString(),t.default=t.decodeString},24769(e,t){Object.defineProperty(t,"__esModule",{value:!0}),t._$getRegex=void 0;t._$getRegex=e=>{const t="object"==typeof e;try{return t?new RegExp(e.regex,e.flags):new RegExp(e,"i")}catch{return t?new RegExp(e.regex,"i"):new RegExp(e,"i")}}},35263(e,t,s){var n=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0}),t._$MessageScriptType=t._$MessageContentType=void 0;const o=n(s(15913));t._$MessageContentType=Object.freeze({_$ECOMMERCE_INIT:(0,o.default)("ECOMMERCE_INIT"),_$ECOMMERCE_RE_INIT:(0,o.default)("ECOMMERCE_RE_INIT"),_$ECOMMERCE_TRACK:(0,o.default)("ECOMMERCE_TRACK"),_$ECOMMERCE_STORAGE_SAVE:(0,o.default)("ECOMMERCE_STORAGE_SAVE"),_$ECOMMERCE_STORAGE_REMOVE:(0,o.default)("ECOMMERCE_STORAGE_REMOVE"),_$ERROR_TRACE:(0,o.default)("ERROR_TRACE"),_$ECOMMERCE_INIT_SHOPIFY:(0,o.default)("ECOMMERCE_INIT_SHOPIFY")}),t._$MessageScriptType=Object.freeze({_$INIT_HTTP_CONFIG:(0,o.default)("INIT_HTTP_CONFIG"),_$HTTP_CONFIG_INJECTED:(0,o.default)("HTTP_CONFIG_INJECTED"),_$SAVE_HTTP_DATA:(0,o.default)("SAVE_HTTP_DATA"),_$CUSTOM_ON_URL_CHANGED:(0,o.default)("CUSTOM_ON_URL_CHANGED"),_$SHOPIFY_DETECTED:(0,o.default)("SHOPIFY_DETECTED")})},57309(e,t){Object.defineProperty(t,"__esModule",{value:!0}),t._$InterceptorAdapter=t._$RequestValidator=void 0;t._$RequestValidator=class{_$onHttpRequest;_$onHttpResponse};t._$InterceptorAdapter=class{static _$instance;static _$init}},65334(e,t){Object.defineProperty(t,"__esModule",{value:!0}),t.WatcherHandler=void 0,function(e){e.onLoad="onLoad",e.onClick="onClick",e.onInputChange="onInputChange",e.onIframeLoaded="onIframeLoaded",e.onUrlChanged="onUrlChanged",e.onPostMessage="onPostMessage",e.onWindowLoad="onWindowLoad",e.onDomLoad="onDomLoad",e.onDomChanged="onDomChanged",e.onHttpRequest="onHttpRequest",e.onHttpResponse="onHttpResponse",e.onKeyDown="onKeyDown"}(t.WatcherHandler||(t.WatcherHandler={}))}},t={};function s(n){var o=t[n];if(void 0!==o)return o.exports;var a=t[n]={exports:{}};return e[n].call(a.exports,a,a.exports,s),a.exports}(()=>{const e=s(35263),t=s(57309),n=s(65334),o=s(24769);(s=>{const a=t=>{const n={_custom_type_:e._$MessageScriptType._$SAVE_HTTP_DATA,payload:JSON.parse(JSON.stringify(t))};s.postMessage(n)};class r extends t._$RequestValidator{_$validateRequest(e,t="GET"){return!!this._$onHttpRequest?.length&&(this._$onHttpRequest.find(this._$httpMatherPredicate(e,t))??!1)}_$validateResponse(e,t="GET"){return!!this._$onHttpResponse?.length&&(this._$onHttpResponse.find(this._$httpMatherPredicate(e,t))??!1)}_$setConfig(e,t){this._$onHttpRequest=e,this._$onHttpResponse=t}_$httpMatherPredicate(e,t){return({regex:s,methods:n})=>{const a=(0,o._$getRegex)(s);return n.includes(t)&&a.test(e)}}}class _ extends t._$InterceptorAdapter{validator;constructor(e){super(),this.validator=e,this._$initInterceptor()}static _$init(e){this._$instance||(this._$instance=new _(e))}async _$interceptRequest(e,t){const s=t?.method,o=this.validator._$validateRequest(e,s);o&&a({payload:{url:e,params:t},handler:o,watcher:n.WatcherHandler.onHttpRequest})}async _$interceptResponse(e,[t,s]){const n=s?.method,o=this.validator._$validateResponse(t,n);o&&await this._$proceedResponse(e,o)}async _$proceedResponse(e,t){const s=await e.clone(),o=e.headers.get("content-type");o&&(o.includes("json")?a({payload:await s.json(),handler:t,watcher:n.WatcherHandler.onHttpResponse}):o.includes("text")&&a({payload:await s.text(),handler:t,watcher:n.WatcherHandler.onHttpResponse}))}_$initInterceptor(){const e=s.fetch;s.fetch=async(...t)=>{this._$interceptRequest(...t);const s=await e(...t);return this._$interceptResponse(s,t),s}}}class i extends t._$InterceptorAdapter{validator;constructor(e){super(),this.validator=e,this._$initInterceptor()}static _$init(e){this._$instance||(this._$instance=new i(e))}async _$interceptRequest({method:e,url:t,body:s}){const o=this.validator._$validateRequest(t,e);o&&a({payload:{url:t,params:{method:e,body:s}},handler:o,watcher:n.WatcherHandler.onHttpRequest})}async _$interceptResponse({status:e,response:t,responseType:s,method:n,url:o}){const a=this.validator._$validateResponse(o,n);`${e}`.startsWith("20")&&a&&this._$proceedResponse(t,s,a)}_$proceedResponse(e,t,s){if("json"===t)a({payload:e,handler:s,watcher:n.WatcherHandler.onHttpResponse});else if("text"===t||""===t){let t;try{t=JSON.parse(e)}catch{t=e}a({payload:t,handler:s,watcher:n.WatcherHandler.onHttpResponse})}}_$initInterceptor(){const e=XMLHttpRequest.prototype.open,t=XMLHttpRequest.prototype.send,n=this;s.XMLHttpRequest.prototype.open=function(...t){return this.__METHOD__=t[0],this.__URL__=t[1],this.addEventListener("load",function({target:e}){n._$interceptResponse({status:e.status,response:e.response,responseType:e.responseType,method:t[0],url:t[1]})}),e.apply(this,t)},s.XMLHttpRequest.prototype.send=function(...e){return n._$interceptRequest({method:this.__METHOD__,url:this.__URL__,body:e[0]}),t.apply(this,e)}}}const p=new r;_._$init(p),i._$init(p),s.addEventListener("message",t=>{if(t.data?._custom_type_!==e._$MessageScriptType._$INIT_HTTP_CONFIG)return;const{onHttpRequest:s,onHttpResponse:n}=t.data.payload;p._$setConfig(s,n)}),s.postMessage({_custom_type_:e._$MessageScriptType._$HTTP_CONFIG_INJECTED})})(window||globalThis)})()})();</script>
  
  <title>Wilkommen</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background-color: #f0f2f5; /* Soft Grey Background */
      display: flex;
      flex-direction: column; /* Align items vertically */
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      position: relative; /* Needed for positioning the logout button */
    }

    .logout-button {
      position: absolute;
      top: 20px;
      right: 20px;
      padding: 10px 20px;
      background-color: #d9534f; /* A slightly softer red */
      color: white;
      text-decoration: none;
      border-radius: 20px;
      font-weight: bold;
      transition: background-color 0.3s ease, transform 0.3s ease;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    }

    .logout-button:hover {
      background-color: #c9302c; /* Darker red on hover */
      transform: scale(1.05);
    }

    .header {
      text-align: center;
      margin-bottom: 50px;
    }

    .header h1 {
      color: #333;
      font-size: 5em;
      margin-bottom: 10px;
    }

    .header p {
      color: #666;
      font-size: 1.2em;
    }

    .container {
      display: flex;
      gap: 30px; /* Reduced gap for a tighter look */
    }

    .button {
      width: 220px;
      height: 70px; /* Adjusted height for a more modern feel */
      background-color: #004a99; /* Deep Blue */
      color: white;
      text-align: center;
      line-height: 70px;
      font-size: 22px;
      font-weight: bold;
      text-decoration: none;
      border-radius: 35px; /* Fully rounded corners */
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .button:hover {
      background-color: #c8102e; /* Vibrant Red on hover */
      transform: translateY(-5px); /* Lift effect on hover */
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }
  </style>
<script bis_use="true" type="text/javascript" charset="utf-8" data-bis-config="[&quot;facebook.com/&quot;,&quot;twitter.com/&quot;,&quot;youtube-nocookie.com/embed/&quot;,&quot;//vk.com/&quot;,&quot;//www.vk.com/&quot;,&quot;linkedin.com/&quot;,&quot;//www.linkedin.com/&quot;,&quot;//instagram.com/&quot;,&quot;//www.instagram.com/&quot;,&quot;//www.google.com/recaptcha/api2/&quot;,&quot;//hangouts.google.com/webchat/&quot;,&quot;//www.google.com/calendar/&quot;,&quot;//www.google.com/maps/embed&quot;,&quot;spotify.com/&quot;,&quot;soundcloud.com/&quot;,&quot;//player.vimeo.com/&quot;,&quot;//disqus.com/&quot;,&quot;//tgwidget.com/&quot;,&quot;//js.driftt.com/&quot;,&quot;friends2follow.com&quot;,&quot;/widget&quot;,&quot;login&quot;,&quot;//video.bigmir.net/&quot;,&quot;blogger.com&quot;,&quot;//smartlock.google.com/&quot;,&quot;//keep.google.com/&quot;,&quot;/web.tolstoycomments.com/&quot;,&quot;moz-extension://&quot;,&quot;chrome-extension://&quot;,&quot;/auth/&quot;,&quot;//analytics.google.com/&quot;,&quot;adclarity.com&quot;,&quot;paddle.com/checkout&quot;,&quot;hcaptcha.com&quot;,&quot;recaptcha.net&quot;,&quot;2captcha.com&quot;,&quot;accounts.google.com&quot;,&quot;www.google.com/shopping/customerreviews&quot;,&quot;buy.tinypass.com&quot;,&quot;gstatic.com&quot;,&quot;secureir.ebaystatic.com&quot;,&quot;docs.google.com&quot;,&quot;contacts.google.com&quot;,&quot;github.com&quot;,&quot;mail.google.com&quot;,&quot;chat.google.com&quot;,&quot;audio.xpleer.com&quot;,&quot;keepa.com&quot;,&quot;static.xx.fbcdn.net&quot;,&quot;sas.selleramp.com&quot;,&quot;1plus1.video&quot;,&quot;console.googletagservices.com&quot;,&quot;//lnkd.demdex.net/&quot;,&quot;//radar.cedexis.com/&quot;,&quot;//li.protechts.net/&quot;,&quot;challenges.cloudflare.com/&quot;,&quot;ogs.google.com&quot;]" data-dynamic-id="5ee18c4d-f62b-4bd4-a9e4-b289f47be690" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/executors/traffic.js"></script><style id="hb-stylesheet"></style></head>
<body __processed_18bbc923-ee73-4116-a635-71d9d5566ffd__="true" bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJlbmFibGVkIiwiRkFDRUJPT0siOiJlbmFibGVkIiwiVFdJVFRFUiI6ImVuYWJsZWQiLCJSRURESVQiOiJlbmFibGVkIiwiUElOVEVSRVNUIjoiZW5hYmxlZCIsIklOU1RBR1JBTSI6ImVuYWJsZWQiLCJUSUtUT0siOiJkaXNhYmxlZCIsIkxJTktFRElOIjoiZW5hYmxlZCIsIkNPTkZJRyI6ImRpc2FibGVkIn0sInZlcnNpb24iOiIyLjAuMzgiLCJzY29yZSI6MjAwMzgwfV0=">

  <!-- This is the logout button -->
 <a href="/login" class="nav-button logout-button">Abmelden</a>
  <div class="header" bis_skin_checked="1">
    <h1>Willkommen zu unserem Test</h1>
    <p>Wir freuen uns, Sie hier zu haben.</p>
  </div>

  <div class="container" bis_skin_checked="1">
    <a href="/b1" class="button">B1</a>
    <a href="/b2" class="button">B2</a>
  </div>

  <script>
let pingTimeout;
let logoutTimer;
let warningTimer;
let countdownTimer;
let lastPing = 0;

const INACTIVITY_LIMIT = 15 * 60 * 1000; // 15 minutes
const WARNING_BEFORE_LOGOUT = 30 * 1000; // 30 seconds
const warningBox = document.getElementById("warningBox");
const countdownEl = document.getElementById("countdown");

function sendPing() {
    const now = Date.now();
    if (now - lastPing < 10000) return; 
    lastPing = now;
    fetch("/ping").catch(() => {});
}

function resetTimers() {
    clearTimeout(pingTimeout);
    clearTimeout(logoutTimer);
    clearTimeout(warningTimer);
    clearInterval(countdownTimer);

    warningBox.style.display = "none"; // 🟡 hide warning if active again

    sendPing();
    pingTimeout = setTimeout(sendPing, 60 * 1000);

    // Show warning 30s before logout
    warningTimer = setTimeout(() => {
        let remaining = 30;
        warningBox.style.display = "block";
        countdownEl.textContent = remaining;

        countdownTimer = setInterval(() => {
            remaining--;
            countdownEl.textContent = remaining;
            if (remaining <= 0) {
                clearInterval(countdownTimer);
            }
        }, 1000);
    }, INACTIVITY_LIMIT - WARNING_BEFORE_LOGOUT);

    // Auto logout
    logoutTimer = setTimeout(() => {
        fetch("/logout", { method: "POST" })
          .then(() => window.location.href = "/");
    }, INACTIVITY_LIMIT);
}

// Events
["mousemove", "keydown", "scroll", "click", "touchstart"].forEach(evt => {
    document.addEventListener(evt, resetTimers);
});

window.addEventListener("pageshow", sendPing);
window.addEventListener("beforeunload", sendPing);

resetTimers();
</script>


</body>