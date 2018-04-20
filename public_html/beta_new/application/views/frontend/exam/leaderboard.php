<html style="
    background: #57ad22;
    height:120%;
    overflow:scroll;
    
"><head><style>
    /*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (http://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%
}

body {
    margin: 0
}

article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary {
    display: block
}

audio,canvas,progress,video {
    display: inline-block;
    vertical-align: baseline
}

audio:not([controls]) {
    display: none;
    height: 0
}

[hidden],template {
    display: none
}

a {
    background-color: transparent
}

a:active,a:hover {
    outline: 0
}

abbr[title] {
    border-bottom: 1px dotted
}

b,strong {
    font-weight: 700
}

dfn {
    font-style: italic
}

h1 {
    margin: .67em 0;
    font-size: 2em
}

mark {
    color: #000;
    background: #ff0
}

small {
    font-size: 80%
}

sub,sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline
}

sup {
    top: -.5em
}

sub {
    bottom: -.25em
}

img {
    border: 0
}

svg:not(:root) {
    overflow: hidden
}

figure {
    margin: 1em 40px
}

hr {
    height: 0;
    box-sizing: content-box
}

pre {
    overflow: auto
}

code,kbd,pre,samp {
    font-family: monospace,monospace;
    font-size: 1em
}

button,input,optgroup,select,textarea {
    margin: 0;
    font: inherit;
    color: inherit
}

button {
    overflow: visible
}

button,select {
    text-transform: none
}

button,html input[type=button],input[type=reset],input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer
}

button[disabled],html input[disabled] {
    cursor: default
}

button::-moz-focus-inner,input::-moz-focus-inner {
    padding: 0;
    border: 0
}

input {
    line-height: normal
}

input[type=checkbox],input[type=radio] {
    box-sizing: border-box;
    padding: 0
}

input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {
    height: auto
}

input[type=search] {
    box-sizing: content-box;
    -webkit-appearance: textfield
}

input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}

fieldset {
    padding: .35em .625em .75em;
    margin: 0 2px;
    border: 1px solid silver
}

textarea {
    overflow: auto
}

optgroup {
    font-weight: 700
}

table {
    border-spacing: 0;
    border-collapse: collapse
}

td,th {
    padding: 0
}

/*! Source: http://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
    *,:after,:before {
        color: #000!important;
        text-shadow: none!important;
        background: transparent!important;
        box-shadow: none!important
    }

    a,a:visited {
        text-decoration: underline
    }

    a[href]:after {
        content: " (" attr(href) ")"
    }

    abbr[title]:after {
        content: " (" attr(title) ")"
    }

    a[href^="#"]:after,a[href^="javascript:"]:after {
        content: ""
    }

    blockquote,pre {
        border: 1px solid #999;
        page-break-inside: avoid
    }

    thead {
        display: table-header-group
    }

    img,tr {
        page-break-inside: avoid
    }

    img {
        max-width: 100%!important
    }

    h2,h3,p {
        orphans: 3;
        widows: 3
    }

    h2,h3 {
        page-break-after: avoid
    }

    .navbar {
        display: none
    }

    .btn>.caret,.dropup>.btn>.caret {
        border-top-color: #000!important
    }

    .label {
        border: 1px solid #000
    }

    .table {
        border-collapse: collapse!important
    }

    .table td,.table th {
        background-color: #fff!important
    }

    .table-bordered td,.table-bordered th {
        border: 1px solid #ddd!important
    }
}

@font-face {
    font-family: Glyphicons Halflings;
    src: url(glyphicons-halflings-regular.f4769f9bdb7466be6508.eot);
    src: url(glyphicons-halflings-regular.f4769f9bdb7466be6508.eot?#iefix) format("embedded-opentype"),url(glyphicons-halflings-regular.448c34a56d699c29117a.woff2) format("woff2"),url(glyphicons-halflings-regular.fa2772327f55d8198301.woff) format("woff"),url(glyphicons-halflings-regular.e18bbf611f2a2e43afc0.ttf) format("truetype"),url(glyphicons-halflings-regular.89889688147bd7575d63.svg#glyphicons_halflingsregular) format("svg")
}

.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: Glyphicons Halflings;
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.glyphicon-asterisk:before {
    content: "*"
}

.glyphicon-plus:before {
    content: "+"
}

.glyphicon-eur:before,.glyphicon-euro:before {
    content: "\20AC"
}

.glyphicon-minus:before {
    content: "\2212"
}

.glyphicon-cloud:before {
    content: "\2601"
}

.glyphicon-envelope:before {
    content: "\2709"
}

.glyphicon-pencil:before {
    content: "\270F"
}

.glyphicon-glass:before {
    content: "\E001"
}

.glyphicon-music:before {
    content: "\E002"
}

.glyphicon-search:before {
    content: "\E003"
}

.glyphicon-heart:before {
    content: "\E005"
}

.glyphicon-star:before {
    content: "\E006"
}

.glyphicon-star-empty:before {
    content: "\E007"
}

.glyphicon-user:before {
    content: "\E008"
}

.glyphicon-film:before {
    content: "\E009"
}

.glyphicon-th-large:before {
    content: "\E010"
}

.glyphicon-th:before {
    content: "\E011"
}

.glyphicon-th-list:before {
    content: "\E012"
}

.glyphicon-ok:before {
    content: "\E013"
}

.glyphicon-remove:before {
    content: "\E014"
}

.glyphicon-zoom-in:before {
    content: "\E015"
}

.glyphicon-zoom-out:before {
    content: "\E016"
}

.glyphicon-off:before {
    content: "\E017"
}

.glyphicon-signal:before {
    content: "\E018"
}

.glyphicon-cog:before {
    content: "\E019"
}

.glyphicon-trash:before {
    content: "\E020"
}

.glyphicon-home:before {
    content: "\E021"
}

.glyphicon-file:before {
    content: "\E022"
}

.glyphicon-time:before {
    content: "\E023"
}

.glyphicon-road:before {
    content: "\E024"
}

.glyphicon-download-alt:before {
    content: "\E025"
}

.glyphicon-download:before {
    content: "\E026"
}

.glyphicon-upload:before {
    content: "\E027"
}

.glyphicon-inbox:before {
    content: "\E028"
}

.glyphicon-play-circle:before {
    content: "\E029"
}

.glyphicon-repeat:before {
    content: "\E030"
}

.glyphicon-refresh:before {
    content: "\E031"
}

.glyphicon-list-alt:before {
    content: "\E032"
}

.glyphicon-lock:before {
    content: "\E033"
}

.glyphicon-flag:before {
    content: "\E034"
}

.glyphicon-headphones:before {
    content: "\E035"
}

.glyphicon-volume-off:before {
    content: "\E036"
}

.glyphicon-volume-down:before {
    content: "\E037"
}

.glyphicon-volume-up:before {
    content: "\E038"
}

.glyphicon-qrcode:before {
    content: "\E039"
}

.glyphicon-barcode:before {
    content: "\E040"
}

.glyphicon-tag:before {
    content: "\E041"
}

.glyphicon-tags:before {
    content: "\E042"
}

.glyphicon-book:before {
    content: "\E043"
}

.glyphicon-bookmark:before {
    content: "\E044"
}

.glyphicon-print:before {
    content: "\E045"
}

.glyphicon-camera:before {
    content: "\E046"
}

.glyphicon-font:before {
    content: "\E047"
}

.glyphicon-bold:before {
    content: "\E048"
}

.glyphicon-italic:before {
    content: "\E049"
}

.glyphicon-text-height:before {
    content: "\E050"
}

.glyphicon-text-width:before {
    content: "\E051"
}

.glyphicon-align-left:before {
    content: "\E052"
}

.glyphicon-align-center:before {
    content: "\E053"
}

.glyphicon-align-right:before {
    content: "\E054"
}

.glyphicon-align-justify:before {
    content: "\E055"
}

.glyphicon-list:before {
    content: "\E056"
}

.glyphicon-indent-left:before {
    content: "\E057"
}

.glyphicon-indent-right:before {
    content: "\E058"
}

.glyphicon-facetime-video:before {
    content: "\E059"
}

.glyphicon-picture:before {
    content: "\E060"
}

.glyphicon-map-marker:before {
    content: "\E062"
}

.glyphicon-adjust:before {
    content: "\E063"
}

.glyphicon-tint:before {
    content: "\E064"
}

.glyphicon-edit:before {
    content: "\E065"
}

.glyphicon-share:before {
    content: "\E066"
}

.glyphicon-check:before {
    content: "\E067"
}

.glyphicon-move:before {
    content: "\E068"
}

.glyphicon-step-backward:before {
    content: "\E069"
}

.glyphicon-fast-backward:before {
    content: "\E070"
}

.glyphicon-backward:before {
    content: "\E071"
}

.glyphicon-play:before {
    content: "\E072"
}

.glyphicon-pause:before {
    content: "\E073"
}

.glyphicon-stop:before {
    content: "\E074"
}

.glyphicon-forward:before {
    content: "\E075"
}

.glyphicon-fast-forward:before {
    content: "\E076"
}

.glyphicon-step-forward:before {
    content: "\E077"
}

.glyphicon-eject:before {
    content: "\E078"
}

.glyphicon-chevron-left:before {
    content: "\E079"
}

.glyphicon-chevron-right:before {
    content: "\E080"
}

.glyphicon-plus-sign:before {
    content: "\E081"
}

.glyphicon-minus-sign:before {
    content: "\E082"
}

.glyphicon-remove-sign:before {
    content: "\E083"
}

.glyphicon-ok-sign:before {
    content: "\E084"
}

.glyphicon-question-sign:before {
    content: "\E085"
}

.glyphicon-info-sign:before {
    content: "\E086"
}

.glyphicon-screenshot:before {
    content: "\E087"
}

.glyphicon-remove-circle:before {
    content: "\E088"
}

.glyphicon-ok-circle:before {
    content: "\E089"
}

.glyphicon-ban-circle:before {
    content: "\E090"
}

.glyphicon-arrow-left:before {
    content: "\E091"
}

.glyphicon-arrow-right:before {
    content: "\E092"
}

.glyphicon-arrow-up:before {
    content: "\E093"
}

.glyphicon-arrow-down:before {
    content: "\E094"
}

.glyphicon-share-alt:before {
    content: "\E095"
}

.glyphicon-resize-full:before {
    content: "\E096"
}

.glyphicon-resize-small:before {
    content: "\E097"
}

.glyphicon-exclamation-sign:before {
    content: "\E101"
}

.glyphicon-gift:before {
    content: "\E102"
}

.glyphicon-leaf:before {
    content: "\E103"
}

.glyphicon-fire:before {
    content: "\E104"
}

.glyphicon-eye-open:before {
    content: "\E105"
}

.glyphicon-eye-close:before {
    content: "\E106"
}

.glyphicon-warning-sign:before {
    content: "\E107"
}

.glyphicon-plane:before {
    content: "\E108"
}

.glyphicon-calendar:before {
    content: "\E109"
}

.glyphicon-random:before {
    content: "\E110"
}

.glyphicon-comment:before {
    content: "\E111"
}

.glyphicon-magnet:before {
    content: "\E112"
}

.glyphicon-chevron-up:before {
    content: "\E113"
}

.glyphicon-chevron-down:before {
    content: "\E114"
}

.glyphicon-retweet:before {
    content: "\E115"
}

.glyphicon-shopping-cart:before {
    content: "\E116"
}

.glyphicon-folder-close:before {
    content: "\E117"
}

.glyphicon-folder-open:before {
    content: "\E118"
}

.glyphicon-resize-vertical:before {
    content: "\E119"
}

.glyphicon-resize-horizontal:before {
    content: "\E120"
}

.glyphicon-hdd:before {
    content: "\E121"
}

.glyphicon-bullhorn:before {
    content: "\E122"
}

.glyphicon-bell:before {
    content: "\E123"
}

.glyphicon-certificate:before {
    content: "\E124"
}

.glyphicon-thumbs-up:before {
    content: "\E125"
}

.glyphicon-thumbs-down:before {
    content: "\E126"
}

.glyphicon-hand-right:before {
    content: "\E127"
}

.glyphicon-hand-left:before {
    content: "\E128"
}

.glyphicon-hand-up:before {
    content: "\E129"
}

.glyphicon-hand-down:before {
    content: "\E130"
}

.glyphicon-circle-arrow-right:before {
    content: "\E131"
}

.glyphicon-circle-arrow-left:before {
    content: "\E132"
}

.glyphicon-circle-arrow-up:before {
    content: "\E133"
}

.glyphicon-circle-arrow-down:before {
    content: "\E134"
}

.glyphicon-globe:before {
    content: "\E135"
}

.glyphicon-wrench:before {
    content: "\E136"
}

.glyphicon-tasks:before {
    content: "\E137"
}

.glyphicon-filter:before {
    content: "\E138"
}

.glyphicon-briefcase:before {
    content: "\E139"
}

.glyphicon-fullscreen:before {
    content: "\E140"
}

.glyphicon-dashboard:before {
    content: "\E141"
}

.glyphicon-paperclip:before {
    content: "\E142"
}

.glyphicon-heart-empty:before {
    content: "\E143"
}

.glyphicon-link:before {
    content: "\E144"
}

.glyphicon-phone:before {
    content: "\E145"
}

.glyphicon-pushpin:before {
    content: "\E146"
}

.glyphicon-usd:before {
    content: "\E148"
}

.glyphicon-gbp:before {
    content: "\E149"
}

.glyphicon-sort:before {
    content: "\E150"
}

.glyphicon-sort-by-alphabet:before {
    content: "\E151"
}

.glyphicon-sort-by-alphabet-alt:before {
    content: "\E152"
}

.glyphicon-sort-by-order:before {
    content: "\E153"
}

.glyphicon-sort-by-order-alt:before {
    content: "\E154"
}

.glyphicon-sort-by-attributes:before {
    content: "\E155"
}

.glyphicon-sort-by-attributes-alt:before {
    content: "\E156"
}

.glyphicon-unchecked:before {
    content: "\E157"
}

.glyphicon-expand:before {
    content: "\E158"
}

.glyphicon-collapse-down:before {
    content: "\E159"
}

.glyphicon-collapse-up:before {
    content: "\E160"
}

.glyphicon-log-in:before {
    content: "\E161"
}

.glyphicon-flash:before {
    content: "\E162"
}

.glyphicon-log-out:before {
    content: "\E163"
}

.glyphicon-new-window:before {
    content: "\E164"
}

.glyphicon-record:before {
    content: "\E165"
}

.glyphicon-save:before {
    content: "\E166"
}

.glyphicon-open:before {
    content: "\E167"
}

.glyphicon-saved:before {
    content: "\E168"
}

.glyphicon-import:before {
    content: "\E169"
}

.glyphicon-export:before {
    content: "\E170"
}

.glyphicon-send:before {
    content: "\E171"
}

.glyphicon-floppy-disk:before {
    content: "\E172"
}

.glyphicon-floppy-saved:before {
    content: "\E173"
}

.glyphicon-floppy-remove:before {
    content: "\E174"
}

.glyphicon-floppy-save:before {
    content: "\E175"
}

.glyphicon-floppy-open:before {
    content: "\E176"
}

.glyphicon-credit-card:before {
    content: "\E177"
}

.glyphicon-transfer:before {
    content: "\E178"
}

.glyphicon-cutlery:before {
    content: "\E179"
}

.glyphicon-header:before {
    content: "\E180"
}

.glyphicon-compressed:before {
    content: "\E181"
}

.glyphicon-earphone:before {
    content: "\E182"
}

.glyphicon-phone-alt:before {
    content: "\E183"
}

.glyphicon-tower:before {
    content: "\E184"
}

.glyphicon-stats:before {
    content: "\E185"
}

.glyphicon-sd-video:before {
    content: "\E186"
}

.glyphicon-hd-video:before {
    content: "\E187"
}

.glyphicon-subtitles:before {
    content: "\E188"
}

.glyphicon-sound-stereo:before {
    content: "\E189"
}

.glyphicon-sound-dolby:before {
    content: "\E190"
}

.glyphicon-sound-5-1:before {
    content: "\E191"
}

.glyphicon-sound-6-1:before {
    content: "\E192"
}

.glyphicon-sound-7-1:before {
    content: "\E193"
}

.glyphicon-copyright-mark:before {
    content: "\E194"
}

.glyphicon-registration-mark:before {
    content: "\E195"
}

.glyphicon-cloud-download:before {
    content: "\E197"
}

.glyphicon-cloud-upload:before {
    content: "\E198"
}

.glyphicon-tree-conifer:before {
    content: "\E199"
}

.glyphicon-tree-deciduous:before {
    content: "\E200"
}

.glyphicon-cd:before {
    content: "\E201"
}

.glyphicon-save-file:before {
    content: "\E202"
}

.glyphicon-open-file:before {
    content: "\E203"
}

.glyphicon-level-up:before {
    content: "\E204"
}

.glyphicon-copy:before {
    content: "\E205"
}

.glyphicon-paste:before {
    content: "\E206"
}

.glyphicon-alert:before {
    content: "\E209"
}

.glyphicon-equalizer:before {
    content: "\E210"
}

.glyphicon-king:before {
    content: "\E211"
}

.glyphicon-queen:before {
    content: "\E212"
}

.glyphicon-pawn:before {
    content: "\E213"
}

.glyphicon-bishop:before {
    content: "\E214"
}

.glyphicon-knight:before {
    content: "\E215"
}

.glyphicon-baby-formula:before {
    content: "\E216"
}

.glyphicon-tent:before {
    content: "\26FA"
}

.glyphicon-blackboard:before {
    content: "\E218"
}

.glyphicon-bed:before {
    content: "\E219"
}

.glyphicon-apple:before {
    content: "\F8FF"
}

.glyphicon-erase:before {
    content: "\E221"
}

.glyphicon-hourglass:before {
    content: "\231B"
}

.glyphicon-lamp:before {
    content: "\E223"
}

.glyphicon-duplicate:before {
    content: "\E224"
}

.glyphicon-piggy-bank:before {
    content: "\E225"
}

.glyphicon-scissors:before {
    content: "\E226"
}

.glyphicon-bitcoin:before,.glyphicon-btc:before,.glyphicon-xbt:before {
    content: "\E227"
}

.glyphicon-jpy:before,.glyphicon-yen:before {
    content: "\A5"
}

.glyphicon-rub:before,.glyphicon-ruble:before {
    content: "\20BD"
}

.glyphicon-scale:before {
    content: "\E230"
}

.glyphicon-ice-lolly:before {
    content: "\E231"
}

.glyphicon-ice-lolly-tasted:before {
    content: "\E232"
}

.glyphicon-education:before {
    content: "\E233"
}

.glyphicon-option-horizontal:before {
    content: "\E234"
}

.glyphicon-option-vertical:before {
    content: "\E235"
}

.glyphicon-menu-hamburger:before {
    content: "\E236"
}

.glyphicon-modal-window:before {
    content: "\E237"
}

.glyphicon-oil:before {
    content: "\E238"
}

.glyphicon-grain:before {
    content: "\E239"
}

.glyphicon-sunglasses:before {
    content: "\E240"
}

.glyphicon-text-size:before {
    content: "\E241"
}

.glyphicon-text-color:before {
    content: "\E242"
}

.glyphicon-text-background:before {
    content: "\E243"
}

.glyphicon-object-align-top:before {
    content: "\E244"
}

.glyphicon-object-align-bottom:before {
    content: "\E245"
}

.glyphicon-object-align-horizontal:before {
    content: "\E246"
}

.glyphicon-object-align-left:before {
    content: "\E247"
}

.glyphicon-object-align-vertical:before {
    content: "\E248"
}

.glyphicon-object-align-right:before {
    content: "\E249"
}

.glyphicon-triangle-right:before {
    content: "\E250"
}

.glyphicon-triangle-left:before {
    content: "\E251"
}

.glyphicon-triangle-bottom:before {
    content: "\E252"
}

.glyphicon-triangle-top:before {
    content: "\E253"
}

.glyphicon-console:before {
    content: "\E254"
}

.glyphicon-superscript:before {
    content: "\E255"
}

.glyphicon-subscript:before {
    content: "\E256"
}

.glyphicon-menu-left:before {
    content: "\E257"
}

.glyphicon-menu-right:before {
    content: "\E258"
}

.glyphicon-menu-down:before {
    content: "\E259"
}

.glyphicon-menu-up:before {
    content: "\E260"
}

*,:after,:before {
    box-sizing: border-box
}

html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0)
}

body {
    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff
}

button,input,select,textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

a {
    color: #337ab7;
    text-decoration: none
}

a:focus,a:hover {
    color: #23527c;
    text-decoration: underline
}

a:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px
}

figure {
    margin: 0
}

img {
    vertical-align: middle
}

.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail>img,.thumbnail a>img {
    display: block;
    max-width: 100%;
    height: auto
}

.img-rounded {
    border-radius: 6px
}

.img-thumbnail {
    display: inline-block;
    max-width: 100%;
    height: auto;
    padding: 4px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: all .2s ease-in-out
}

.img-circle {
    border-radius: 50%
}

hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    border: 0
}

.sr-only-focusable:active,.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto
}

[role=button] {
    cursor: pointer
}

.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit
}

.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small {
    font-weight: 400;
    line-height: 1;
    color: #777
}

.h1,.h2,.h3,h1,h2,h3 {
    margin-top: 20px;
    margin-bottom: 10px
}

.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small {
    font-size: 65%
}

.h4,.h5,.h6,h4,h5,h6 {
    margin-top: 10px;
    margin-bottom: 10px
}

.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small {
    font-size: 75%
}

.h1,h1 {
    font-size: 36px
}

.h2,h2 {
    font-size: 30px
}

.h3,h3 {
    font-size: 24px
}

.h4,h4 {
    font-size: 18px
}

.h5,h5 {
    font-size: 14px
}

.h6,h6 {
    font-size: 12px
}

p {
    margin: 0 0 10px
}

.lead {
    margin-bottom: 20px;
    font-size: 16px;
    font-weight: 300;
    line-height: 1.4
}

@media (min-width: 768px) {
    .lead {
        font-size:21px
    }
}

.small,small {
    font-size: 85%
}

.mark,mark {
    padding: .2em;
    background-color: #fcf8e3
}

.text-left {
    text-align: left
}

.text-right {
    text-align: right
}

.text-center {
    text-align: center
}

.text-justify {
    text-align: justify
}

.text-nowrap {
    white-space: nowrap
}

.text-lowercase {
    text-transform: lowercase
}

.text-uppercase {
    text-transform: uppercase
}

.text-capitalize {
    text-transform: capitalize
}

.text-muted {
    color: #777
}

.text-primary {
    color: #337ab7
}

a.text-primary:focus,a.text-primary:hover {
    color: #286090
}

.text-success {
    color: #3c763d
}

a.text-success:focus,a.text-success:hover {
    color: #2b542c
}

.text-info {
    color: #31708f
}

a.text-info:focus,a.text-info:hover {
    color: #245269
}

.text-warning {
    color: #8a6d3b
}

a.text-warning:focus,a.text-warning:hover {
    color: #66512c
}

.text-danger {
    color: #a94442
}

a.text-danger:focus,a.text-danger:hover {
    color: #843534
}

.bg-primary {
    color: #fff;
    background-color: #337ab7
}

a.bg-primary:focus,a.bg-primary:hover {
    background-color: #286090
}

.bg-success {
    background-color: #dff0d8
}

a.bg-success:focus,a.bg-success:hover {
    background-color: #c1e2b3
}

.bg-info {
    background-color: #d9edf7
}

a.bg-info:focus,a.bg-info:hover {
    background-color: #afd9ee
}

.bg-warning {
    background-color: #fcf8e3
}

a.bg-warning:focus,a.bg-warning:hover {
    background-color: #f7ecb5
}

.bg-danger {
    background-color: #f2dede
}

a.bg-danger:focus,a.bg-danger:hover {
    background-color: #e4b9b9
}

.page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee
}

ol,ul {
    margin-top: 0;
    margin-bottom: 10px
}

ol ol,ol ul,ul ol,ul ul {
    margin-bottom: 0
}

.list-inline,.list-unstyled {
    padding-left: 0;
    list-style: none
}

.list-inline {
    margin-left: -5px
}

.list-inline>li {
    display: inline-block;
    padding-right: 5px;
    padding-left: 5px
}

dl {
    margin-top: 0;
    margin-bottom: 20px
}

dd,dt {
    line-height: 1.42857143
}

dt {
    font-weight: 700
}

dd {
    margin-left: 0
}

@media (min-width: 768px) {
    .dl-horizontal dt {
        float:left;
        width: 160px;
        overflow: hidden;
        clear: left;
        text-align: right;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .dl-horizontal dd {
        margin-left: 180px
    }
}

abbr[data-original-title],abbr[title] {
    cursor: help;
    border-bottom: 1px dotted #777
}

.initialism {
    font-size: 90%;
    text-transform: uppercase
}

blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 5px solid #eee
}

blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child {
    margin-bottom: 0
}

blockquote .small,blockquote footer,blockquote small {
    display: block;
    font-size: 80%;
    line-height: 1.42857143;
    color: #777
}

blockquote .small:before,blockquote footer:before,blockquote small:before {
    content: "\2014   \A0"
}

.blockquote-reverse,blockquote.pull-right {
    padding-right: 15px;
    padding-left: 0;
    text-align: right;
    border-right: 5px solid #eee;
    border-left: 0
}

.blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before {
    content: ""
}

.blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after {
    content: "\A0   \2014"
}

address {
    margin-bottom: 20px;
    font-style: normal;
    line-height: 1.42857143
}

code,kbd,pre,samp {
    font-family: Menlo,Monaco,Consolas,Courier New,monospace
}

code {
    color: #c7254e;
    background-color: #f9f2f4;
    border-radius: 4px
}

code,kbd {
    padding: 2px 4px;
    font-size: 90%
}

kbd {
    color: #fff;
    background-color: #333;
    border-radius: 3px;
    box-shadow: inset 0 -1px 0 rgba(0,0,0,.25)
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700;
    box-shadow: none
}

pre {
    display: block;
    padding: 9.5px;
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-all;
    word-wrap: break-word;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 4px
}

pre code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

@media (min-width: 768px) {
    .container {
        width:750px
    }
}

@media (min-width: 992px) {
    .container {
        width:970px
    }
}

@media (min-width: 1200px) {
    .container {
        width:1170px
    }
}

.container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

.row {
    margin-right: -15px;
    margin-left: -15px
}

.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px
}

.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12 {
    float: left
}

.col-xs-12 {
    width: 100%
}

.col-xs-11 {
    width: 91.66666667%
}

.col-xs-10 {
    width: 83.33333333%
}

.col-xs-9 {
    width: 75%
}

.col-xs-8 {
    width: 66.66666667%
}

.col-xs-7 {
    width: 58.33333333%
}

.col-xs-6 {
    width: 50%
}

.col-xs-5 {
    width: 41.66666667%
}

.col-xs-4 {
    width: 33.33333333%
}

.col-xs-3 {
    width: 25%
}

.col-xs-2 {
    width: 16.66666667%
}

.col-xs-1 {
    width: 8.33333333%
}

.col-xs-pull-12 {
    right: 100%
}

.col-xs-pull-11 {
    right: 91.66666667%
}

.col-xs-pull-10 {
    right: 83.33333333%
}

.col-xs-pull-9 {
    right: 75%
}

.col-xs-pull-8 {
    right: 66.66666667%
}

.col-xs-pull-7 {
    right: 58.33333333%
}

.col-xs-pull-6 {
    right: 50%
}

.col-xs-pull-5 {
    right: 41.66666667%
}

.col-xs-pull-4 {
    right: 33.33333333%
}

.col-xs-pull-3 {
    right: 25%
}

.col-xs-pull-2 {
    right: 16.66666667%
}

.col-xs-pull-1 {
    right: 8.33333333%
}

.col-xs-pull-0 {
    right: auto
}

.col-xs-push-12 {
    left: 100%
}

.col-xs-push-11 {
    left: 91.66666667%
}

.col-xs-push-10 {
    left: 83.33333333%
}

.col-xs-push-9 {
    left: 75%
}

.col-xs-push-8 {
    left: 66.66666667%
}

.col-xs-push-7 {
    left: 58.33333333%
}

.col-xs-push-6 {
    left: 50%
}

.col-xs-push-5 {
    left: 41.66666667%
}

.col-xs-push-4 {
    left: 33.33333333%
}

.col-xs-push-3 {
    left: 25%
}

.col-xs-push-2 {
    left: 16.66666667%
}

.col-xs-push-1 {
    left: 8.33333333%
}

.col-xs-push-0 {
    left: auto
}

.col-xs-offset-12 {
    margin-left: 100%
}

.col-xs-offset-11 {
    margin-left: 91.66666667%
}

.col-xs-offset-10 {
    margin-left: 83.33333333%
}

.col-xs-offset-9 {
    margin-left: 75%
}

.col-xs-offset-8 {
    margin-left: 66.66666667%
}

.col-xs-offset-7 {
    margin-left: 58.33333333%
}

.col-xs-offset-6 {
    margin-left: 50%
}

.col-xs-offset-5 {
    margin-left: 41.66666667%
}

.col-xs-offset-4 {
    margin-left: 33.33333333%
}

.col-xs-offset-3 {
    margin-left: 25%
}

.col-xs-offset-2 {
    margin-left: 16.66666667%
}

.col-xs-offset-1 {
    margin-left: 8.33333333%
}

.col-xs-offset-0 {
    margin-left: 0
}

@media (min-width: 768px) {
    .col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12 {
        float:left
    }

    .col-sm-12 {
        width: 100%
    }

    .col-sm-11 {
        width: 91.66666667%
    }

    .col-sm-10 {
        width: 83.33333333%
    }

    .col-sm-9 {
        width: 75%
    }

    .col-sm-8 {
        width: 66.66666667%
    }

    .col-sm-7 {
        width: 58.33333333%
    }

    .col-sm-6 {
        width: 50%
    }

    .col-sm-5 {
        width: 41.66666667%
    }

    .col-sm-4 {
        width: 33.33333333%
    }

    .col-sm-3 {
        width: 25%
    }

    .col-sm-2 {
        width: 16.66666667%
    }

    .col-sm-1 {
        width: 8.33333333%
    }

    .col-sm-pull-12 {
        right: 100%
    }

    .col-sm-pull-11 {
        right: 91.66666667%
    }

    .col-sm-pull-10 {
        right: 83.33333333%
    }

    .col-sm-pull-9 {
        right: 75%
    }

    .col-sm-pull-8 {
        right: 66.66666667%
    }

    .col-sm-pull-7 {
        right: 58.33333333%
    }

    .col-sm-pull-6 {
        right: 50%
    }

    .col-sm-pull-5 {
        right: 41.66666667%
    }

    .col-sm-pull-4 {
        right: 33.33333333%
    }

    .col-sm-pull-3 {
        right: 25%
    }

    .col-sm-pull-2 {
        right: 16.66666667%
    }

    .col-sm-pull-1 {
        right: 8.33333333%
    }

    .col-sm-pull-0 {
        right: auto
    }

    .col-sm-push-12 {
        left: 100%
    }

    .col-sm-push-11 {
        left: 91.66666667%
    }

    .col-sm-push-10 {
        left: 83.33333333%
    }

    .col-sm-push-9 {
        left: 75%
    }

    .col-sm-push-8 {
        left: 66.66666667%
    }

    .col-sm-push-7 {
        left: 58.33333333%
    }

    .col-sm-push-6 {
        left: 50%
    }

    .col-sm-push-5 {
        left: 41.66666667%
    }

    .col-sm-push-4 {
        left: 33.33333333%
    }

    .col-sm-push-3 {
        left: 25%
    }

    .col-sm-push-2 {
        left: 16.66666667%
    }

    .col-sm-push-1 {
        left: 8.33333333%
    }

    .col-sm-push-0 {
        left: auto
    }

    .col-sm-offset-12 {
        margin-left: 100%
    }

    .col-sm-offset-11 {
        margin-left: 91.66666667%
    }

    .col-sm-offset-10 {
        margin-left: 83.33333333%
    }

    .col-sm-offset-9 {
        margin-left: 75%
    }

    .col-sm-offset-8 {
        margin-left: 66.66666667%
    }

    .col-sm-offset-7 {
        margin-left: 58.33333333%
    }

    .col-sm-offset-6 {
        margin-left: 50%
    }

    .col-sm-offset-5 {
        margin-left: 41.66666667%
    }

    .col-sm-offset-4 {
        margin-left: 33.33333333%
    }

    .col-sm-offset-3 {
        margin-left: 25%
    }

    .col-sm-offset-2 {
        margin-left: 16.66666667%
    }

    .col-sm-offset-1 {
        margin-left: 8.33333333%
    }

    .col-sm-offset-0 {
        margin-left: 0
    }
}

@media (min-width: 992px) {
    .col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12 {
        float:left
    }

    .col-md-12 {
        width: 100%
    }

    .col-md-11 {
        width: 91.66666667%
    }

    .col-md-10 {
        width: 83.33333333%
    }

    .col-md-9 {
        width: 75%
    }

    .col-md-8 {
        width: 66.66666667%
    }

    .col-md-7 {
        width: 58.33333333%
    }

    .col-md-6 {
        width: 50%
    }

    .col-md-5 {
        width: 41.66666667%
    }

    .col-md-4 {
        width: 33.33333333%
    }

    .col-md-3 {
        width: 25%
    }

    .col-md-2 {
        width: 16.66666667%
    }

    .col-md-1 {
        width: 8.33333333%
    }

    .col-md-pull-12 {
        right: 100%
    }

    .col-md-pull-11 {
        right: 91.66666667%
    }

    .col-md-pull-10 {
        right: 83.33333333%
    }

    .col-md-pull-9 {
        right: 75%
    }

    .col-md-pull-8 {
        right: 66.66666667%
    }

    .col-md-pull-7 {
        right: 58.33333333%
    }

    .col-md-pull-6 {
        right: 50%
    }

    .col-md-pull-5 {
        right: 41.66666667%
    }

    .col-md-pull-4 {
        right: 33.33333333%
    }

    .col-md-pull-3 {
        right: 25%
    }

    .col-md-pull-2 {
        right: 16.66666667%
    }

    .col-md-pull-1 {
        right: 8.33333333%
    }

    .col-md-pull-0 {
        right: auto
    }

    .col-md-push-12 {
        left: 100%
    }

    .col-md-push-11 {
        left: 91.66666667%
    }

    .col-md-push-10 {
        left: 83.33333333%
    }

    .col-md-push-9 {
        left: 75%
    }

    .col-md-push-8 {
        left: 66.66666667%
    }

    .col-md-push-7 {
        left: 58.33333333%
    }

    .col-md-push-6 {
        left: 50%
    }

    .col-md-push-5 {
        left: 41.66666667%
    }

    .col-md-push-4 {
        left: 33.33333333%
    }

    .col-md-push-3 {
        left: 25%
    }

    .col-md-push-2 {
        left: 16.66666667%
    }

    .col-md-push-1 {
        left: 8.33333333%
    }

    .col-md-push-0 {
        left: auto
    }

    .col-md-offset-12 {
        margin-left: 100%
    }

    .col-md-offset-11 {
        margin-left: 91.66666667%
    }

    .col-md-offset-10 {
        margin-left: 83.33333333%
    }

    .col-md-offset-9 {
        margin-left: 75%
    }

    .col-md-offset-8 {
        margin-left: 66.66666667%
    }

    .col-md-offset-7 {
        margin-left: 58.33333333%
    }

    .col-md-offset-6 {
        margin-left: 50%
    }

    .col-md-offset-5 {
        margin-left: 41.66666667%
    }

    .col-md-offset-4 {
        margin-left: 33.33333333%
    }

    .col-md-offset-3 {
        margin-left: 25%
    }

    .col-md-offset-2 {
        margin-left: 16.66666667%
    }

    .col-md-offset-1 {
        margin-left: 8.33333333%
    }

    .col-md-offset-0 {
        margin-left: 0
    }
}

@media (min-width: 1200px) {
    .col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12 {
        float:left
    }

    .col-lg-12 {
        width: 100%
    }

    .col-lg-11 {
        width: 91.66666667%
    }

    .col-lg-10 {
        width: 83.33333333%
    }

    .col-lg-9 {
        width: 75%
    }

    .col-lg-8 {
        width: 66.66666667%
    }

    .col-lg-7 {
        width: 58.33333333%
    }

    .col-lg-6 {
        width: 50%
    }

    .col-lg-5 {
        width: 41.66666667%
    }

    .col-lg-4 {
        width: 33.33333333%
    }

    .col-lg-3 {
        width: 25%
    }

    .col-lg-2 {
        width: 16.66666667%
    }

    .col-lg-1 {
        width: 8.33333333%
    }

    .col-lg-pull-12 {
        right: 100%
    }

    .col-lg-pull-11 {
        right: 91.66666667%
    }

    .col-lg-pull-10 {
        right: 83.33333333%
    }

    .col-lg-pull-9 {
        right: 75%
    }

    .col-lg-pull-8 {
        right: 66.66666667%
    }

    .col-lg-pull-7 {
        right: 58.33333333%
    }

    .col-lg-pull-6 {
        right: 50%
    }

    .col-lg-pull-5 {
        right: 41.66666667%
    }

    .col-lg-pull-4 {
        right: 33.33333333%
    }

    .col-lg-pull-3 {
        right: 25%
    }

    .col-lg-pull-2 {
        right: 16.66666667%
    }

    .col-lg-pull-1 {
        right: 8.33333333%
    }

    .col-lg-pull-0 {
        right: auto
    }

    .col-lg-push-12 {
        left: 100%
    }

    .col-lg-push-11 {
        left: 91.66666667%
    }

    .col-lg-push-10 {
        left: 83.33333333%
    }

    .col-lg-push-9 {
        left: 75%
    }

    .col-lg-push-8 {
        left: 66.66666667%
    }

    .col-lg-push-7 {
        left: 58.33333333%
    }

    .col-lg-push-6 {
        left: 50%
    }

    .col-lg-push-5 {
        left: 41.66666667%
    }

    .col-lg-push-4 {
        left: 33.33333333%
    }

    .col-lg-push-3 {
        left: 25%
    }

    .col-lg-push-2 {
        left: 16.66666667%
    }

    .col-lg-push-1 {
        left: 8.33333333%
    }

    .col-lg-push-0 {
        left: auto
    }

    .col-lg-offset-12 {
        margin-left: 100%
    }

    .col-lg-offset-11 {
        margin-left: 91.66666667%
    }

    .col-lg-offset-10 {
        margin-left: 83.33333333%
    }

    .col-lg-offset-9 {
        margin-left: 75%
    }

    .col-lg-offset-8 {
        margin-left: 66.66666667%
    }

    .col-lg-offset-7 {
        margin-left: 58.33333333%
    }

    .col-lg-offset-6 {
        margin-left: 50%
    }

    .col-lg-offset-5 {
        margin-left: 41.66666667%
    }

    .col-lg-offset-4 {
        margin-left: 33.33333333%
    }

    .col-lg-offset-3 {
        margin-left: 25%
    }

    .col-lg-offset-2 {
        margin-left: 16.66666667%
    }

    .col-lg-offset-1 {
        margin-left: 8.33333333%
    }

    .col-lg-offset-0 {
        margin-left: 0
    }
}

table {
    background-color: transparent
}

caption {
    padding-top: 8px;
    padding-bottom: 8px;
    color: #777
}

caption,th {
    text-align: left
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px
}

.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd
}

.table>thead>tr>th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd
}

.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th {
    border-top: 0
}

.table>tbody+tbody {
    border-top: 2px solid #ddd
}

.table .table {
    background-color: #fff
}

.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th {
    padding: 5px
}

.table-bordered,.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th {
    border: 1px solid #ddd
}

.table-bordered>thead>tr>td,.table-bordered>thead>tr>th {
    border-bottom-width: 2px
}

.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #f9f9f9
}

.table-hover>tbody>tr:hover {
    background-color: #f5f5f5
}

table col[class*=col-] {
    position: static;
    display: table-column;
    float: none
}

table td[class*=col-],table th[class*=col-] {
    position: static;
    display: table-cell;
    float: none
}

.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active {
    background-color: #f5f5f5
}

.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover {
    background-color: #e8e8e8
}

.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success {
    background-color: #dff0d8
}

.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover {
    background-color: #d0e9c6
}

.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info {
    background-color: #d9edf7
}

.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover {
    background-color: #c4e3f3
}

.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning {
    background-color: #fcf8e3
}

.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover {
    background-color: #faf2cc
}

.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger {
    background-color: #f2dede
}

.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover {
    background-color: #ebcccc
}

.table-responsive {
    min-height: .01%;
    overflow-x: auto
}

@media screen and (max-width: 767px) {
    .table-responsive {
        width:100%;
        margin-bottom: 15px;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        border: 1px solid #ddd
    }

    .table-responsive>.table {
        margin-bottom: 0
    }

    .table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th {
        white-space: nowrap
    }

    .table-responsive>.table-bordered {
        border: 0
    }

    .table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child {
        border-left: 0
    }

    .table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child {
        border-right: 0
    }

    .table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th {
        border-bottom: 0
    }
}

fieldset {
    min-width: 0;
    margin: 0
}

fieldset,legend {
    padding: 0;
    border: 0
}

legend {
    display: block;
    width: 100%;
    margin-bottom: 20px;
    font-size: 21px;
    line-height: inherit;
    color: #333;
    border-bottom: 1px solid #e5e5e5
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700
}

input[type=search] {
    box-sizing: border-box
}

input[type=checkbox],input[type=radio] {
    margin: 4px 0 0;
    margin-top: 1px\9;
    line-height: normal
}

input[type=file] {
    display: block
}

input[type=range] {
    display: block;
    width: 100%
}

select[multiple],select[size] {
    height: auto
}

input[type=checkbox]:focus,input[type=file]:focus,input[type=radio]:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px
}

output {
    padding-top: 7px
}

.form-control,output {
    display: block;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555
}

.form-control {
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

.form-control:focus {
    border-color: #66afe9;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
}

.form-control::-moz-placeholder {
    color: #999;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color: #999
}

.form-control::-webkit-input-placeholder {
    color: #999
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0
}

.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control {
    background-color: #eee;
    opacity: 1
}

.form-control[disabled],fieldset[disabled] .form-control {
    cursor: not-allowed
}

textarea.form-control {
    height: auto
}

input[type=search] {
    -webkit-appearance: none
}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
    input[type=date].form-control,input[type=datetime-local].form-control,input[type=month].form-control,input[type=time].form-control {
        line-height:34px
    }

    .input-group-sm input[type=date],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],.input-group-sm input[type=time],input[type=date].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm,input[type=time].input-sm {
        line-height: 30px
    }

    .input-group-lg input[type=date],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],.input-group-lg input[type=time],input[type=date].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg,input[type=time].input-lg {
        line-height: 46px
    }
}

.form-group {
    margin-bottom: 15px
}

.checkbox,.radio {
    position: relative;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px
}

.checkbox label,.radio label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer
}

.checkbox-inline input[type=checkbox],.checkbox input[type=checkbox],.radio-inline input[type=radio],.radio input[type=radio] {
    position: absolute;
    margin-top: 4px\9;
    margin-left: -20px
}

.checkbox+.checkbox,.radio+.radio {
    margin-top: -5px
}

.checkbox-inline,.radio-inline {
    position: relative;
    display: inline-block;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    vertical-align: middle;
    cursor: pointer
}

.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline {
    margin-top: 0;
    margin-left: 10px
}

.checkbox-inline.disabled,.checkbox.disabled label,.radio-inline.disabled,.radio.disabled label,fieldset[disabled] .checkbox-inline,fieldset[disabled] .checkbox label,fieldset[disabled] .radio-inline,fieldset[disabled] .radio label,fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled] {
    cursor: not-allowed
}

.form-control-static {
    min-height: 34px;
    padding-top: 7px;
    padding-bottom: 7px;
    margin-bottom: 0
}

.form-control-static.input-lg,.form-control-static.input-sm {
    padding-right: 0;
    padding-left: 0
}

.input-sm {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px
}

select.input-sm {
    height: 30px;
    line-height: 30px
}

select[multiple].input-sm,textarea.input-sm {
    height: auto
}

.form-group-sm .form-control {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px
}

.form-group-sm select.form-control {
    height: 30px;
    line-height: 30px
}

.form-group-sm select[multiple].form-control,.form-group-sm textarea.form-control {
    height: auto
}

.form-group-sm .form-control-static {
    height: 30px;
    min-height: 32px;
    padding: 6px 10px;
    font-size: 12px;
    line-height: 1.5
}

.input-lg {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px
}

select.input-lg {
    height: 46px;
    line-height: 46px
}

select[multiple].input-lg,textarea.input-lg {
    height: auto
}

.form-group-lg .form-control {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px
}

.form-group-lg select.form-control {
    height: 46px;
    line-height: 46px
}

.form-group-lg select[multiple].form-control,.form-group-lg textarea.form-control {
    height: auto
}

.form-group-lg .form-control-static {
    height: 46px;
    min-height: 38px;
    padding: 11px 16px;
    font-size: 18px;
    line-height: 1.3333333
}

.has-feedback {
    position: relative
}

.has-feedback .form-control {
    padding-right: 42.5px
}

.form-control-feedback {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    display: block;
    width: 34px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    pointer-events: none
}

.form-group-lg .form-control+.form-control-feedback,.input-group-lg+.form-control-feedback,.input-lg+.form-control-feedback {
    width: 46px;
    height: 46px;
    line-height: 46px
}

.form-group-sm .form-control+.form-control-feedback,.input-group-sm+.form-control-feedback,.input-sm+.form-control-feedback {
    width: 30px;
    height: 30px;
    line-height: 30px
}

.has-success .checkbox,.has-success .checkbox-inline,.has-success.checkbox-inline label,.has-success.checkbox label,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.radio-inline label,.has-success.radio label {
    color: #3c763d
}

.has-success .form-control {
    border-color: #3c763d;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075)
}

.has-success .form-control:focus {
    border-color: #2b542c;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168
}

.has-success .input-group-addon {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #3c763d
}

.has-success .form-control-feedback {
    color: #3c763d
}

.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning.checkbox-inline label,.has-warning.checkbox label,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.radio-inline label,.has-warning.radio label {
    color: #8a6d3b
}

.has-warning .form-control {
    border-color: #8a6d3b;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075)
}

.has-warning .form-control:focus {
    border-color: #66512c;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b
}

.has-warning .input-group-addon {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #8a6d3b
}

.has-warning .form-control-feedback {
    color: #8a6d3b
}

.has-error .checkbox,.has-error .checkbox-inline,.has-error.checkbox-inline label,.has-error.checkbox label,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.radio-inline label,.has-error.radio label {
    color: #a94442
}

.has-error .form-control {
    border-color: #a94442;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075)
}

.has-error .form-control:focus {
    border-color: #843534;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483
}

.has-error .input-group-addon {
    color: #a94442;
    background-color: #f2dede;
    border-color: #a94442
}

.has-error .form-control-feedback {
    color: #a94442
}

.has-feedback label~.form-control-feedback {
    top: 25px
}

.has-feedback label.sr-only~.form-control-feedback {
    top: 0
}

.help-block {
    display: block;
    margin-top: 5px;
    margin-bottom: 10px;
    color: #737373
}

@media (min-width: 768px) {
    .form-inline .form-group {
        display:inline-block;
        margin-bottom: 0;
        vertical-align: middle
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
    }

    .form-inline .form-control-static {
        display: inline-block
    }

    .form-inline .input-group {
        display: inline-table;
        vertical-align: middle
    }

    .form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn {
        width: auto
    }

    .form-inline .input-group>.form-control {
        width: 100%
    }

    .form-inline .control-label {
        margin-bottom: 0;
        vertical-align: middle
    }

    .form-inline .checkbox,.form-inline .radio {
        display: inline-block;
        margin-top: 0;
        margin-bottom: 0;
        vertical-align: middle
    }

    .form-inline .checkbox label,.form-inline .radio label {
        padding-left: 0
    }

    .form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio] {
        position: relative;
        margin-left: 0
    }

    .form-inline .has-feedback .form-control-feedback {
        top: 0
    }
}

.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline {
    padding-top: 7px;
    margin-top: 0;
    margin-bottom: 0
}

.form-horizontal .checkbox,.form-horizontal .radio {
    min-height: 27px
}

.form-horizontal .form-group {
    margin-right: -15px;
    margin-left: -15px
}

@media (min-width: 768px) {
    .form-horizontal .control-label {
        padding-top:7px;
        margin-bottom: 0;
        text-align: right
    }
}

.form-horizontal .has-feedback .form-control-feedback {
    right: 15px
}

@media (min-width: 768px) {
    .form-horizontal .form-group-lg .control-label {
        padding-top:11px;
        font-size: 18px
    }
}

@media (min-width: 768px) {
    .form-horizontal .form-group-sm .control-label {
        padding-top:6px;
        font-size: 12px
    }
}

.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px
}

.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px
}

.btn.focus,.btn:focus,.btn:hover {
    color: #333;
    text-decoration: none
}

.btn.active,.btn:active {
    background-image: none;
    outline: 0;
    box-shadow: inset 0 3px 5px rgba(0,0,0,.125)
}

.btn.disabled,.btn[disabled],fieldset[disabled] .btn {
    cursor: not-allowed;
    filter: alpha(opacity=65);
    box-shadow: none;
    opacity: .65
}

a.btn.disabled,fieldset[disabled] a.btn {
    pointer-events: none
}

.btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc
}

.btn-default.focus,.btn-default:focus {
    color: #333;
    background-color: #e6e6e6;
    border-color: #8c8c8c
}

.btn-default.active,.btn-default:active,.btn-default:hover,.open>.dropdown-toggle.btn-default {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad
}

.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover {
    color: #333;
    background-color: #d4d4d4;
    border-color: #8c8c8c
}

.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default {
    background-image: none
}

.btn-default.disabled.focus,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled].focus,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default.focus,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover {
    background-color: #fff;
    border-color: #ccc
}

.btn-default .badge {
    color: #fff;
    background-color: #333
}

.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4
}

.btn-primary.focus,.btn-primary:focus {
    color: #fff;
    background-color: #286090;
    border-color: #122b40
}

.btn-primary.active,.btn-primary:active,.btn-primary:hover,.open>.dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #286090;
    border-color: #204d74
}

.btn-primary.active.focus,.btn-primary.active:focus,.btn-primary.active:hover,.btn-primary:active.focus,.btn-primary:active:focus,.btn-primary:active:hover,.open>.dropdown-toggle.btn-primary.focus,.open>.dropdown-toggle.btn-primary:focus,.open>.dropdown-toggle.btn-primary:hover {
    color: #fff;
    background-color: #204d74;
    border-color: #122b40
}

.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary {
    background-image: none
}

.btn-primary.disabled.focus,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled].focus,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover {
    background-color: #337ab7;
    border-color: #2e6da4
}

.btn-primary .badge {
    color: #337ab7;
    background-color: #fff
}

.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c
}

.btn-success.focus,.btn-success:focus {
    color: #fff;
    background-color: #449d44;
    border-color: #255625
}

.btn-success.active,.btn-success:active,.btn-success:hover,.open>.dropdown-toggle.btn-success {
    color: #fff;
    background-color: #449d44;
    border-color: #398439
}

.btn-success.active.focus,.btn-success.active:focus,.btn-success.active:hover,.btn-success:active.focus,.btn-success:active:focus,.btn-success:active:hover,.open>.dropdown-toggle.btn-success.focus,.open>.dropdown-toggle.btn-success:focus,.open>.dropdown-toggle.btn-success:hover {
    color: #fff;
    background-color: #398439;
    border-color: #255625
}

.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success {
    background-image: none
}

.btn-success.disabled.focus,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled].focus,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success.focus,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover {
    background-color: #5cb85c;
    border-color: #4cae4c
}

.btn-success .badge {
    color: #5cb85c;
    background-color: #fff
}

.btn-info {
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da
}

.btn-info.focus,.btn-info:focus {
    color: #fff;
    background-color: #31b0d5;
    border-color: #1b6d85
}

.btn-info.active,.btn-info:active,.btn-info:hover,.open>.dropdown-toggle.btn-info {
    color: #fff;
    background-color: #31b0d5;
    border-color: #269abc
}

.btn-info.active.focus,.btn-info.active:focus,.btn-info.active:hover,.btn-info:active.focus,.btn-info:active:focus,.btn-info:active:hover,.open>.dropdown-toggle.btn-info.focus,.open>.dropdown-toggle.btn-info:focus,.open>.dropdown-toggle.btn-info:hover {
    color: #fff;
    background-color: #269abc;
    border-color: #1b6d85
}

.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info {
    background-image: none
}

.btn-info.disabled.focus,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled].focus,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info.focus,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover {
    background-color: #5bc0de;
    border-color: #46b8da
}

.btn-info .badge {
    color: #5bc0de;
    background-color: #fff
}

.btn-warning {
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236
}

.btn-warning.focus,.btn-warning:focus {
    color: #fff;
    background-color: #ec971f;
    border-color: #985f0d
}

.btn-warning.active,.btn-warning:active,.btn-warning:hover,.open>.dropdown-toggle.btn-warning {
    color: #fff;
    background-color: #ec971f;
    border-color: #d58512
}

.btn-warning.active.focus,.btn-warning.active:focus,.btn-warning.active:hover,.btn-warning:active.focus,.btn-warning:active:focus,.btn-warning:active:hover,.open>.dropdown-toggle.btn-warning.focus,.open>.dropdown-toggle.btn-warning:focus,.open>.dropdown-toggle.btn-warning:hover {
    color: #fff;
    background-color: #d58512;
    border-color: #985f0d
}

.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning {
    background-image: none
}

.btn-warning.disabled.focus,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled].focus,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning.focus,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover {
    background-color: #f0ad4e;
    border-color: #eea236
}

.btn-warning .badge {
    color: #f0ad4e;
    background-color: #fff
}

.btn-danger {
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a
}

.btn-danger.focus,.btn-danger:focus {
    color: #fff;
    background-color: #c9302c;
    border-color: #761c19
}

.btn-danger.active,.btn-danger:active,.btn-danger:hover,.open>.dropdown-toggle.btn-danger {
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925
}

.btn-danger.active.focus,.btn-danger.active:focus,.btn-danger.active:hover,.btn-danger:active.focus,.btn-danger:active:focus,.btn-danger:active:hover,.open>.dropdown-toggle.btn-danger.focus,.open>.dropdown-toggle.btn-danger:focus,.open>.dropdown-toggle.btn-danger:hover {
    color: #fff;
    background-color: #ac2925;
    border-color: #761c19
}

.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger {
    background-image: none
}

.btn-danger.disabled.focus,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled].focus,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger.focus,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover {
    background-color: #d9534f;
    border-color: #d43f3a
}

.btn-danger .badge {
    color: #d9534f;
    background-color: #fff
}

.btn-link {
    font-weight: 400;
    color: #337ab7;
    border-radius: 0
}

.btn-link,.btn-link.active,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link {
    background-color: transparent;
    box-shadow: none
}

.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover {
    border-color: transparent
}

.btn-link:focus,.btn-link:hover {
    color: #23527c;
    text-decoration: underline;
    background-color: transparent
}

.btn-link[disabled]:focus,.btn-link[disabled]:hover,fieldset[disabled] .btn-link:focus,fieldset[disabled] .btn-link:hover {
    color: #777;
    text-decoration: none
}

.btn-group-lg>.btn,.btn-lg {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px
}

.btn-group-sm>.btn,.btn-sm {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px
}

.btn-group-xs>.btn,.btn-xs {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px
}

.btn-block {
    display: block;
    width: 100%
}

.btn-block+.btn-block {
    margin-top: 5px
}

input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block {
    width: 100%
}

.fade {
    opacity: 0;
    transition: opacity .15s linear
}

.fade.in {
    opacity: 1
}

.collapse {
    display: none
}

.collapse.in {
    display: block
}

tr.collapse.in {
    display: table-row
}

tbody.collapse.in {
    display: table-row-group
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition-timing-function: ease;
    transition-duration: .35s;
    transition-property: height,visibility
}

.caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 4px dashed;
    border-top: 4px solid\9;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent
}

.dropdown,.dropup {
    position: relative
}

.dropdown-toggle:focus {
    outline: 0
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    box-shadow: 0 6px 12px rgba(0,0,0,.175)
}

.dropdown-menu.pull-right {
    right: 0;
    left: auto
}

.dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5
}

.dropdown-menu>li>a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap
}

.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover {
    color: #262626;
    text-decoration: none;
    background-color: #f5f5f5
}

.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover {
    color: #fff;
    text-decoration: none;
    background-color: #337ab7;
    outline: 0
}

.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover {
    color: #777
}

.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover {
    text-decoration: none;
    cursor: not-allowed;
    background-color: transparent;
    background-image: none;
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false)
}

.open>.dropdown-menu {
    display: block
}

.open>a {
    outline: 0
}

.dropdown-menu-right {
    right: 0;
    left: auto
}

.dropdown-menu-left {
    right: auto;
    left: 0
}

.dropdown-header {
    display: block;
    padding: 3px 20px;
    font-size: 12px;
    line-height: 1.42857143;
    color: #777;
    white-space: nowrap
}

.dropdown-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 990
}

.pull-right>.dropdown-menu {
    right: 0;
    left: auto
}

.dropup .caret,.navbar-fixed-bottom .dropdown .caret {
    content: "";
    border-top: 0;
    border-bottom: 4px dashed;
    border-bottom: 4px solid\9
}

.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-bottom: 2px
}

@media (min-width: 768px) {
    .navbar-right .dropdown-menu {
        right:0;
        left: auto
    }

    .navbar-right .dropdown-menu-left {
        right: auto;
        left: 0
    }
}

.btn-group,.btn-group-vertical {
    position: relative;
    display: inline-block;
    vertical-align: middle
}

.btn-group-vertical>.btn,.btn-group>.btn {
    position: relative;
    float: left
}

.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover {
    z-index: 2
}

.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group {
    margin-left: -1px
}

.btn-toolbar {
    margin-left: -5px
}

.btn-toolbar .btn,.btn-toolbar .btn-group,.btn-toolbar .input-group {
    float: left
}

.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group {
    margin-left: 5px
}

.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
    border-radius: 0
}

.btn-group>.btn:first-child {
    margin-left: 0
}

.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group>.btn-group {
    float: left
}

.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
    border-radius: 0
}

.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle {
    outline: 0
}

.btn-group>.btn+.dropdown-toggle {
    padding-right: 8px;
    padding-left: 8px
}

.btn-group>.btn-lg+.dropdown-toggle {
    padding-right: 12px;
    padding-left: 12px
}

.btn-group.open .dropdown-toggle {
    box-shadow: inset 0 3px 5px rgba(0,0,0,.125)
}

.btn-group.open .dropdown-toggle.btn-link {
    box-shadow: none
}

.btn .caret {
    margin-left: 0
}

.btn-lg .caret {
    border-width: 5px 5px 0;
    border-bottom-width: 0
}

.dropup .btn-lg .caret {
    border-width: 0 5px 5px
}

.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn {
    display: block;
    float: none;
    width: 100%;
    max-width: 100%
}

.btn-group-vertical>.btn-group>.btn {
    float: none
}

.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group {
    margin-top: -1px;
    margin-left: 0
}

.btn-group-vertical>.btn:not(:first-child):not(:last-child) {
    border-radius: 0
}

.btn-group-vertical>.btn:first-child:not(:last-child) {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical>.btn:last-child:not(:first-child) {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px
}

.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
    border-radius: 0
}

.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.btn-group-justified {
    display: table;
    width: 100%;
    table-layout: fixed;
    border-collapse: separate
}

.btn-group-justified>.btn,.btn-group-justified>.btn-group {
    display: table-cell;
    float: none;
    width: 1%
}

.btn-group-justified>.btn-group .btn {
    width: 100%
}

.btn-group-justified>.btn-group .dropdown-menu {
    left: auto
}

[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio],[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio] {
    position: absolute;
    clip: rect(0,0,0,0);
    pointer-events: none
}

.input-group {
    position: relative;
    display: table;
    border-collapse: separate
}

.input-group[class*=col-] {
    float: none;
    padding-right: 0;
    padding-left: 0
}

.input-group .form-control {
    position: relative;
    z-index: 2;
    float: left;
    width: 100%;
    margin-bottom: 0
}

.input-group .form-control:focus {
    z-index: 3
}

.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px
}

select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn {
    height: 46px;
    line-height: 46px
}

select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn {
    height: auto
}

.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px
}

select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn {
    height: 30px;
    line-height: 30px
}

select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn {
    height: auto
}

.input-group-addon,.input-group-btn,.input-group .form-control {
    display: table-cell
}

.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child),.input-group .form-control:not(:first-child):not(:last-child) {
    border-radius: 0
}

.input-group-addon,.input-group-btn {
    width: 1%;
    white-space: nowrap;
    vertical-align: middle
}

.input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee;
    border: 1px solid #ccc;
    border-radius: 4px
}

.input-group-addon.input-sm {
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 3px
}

.input-group-addon.input-lg {
    padding: 10px 16px;
    font-size: 18px;
    border-radius: 6px
}

.input-group-addon input[type=checkbox],.input-group-addon input[type=radio] {
    margin-top: 0
}

.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group .form-control:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group-addon:first-child {
    border-right: 0
}

.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle,.input-group .form-control:last-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group-addon:last-child {
    border-left: 0
}

.input-group-btn {
    font-size: 0;
    white-space: nowrap
}

.input-group-btn,.input-group-btn>.btn {
    position: relative
}

.input-group-btn>.btn+.btn {
    margin-left: -1px
}

.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover {
    z-index: 2
}

.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group {
    margin-right: -1px
}

.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group {
    z-index: 2;
    margin-left: -1px
}

.nav {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav>li,.nav>li>a {
    position: relative;
    display: block
}

.nav>li>a {
    padding: 10px 15px
}

.nav>li>a:focus,.nav>li>a:hover {
    text-decoration: none;
    background-color: #eee
}

.nav>li.disabled>a {
    color: #777
}

.nav>li.disabled>a:focus,.nav>li.disabled>a:hover {
    color: #777;
    text-decoration: none;
    cursor: not-allowed;
    background-color: transparent
}

.nav .open>a,.nav .open>a:focus,.nav .open>a:hover {
    background-color: #eee;
    border-color: #337ab7
}

.nav .nav-divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5
}

.nav>li>a>img {
    max-width: none
}

.nav-tabs {
    border-bottom: 1px solid #ddd
}

.nav-tabs>li {
    float: left;
    margin-bottom: -1px
}

.nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0
}

.nav-tabs>li>a:hover {
    border-color: #eee #eee #ddd
}

.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover {
    color: #555;
    cursor: default;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent
}

.nav-tabs.nav-justified {
    width: 100%;
    border-bottom: 0
}

.nav-tabs.nav-justified>li {
    float: none
}

.nav-tabs.nav-justified>li>a {
    margin-bottom: 5px;
    text-align: center
}

.nav-tabs.nav-justified>.dropdown .dropdown-menu {
    top: auto;
    left: auto
}

@media (min-width: 768px) {
    .nav-tabs.nav-justified>li {
        display:table-cell;
        width: 1%
    }

    .nav-tabs.nav-justified>li>a {
        margin-bottom: 0
    }
}

.nav-tabs.nav-justified>li>a {
    margin-right: 0;
    border-radius: 4px
}

.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover {
    border: 1px solid #ddd
}

@media (min-width: 768px) {
    .nav-tabs.nav-justified>li>a {
        border-bottom:1px solid #ddd;
        border-radius: 4px 4px 0 0
    }

    .nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover {
        border-bottom-color: #fff
    }
}

.nav-pills>li {
    float: left
}

.nav-pills>li>a {
    border-radius: 4px
}

.nav-pills>li+li {
    margin-left: 2px
}

.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #337ab7
}

.nav-stacked>li {
    float: none
}

.nav-stacked>li+li {
    margin-top: 2px;
    margin-left: 0
}

.nav-justified {
    width: 100%
}

.nav-justified>li {
    float: none
}

.nav-justified>li>a {
    margin-bottom: 5px;
    text-align: center
}

.nav-justified>.dropdown .dropdown-menu {
    top: auto;
    left: auto
}

@media (min-width: 768px) {
    .nav-justified>li {
        display:table-cell;
        width: 1%
    }

    .nav-justified>li>a {
        margin-bottom: 0
    }
}

.nav-tabs-justified {
    border-bottom: 0
}

.nav-tabs-justified>li>a {
    margin-right: 0;
    border-radius: 4px
}

.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover {
    border: 1px solid #ddd
}

@media (min-width: 768px) {
    .nav-tabs-justified>li>a {
        border-bottom:1px solid #ddd;
        border-radius: 4px 4px 0 0
    }

    .nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover {
        border-bottom-color: #fff
    }
}

.tab-content>.tab-pane {
    display: none
}

.tab-content>.active {
    display: block
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent
}

@media (min-width: 768px) {
    .navbar {
        border-radius:4px
    }
}

@media (min-width: 768px) {
    .navbar-header {
        float:left
    }
}

.navbar-collapse {
    padding-right: 15px;
    padding-left: 15px;
    overflow-x: visible;
    -webkit-overflow-scrolling: touch;
    border-top: 1px solid transparent;
    box-shadow: inset 0 1px 0 hsla(0,0%,100%,.1)
}

.navbar-collapse.in {
    overflow-y: auto
}

@media (min-width: 768px) {
    .navbar-collapse {
        width:auto;
        border-top: 0;
        box-shadow: none
    }

    .navbar-collapse.collapse {
        display: block!important;
        height: auto!important;
        padding-bottom: 0;
        overflow: visible!important
    }

    .navbar-collapse.in {
        overflow-y: visible
    }

    .navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse {
        padding-right: 0;
        padding-left: 0
    }
}

.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse {
    max-height: 340px
}

@media (max-device-width: 480px) and (orientation:landscape) {
    .navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse {
        max-height:200px
    }
}

.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header {
    margin-right: -15px;
    margin-left: -15px
}

@media (min-width: 768px) {
    .container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header {
        margin-right:0;
        margin-left: 0
    }
}

.navbar-static-top {
    z-index: 1000;
    border-width: 0 0 1px
}

@media (min-width: 768px) {
    .navbar-static-top {
        border-radius:0
    }
}

.navbar-fixed-bottom,.navbar-fixed-top {
    position: fixed;
    right: 0;
    left: 0;
    z-index: 1030
}

@media (min-width: 768px) {
    .navbar-fixed-bottom,.navbar-fixed-top {
        border-radius:0
    }
}

.navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px
}

.navbar-fixed-bottom {
    bottom: 0;
    margin-bottom: 0;
    border-width: 1px 0 0
}

.navbar-brand {
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px
}

.navbar-brand:focus,.navbar-brand:hover {
    text-decoration: none
}

.navbar-brand>img {
    display: block
}

@media (min-width: 768px) {
    .navbar>.container-fluid .navbar-brand,.navbar>.container .navbar-brand {
        margin-left:-15px
    }
}

.navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-right: 15px;
    margin-bottom: 8px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px
}

.navbar-toggle:focus {
    outline: 0
}

.navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px
}

.navbar-toggle .icon-bar+.icon-bar {
    margin-top: 4px
}

@media (min-width: 768px) {
    .navbar-toggle {
        display:none
    }
}

.navbar-nav {
    margin: 7.5px -15px
}

.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px
}

@media (max-width: 767px) {
    .navbar-nav .open .dropdown-menu {
        position:static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        box-shadow: none
    }

    .navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a {
        padding: 5px 15px 5px 25px
    }

    .navbar-nav .open .dropdown-menu>li>a {
        line-height: 20px
    }

    .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover {
        background-image: none
    }
}

@media (min-width: 768px) {
    .navbar-nav {
        float:left;
        margin: 0
    }

    .navbar-nav>li {
        float: left
    }

    .navbar-nav>li>a {
        padding-top: 15px;
        padding-bottom: 15px
    }
}

.navbar-form {
    padding: 10px 15px;
    margin-top: 8px;
    margin-right: -15px;
    margin-bottom: 8px;
    margin-left: -15px;
    border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;
    box-shadow: inset 0 1px 0 hsla(0,0%,100%,.1),0 1px 0 hsla(0,0%,100%,.1)
}

@media (min-width: 768px) {
    .navbar-form .form-group {
        display:inline-block;
        margin-bottom: 0;
        vertical-align: middle
    }

    .navbar-form .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
    }

    .navbar-form .form-control-static {
        display: inline-block
    }

    .navbar-form .input-group {
        display: inline-table;
        vertical-align: middle
    }

    .navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn {
        width: auto
    }

    .navbar-form .input-group>.form-control {
        width: 100%
    }

    .navbar-form .control-label {
        margin-bottom: 0;
        vertical-align: middle
    }

    .navbar-form .checkbox,.navbar-form .radio {
        display: inline-block;
        margin-top: 0;
        margin-bottom: 0;
        vertical-align: middle
    }

    .navbar-form .checkbox label,.navbar-form .radio label {
        padding-left: 0
    }

    .navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio] {
        position: relative;
        margin-left: 0
    }

    .navbar-form .has-feedback .form-control-feedback {
        top: 0
    }
}

@media (max-width: 767px) {
    .navbar-form .form-group {
        margin-bottom:5px
    }

    .navbar-form .form-group:last-child {
        margin-bottom: 0
    }
}

@media (min-width: 768px) {
    .navbar-form {
        width:auto;
        padding-top: 0;
        padding-bottom: 0;
        margin-right: 0;
        margin-left: 0;
        border: 0;
        box-shadow: none
    }
}

.navbar-nav>li>.dropdown-menu {
    margin-top: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
    margin-bottom: 0;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.navbar-btn {
    margin-top: 8px;
    margin-bottom: 8px
}

.navbar-btn.btn-sm {
    margin-top: 10px;
    margin-bottom: 10px
}

.navbar-btn.btn-xs {
    margin-top: 14px;
    margin-bottom: 14px
}

.navbar-text {
    margin-top: 15px;
    margin-bottom: 15px
}

@media (min-width: 768px) {
    .navbar-text {
        float:left;
        margin-right: 15px;
        margin-left: 15px
    }
}

@media (min-width: 768px) {
    .navbar-left {
        float:left!important
    }

    .navbar-right {
        float: right!important;
        margin-right: -15px
    }

    .navbar-right~.navbar-right {
        margin-right: 0
    }
}

.navbar-default {
    background-color: #f8f8f8;
    border-color: #e7e7e7
}

.navbar-default .navbar-brand {
    color: #777
}

.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover {
    color: #5e5e5e;
    background-color: transparent
}

.navbar-default .navbar-nav>li>a,.navbar-default .navbar-text {
    color: #777
}

.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover {
    color: #333;
    background-color: transparent
}

.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover {
    color: #555;
    background-color: #e7e7e7
}

.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover {
    color: #ccc;
    background-color: transparent
}

.navbar-default .navbar-toggle {
    border-color: #ddd
}

.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover {
    background-color: #ddd
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #888
}

.navbar-default .navbar-collapse,.navbar-default .navbar-form {
    border-color: #e7e7e7
}

.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover {
    color: #555;
    background-color: #e7e7e7
}

@media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu>li>a {
        color:#777
    }

    .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
        color: #333;
        background-color: transparent
    }

    .navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
        color: #555;
        background-color: #e7e7e7
    }

    .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
        color: #ccc;
        background-color: transparent
    }
}

.navbar-default .navbar-link {
    color: #777
}

.navbar-default .navbar-link:hover {
    color: #333
}

.navbar-default .btn-link {
    color: #777
}

.navbar-default .btn-link:focus,.navbar-default .btn-link:hover {
    color: #333
}

.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover {
    color: #ccc
}

.navbar-inverse {
    background-color: #222;
    border-color: #080808
}

.navbar-inverse .navbar-brand {
    color: #9d9d9d
}

.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover {
    color: #fff;
    background-color: transparent
}

.navbar-inverse .navbar-nav>li>a,.navbar-inverse .navbar-text {
    color: #9d9d9d
}

.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover {
    color: #fff;
    background-color: transparent
}

.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #080808
}

.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover {
    color: #444;
    background-color: transparent
}

.navbar-inverse .navbar-toggle {
    border-color: #333
}

.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover {
    background-color: #333
}

.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #fff
}

.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form {
    border-color: #101010
}

.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover {
    color: #fff;
    background-color: #080808
}

@media (max-width: 767px) {
    .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
        border-color:#080808
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
        background-color: #080808
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
        color: #9d9d9d
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
        color: #fff;
        background-color: transparent
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
        color: #fff;
        background-color: #080808
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
        color: #444;
        background-color: transparent
    }
}

.navbar-inverse .navbar-link {
    color: #9d9d9d
}

.navbar-inverse .navbar-link:hover {
    color: #fff
}

.navbar-inverse .btn-link {
    color: #9d9d9d
}

.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover {
    color: #fff
}

.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover {
    color: #444
}

.breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #f5f5f5;
    border-radius: 4px
}

.breadcrumb>li {
    display: inline-block
}

.breadcrumb>li+li:before {
    padding: 0 5px;
    color: #ccc;
    content: "/\A0"
}

.breadcrumb>.active {
    color: #777
}

.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px
}

.pagination>li {
    display: inline
}

.pagination>li>a,.pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd
}

.pagination>li:first-child>a,.pagination>li:first-child>span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px
}

.pagination>li:last-child>a,.pagination>li:last-child>span {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px
}

.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover {
    z-index: 2;
    color: #23527c;
    background-color: #eee;
    border-color: #ddd
}

.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7
}

.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover {
    color: #777;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd
}

.pagination-lg>li>a,.pagination-lg>li>span {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333
}

.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span {
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px
}

.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span {
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px
}

.pagination-sm>li>a,.pagination-sm>li>span {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5
}

.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px
}

.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px
}

.pager {
    padding-left: 0;
    margin: 20px 0;
    text-align: center;
    list-style: none
}

.pager li {
    display: inline
}

.pager li>a,.pager li>span {
    display: inline-block;
    padding: 5px 14px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 15px
}

.pager li>a:focus,.pager li>a:hover {
    text-decoration: none;
    background-color: #eee
}

.pager .next>a,.pager .next>span {
    float: right
}

.pager .previous>a,.pager .previous>span {
    float: left
}

.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span {
    color: #777;
    cursor: not-allowed;
    background-color: #fff
}

.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em
}

a.label:focus,a.label:hover {
    color: #fff;
    text-decoration: none;
    cursor: pointer
}

.label:empty {
    display: none
}

.btn .label {
    position: relative;
    top: -1px
}

.label-default {
    background-color: #777
}

.label-default[href]:focus,.label-default[href]:hover {
    background-color: #5e5e5e
}

.label-primary {
    background-color: #337ab7
}

.label-primary[href]:focus,.label-primary[href]:hover {
    background-color: #286090
}

.label-success {
    background-color: #5cb85c
}

.label-success[href]:focus,.label-success[href]:hover {
    background-color: #449d44
}

.label-info {
    background-color: #5bc0de
}

.label-info[href]:focus,.label-info[href]:hover {
    background-color: #31b0d5
}

.label-warning {
    background-color: #f0ad4e
}

.label-warning[href]:focus,.label-warning[href]:hover {
    background-color: #ec971f
}

.label-danger {
    background-color: #d9534f
}

.label-danger[href]:focus,.label-danger[href]:hover {
    background-color: #c9302c
}

.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px
}

.badge:empty {
    display: none
}

.btn .badge {
    position: relative;
    top: -1px
}

.btn-group-xs>.btn .badge,.btn-xs .badge {
    top: 0;
    padding: 1px 5px
}

a.badge:focus,a.badge:hover {
    color: #fff;
    text-decoration: none;
    cursor: pointer
}

.list-group-item.active>.badge,.nav-pills>.active>a>.badge {
    color: #337ab7;
    background-color: #fff
}

.list-group-item>.badge {
    float: right
}

.list-group-item>.badge+.badge {
    margin-right: 5px
}

.nav-pills>li>a>.badge {
    margin-left: 3px
}

.jumbotron {
    padding-top: 30px;
    padding-bottom: 30px;
    margin-bottom: 30px;
    background-color: #eee
}

.jumbotron,.jumbotron .h1,.jumbotron h1 {
    color: inherit
}

.jumbotron p {
    margin-bottom: 15px;
    font-size: 21px;
    font-weight: 200
}

.jumbotron>hr {
    border-top-color: #d5d5d5
}

.container-fluid .jumbotron,.container .jumbotron {
    padding-right: 15px;
    padding-left: 15px;
    border-radius: 6px
}

.jumbotron .container {
    max-width: 100%
}

@media screen and (min-width: 768px) {
    .jumbotron {
        padding-top:48px;
        padding-bottom: 48px
    }

    .container-fluid .jumbotron,.container .jumbotron {
        padding-right: 60px;
        padding-left: 60px
    }

    .jumbotron .h1,.jumbotron h1 {
        font-size: 63px
    }
}

.thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: border .2s ease-in-out
}

.thumbnail>img,.thumbnail a>img {
    margin-right: auto;
    margin-left: auto
}

a.thumbnail.active,a.thumbnail:focus,a.thumbnail:hover {
    border-color: #337ab7
}

.thumbnail .caption {
    padding: 9px;
    color: #333
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px
}

.alert h4 {
    margin-top: 0;
    color: inherit
}

.alert .alert-link {
    font-weight: 700
}

.alert>p,.alert>ul {
    margin-bottom: 0
}

.alert>p+p {
    margin-top: 5px
}

.alert-dismissable,.alert-dismissible {
    padding-right: 35px
}

.alert-dismissable .close,.alert-dismissible .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit
}

.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6
}

.alert-success hr {
    border-top-color: #c9e2b3
}

.alert-success .alert-link {
    color: #2b542c
}

.alert-info {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1
}

.alert-info hr {
    border-top-color: #a6e1ec
}

.alert-info .alert-link {
    color: #245269
}

.alert-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc
}

.alert-warning hr {
    border-top-color: #f7e1b5
}

.alert-warning .alert-link {
    color: #66512c
}

.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1
}

.alert-danger hr {
    border-top-color: #e4b9c0
}

.alert-danger .alert-link {
    color: #843534
}

@-webkit-keyframes progress-bar-stripes {
    0% {
        background-position: 40px 0
    }

    to {
        background-position: 0 0
    }
}

@keyframes progress-bar-stripes {
    0% {
        background-position: 40px 0
    }

    to {
        background-position: 0 0
    }
}

.progress {
    height: 20px;
    margin-bottom: 20px;
    overflow: hidden;
    background-color: #f5f5f5;
    border-radius: 4px;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1)
}

.progress-bar {
    float: left;
    width: 0;
    height: 100%;
    font-size: 12px;
    line-height: 20px;
    color: #fff;
    text-align: center;
    background-color: #337ab7;
    box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
    transition: width .6s ease
}

.progress-bar-striped,.progress-striped .progress-bar {
    background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);
    background-size: 40px 40px
}

.progress-bar.active,.progress.active .progress-bar {
    -webkit-animation: progress-bar-stripes 2s linear infinite;
    animation: progress-bar-stripes 2s linear infinite
}

.progress-bar-success {
    background-color: #5cb85c
}

.progress-striped .progress-bar-success {
    background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent)
}

.progress-bar-info {
    background-color: #5bc0de
}

.progress-striped .progress-bar-info {
    background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent)
}

.progress-bar-warning {
    background-color: #f0ad4e
}

.progress-striped .progress-bar-warning {
    background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent)
}

.progress-bar-danger {
    background-color: #d9534f
}

.progress-striped .progress-bar-danger {
    background-image: linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent)
}

.media {
    margin-top: 15px
}

.media:first-child {
    margin-top: 0
}

.media,.media-body {
    overflow: hidden;
    zoom:1}

.media-body {
    width: 10000px
}

.media-object {
    display: block
}

.media-object.img-thumbnail {
    max-width: none
}

.media-right,.media>.pull-right {
    padding-left: 10px
}

.media-left,.media>.pull-left {
    padding-right: 10px
}

.media-body,.media-left,.media-right {
    display: table-cell;
    vertical-align: top
}

.media-middle {
    vertical-align: middle
}

.media-bottom {
    vertical-align: bottom
}

.media-heading {
    margin-top: 0;
    margin-bottom: 5px
}

.media-list {
    padding-left: 0;
    list-style: none
}

.list-group {
    padding-left: 0;
    margin-bottom: 20px
}

.list-group-item {
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #ddd
}

.list-group-item:first-child {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px
}

a.list-group-item,button.list-group-item {
    color: #555
}

a.list-group-item .list-group-item-heading,button.list-group-item .list-group-item-heading {
    color: #333
}

a.list-group-item:focus,a.list-group-item:hover,button.list-group-item:focus,button.list-group-item:hover {
    color: #555;
    text-decoration: none;
    background-color: #f5f5f5
}

button.list-group-item {
    width: 100%;
    text-align: left
}

.list-group-item.disabled,.list-group-item.disabled:focus,.list-group-item.disabled:hover {
    color: #777;
    cursor: not-allowed;
    background-color: #eee
}

.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading {
    color: inherit
}

.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text {
    color: #777
}

.list-group-item.active,.list-group-item.active:focus,.list-group-item.active:hover {
    z-index: 2;
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7
}

.list-group-item.active .list-group-item-heading,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>small {
    color: inherit
}

.list-group-item.active .list-group-item-text,.list-group-item.active:focus .list-group-item-text,.list-group-item.active:hover .list-group-item-text {
    color: #c7ddef
}

.list-group-item-success {
    color: #3c763d;
    background-color: #dff0d8
}

a.list-group-item-success,button.list-group-item-success {
    color: #3c763d
}

a.list-group-item-success .list-group-item-heading,button.list-group-item-success .list-group-item-heading {
    color: inherit
}

a.list-group-item-success:focus,a.list-group-item-success:hover,button.list-group-item-success:focus,button.list-group-item-success:hover {
    color: #3c763d;
    background-color: #d0e9c6
}

a.list-group-item-success.active,a.list-group-item-success.active:focus,a.list-group-item-success.active:hover,button.list-group-item-success.active,button.list-group-item-success.active:focus,button.list-group-item-success.active:hover {
    color: #fff;
    background-color: #3c763d;
    border-color: #3c763d
}

.list-group-item-info {
    color: #31708f;
    background-color: #d9edf7
}

a.list-group-item-info,button.list-group-item-info {
    color: #31708f
}

a.list-group-item-info .list-group-item-heading,button.list-group-item-info .list-group-item-heading {
    color: inherit
}

a.list-group-item-info:focus,a.list-group-item-info:hover,button.list-group-item-info:focus,button.list-group-item-info:hover {
    color: #31708f;
    background-color: #c4e3f3
}

a.list-group-item-info.active,a.list-group-item-info.active:focus,a.list-group-item-info.active:hover,button.list-group-item-info.active,button.list-group-item-info.active:focus,button.list-group-item-info.active:hover {
    color: #fff;
    background-color: #31708f;
    border-color: #31708f
}

.list-group-item-warning {
    color: #8a6d3b;
    background-color: #fcf8e3
}

a.list-group-item-warning,button.list-group-item-warning {
    color: #8a6d3b
}

a.list-group-item-warning .list-group-item-heading,button.list-group-item-warning .list-group-item-heading {
    color: inherit
}

a.list-group-item-warning:focus,a.list-group-item-warning:hover,button.list-group-item-warning:focus,button.list-group-item-warning:hover {
    color: #8a6d3b;
    background-color: #faf2cc
}

a.list-group-item-warning.active,a.list-group-item-warning.active:focus,a.list-group-item-warning.active:hover,button.list-group-item-warning.active,button.list-group-item-warning.active:focus,button.list-group-item-warning.active:hover {
    color: #fff;
    background-color: #8a6d3b;
    border-color: #8a6d3b
}

.list-group-item-danger {
    color: #a94442;
    background-color: #f2dede
}

a.list-group-item-danger,button.list-group-item-danger {
    color: #a94442
}

a.list-group-item-danger .list-group-item-heading,button.list-group-item-danger .list-group-item-heading {
    color: inherit
}

a.list-group-item-danger:focus,a.list-group-item-danger:hover,button.list-group-item-danger:focus,button.list-group-item-danger:hover {
    color: #a94442;
    background-color: #ebcccc
}

a.list-group-item-danger.active,a.list-group-item-danger.active:focus,a.list-group-item-danger.active:hover,button.list-group-item-danger.active,button.list-group-item-danger.active:focus,button.list-group-item-danger.active:hover {
    color: #fff;
    background-color: #a94442;
    border-color: #a94442
}

.list-group-item-heading {
    margin-top: 0;
    margin-bottom: 5px
}

.list-group-item-text {
    margin-bottom: 0;
    line-height: 1.3
}

.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05)
}

.panel-body {
    padding: 15px
}

.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px
}

.panel-heading>.dropdown .dropdown-toggle,.panel-title {
    color: inherit
}

.panel-title {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px
}

.panel-title>.small,.panel-title>.small>a,.panel-title>a,.panel-title>small,.panel-title>small>a {
    color: inherit
}

.panel-footer {
    padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px
}

.panel>.list-group,.panel>.panel-collapse>.list-group {
    margin-bottom: 0
}

.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item {
    border-width: 1px 0;
    border-radius: 0
}

.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
    border-top: 0;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px
}

.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
    border-bottom: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px
}

.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.list-group+.panel-footer,.panel-heading+.list-group .list-group-item:first-child {
    border-top-width: 0
}

.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table {
    margin-bottom: 0
}

.panel>.panel-collapse>.table caption,.panel>.table-responsive>.table caption,.panel>.table caption {
    padding-right: 15px;
    padding-left: 15px
}

.panel>.table-responsive:first-child>.table:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table:first-child>thead:first-child>tr:first-child {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px
}

.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child {
    border-top-left-radius: 3px
}

.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child {
    border-top-right-radius: 3px
}

.panel>.table-responsive:last-child>.table:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child {
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px
}

.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
    border-bottom-left-radius: 3px
}

.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
    border-bottom-right-radius: 3px
}

.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body {
    border-top: 1px solid #ddd
}

.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th {
    border-top: 0
}

.panel>.table-bordered,.panel>.table-responsive>.table-bordered {
    border: 0
}

.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child {
    border-left: 0
}

.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child {
    border-right: 0
}

.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th {
    border-bottom: 0
}

.panel>.table-responsive {
    margin-bottom: 0;
    border: 0
}

.panel-group {
    margin-bottom: 20px
}

.panel-group .panel {
    margin-bottom: 0;
    border-radius: 4px
}

.panel-group .panel+.panel {
    margin-top: 5px
}

.panel-group .panel-heading {
    border-bottom: 0
}

.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: 1px solid #ddd
}

.panel-group .panel-footer {
    border-top: 0
}

.panel-group .panel-footer+.panel-collapse .panel-body {
    border-bottom: 1px solid #ddd
}

.panel-default {
    border-color: #ddd
}

.panel-default>.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd
}

.panel-default>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #ddd
}

.panel-default>.panel-heading .badge {
    color: #f5f5f5;
    background-color: #333
}

.panel-default>.panel-footer+.panel-collapse>.panel-body {
    border-bottom-color: #ddd
}

.panel-primary {
    border-color: #337ab7
}

.panel-primary>.panel-heading {
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7
}

.panel-primary>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #337ab7
}

.panel-primary>.panel-heading .badge {
    color: #337ab7;
    background-color: #fff
}

.panel-primary>.panel-footer+.panel-collapse>.panel-body {
    border-bottom-color: #337ab7
}

.panel-success {
    border-color: #d6e9c6
}

.panel-success>.panel-heading {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6
}

.panel-success>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #d6e9c6
}

.panel-success>.panel-heading .badge {
    color: #dff0d8;
    background-color: #3c763d
}

.panel-success>.panel-footer+.panel-collapse>.panel-body {
    border-bottom-color: #d6e9c6
}

.panel-info {
    border-color: #bce8f1
}

.panel-info>.panel-heading {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1
}

.panel-info>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #bce8f1
}

.panel-info>.panel-heading .badge {
    color: #d9edf7;
    background-color: #31708f
}

.panel-info>.panel-footer+.panel-collapse>.panel-body {
    border-bottom-color: #bce8f1
}

.panel-warning {
    border-color: #faebcc
}

.panel-warning>.panel-heading {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc
}

.panel-warning>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #faebcc
}

.panel-warning>.panel-heading .badge {
    color: #fcf8e3;
    background-color: #8a6d3b
}

.panel-warning>.panel-footer+.panel-collapse>.panel-body {
    border-bottom-color: #faebcc
}

.panel-danger {
    border-color: #ebccd1
}

.panel-danger>.panel-heading {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1
}

.panel-danger>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #ebccd1
}

.panel-danger>.panel-heading .badge {
    color: #f2dede;
    background-color: #a94442
}

.panel-danger>.panel-footer+.panel-collapse>.panel-body {
    border-bottom-color: #ebccd1
}

.embed-responsive {
    position: relative;
    display: block;
    height: 0;
    padding: 0;
    overflow: hidden
}

.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0
}

.embed-responsive-16by9 {
    padding-bottom: 56.25%
}

.embed-responsive-4by3 {
    padding-bottom: 75%
}

.well {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.05)
}

.well blockquote {
    border-color: #ddd;
    border-color: rgba(0,0,0,.15)
}

.well-lg {
    padding: 24px;
    border-radius: 6px
}

.well-sm {
    padding: 9px;
    border-radius: 3px
}

.close {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2
}

.close:focus,.close:hover {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    filter: alpha(opacity=50);
    opacity: .5
}

button.close {
    -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0
}

.modal,.modal-open {
    overflow: hidden
}

.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    -webkit-overflow-scrolling: touch;
    outline: 0
}

.modal.fade .modal-dialog {
    transition: -webkit-transform .3s ease-out;
    transition: transform .3s ease-out;
    transition: transform .3s ease-out,-webkit-transform .3s ease-out;
    -webkit-transform: translateY(-25%);
    transform: translateY(-25%)
}

.modal.in .modal-dialog {
    -webkit-transform: translate(0);
    transform: translate(0)
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px
}

.modal-content {
    position: relative;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 6px;
    outline: 0;
    box-shadow: 0 3px 9px rgba(0,0,0,.5)
}

.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000
}

.modal-backdrop.fade {
    filter: alpha(opacity=0);
    opacity: 0
}

.modal-backdrop.in {
    filter: alpha(opacity=50);
    opacity: .5
}

.modal-header {
    padding: 15px;
    border-bottom: 1px solid #e5e5e5
}

.modal-header .close {
    margin-top: -2px
}

.modal-title {
    margin: 0;
    line-height: 1.42857143
}

.modal-body {
    position: relative;
    padding: 15px
}

.modal-footer {
    padding: 15px;
    text-align: right;
    border-top: 1px solid #e5e5e5
}

.modal-footer .btn+.btn {
    margin-bottom: 0;
    margin-left: 5px
}

.modal-footer .btn-group .btn+.btn {
    margin-left: -1px
}

.modal-footer .btn-block+.btn-block {
    margin-left: 0
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll
}

@media (min-width: 768px) {
    .modal-dialog {
        width:600px;
        margin: 30px auto
    }

    .modal-content {
        box-shadow: 0 5px 15px rgba(0,0,0,.5)
    }

    .modal-sm {
        width: 300px
    }
}

@media (min-width: 992px) {
    .modal-lg {
        width:900px
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    white-space: normal;
    filter: alpha(opacity=0);
    opacity: 0;
    line-break: auto
}

.tooltip.in {
    filter: alpha(opacity=90);
    opacity: .9
}

.tooltip.top {
    padding: 5px 0;
    margin-top: -3px
}

.tooltip.right {
    padding: 0 5px;
    margin-left: 3px
}

.tooltip.bottom {
    padding: 5px 0;
    margin-top: 3px
}

.tooltip.left {
    padding: 0 5px;
    margin-left: -3px
}

.tooltip-inner {
    max-width: 200px;
    padding: 3px 8px;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 4px
}

.tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid
}

.tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000
}

.tooltip.top-left .tooltip-arrow {
    right: 5px
}

.tooltip.top-left .tooltip-arrow,.tooltip.top-right .tooltip-arrow {
    bottom: 0;
    margin-bottom: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000
}

.tooltip.top-right .tooltip-arrow {
    left: 5px
}

.tooltip.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -5px;
    border-width: 5px 5px 5px 0;
    border-right-color: #000
}

.tooltip.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -5px;
    border-width: 5px 0 5px 5px;
    border-left-color: #000
}

.tooltip.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000
}

.tooltip.bottom-left .tooltip-arrow {
    top: 0;
    right: 5px;
    margin-top: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000
}

.tooltip.bottom-right .tooltip-arrow {
    top: 0;
    left: 5px;
    margin-top: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: none;
    max-width: 276px;
    padding: 1px;
    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    white-space: normal;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    line-break: auto
}

.popover.top {
    margin-top: -10px
}

.popover.right {
    margin-left: 10px
}

.popover.bottom {
    margin-top: 10px
}

.popover.left {
    margin-left: -10px
}

.popover-title {
    padding: 8px 14px;
    margin: 0;
    font-size: 14px;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-radius: 5px 5px 0 0
}

.popover-content {
    padding: 9px 14px
}

.popover>.arrow,.popover>.arrow:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid
}

.popover>.arrow {
    border-width: 11px
}

.popover>.arrow:after {
    content: "";
    border-width: 10px
}

.popover.top>.arrow {
    bottom: -11px;
    left: 50%;
    margin-left: -11px;
    border-top-color: #999;
    border-top-color: rgba(0,0,0,.25);
    border-bottom-width: 0
}

.popover.top>.arrow:after {
    bottom: 1px;
    margin-left: -10px;
    content: " ";
    border-top-color: #fff;
    border-bottom-width: 0
}

.popover.right>.arrow {
    top: 50%;
    left: -11px;
    margin-top: -11px;
    border-right-color: #999;
    border-right-color: rgba(0,0,0,.25);
    border-left-width: 0
}

.popover.right>.arrow:after {
    bottom: -10px;
    left: 1px;
    content: " ";
    border-right-color: #fff;
    border-left-width: 0
}

.popover.bottom>.arrow {
    top: -11px;
    left: 50%;
    margin-left: -11px;
    border-top-width: 0;
    border-bottom-color: #999;
    border-bottom-color: rgba(0,0,0,.25)
}

.popover.bottom>.arrow:after {
    top: 1px;
    margin-left: -10px;
    content: " ";
    border-top-width: 0;
    border-bottom-color: #fff
}

.popover.left>.arrow {
    top: 50%;
    right: -11px;
    margin-top: -11px;
    border-right-width: 0;
    border-left-color: #999;
    border-left-color: rgba(0,0,0,.25)
}

.popover.left>.arrow:after {
    right: 1px;
    bottom: -10px;
    content: " ";
    border-right-width: 0;
    border-left-color: #fff
}

.carousel,.carousel-inner {
    position: relative
}

.carousel-inner {
    width: 100%;
    overflow: hidden
}

.carousel-inner>.item {
    position: relative;
    display: none;
    transition: left .6s ease-in-out
}

.carousel-inner>.item>a>img,.carousel-inner>.item>img {
    line-height: 1
}

@media (-webkit-transform-3d),(transform-3d) {
    .carousel-inner>.item {
        transition: -webkit-transform .6s ease-in-out;
        transition: transform .6s ease-in-out;
        transition: transform .6s ease-in-out,-webkit-transform .6s ease-in-out;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px
    }

    .carousel-inner>.item.active.right,.carousel-inner>.item.next {
        left: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }

    .carousel-inner>.item.active.left,.carousel-inner>.item.prev {
        left: 0;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }

    .carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right {
        left: 0;
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev {
    display: block
}

.carousel-inner>.active {
    left: 0
}

.carousel-inner>.next,.carousel-inner>.prev {
    position: absolute;
    top: 0;
    width: 100%
}

.carousel-inner>.next {
    left: 100%
}

.carousel-inner>.prev {
    left: -100%
}

.carousel-inner>.next.left,.carousel-inner>.prev.right {
    left: 0
}

.carousel-inner>.active.left {
    left: -100%
}

.carousel-inner>.active.right {
    left: 100%
}

.carousel-control {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 15%;
    font-size: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0,0,0,.6);
    background-color: transparent;
    filter: alpha(opacity=50);
    opacity: .5
}

.carousel-control.left {
    background-image: linear-gradient(90deg,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#80000000",endColorstr="#00000000",GradientType=1);
    background-repeat: repeat-x
}

.carousel-control.right {
    right: 0;
    left: auto;
    background-image: linear-gradient(90deg,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00000000",endColorstr="#80000000",GradientType=1);
    background-repeat: repeat-x
}

.carousel-control:focus,.carousel-control:hover {
    color: #fff;
    text-decoration: none;
    filter: alpha(opacity=90);
    outline: 0;
    opacity: .9
}

.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px
}

.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev {
    left: 50%;
    margin-left: -10px
}

.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next {
    right: 50%;
    margin-right: -10px
}

.carousel-control .icon-next,.carousel-control .icon-prev {
    width: 20px;
    height: 20px;
    font-family: serif;
    line-height: 1
}

.carousel-control .icon-prev:before {
    content: "\2039"
}

.carousel-control .icon-next:before {
    content: "\203A"
}

.carousel-indicators {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 15;
    width: 60%;
    padding-left: 0;
    margin-left: -30%;
    text-align: center;
    list-style: none
}

.carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000\9;
    background-color: transparent;
    border: 1px solid #fff;
    border-radius: 10px
}

.carousel-indicators .active {
    width: 12px;
    height: 12px;
    margin: 0;
    background-color: #fff
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0,0,0,.6)
}

.carousel-caption .btn {
    text-shadow: none
}

@media screen and (min-width: 768px) {
    .carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev {
        width:30px;
        height: 30px;
        margin-top: -10px;
        font-size: 30px
    }

    .carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev {
        margin-left: -10px
    }

    .carousel-control .glyphicon-chevron-right,.carousel-control .icon-next {
        margin-right: -10px
    }

    .carousel-caption {
        right: 20%;
        left: 20%;
        padding-bottom: 30px
    }

    .carousel-indicators {
        bottom: 20px
    }
}

.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before {
    display: table;
    content: " "
}

.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.modal-header:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after {
    clear: both
}

.center-block {
    display: block;
    margin-right: auto;
    margin-left: auto
}

.pull-right {
    float: right!important
}

.pull-left {
    float: left!important
}

.hide {
    display: none!important
}

.show {
    display: block!important
}

.invisible {
    visibility: hidden
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.hidden {
    display: none!important
}

.affix {
    position: fixed
}

@-ms-viewport {
    width: device-width
}

.visible-lg,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block {
    display: none!important
}

@media (max-width: 767px) {
    .visible-xs {
        display:block!important
    }

    table.visible-xs {
        display: table!important
    }

    tr.visible-xs {
        display: table-row!important
    }

    td.visible-xs,th.visible-xs {
        display: table-cell!important
    }
}

@media (max-width: 767px) {
    .visible-xs-block {
        display:block!important
    }
}

@media (max-width: 767px) {
    .visible-xs-inline {
        display:inline!important
    }
}

@media (max-width: 767px) {
    .visible-xs-inline-block {
        display:inline-block!important
    }
}

@media (min-width: 768px) and (max-width:991px) {
    .visible-sm {
        display:block!important
    }

    table.visible-sm {
        display: table!important
    }

    tr.visible-sm {
        display: table-row!important
    }

    td.visible-sm,th.visible-sm {
        display: table-cell!important
    }
}

@media (min-width: 768px) and (max-width:991px) {
    .visible-sm-block {
        display:block!important
    }
}

@media (min-width: 768px) and (max-width:991px) {
    .visible-sm-inline {
        display:inline!important
    }
}

@media (min-width: 768px) and (max-width:991px) {
    .visible-sm-inline-block {
        display:inline-block!important
    }
}

@media (min-width: 992px) and (max-width:1199px) {
    .visible-md {
        display:block!important
    }

    table.visible-md {
        display: table!important
    }

    tr.visible-md {
        display: table-row!important
    }

    td.visible-md,th.visible-md {
        display: table-cell!important
    }
}

@media (min-width: 992px) and (max-width:1199px) {
    .visible-md-block {
        display:block!important
    }
}

@media (min-width: 992px) and (max-width:1199px) {
    .visible-md-inline {
        display:inline!important
    }
}

@media (min-width: 992px) and (max-width:1199px) {
    .visible-md-inline-block {
        display:inline-block!important
    }
}

@media (min-width: 1200px) {
    .visible-lg {
        display:block!important
    }

    table.visible-lg {
        display: table!important
    }

    tr.visible-lg {
        display: table-row!important
    }

    td.visible-lg,th.visible-lg {
        display: table-cell!important
    }
}

@media (min-width: 1200px) {
    .visible-lg-block {
        display:block!important
    }
}

@media (min-width: 1200px) {
    .visible-lg-inline {
        display:inline!important
    }
}

@media (min-width: 1200px) {
    .visible-lg-inline-block {
        display:inline-block!important
    }
}

@media (max-width: 767px) {
    .hidden-xs {
        display:none!important
    }
}

@media (min-width: 768px) and (max-width:991px) {
    .hidden-sm {
        display:none!important
    }
}

@media (min-width: 992px) and (max-width:1199px) {
    .hidden-md {
        display:none!important
    }
}

@media (min-width: 1200px) {
    .hidden-lg {
        display:none!important
    }
}

.visible-print {
    display: none!important
}

@media print {
    .visible-print {
        display: block!important
    }

    table.visible-print {
        display: table!important
    }

    tr.visible-print {
        display: table-row!important
    }

    td.visible-print,th.visible-print {
        display: table-cell!important
    }
}

.visible-print-block {
    display: none!important
}

@media print {
    .visible-print-block {
        display: block!important
    }
}

.visible-print-inline {
    display: none!important
}

@media print {
    .visible-print-inline {
        display: inline!important
    }
}

.visible-print-inline-block {
    display: none!important
}

@media print {
    .visible-print-inline-block {
        display: inline-block!important
    }
}

@media print {
    .hidden-print {
        display: none!important
    }
}

@font-face {
    font-family: fontello;
    src: url(fontello.7b3931073dd99e08b28f.eot);
    src: url(fontello.7b3931073dd99e08b28f.eot#iefix) format("embedded-opentype"),url(data:application/font-woff2;base64,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) format("woff2"),url(data:application/font-woff;base64,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) format("woff"),url(data:application/x-font-ttf;base64,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sAFjYCCwASsgiophILACQ2BkI7ADQ2FkUFiwAkNhG7ADQ2BZsAMlsAJiILAAUFiwQGBZZrABY2GwAiVGYTgjIDwjOBshICBGI0ewASsjYTghWbErARQrLbBCLLA1Ky6xKwEUKy2wQyywNishIyAgPLAEI0IjOLErARQrsARDLrArKy2wRCywABUgR7AAI0KyAAEBFRQTLrAxKi2wRSywABUgR7AAI0KyAAEBFRQTLrAxKi2wRiyxAAEUE7AyKi2wRyywNCotsEgssAAWRSMgLiBGiiNhOLErARQrLbBJLLAII0KwSCstsEossgAAQSstsEsssgABQSstsEwssgEAQSstsE0ssgEBQSstsE4ssgAAQistsE8ssgABQistsFAssgEAQistsFEssgEBQistsFIssgAAPistsFMssgABPistsFQssgEAPistsFUssgEBPistsFYssgAAQCstsFcssgABQCstsFgssgEAQCstsFkssgEBQCstsFossgAAQystsFsssgABQystsFwssgEAQystsF0ssgEBQystsF4ssgAAPystsF8ssgABPystsGAssgEAPystsGEssgEBPystsGIssDcrLrErARQrLbBjLLA3K7A7Ky2wZCywNyuwPCstsGUssAAWsDcrsD0rLbBmLLA4Ky6xKwEUKy2wZyywOCuwOystsGgssDgrsDwrLbBpLLA4K7A9Ky2waiywOSsusSsBFCstsGsssDkrsDsrLbBsLLA5K7A8Ky2wbSywOSuwPSstsG4ssDorLrErARQrLbBvLLA6K7A7Ky2wcCywOiuwPCstsHEssDorsD0rLbByLLMJBAIDRVghGyMhWUIrsAhlsAMkUHiwARUwLQBLuADIUlixAQGOWbABuQgACABjcLEABUKyAAEAKrEABUKzCgIBCCqxAAVCsw4AAQgqsQAGQroCwAABAAkqsQAHQroAQAABAAkqsQMARLEkAYhRWLBAiFixA2REsSYBiFFYugiAAAEEQIhjVFixAwBEWVlZWbMMAgEMKrgB/4WwBI2xAgBEAAA=) format("truetype"),url(fontello.38ff845804a13d167837.svg#fontello) format("svg");
    font-weight: 400;
    font-style: normal
}

[class*=" icon-"]:before,[class^=icon-]:before {
    font-family: fontello;
    font-style: normal;
    font-weight: 400;
    speak: none;
    display: inline-block;
    text-decoration: inherit;
    width: 1em;
    margin-right: .2em;
    text-align: center;
    font-variant: normal;
    text-transform: none;
    line-height: 1em;
    margin-left: .2em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.icon-ok-circled:before {
    content: "\E800"
}

.icon-mail:before {
    content: "\E801"
}

.icon-star:before {
    content: "\E802"
}

.icon-facebook:before {
    content: "\F09A"
}

.icon-gplus:before {
    content: "\F0D5"
}

.icon-whatsapp:before {
    content: "\F232"
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: local("Roboto"),local("Roboto-Regular"),url(http://fonts.gstatic.com/s/roboto/v16/ek4gzZ-GeXAPcSbHtCeQI_esZW2xOQ-xsNqO47m55DA.woff2) format("woff2");
    unicode-range: u+0460-052f,u+20b4,u+2de0-2dff,u+a640-a69f
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: local("Roboto"),local("Roboto-Regular"),url(http://fonts.gstatic.com/s/roboto/v16/mErvLBYg_cXG3rLvUsKT_fesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");
    unicode-range: u+0400-045f,u+0490-0491,u+04b0-04b1,u+2116
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: local("Roboto"),local("Roboto-Regular"),url(http://fonts.gstatic.com/s/roboto/v16/-2n2p-_Y08sg57CNWQfKNvesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");
    unicode-range: u+1f??
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: local("Roboto"),local("Roboto-Regular"),url(http://fonts.gstatic.com/s/roboto/v16/u0TOpm082MNkS5K0Q4rhqvesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");
    unicode-range: u+0370-03ff
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: local("Roboto"),local("Roboto-Regular"),url(http://fonts.gstatic.com/s/roboto/v16/NdF9MtnOpLzo-noMoG0miPesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");
    unicode-range: u+0102-0103,u+1ea0-1ef9,u+20ab
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: local("Roboto"),local("Roboto-Regular"),url(http://fonts.gstatic.com/s/roboto/v16/Fcx7Wwv8OzT71A3E1XOAjvesZW2xOQ-xsNqO47m55DA.woff2) format("woff2");
    unicode-range: u+0100-024f,u+1e??,u+20a0-20ab,u+20ad-20cf,u+2c60-2c7f,u+a720-a7ff
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: local("Roboto"),local("Roboto-Regular"),url(http://fonts.gstatic.com/s/roboto/v16/CWB0XYA8bzo0kSThX0UTuA.woff2) format("woff2");
    unicode-range: u+00??,u+0131,u+0152-0153,u+02c6,u+02da,u+02dc,u+2000-206f,u+2074,u+20ac,u+2212,u+2215
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    src: local("Roboto Medium"),local("Roboto-Medium"),url(http://fonts.gstatic.com/s/roboto/v16/ZLqKeelYbATG60EpZBSDyxJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
    unicode-range: u+0460-052f,u+20b4,u+2de0-2dff,u+a640-a69f
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    src: local("Roboto Medium"),local("Roboto-Medium"),url(http://fonts.gstatic.com/s/roboto/v16/oHi30kwQWvpCWqAhzHcCSBJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
    unicode-range: u+0400-045f,u+0490-0491,u+04b0-04b1,u+2116
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    src: local("Roboto Medium"),local("Roboto-Medium"),url(http://fonts.gstatic.com/s/roboto/v16/rGvHdJnr2l75qb0YND9NyBJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
    unicode-range: u+1f??
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    src: local("Roboto Medium"),local("Roboto-Medium"),url(http://fonts.gstatic.com/s/roboto/v16/mx9Uck6uB63VIKFYnEMXrRJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
    unicode-range: u+0370-03ff
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    src: local("Roboto Medium"),local("Roboto-Medium"),url(http://fonts.gstatic.com/s/roboto/v16/mbmhprMH69Zi6eEPBYVFhRJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
    unicode-range: u+0102-0103,u+1ea0-1ef9,u+20ab
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    src: local("Roboto Medium"),local("Roboto-Medium"),url(http://fonts.gstatic.com/s/roboto/v16/oOeFwZNlrTefzLYmlVV1UBJtnKITppOI_IvcXXDNrsc.woff2) format("woff2");
    unicode-range: u+0100-024f,u+1e??,u+20a0-20ab,u+20ad-20cf,u+2c60-2c7f,u+a720-a7ff
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    src: local("Roboto Medium"),local("Roboto-Medium"),url(http://fonts.gstatic.com/s/roboto/v16/RxZJdnzeo3R5zSexge8UUVtXRa8TVwTICgirnJhmVJw.woff2) format("woff2");
    unicode-range: u+00??,u+0131,u+0152-0153,u+02c6,u+02da,u+02dc,u+2000-206f,u+2074,u+20ac,u+2212,u+2215
}

@font-face {
    font-family: ProximaNova-Bold;
    src: url(ProximaNova-Bold.84cc98565bcef8487853.eot?#iefix) format("embedded-opentype"),url(ProximaNova-Bold.3011f72c5fd16737f105.woff) format("woff"),url(ProximaNova-Bold.27cc77f0987674e77c89.ttf) format("truetype"),url(ProximaNova-Bold.00ddef214357dd3a1619.svg#ProximaNova-Bold) format("svg");
    font-weight: 400;
    font-style: normal
}

@font-face {
    font-family: ProximaNova-Semibold;
    src: url(ProximaNova-Semibold.08abe046a499c1cd22fb.eot?#iefix) format("embedded-opentype"),url(ProximaNova-Semibold.61a7a05fd9a25828bf1c.woff) format("woff"),url(ProximaNova-Semibold.a85273a3ed48772c2a77.ttf) format("truetype"),url(ProximaNova-Semibold.00417e6f0b1a0f08a783.svg#ProximaNova-Semibold) format("svg");
    font-weight: 400;
    font-style: normal
}

* {
    outline: none
}

.position-r {
    position: relative
}

body {
    font-family: ProximaNova-Bold;
    color: #000;
    background: #4e2a84 url(mobile-bg.24b084dc6850c5116ac3.jpg) top no-repeat fixed;
    background-size: cover;
    min-height: 400px!important
}

body,html {
    height: 100%;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

body,header,html {
    width: 100%
}

.back-btn {
    float: left;
    width: 50px;
    height: 100%
}

.back-btn,.logo {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.logo {
    margin: 0 auto;
    position: relative;
    padding-top: 8px;
    width: 75%
}

.logo .inner-logo {
    width: 100%
}

.kbc-lifeline-m {
    margin-right: 5px;
    float: right;
    height: 100%
}

.kbc-lifeline {
    cursor: pointer;
    margin-right: 7px;
    float: left;
    width: 50px;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.kbc-lifeline img {
    width: 100%
}

.gameplay-logo,.sponser-logo {
    display: none
}

.question-top {
    position: relative;
    z-index: 99;
    margin-top: 4%
}

.question-title {
    text-align: right;
    background: url(data:image/png;base64,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) right 90% no-repeat;
    background-size: 90% auto
}

.question-price,.question-title {
    float: left;
    width: calc(50% - 40px);
    height: 40px;
    font-size: 16px;
    color: #feda57
}

.question-price {
    text-align: left;
    background: url(data:image/png;base64,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) left 90% no-repeat;
    background-size: 90% auto
}

.question-price:before {
    right: 100%;
    top: 50%;
    height: 0;
    width: 0;
    pointer-events: none;
    margin-right: 5px;
    font-weight: 700
}

.q-timer {
    float: left;
    padding-top: 10px;
    font-family: ProximaNova-Semibold!important;
    color: #fff;
    width: 80px;
    height: 40px;
    font-size: 16px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background: url(data:image/png;base64,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) bottom no-repeat;
    background-size: 100% auto
}

.kbc-game {
    z-index: 9;
    margin-top: -5px;
    float: left;
    width: 100%
}

.question {
    margin-bottom: 15px;
    padding: 5.5% 10%;
    text-align: center;
    font-size: 18px;
    color: #feda57;
    width: 100%;
    min-height: 88px;
    background: url(question-bg.e13e3aa17c5569298c73.png) 50% no-repeat;
    background-size: 150% 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.options {
    cursor: pointer;
    margin-bottom: 15px;
    padding: 3.5% 10%;
    min-height: 45px;
    color: #fff;
    font-family: ProximaNova-Semibold!important;
    background: url(options-bg.51cc6b02f0e2f01103c6.png) 50% no-repeat;
    background-size: 150% 100%
}

.options.active {
    color: #000;
    background: url(data:image/png;base64,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) 50% no-repeat;
    background-size: 150% 100%
}

.options.wrong {
    background: url(data:image/png;base64,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) 50% no-repeat;
    background-size: 150% 100%
}

.options.right {
    background: url(data:image/png;base64,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) 50% no-repeat;
    background-size: 150% 100%
}

.option-text {
    width: calc(100% - 25px)
}

.option-text,.option-title {
    float: left;
    text-align: center;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.option-title {
    width: 25px
}

.banner {
    margin: 10px auto 0 auto;
    width: 320px;
    height: 50px
}

.banner img {
    width: 100%;
    height: 100%
}

.gameplay-footer {
    position: fixed;
    bottom: 24px;
    left: 0;
    background: rgba(0,0,0,.5)
}

.gameplay-blank-space,.gameplay-footer {
    width: 100%;
    height: 75px
}

.footer-btn-grid {
    float: left;
    width: 33.33%;
    height: auto
}

.exit-btn {
    margin-left: 20px;
    float: left;
    width: 50px;
    background: url(data:image/png;base64,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) 50% no-repeat;
    background-size: 100% auto
}

.exit-btn,.submit-btn {
    cursor: pointer;
    height: 75px
}

.submit-btn {
    margin: 0 auto;
    width: 135px;
    background: url(data:image/png;base64,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) 50% no-repeat;
    background-size: 100% auto
}

.submit-btn:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVIAAABaCAMAAADdLy4EAAAAdVBMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////li2ZAAAAAJnRSTlMAd8zdM7tE7w8xZSNU+QiJf6FJ17KVHBbGqpls4elcPfPiQavQz1w6wscAAAWbSURBVHja7d1pk5NAEAbg5pwJEEjInZhkk9X+/z/RlbnJBURHLPv5YCmFKfd1hu4ZWBaId5v6UM2TJCTbZDmvsriEd/DTPELimobVGQa6fk6R3HWscuitPND4fCqpoZ/sG5IXkhi6qxdIOliuoRs+xxssIhGb3sSSQRexM+enyazIOZAGj7PVd3egdsgmm1p5fhYlkJb1IURjMYEXKtTYbAPkrnhuxZTCU+bUjxlN9ycmiZnLRbdEkzWQp+qLzvRJi7rSQzQD8rozep3pDKVvEyAdHKYq0weBnVAKqSx1VDMULncjm3ygkFDj1NnkqEKDW6VahG4p0R5iNU5njxvSkHqnXs7TR5fTMwqMmqeeMhS+l+BayKzPQHpauVO/HXUApK9yKyf4xjn6TZYmIP1N5OV0BZZATntq8QeZyfhy0ErZCVRA+jMN6By0g1zZU/80UCGH6caUe6pNbwpV0Xd7UkbLpneH6aW1S7oCMpjcPE2hUcr9khzIYDNnWNZqL4UMtxG96dFZUB2AvCHBhljQy5UT7Ze85WC19mvPa1GeBl9SDlKcfgEtT79wcdxwz3bPb3D7o9I2Dw23HeNJtVRe5HuUwsyaMa21cSqPG2HqzK8YlJ0uteajsC2FP8tM9mlp9p6v4EPB7Jji15EamR3pHqQcxxKpbEVj84/k4EGMrqJzpCa1BuPq9NFEKi+mmR6wC/AhEqMzScRgjfirSJOG+Gs7sILO1CeOJtJY16cSG0vwIG4CzZvfVgzZ64lv75AzO9LQLARvI7Uv0t6YIHNfq1ETl5CH2evy5AxvfbYpULvxRCqn+3eAs8ddqEBUFq17pIkzSpn6mLz500gi3Yr1k16OnsADUUuiIO8bKRchqqOVKFDy5GokkS5FF6Xb0gI8yFGK9lneKdK0UYRiqqujuSpQ0a+kg5FEKrsofW+0Bh8qNJIMYGBf2vyayOKUjiXSlepGDz47fe7klPDukUb26kmMg7wpThGMLNKNidSPLEQj7DFKmdMfMESs8qauji3StZn4vsTBjunJ3K3VF+kWVk5NgWpO5aOJdC4nvr/y5MYaianfseLHzGmirEK3h9FEKnvkEgqPTdRtQ6W+cndn6bYvzdo7Aolq8ccTqW6izl739oLWfVqVbQB2B4o3iaTiJHM0k1ULxhPpD3WTdK0elPAhwB2315hMLdOZGqb7+2UrcCLV0WMwokiZ3oP2sqlvxhoTa6d8pzeXIlHQzVHM2olkzClmOnvMxxPpxozNhVya/mFmZCFLktDa7MhQ0EcjnYjL2QqMxX/JeCJNzRV06e9uXoWuvZrsDhbfjzTQR/W1uBhRpIFpnWYeu6iCOYlyHbWb6N1I9+aoagIiGFGkS/OASe3z8R0ehNbtPC3doRQF3CRisF3azokzDMYUKUO9T86x8Q08ydPgS5G3shZHY/hXxfbdkS02/t2vZhQqeyt/pkoVecPCflYvVjOfvD3vf7gB10AGm7tTfaaurGSozdR9RjdHemb39/T523aX+glkmPLYXi/VSH3UW2a3FX5Bz5a/Yz297UMLVAOXDF/eMw6WrTxIbzUZoNBbZbYrUiM11JrJK2nZblVpWTpMGT54iHUj24ApraF6MYNx/vCC8EGd1JD+CY/8cdqM3nPQQ4BS/exFUYzGaY9En9agnKm5T+1pRyt80Sld9Vv56GUHXWwSlL5zeKCY0utLu6uPKC2epHXSmTL6xufnNnNULjkIL8YpLqhDfYxXDJ+PUePM0Jx7oFfy3JWvrJS2/OXpCzQ+Pk+0kdIyCbZoWZXwUrlCR/Q5OxXX+H8weSpOi6xaHtHGCujkSj/zpaPlpvvFl37SUweXAnrI50ieOwZl76r2geShxaGE/spTQvP/ruPqDEPxutrSYHVclkEM71qfi+wQkCDL6gktfv6GnybvTy5jPNagAAAAAElFTkSuQmCC) 50% no-repeat;
    background-size: 100% auto
}

.lifelines-btn {
    background: url(data:image/png;base64,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) 50% no-repeat;
    background-size: 100% auto
}

.lifelines-btn,.lifelines-btn.disabled {
    cursor: pointer;
    margin-right: 20px;
    float: right;
    width: 50px;
    height: 75px
}

.lifelines-btn.disabled {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABuCAMAAACQnfSLAAADAFBMVEUAAAD8nkr6p0/6o079v1r3rFT7rVH1lEn9uVb6o075nUv4mEn8tlX+v1j3mEn9tVX9v1n4mkr4m0v4nUz+xFv2kkf3lkn9vlj+wln4mUn9s1T+w1r5nkz7rlL4oEz3k0j+v1n+w1r+vlj3kUf8slP3k0j+wlr8tlX8tlX5nkz2kUf+w1r2kUf7rlH7r1L3k0j3rVT7rFH+v1n+v1j4nEv/AAD+vVf6pU/2kUf4m0v7slP3kkfykUn+xFr3lEj8tFT8tlX/AAD/AQD2kUf3kkf9uFb8slP9t1X+wFn3slf+wVn5o07/AAD/EAf/AAD7r1P/Dgb7rVH3lkn/AAD+wVn5n0z/AQD8tVT2kUf+v1n8tlX/xVv8tVX5pE75nEv8sVP7sFP8t1X+wFn4mEn5oE3/AAD/Ewn9vVf3lUj+xVv+vlj/xlz5oE38t1X/AAD7rlL7rlL8sVP9ulf3k0j5pE7+w1r2kUf+xlv9u1f/AAD/xlvqrV3vyGfmk1L7pk76qVD+wVn6pU/6rVL8slP/AAD6pE7+wVn2k0f/BQL7sFPvlE3/AAD8t1b4mkr3lkn/AAD5o03/AAD9ulf9NBn+w1r/AAD7q1H4mkr4m0v/AAD3k0j/AAD9ulb/AAD5lEf/CwX/xlv/AAD4nEv/AAD/AAD/AAD6p0//AAD/AAD7rFH6qVD7tFT7rFH7slT6qVD+xFv/AAD/AAD8s1T9Yi34m0v8PB3+xFv4n0zvyGfnk1LrrV3vyGfnk1LqrV36qlHvyGfqrl37r1L8uFX/AADvyGf/AAD+Yy79Nxr+gjz+xlv+Hg7+fDr7djj9IxH2kEf+kkT+lUX/xVv7Tib/AAD8WSr7UCb/AAD8sVP8tlX+wlr/xVv6p0/2j0f5n0z9u1f7rlL2k0j8tFT4mUr3l0n4nEv2kUf2j0b9vFj6rFH9vln7qVD5o036pE79uFb3lEj/x1v+wFn/CAT7j0T+SSL/GQz5m0v7gz77ejr8aDH9Yi7+QR7+MBb/KhT+IhD/Dwf9ViirBkAoAAAA1nRSTlMAAohVMwyrVRDMKCF3FBTMiFXuiHf73ohVLe7MmoiId1z73qtuZy8c+/vn3pl2YkU0MCojEPz48N7dqoZvbjgsIPby7surkId/UURCLh0VBgb59erl3c+6sqqkmphsXVdLQzg0Gw7+7+7s6ebm5eLe2L+9vby6urKysqyqqKimm5iRiHx3cWdcQjkzCvTq6N7d19XVvr24tKuoo6KbmI+Kh4B3alhLSjclCfjn5tXRysjFw8C/tqOjnZ2aioqIfnNyaGBgVlD69+/u7ejl5dW4t5CQjW9UcQo/qAAACNJJREFUaN7tmlW000AQQCdAcXd3d3d3d3d3d3d3d3d3d3e3UmiheKFQ3HVnN+mmSdMkwAfnwP3knHfZN5ndmZ19YAhLxlIH9+3uQ9i972CpjBb4MxRImruD1Wq9c+eOy/X06S3Cs2cT+9eLBb+H0KjumrvEq1Q/c7vdbeOWEeBXKVii3Y0bN7TUDoejbfww8CsEK5byBpo11UiqmU3ALMl7Pn9+Q1LH7lQ8acNMKUKGzNo0dMbl9QZ1zYFqyoMHM8xFPdzc27dvM3XKGkkLqGIqxBrWNRVTE+KGB8MkbI1mVEdIGg40CF8vlKi+N64+GMNy8fljqk5ZuwAEJNaOVGgmzLQY+nxnXr1Bdfa5WUCXMHFTETUhuoHPOfz49evXP96+3TkzGCL0Vuq+XzkZ6FDizXXkZELj26H+OFTfvz8/4I8I/b9epxQuC8YJP4OoCbOFAOYLb6+LTCgPJlhc+T6SRNs98P11L5sqggkyULcnLWhQ0mb7xN1zBDBB6PGodubRyA2bzfbyM3cPBTOEiY5qp988aZwI1bGrc/cxc+7x950eZ7T8oCJcVRshe+Py7b3qQrI0KZi+gd6Gy1/Z4/E4U6sPlN5oTlQaoGxhr7t9ORBJX+nOnbWh9b5lNKJ21lSdSDakJBCWZfO6q48BSshKeF5PBx0SELPz4QhFOFqhuRtLiqE83LPYvzSkpaCSbs7URHUR35DUQXNV6QCdx92LABmCapcrtO6+TE3UD32yO/lNVCcEkYrTuHspEHKzAhYU9BiB6mjyutMD1VP571t+Ak+TFQDQkan3gy5diNou+5LBbhJ1oszAWcnTpEo5WCWW3eAGdmU0orbn54mH6jogZ6QsTZplFAt6R9An7UPiTgIiWW4SdSJFTVnCw90rvbjqShUMbMpoZNV2qT9ZiIveDhxlmkyR+pBMoM9son4kHlNCG1y1ql4JsjT5KKqNVO7QqE7NUqL0TcIGUNFsEne/Z+ogYICi6M7AtgsuOh+oWVnFq/5+j6qngwHyYrDTeuORSNqIWmny9hmqOxgqldGIOjXbiYRu4JcjPCRfXNhOWsAA3Yn6Ee7IfKjOB/5ZwN1vUD3KUESI+VFeul8IybVqfC/u/kTU6cEAsVCNuyYNMZ8SQINmsoL2wfV0EBhAKELcOQEsL4h6KmhSjqfJq9dPp4MRuuCyLRAM1ZdAReZik2vTvb9Clibv1oIR5qN6NBx98cLfVyzYgrTusWlKbuEh+frMUJeejJgfhYADqC4FSnrSW8EQIHT6wd2fyxjqpViK7MGABAMFpdmFowYQYltlfc82MMBoVO+FnahOAb5USMzUsQEghdX69Bt3LwN9mqJ6F/RFdUjwJext8ZqUhVZzq6O5vO/RJSvGuh9TK/ZvihaSugFAOivh9Sve9+i3xxa7nalfqNS1Hkvq4gC1rYgsTTaOMaC2o1odkEaPverNAOuoeoi679GmKQuI+jMKk7l6rFDBSikFc5R9jzahUb0Lk09xOuV7LKkJBTKxO3pBqHha0fdo0wTVe+EAqhfG5CRsQdXZx1J1+sNUHVsAmC9Lk6tBJSIxQsgInQHVeeEoqm/aRF4+IVB1ic5UXbc4VZOYQwNZmnx/LV3/CfTeiDgJ2D0VxQwJgccTolS3s5RA9d0INai6OFFncn3gIfn2zo/aI6oJeDxZMPnU6oRQiq46ZWyqPoRbtJLrk6yg6aktAK38BSSCACm88xACLVwdXU8/ywqaZkDQjaUAevhZdXZMmXbUzNR0TwV3Pb31Vdb3oBrN6lVjAZPKbqs0jMSUnvQkLMbVrI/cTwZE795y99lq1arlYkQXyYmcF8uudrMQlqtzA1IKZ0+YJrw9DtgsaLc4jXish7BNRsdasjSZ1CxwiwN1NBqRkFzdEBBhNZ2YydKkl6DZmAVsJ2GyNyDiGbOeqAlvuPuKRjtpz6DdBCO1JXVsYPRnavcX7l7itwm2YxOMLET1dlCRVApIJ2CkE0eIsjTJNlKzdVdfODijWLBxmzOWS9PJ1/wWVXil1oWDX5MGgpJVKUV1eqmwSeocI7NppUla3DJJZJc7G73cKYkgqjOCSA5RPUjeHk+rqH2541dSBXXFWK8CkVCiOpNPezxP+0rKL9IKDjP1OpAYwNShFO3xEt+LtD2W1vWfU4Cpc/OcYWoa+zHVeZosU1z/tYYWHGEszet0IFGGqnNYeHvsMxYUuvOhhXrU4ksNqm7EG7YOqA4CjBWFrvuOBRM4VaMWpAeqn5RWjG5jE3VuQZYA62+tHlABRJbKx4J0QETUNTXHWoojqkH6UYr2xQKcRdw9h4y1sBakDq81jGudBUwgzOLuBeOxgkXLrzlCfJK4IJhgzEZZQeMjRBUlaW2smhlMIBsLvvpwnw8+lQykZbdFaTBBWZ4m39+n1Q5dLVbRSwpgnGOyuUmgAfZA1ix0DgfGGeo1B55Ll2QtTmszA/0T4g1K70eGZ0e1qWeI+9/wI14GXYIlZv119roFjT2ePLj3qPn15tfAAJZarHU3+OSDndn7c+WMP1QRzD1UmX9eu2v+eU3/UVBUi4+Ch/BR0OL3UXA0mKVxsZSo1nvKzP/rD7B3Az/A/n3Pxsyeye9j97BM8GewZGyQLt6A4IQBQYYFzWiB//znXyeqLQ5QIj6JAcHEKU4ECCv+EUc8CH5nMFCCkHYyqDsHPT2iOKIARBbv6FkB8pCer3syo+q7/tXuUECI76vu4vFgf50ksDokUMISPYWo4/mo3Yu5OhJQQnhaNgFIUCSBObUqIG5HGaU6gYeuNwwYU9/VUIeK66imVCfztExm9DMWI2r2GdMpAxIKJjri+sS6JUBREuokCfTVz6n6hqa6jMMRVKGGPNHxMyYzF2uVGqNRLa4UEE4eMlgI87tqwD7ERx0CkCL2DL+tbiKpeYaQ9SZ7WCSrQo28rKVU893IamM6mRoWO3y2TIL7bGKmzGs2jyPqlxEh2JPHXjVxE0pAblZ4ifopUd+iagjljk/UjgeUrKS5JP9FUcn8Ey7/Drxer7akAAAAAElFTkSuQmCC) 50% no-repeat;
    background-size: 100% auto
}

.trans-black-bg {
    top: 0;
    left: 0;
    z-index: 1040;
    background-color: rgba(0,0,0,.5);
    transition: opacity .15s linear;
    overflow: hidden
}

.lifelines-m,.trans-black-bg {
    position: fixed;
    right: 0;
    bottom: 0
}

.lifelines-m {
    z-index: 99999;
    width: 190px;
    height: 190px;
    background: url(lifelines-ellipse.436768d0e804c490d5f9.svg) 50% no-repeat;
    background-size: 100% 100%
}

.lifelines-btn2 {
    position: absolute;
    bottom: 15px;
    right: 20px;
    width: 50px
}

.lifelines-body {
    overflow: hidden
}

.lifeline-btns {
    cursor: pointer;
    width: 50px;
    height: 50px;
    border: 3px solid #f8d450;
    border-radius: 50% 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -moz-transform: scale(1);
    transform: scale(1);
    background: #854dbe;
    background: linear-gradient(180deg,#854dbe 1%,#854dbe 40%,#5e3bad);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#854dbe",endColorstr="#5e3bad",GradientType=0)
}

.lifeline-btns,.lifeline-btns:hover {
    -webkit-transition: all .2s ease-in;
    -ms-transition: all .2s ease-in;
    -moz-transition: all .2s ease-in;
    transition: all .2s ease-in
}

.lifeline-btns:hover {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -moz-transform: scale(1.1);
    transform: scale(1.1)
}

.lifeline-btns img {
    width: 80%
}

.lifeline-btn1 {
    position: absolute;
    bottom: 15px;
    left: -20px
}

.lifeline-btn2 {
    position: absolute;
    bottom: 105px;
    left: 30px
}

.lifeline-btn3 {
    position: absolute;
    top: -15px;
    right: 15px
}

.lifeline-used {
    display: none;
    position: absolute;
    top: -3px;
    left: -3px;
    width: 50px;
    height: 50px;
    background: url(line.6bd7720525c66a2ae0eb.svg) 50% no-repeat;
    background-size: 100% 100%;
    -webkit-transform: rotate(140deg);
    transform: rotate(140deg)
}

.lifeline-used.used {
    display: block
}

.jio-logo {
    padding-top: 10px;
    width: 20%
}

.jio-logo,.kbc-logo {
    margin: 0 auto;
    text-align: center
}

.kbc-logo {
    position: relative;
    width: 40%
}

.sony-logo {
    left: 20%;
    width: 25%
}

.sony-logo,.sonyliv-logo {
    cursor: pointer;
    position: absolute;
    top: 8%;
    height: auto
}

.sonyliv-logo {
    right: 19%;
    width: 26%
}

.sony-logo img {
    width: 100%
}

.sony-logo2 {
    right: 21%;
    width: 15%
}

.sony-logo2,.sonyliv-logo2 {
    cursor: pointer;
    position: absolute;
    top: 28%;
    height: auto
}

.sonyliv-logo2 {
    right: 0;
    width: 16%
}

.sony-logo2 img {
    width: 100%
}

.digital-kbc {
    width: 30%;
    font-family: Constantia;
    text-transform: uppercase;
    margin: 5px auto;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    text-align: center;
    text-shadow: 2px 2px 2px #000
}

.login-btn {
    cursor: pointer;
    margin: 30px auto 0 auto;
    padding: 8px 25px;
    display: table;
    text-align: center;
    font-size: 20px;
    color: #573093;
    border: 2px solid transparent;
    text-transform: uppercase;
    text-decoration: none!important;
    border-radius: 25px;
    -webkit-border-radius: 25px;
    background: #fff;
    background: linear-gradient(180deg,#fff 0,#e5e5e5);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#e5e5e5",GradientType=0)
}

.login-btn,.login-btn:hover {
    webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    transition: all .3s ease-in-out 0s
}

.login-btn:hover {
    color: #fff;
    background: #573093;
    border: 2px solid #fff
}

.connect-with-txt {
    position: relative;
    display: table;
    margin: 10px auto 10px auto;
    font-family: ProximaNova-Semibold;
    color: #fff;
    font-size: 11px;
    text-align: center;
    text-transform: uppercase
}

.connect-with-txt:before {
    right: 100%;
    margin-right: 5px
}

.connect-with-txt:after,.connect-with-txt:before {
    content: " ";
    position: absolute;
    top: 48%;
    height: 1px;
    width: 80px;
    pointer-events: none;
    background: #fff
}

.connect-with-txt:after {
    left: 100%;
    margin-left: 5px
}

.bottom-btns,.bottom-btns2,.bottom-btns3 {
    width: 85%;
    margin: 10px auto 10px auto
}

.how-to-play-btn {
    cursor: pointer;
    padding-top: 13%;
    margin-right: 10px;
    float: left;
    width: calc(50% - 10px);
    background: url(data:image/png;base64,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) 0 0 no-repeat;
    background-size: 100% auto
}

.how-to-play-btn:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAABJCAMAAAA6wnJbAAAAe1BMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////NgkbwAAAAKHRSTlMAu0R3zIkQM2bdIe5Vq5j6A9GxSPQaB3g6JmCb6GFBKdalvuaBHOBaBpfrWgAABZRJREFUeNrtXG1z2yAMxhjwu+ukTZMlTZNubcf//4WrZIwc23jxsbvd1TwfWr8ARg+SQARgTux+y+3m14P+vnh6uW5luWML8UNu9FpwlRd2N57PQq8L4vjM7kFzzvT68Hls2F9xEJZMeU52z+z74nmXHKUVd5P8Lbk0KaPfiq0D6vhTIx7eZ1UnF22q+gdbEy71Q2spHzP29KIB1bqYAeSVBrw47eoR2fv1yNaIR9SLp8c5arZr8TNDqK2bnFekRrLVopFIzuvESLiAN2e2ZqRAQZGPNAoHfClbN5Cc69CroLHFbO2IsZ+eIOzEAt6AiCPrYQfORnzn+OBePAtwObsBWw/rG/FN4fKktX6j+0NwNgOXQ+NjCLY2DQsANBsItW/UZp2RwhRe+4oDcdZPFmDNiDzODoKFVxbQ4RF6ph1e7sHbsADCVWv9jlebECxMhA5XDDJBg9Y6MTENBV7mYkwqYgF9VGa8FwWTGiFt9aWBUGpBuJBEUSQnb9IqgyJljndl9AVlUzEEh4d5lz4i2BS5hLbKqmFrSZuuTgefJsTwPm5b/utqzwz2XzcVW4AcJrkalkBstSAbR0rHN2WmO9TKFK9LOwrnrYQgNw3Ob4CGXtvbDPISIk3IEvr0DdoqKDuxkJsWNFVZgAKHf2eYI/bnRuph5TM7wyrAeu1V7eYmyXQP0sWNLvJJbkqNiG2GiPJWyx3OEYWSXtyQnFEc1xmSo4At807pm6uS9W1KgKjGplSbt47jiITscSMgGaapJ7k5aYRozaLo/GgKn1BsCQwrb1CELzcJ1ikndahMK1Jzdsm1chZXESG5sEENccOp/CluFHAgbLa9oUQBSXu2DCXKAIUdfLmpgJpO6NSIBf+4NbfSiBU5i0v6M9ZKWEMgbsir8DE3WPoJ/1AWSfq7CAcQCL+Ue3KjOhp6lbKDBGBf4AN8ETuLIyFIx6a4iRzcCHieY9dCXHNu/NMyXMC40SOrhdwIboCKYJ7dKmRktQRqW7bvUaGc3ESQcCDqBDc59kD9jERFRsM1Y1VCoEUtxQcwivVtFnJDIBbkreFrIwSaWARPFGbN3Go4cEaSlKxTOWiONMNSxtyc2kqkveeCnPMyoAhPDAXw5WZgK6bMDNWkhndC6xKT1fPcMEI84oZQTnBTtM5BDQY2WIfFaCCfW2/8ucGWB4Y4XEoyGl9uapuRkHYKcqJ8YFVkUcv1xt/fGAczSGL+V2BZmCIjoxlzM3Ywlkm6oxHzmBvy82XPchV9chk+kJtP737KuscOtWla4L2IbU+GnsBdHGXrudyxv+H5MCMlFxHAGN1QF5f3U9har17c0Kh8GL5U8AUb7Wcg3kxxnHyDySuG45txRkcAcvLghsY3W1g94csN19TmSWGlSjWCU92T6eJI/iIhJdLl/dxk+hbKj5sjNrZ/PGVFyWLO01qThLlGkAvPXMURq7pOOY+7qGmemyxuwdu4JDJAB+zHzTuyknrH4XaIT0jtAMOm1oB6vrhU9yHUPDeE+NYCT3Djx80WhEDv8OLHDUIOpijoYUwdTTpfHE1SkDLfxY2y37HBbeLFzQuW0DzBvJ8/Nyyvi7a5037i2/BZOYojpK0CFnXOFnAT33ZqBVDrww1GZc0/nS/OOefMG9hP/09Q4BGH3xkm3c0+/D7l/H0KHZYIP8IMkNrhxnv4PXyAqx0g5Tqsoxito9AfxvOE9Tej9TdVWLflXLd1YAZRWO83XO8X1onesU6UVWF98c364lNYl+5elx72Mzj3M4R9MM59MGH/lHv/VNh359x3F/ZrOvdrhn2+zn2+YX/4sv3hdK7A2/pGgd25AoeZJJtwHkU4x4SgjhGdYzKPwyacf+NEk/7S68PnsbmPz/N6DiJbdt4WIpHrOXTLeU7bms/3Kz43s+f7/QHG00frQQFL6QAAAABJRU5ErkJggg==) 0 0 no-repeat;
    background-size: 100% auto
}

.leaderboard-btn {
    cursor: pointer;
    padding-top: 13%;
    margin-left: 10px;
    float: left;
    width: calc(50% - 10px);
    background: url(data:image/png;base64,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) 0 0 no-repeat;
    background-size: 100% auto
}

.leaderboard-btn:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAABJCAMAAAA6wnJbAAAAflBMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////vroaSAAAAKXRSTlMAu0R37swhEJneZVT3qjIXA4gp0cXaN4OyLkD8524KYhudXYVXk5FyrhKAKkgAAAWISURBVHja7Vx9e5sgEMegIho1JotJ2izN1u4l3/8LrsfbiQTHMp89zyq/P9qCnBy/HneAAPGirQ4/d+f17QNjfd7Vh6olf4btYXdbDHaHLQnFpvp0Wxg+vW3CmNnfFoj9W0BvMjaz+1b21wv5wLi0/cv3nbGd5jdGQ9eqYHklC0H7osxhfZjqWFdZ6vnLiSwKpy9raRGtv8hZlDhuyeKwPd4A597z/EmQl1ZkkaiEYaxXE9QkLVko2kSS46Xm24YsFpvvgpwn50GewoMfZNH4LJzK2N2yfaRGk7NndmYNmQeyeFDgobayvoqsBfsa20heCKIFZ7P70PODUFx24HJazPgCg+EFjvju4bS2etX2+T1JSQS6nF6njtCjorNR2ECvSlSiB6JWJELhSRgOuuZPJMIgMR7n+hzNxsYKpg6t9j376G2G2OvYBK7nM4kYTR32EMBhbLPYhYn7YDDGOckulZAIC0fZqZLYpVyUwmA2YD55kMBrkiSNSTXJAJ3OpZCiOtXp5wXNPXLDNM2xBGahwjUHlbuhtiwB5FihRlF6VAjCFiIVOcHUKjzsrwaBDoGdkoskQwks0tyVs9OdLoEoiUTFTVbBkC8t5lbIe0eFnoQCFo/F6sRxNm4qmaQoMUDp5QbRjUqYKrthFjfmm4l06nIDublHhUCHQw7vP14f5SYd96lCqpANJDJ4jpo5cpgWZfJhTmZWmqikktKCC3KU5eQ3iWpcoShVeFQIwCtwAxOGr49x48Y3Bq2CBjVjiZLLhrtymM6hDMUcTQm4IMF47izNdVBUJ7FClHRVCHfGBL5kPs3FDShUiB+OBOOQ7eUGo4NdQrWwBmoY6q3ZT6G14odTIZd/uioEAebfYni8nYubDErkYDyWBPoZNsnNyuEmlx2Uab+Dr+20e0tER6ZWhfjnPRWmgRUL5q+PcpOtFBpClOVzWa5ECYs4Vw6ZEI2shyUqkKlUDhFASpQ5leIpH6iInqi/q0IIWuBmDVTOFKegbZ3pGiiBvoG6cshEIZwllsCYR4dxWpmRbj9T3cdUSOFdwrnwsQqvweubF6gBXr+ZgRvT+5XquSNB/dwg+PjNHTOiCMWN9myd/O1GbI8KIZjZbkpl+dIBPMRN2jjjm4x5ueEqegsPxxxuCvI4N5cZ/Y0xaO0P+F1/U93zN8gMZfabqwSaqB2MXbX8lZpXlyNuktV9l/cW5m9mi1Po/TIziqtQAh/nKDfiuFKP7TezFMxay2oUkrHCjBG5IAv9Ta2sxqNCAPJ5xzf0ZqGwJVgm9PfH8EL8xhwnEtdaohHUA28WciyeY8x3VQhCP++4mN9sMCukZlJdPze5aLFjNzrwoyU0kJeBe7PRDVQsDAuuCkF4AW4grB3CuSmohFR3TxVKNc1MFGTwRYkEnSPIcZRDJig8sEt0qSIZGguZ78G50D47g5xEgkMeMgGcogeyVQjDQc/Df4Zyg3DjTY0Ga/5vidPLHDnkRrSHYglLjGXj6NwYO0OjQyuhOnS5KoTPw2H95jwDN0yaynCtorEkUkqmuMH2uDF8vEjBG5VOrdlKjdwg0Y4KYQBxXPf7S26odof47g4leF0yMsUNzgXtEhllJnQUqcwqTQ2FHQgYcmP0sVUIxRYk/q/14ny1WpF54XfFSfzO4P/OEL9PTX2fIvv/qFP9I3wG/xS/h09/D7/G7TcIDKV53H/jG6wc474t/76tuN/Pu98PR4Fxn6i91vLcx/3Fvv3FRdyX7t+XHs8zTJ5nwKzocgYf2+P5Kf/5qXjuzkNNeornNb3nNeM5X+8533g+POx8OOLEF3+vQOM3q3gfRdA9JovxO8N7TOL9N9b9NxnefxPvTfLdmxTv2/LetxXvaXv4njb3fj+ePt8+Ltbn3XHifr9fCaGSrqCemiIAAAAASUVORK5CYII=) 0 0 no-repeat;
    background-size: 100% auto
}

.how-to-play-btn2 {
    cursor: pointer;
    padding-top: 13%;
    margin-right: 10px;
    float: left;
    width: calc(50% - 10px);
    background: url(data:image/png;base64,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) 0 0 no-repeat;
    background-size: 100% auto
}

.how-to-play-btn2:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAABJCAMAAAA6wnJbAAAAe1BMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////NgkbwAAAAKHRSTlMAu0R3zIkQM2bdIe5Vq5j6A9GxSPQaB3g6JmCb6GFBKdalvuaBHOBaBpfrWgAABZRJREFUeNrtXG1z2yAMxhjwu+ukTZMlTZNubcf//4WrZIwc23jxsbvd1TwfWr8ARg+SQARgTux+y+3m14P+vnh6uW5luWML8UNu9FpwlRd2N57PQq8L4vjM7kFzzvT68Hls2F9xEJZMeU52z+z74nmXHKUVd5P8Lbk0KaPfiq0D6vhTIx7eZ1UnF22q+gdbEy71Q2spHzP29KIB1bqYAeSVBrw47eoR2fv1yNaIR9SLp8c5arZr8TNDqK2bnFekRrLVopFIzuvESLiAN2e2ZqRAQZGPNAoHfClbN5Cc69CroLHFbO2IsZ+eIOzEAt6AiCPrYQfORnzn+OBePAtwObsBWw/rG/FN4fKktX6j+0NwNgOXQ+NjCLY2DQsANBsItW/UZp2RwhRe+4oDcdZPFmDNiDzODoKFVxbQ4RF6ph1e7sHbsADCVWv9jlebECxMhA5XDDJBg9Y6MTENBV7mYkwqYgF9VGa8FwWTGiFt9aWBUGpBuJBEUSQnb9IqgyJljndl9AVlUzEEh4d5lz4i2BS5hLbKqmFrSZuuTgefJsTwPm5b/utqzwz2XzcVW4AcJrkalkBstSAbR0rHN2WmO9TKFK9LOwrnrYQgNw3Ob4CGXtvbDPISIk3IEvr0DdoqKDuxkJsWNFVZgAKHf2eYI/bnRuph5TM7wyrAeu1V7eYmyXQP0sWNLvJJbkqNiG2GiPJWyx3OEYWSXtyQnFEc1xmSo4At807pm6uS9W1KgKjGplSbt47jiITscSMgGaapJ7k5aYRozaLo/GgKn1BsCQwrb1CELzcJ1ikndahMK1Jzdsm1chZXESG5sEENccOp/CluFHAgbLa9oUQBSXu2DCXKAIUdfLmpgJpO6NSIBf+4NbfSiBU5i0v6M9ZKWEMgbsir8DE3WPoJ/1AWSfq7CAcQCL+Ue3KjOhp6lbKDBGBf4AN8ETuLIyFIx6a4iRzcCHieY9dCXHNu/NMyXMC40SOrhdwIboCKYJ7dKmRktQRqW7bvUaGc3ESQcCDqBDc59kD9jERFRsM1Y1VCoEUtxQcwivVtFnJDIBbkreFrIwSaWARPFGbN3Go4cEaSlKxTOWiONMNSxtyc2kqkveeCnPMyoAhPDAXw5WZgK6bMDNWkhndC6xKT1fPcMEI84oZQTnBTtM5BDQY2WIfFaCCfW2/8ucGWB4Y4XEoyGl9uapuRkHYKcqJ8YFVkUcv1xt/fGAczSGL+V2BZmCIjoxlzM3Ywlkm6oxHzmBvy82XPchV9chk+kJtP737KuscOtWla4L2IbU+GnsBdHGXrudyxv+H5MCMlFxHAGN1QF5f3U9har17c0Kh8GL5U8AUb7Wcg3kxxnHyDySuG45txRkcAcvLghsY3W1g94csN19TmSWGlSjWCU92T6eJI/iIhJdLl/dxk+hbKj5sjNrZ/PGVFyWLO01qThLlGkAvPXMURq7pOOY+7qGmemyxuwdu4JDJAB+zHzTuyknrH4XaIT0jtAMOm1oB6vrhU9yHUPDeE+NYCT3Djx80WhEDv8OLHDUIOpijoYUwdTTpfHE1SkDLfxY2y37HBbeLFzQuW0DzBvJ8/Nyyvi7a5037i2/BZOYojpK0CFnXOFnAT33ZqBVDrww1GZc0/nS/OOefMG9hP/09Q4BGH3xkm3c0+/D7l/H0KHZYIP8IMkNrhxnv4PXyAqx0g5Tqsoxito9AfxvOE9Tej9TdVWLflXLd1YAZRWO83XO8X1onesU6UVWF98c364lNYl+5elx72Mzj3M4R9MM59MGH/lHv/VNh359x3F/ZrOvdrhn2+zn2+YX/4sv3hdK7A2/pGgd25AoeZJJtwHkU4x4SgjhGdYzKPwyacf+NEk/7S68PnsbmPz/N6DiJbdt4WIpHrOXTLeU7bms/3Kz43s+f7/QHG00frQQFL6QAAAABJRU5ErkJggg==) 0 0 no-repeat;
    background-size: 100% auto
}

.leaderboard-btn2 {
    cursor: pointer;
    padding-top: 13%;
    margin-left: 10px;
    float: left;
    width: calc(50% - 10px);
    background: url(data:image/png;base64,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) 0 0 no-repeat;
    background-size: 100% auto
}

.leaderboard-btn2:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAABJCAMAAAA6wnJbAAAAflBMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////vroaSAAAAKXRSTlMAu0R37swhEJneZVT3qjIXA4gp0cXaN4OyLkD8524KYhudXYVXk5FyrhKAKkgAAAWISURBVHja7Vx9e5sgEMegIho1JotJ2izN1u4l3/8LrsfbiQTHMp89zyq/P9qCnBy/HneAAPGirQ4/d+f17QNjfd7Vh6olf4btYXdbDHaHLQnFpvp0Wxg+vW3CmNnfFoj9W0BvMjaz+1b21wv5wLi0/cv3nbGd5jdGQ9eqYHklC0H7osxhfZjqWFdZ6vnLiSwKpy9raRGtv8hZlDhuyeKwPd4A597z/EmQl1ZkkaiEYaxXE9QkLVko2kSS46Xm24YsFpvvgpwn50GewoMfZNH4LJzK2N2yfaRGk7NndmYNmQeyeFDgobayvoqsBfsa20heCKIFZ7P70PODUFx24HJazPgCg+EFjvju4bS2etX2+T1JSQS6nF6njtCjorNR2ECvSlSiB6JWJELhSRgOuuZPJMIgMR7n+hzNxsYKpg6t9j376G2G2OvYBK7nM4kYTR32EMBhbLPYhYn7YDDGOckulZAIC0fZqZLYpVyUwmA2YD55kMBrkiSNSTXJAJ3OpZCiOtXp5wXNPXLDNM2xBGahwjUHlbuhtiwB5FihRlF6VAjCFiIVOcHUKjzsrwaBDoGdkoskQwks0tyVs9OdLoEoiUTFTVbBkC8t5lbIe0eFnoQCFo/F6sRxNm4qmaQoMUDp5QbRjUqYKrthFjfmm4l06nIDublHhUCHQw7vP14f5SYd96lCqpANJDJ4jpo5cpgWZfJhTmZWmqikktKCC3KU5eQ3iWpcoShVeFQIwCtwAxOGr49x48Y3Bq2CBjVjiZLLhrtymM6hDMUcTQm4IMF47izNdVBUJ7FClHRVCHfGBL5kPs3FDShUiB+OBOOQ7eUGo4NdQrWwBmoY6q3ZT6G14odTIZd/uioEAebfYni8nYubDErkYDyWBPoZNsnNyuEmlx2Uab+Dr+20e0tER6ZWhfjnPRWmgRUL5q+PcpOtFBpClOVzWa5ECYs4Vw6ZEI2shyUqkKlUDhFASpQ5leIpH6iInqi/q0IIWuBmDVTOFKegbZ3pGiiBvoG6cshEIZwllsCYR4dxWpmRbj9T3cdUSOFdwrnwsQqvweubF6gBXr+ZgRvT+5XquSNB/dwg+PjNHTOiCMWN9myd/O1GbI8KIZjZbkpl+dIBPMRN2jjjm4x5ueEqegsPxxxuCvI4N5cZ/Y0xaO0P+F1/U93zN8gMZfabqwSaqB2MXbX8lZpXlyNuktV9l/cW5m9mi1Po/TIziqtQAh/nKDfiuFKP7TezFMxay2oUkrHCjBG5IAv9Ta2sxqNCAPJ5xzf0ZqGwJVgm9PfH8EL8xhwnEtdaohHUA28WciyeY8x3VQhCP++4mN9sMCukZlJdPze5aLFjNzrwoyU0kJeBe7PRDVQsDAuuCkF4AW4grB3CuSmohFR3TxVKNc1MFGTwRYkEnSPIcZRDJig8sEt0qSIZGguZ78G50D47g5xEgkMeMgGcogeyVQjDQc/Df4Zyg3DjTY0Ga/5vidPLHDnkRrSHYglLjGXj6NwYO0OjQyuhOnS5KoTPw2H95jwDN0yaynCtorEkUkqmuMH2uDF8vEjBG5VOrdlKjdwg0Y4KYQBxXPf7S26odof47g4leF0yMsUNzgXtEhllJnQUqcwqTQ2FHQgYcmP0sVUIxRYk/q/14ny1WpF54XfFSfzO4P/OEL9PTX2fIvv/qFP9I3wG/xS/h09/D7/G7TcIDKV53H/jG6wc474t/76tuN/Pu98PR4Fxn6i91vLcx/3Fvv3FRdyX7t+XHs8zTJ5nwKzocgYf2+P5Kf/5qXjuzkNNeornNb3nNeM5X+8533g+POx8OOLEF3+vQOM3q3gfRdA9JovxO8N7TOL9N9b9NxnefxPvTfLdmxTv2/LetxXvaXv4njb3fj+ePt8+Ltbn3XHifr9fCaGSrqCemiIAAAAASUVORK5CYII=) 0 0 no-repeat;
    background-size: 100% auto
}

.leaderboard-btn3 {
    cursor: pointer;
    padding-top: 13%;
    margin-left: 10px;
    float: left;
    width: calc(50% - 10px);
    background: url(data:image/png;base64,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) 0 0 no-repeat;
    background-size: 100% auto
}

.leaderboard-btn3:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAABJCAMAAAA6wnJbAAAAflBMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////vroaSAAAAKXRSTlMAu0R37swhEJneZVT3qjIXA4gp0cXaN4OyLkD8524KYhudXYVXk5FyrhKAKkgAAAWISURBVHja7Vx9e5sgEMegIho1JotJ2izN1u4l3/8LrsfbiQTHMp89zyq/P9qCnBy/HneAAPGirQ4/d+f17QNjfd7Vh6olf4btYXdbDHaHLQnFpvp0Wxg+vW3CmNnfFoj9W0BvMjaz+1b21wv5wLi0/cv3nbGd5jdGQ9eqYHklC0H7osxhfZjqWFdZ6vnLiSwKpy9raRGtv8hZlDhuyeKwPd4A597z/EmQl1ZkkaiEYaxXE9QkLVko2kSS46Xm24YsFpvvgpwn50GewoMfZNH4LJzK2N2yfaRGk7NndmYNmQeyeFDgobayvoqsBfsa20heCKIFZ7P70PODUFx24HJazPgCg+EFjvju4bS2etX2+T1JSQS6nF6njtCjorNR2ECvSlSiB6JWJELhSRgOuuZPJMIgMR7n+hzNxsYKpg6t9j376G2G2OvYBK7nM4kYTR32EMBhbLPYhYn7YDDGOckulZAIC0fZqZLYpVyUwmA2YD55kMBrkiSNSTXJAJ3OpZCiOtXp5wXNPXLDNM2xBGahwjUHlbuhtiwB5FihRlF6VAjCFiIVOcHUKjzsrwaBDoGdkoskQwks0tyVs9OdLoEoiUTFTVbBkC8t5lbIe0eFnoQCFo/F6sRxNm4qmaQoMUDp5QbRjUqYKrthFjfmm4l06nIDublHhUCHQw7vP14f5SYd96lCqpANJDJ4jpo5cpgWZfJhTmZWmqikktKCC3KU5eQ3iWpcoShVeFQIwCtwAxOGr49x48Y3Bq2CBjVjiZLLhrtymM6hDMUcTQm4IMF47izNdVBUJ7FClHRVCHfGBL5kPs3FDShUiB+OBOOQ7eUGo4NdQrWwBmoY6q3ZT6G14odTIZd/uioEAebfYni8nYubDErkYDyWBPoZNsnNyuEmlx2Uab+Dr+20e0tER6ZWhfjnPRWmgRUL5q+PcpOtFBpClOVzWa5ECYs4Vw6ZEI2shyUqkKlUDhFASpQ5leIpH6iInqi/q0IIWuBmDVTOFKegbZ3pGiiBvoG6cshEIZwllsCYR4dxWpmRbj9T3cdUSOFdwrnwsQqvweubF6gBXr+ZgRvT+5XquSNB/dwg+PjNHTOiCMWN9myd/O1GbI8KIZjZbkpl+dIBPMRN2jjjm4x5ueEqegsPxxxuCvI4N5cZ/Y0xaO0P+F1/U93zN8gMZfabqwSaqB2MXbX8lZpXlyNuktV9l/cW5m9mi1Po/TIziqtQAh/nKDfiuFKP7TezFMxay2oUkrHCjBG5IAv9Ta2sxqNCAPJ5xzf0ZqGwJVgm9PfH8EL8xhwnEtdaohHUA28WciyeY8x3VQhCP++4mN9sMCukZlJdPze5aLFjNzrwoyU0kJeBe7PRDVQsDAuuCkF4AW4grB3CuSmohFR3TxVKNc1MFGTwRYkEnSPIcZRDJig8sEt0qSIZGguZ78G50D47g5xEgkMeMgGcogeyVQjDQc/Df4Zyg3DjTY0Ga/5vidPLHDnkRrSHYglLjGXj6NwYO0OjQyuhOnS5KoTPw2H95jwDN0yaynCtorEkUkqmuMH2uDF8vEjBG5VOrdlKjdwg0Y4KYQBxXPf7S26odof47g4leF0yMsUNzgXtEhllJnQUqcwqTQ2FHQgYcmP0sVUIxRYk/q/14ny1WpF54XfFSfzO4P/OEL9PTX2fIvv/qFP9I3wG/xS/h09/D7/G7TcIDKV53H/jG6wc474t/76tuN/Pu98PR4Fxn6i91vLcx/3Fvv3FRdyX7t+XHs8zTJ5nwKzocgYf2+P5Kf/5qXjuzkNNeornNb3nNeM5X+8533g+POx8OOLEF3+vQOM3q3gfRdA9JovxO8N7TOL9N9b9NxnefxPvTfLdmxTv2/LetxXvaXv4njb3fj+ePt8+Ltbn3XHifr9fCaGSrqCemiIAAAAASUVORK5CYII=) 0 0 no-repeat;
    background-size: 100% auto
}

.stats-btn {
    margin-bottom: 5px;
    cursor: pointer;
    padding-top: 13%;
    margin-right: 10px;
    float: left;
    width: calc(50% - 10px);
    background: url(data:image/png;base64,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) 0 0 no-repeat;
    background-size: 100% auto
}

.stats-btn:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAABJCAMAAAA6wnJbAAAAh1BMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9qkf8RAAAALHRSTlMAu0R3EMwz7ohmmSHd96pVYQNJB/s6sSfoGPHXJM+B0y4cpo7hXMeua0GgcwXJ+LYAAAWPSURBVHja7ZzbYpwgEIZHBA9oXU3aJJs0h82xaX3/52sGWAeC7C62V5H/Jq4g4hcYGE4Q1G5TXdxffRu/rr5d3V9Umy1E6qG6Gdeim+oBTtZ5L8Z1Sbycwyka+udxfWr7AY7qx62J/f31qS+25/B1db4t+qfX76PWbXEs+pOJmr1sYR3avmSmMNwdLAiN0AZcXsKadCl1cyx2B+pTOaIef8La9LMbUVc/IKCzbyr8DNaosytVY84OoXnjsE7xizCcd4WmgtVqqBSc9xl7dI0hNaxZNSIoPWvLbxIagF8I4Z6DK1XZ/sDalSOGbqY0/Yak3wiid/qGaGzEV/YPTtW5QJOzBdIjGuh19YVDusTm+tHqD48fyiFpMjnkd2bohg6QhBpu0dV2is06PYU5McSxd6w6BSppr4wszg6HbN4haa8zbJl0U3WHfUFIIqGPcAeo++QszLgON6pBx+HAtQ5MzItjH+cB2/NkiT1dmP5elqrUbKXKAAZ0pSIGiLssy3Iwyj9+dIBqKmTcdhPl6iOo+PSjyCblDZBCAXXXYiarxopW6eQoD/iQ+UNS2WBSoJsoN/HDx9hSDfCAQ8Sx4z+NySte45u5pEmwDXUSGIDzg42WKiDNBmza6ZbkU7RMJ0eJ47X5Q0JyVp4YROpKGZwex4hje0YZXXbIqPW+LczGhzMfUNm32sJjU/LDbKT9e7PA4PQqC3cQoabcG6ja5JArNK3M80xn7BCbMkONVumD2YBcXWV5LnXq3GVjrohNhsKsCV2nGD2uno7TnfoXPSpCMcr3SErDodNAaPKvOMAm0/Fay/P3A0x1FY0zGOeywWjExqvIcorABGYoTi/qjYIcq5haVQFUJqeFPdLMBaZ6lA3UdAl+gOYtuG3jCo8N3gqyyayaxCBW6H6/wrMqwxEyMJiqBw0QI8t08GNs6BLlB3CytvTf8Ni0/DCbsl48woWpw7X+lOhaJQRZFsfW4X12lI20xqy9AKluCJi0wXCXja5oQTbGXpVdXsAC7fBZQCd8gEjh90+5H126lWIWZCMYStr1cCYgd9oxXYxcNkx9fB5kw8upjati6gW98JqSjlFh1ffPKeSH2ZDaUBsu9omQZtjoWlME2Lgdi+i6NeBTy8oNmH/aYjb6s4y8gNPYNKWy1yE2wGtamseWlBuyN5HP0mOC3k3m5xibMucwz0ZyMjBOnfvMBjYqus+GxDeV5tMtsTfx7ZRTWMh67tXozpvrwraOvdmYKCQTgHJTsV/hsaGus8+GVGQUI66dov7NYjaMTA+YjgkNfVAMqzmSFOa36I47YvttPhsuDrCpC7uML+rfvEX3i/3eqGU9pP4MU+Br6g8KC0GjIoXYEE5p0JT0PLHRIQE2GFTmlFS7qF/8hP7UcjaUQ1kzlrfqitr57ONmVRpMhCDH7AbZEOQ2Z6yWk+X22EAeZCNU670xr5eL/Kma/PClbFQaJMEnYqTOQkCuWIgN1RdqhWfZQBdg0zhvL5slfjiN3yxj4/clKjBipYWGOwgmf9VnQ6qcIYoAG94Gyk2Ted2F2PEbGvdbwoZk+hKlbOgez1tDhlkI6JPkYTbQSE1X1AAhNsCC7RQzj7cVXzbu9x/HixljXtHljLEClqthjP3j483S8eI0zxCeZ0jzU+H5qTSvGZzXTPPhR+bDm7SOwl9H8X1nLE+yxp4vdwFa72ndlr9uK633O7reD36kReneOlF3ffH6dpSdsr4YdmldursuPe1nCO5nSPtgQsbmLe2fCu2fuuFp311g3dX1TJvE0n5NvV8z7fON2OdLcJ7X6T3s94encwUizxVANbejove0rj1403kUzYnnmKzF7tjnmKTzb2LPvyEN9RrPTXruh9N49rfjuiT6iPpRpHPaANZ8vl/5jOf77SCkvzRqjz4lU2JyAAAAAElFTkSuQmCC) 0 0 no-repeat;
    background-size: 100% auto
}

.stats-btn2 {
    cursor: pointer;
    padding-top: 13%;
    margin-left: 10px;
    float: left;
    width: calc(50% - 10px);
    background: url(data:image/png;base64,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) 0 0 no-repeat;
    background-size: 100% auto
}

.stats-btn2:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAABJCAMAAAA6wnJbAAAAh1BMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9qkf8RAAAALHRSTlMAu0R3EMwz7ohmmSHd96pVYQNJB/s6sSfoGPHXJM+B0y4cpo7hXMeua0GgcwXJ+LYAAAWPSURBVHja7ZzbYpwgEIZHBA9oXU3aJJs0h82xaX3/52sGWAeC7C62V5H/Jq4g4hcYGE4Q1G5TXdxffRu/rr5d3V9Umy1E6qG6Gdeim+oBTtZ5L8Z1Sbycwyka+udxfWr7AY7qx62J/f31qS+25/B1db4t+qfX76PWbXEs+pOJmr1sYR3avmSmMNwdLAiN0AZcXsKadCl1cyx2B+pTOaIef8La9LMbUVc/IKCzbyr8DNaosytVY84OoXnjsE7xizCcd4WmgtVqqBSc9xl7dI0hNaxZNSIoPWvLbxIagF8I4Z6DK1XZ/sDalSOGbqY0/Yak3wiid/qGaGzEV/YPTtW5QJOzBdIjGuh19YVDusTm+tHqD48fyiFpMjnkd2bohg6QhBpu0dV2is06PYU5McSxd6w6BSppr4wszg6HbN4haa8zbJl0U3WHfUFIIqGPcAeo++QszLgON6pBx+HAtQ5MzItjH+cB2/NkiT1dmP5elqrUbKXKAAZ0pSIGiLssy3Iwyj9+dIBqKmTcdhPl6iOo+PSjyCblDZBCAXXXYiarxopW6eQoD/iQ+UNS2WBSoJsoN/HDx9hSDfCAQ8Sx4z+NySte45u5pEmwDXUSGIDzg42WKiDNBmza6ZbkU7RMJ0eJ47X5Q0JyVp4YROpKGZwex4hje0YZXXbIqPW+LczGhzMfUNm32sJjU/LDbKT9e7PA4PQqC3cQoabcG6ja5JArNK3M80xn7BCbMkONVumD2YBcXWV5LnXq3GVjrohNhsKsCV2nGD2uno7TnfoXPSpCMcr3SErDodNAaPKvOMAm0/Fay/P3A0x1FY0zGOeywWjExqvIcorABGYoTi/qjYIcq5haVQFUJqeFPdLMBaZ6lA3UdAl+gOYtuG3jCo8N3gqyyayaxCBW6H6/wrMqwxEyMJiqBw0QI8t08GNs6BLlB3CytvTf8Ni0/DCbsl48woWpw7X+lOhaJQRZFsfW4X12lI20xqy9AKluCJi0wXCXja5oQTbGXpVdXsAC7fBZQCd8gEjh90+5H126lWIWZCMYStr1cCYgd9oxXYxcNkx9fB5kw8upjati6gW98JqSjlFh1ffPKeSH2ZDaUBsu9omQZtjoWlME2Lgdi+i6NeBTy8oNmH/aYjb6s4y8gNPYNKWy1yE2wGtamseWlBuyN5HP0mOC3k3m5xibMucwz0ZyMjBOnfvMBjYqus+GxDeV5tMtsTfx7ZRTWMh67tXozpvrwraOvdmYKCQTgHJTsV/hsaGus8+GVGQUI66dov7NYjaMTA+YjgkNfVAMqzmSFOa36I47YvttPhsuDrCpC7uML+rfvEX3i/3eqGU9pP4MU+Br6g8KC0GjIoXYEE5p0JT0PLHRIQE2GFTmlFS7qF/8hP7UcjaUQ1kzlrfqitr57ONmVRpMhCDH7AbZEOQ2Z6yWk+X22EAeZCNU670xr5eL/Kma/PClbFQaJMEnYqTOQkCuWIgN1RdqhWfZQBdg0zhvL5slfjiN3yxj4/clKjBipYWGOwgmf9VnQ6qcIYoAG94Gyk2Ted2F2PEbGvdbwoZk+hKlbOgez1tDhlkI6JPkYTbQSE1X1AAhNsCC7RQzj7cVXzbu9x/HixljXtHljLEClqthjP3j483S8eI0zxCeZ0jzU+H5qTSvGZzXTPPhR+bDm7SOwl9H8X1nLE+yxp4vdwFa72ndlr9uK633O7reD36kReneOlF3ffH6dpSdsr4YdmldursuPe1nCO5nSPtgQsbmLe2fCu2fuuFp311g3dX1TJvE0n5NvV8z7fON2OdLcJ7X6T3s94encwUizxVANbejove0rj1403kUzYnnmKzF7tjnmKTzb2LPvyEN9RrPTXruh9N49rfjuiT6iPpRpHPaANZ8vl/5jOf77SCkvzRqjz4lU2JyAAAAAElFTkSuQmCC) 0 0 no-repeat;
    background-size: 100% auto
}

.stats-btn3 {
    cursor: pointer;
    padding-top: 13%;
    margin-left: 10px;
    float: left;
    width: calc(50% - 10px);
    background: url(data:image/png;base64,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) 0 0 no-repeat;
    background-size: 100% auto
}

.stats-btn3:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAABJCAMAAAA6wnJbAAAAh1BMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9qkf8RAAAALHRSTlMAu0R3EMwz7ohmmSHd96pVYQNJB/s6sSfoGPHXJM+B0y4cpo7hXMeua0GgcwXJ+LYAAAWPSURBVHja7ZzbYpwgEIZHBA9oXU3aJJs0h82xaX3/52sGWAeC7C62V5H/Jq4g4hcYGE4Q1G5TXdxffRu/rr5d3V9Umy1E6qG6Gdeim+oBTtZ5L8Z1Sbycwyka+udxfWr7AY7qx62J/f31qS+25/B1db4t+qfX76PWbXEs+pOJmr1sYR3avmSmMNwdLAiN0AZcXsKadCl1cyx2B+pTOaIef8La9LMbUVc/IKCzbyr8DNaosytVY84OoXnjsE7xizCcd4WmgtVqqBSc9xl7dI0hNaxZNSIoPWvLbxIagF8I4Z6DK1XZ/sDalSOGbqY0/Yak3wiid/qGaGzEV/YPTtW5QJOzBdIjGuh19YVDusTm+tHqD48fyiFpMjnkd2bohg6QhBpu0dV2is06PYU5McSxd6w6BSppr4wszg6HbN4haa8zbJl0U3WHfUFIIqGPcAeo++QszLgON6pBx+HAtQ5MzItjH+cB2/NkiT1dmP5elqrUbKXKAAZ0pSIGiLssy3Iwyj9+dIBqKmTcdhPl6iOo+PSjyCblDZBCAXXXYiarxopW6eQoD/iQ+UNS2WBSoJsoN/HDx9hSDfCAQ8Sx4z+NySte45u5pEmwDXUSGIDzg42WKiDNBmza6ZbkU7RMJ0eJ47X5Q0JyVp4YROpKGZwex4hje0YZXXbIqPW+LczGhzMfUNm32sJjU/LDbKT9e7PA4PQqC3cQoabcG6ja5JArNK3M80xn7BCbMkONVumD2YBcXWV5LnXq3GVjrohNhsKsCV2nGD2uno7TnfoXPSpCMcr3SErDodNAaPKvOMAm0/Fay/P3A0x1FY0zGOeywWjExqvIcorABGYoTi/qjYIcq5haVQFUJqeFPdLMBaZ6lA3UdAl+gOYtuG3jCo8N3gqyyayaxCBW6H6/wrMqwxEyMJiqBw0QI8t08GNs6BLlB3CytvTf8Ni0/DCbsl48woWpw7X+lOhaJQRZFsfW4X12lI20xqy9AKluCJi0wXCXja5oQTbGXpVdXsAC7fBZQCd8gEjh90+5H126lWIWZCMYStr1cCYgd9oxXYxcNkx9fB5kw8upjati6gW98JqSjlFh1ffPKeSH2ZDaUBsu9omQZtjoWlME2Lgdi+i6NeBTy8oNmH/aYjb6s4y8gNPYNKWy1yE2wGtamseWlBuyN5HP0mOC3k3m5xibMucwz0ZyMjBOnfvMBjYqus+GxDeV5tMtsTfx7ZRTWMh67tXozpvrwraOvdmYKCQTgHJTsV/hsaGus8+GVGQUI66dov7NYjaMTA+YjgkNfVAMqzmSFOa36I47YvttPhsuDrCpC7uML+rfvEX3i/3eqGU9pP4MU+Br6g8KC0GjIoXYEE5p0JT0PLHRIQE2GFTmlFS7qF/8hP7UcjaUQ1kzlrfqitr57ONmVRpMhCDH7AbZEOQ2Z6yWk+X22EAeZCNU670xr5eL/Kma/PClbFQaJMEnYqTOQkCuWIgN1RdqhWfZQBdg0zhvL5slfjiN3yxj4/clKjBipYWGOwgmf9VnQ6qcIYoAG94Gyk2Ted2F2PEbGvdbwoZk+hKlbOgez1tDhlkI6JPkYTbQSE1X1AAhNsCC7RQzj7cVXzbu9x/HixljXtHljLEClqthjP3j483S8eI0zxCeZ0jzU+H5qTSvGZzXTPPhR+bDm7SOwl9H8X1nLE+yxp4vdwFa72ndlr9uK633O7reD36kReneOlF3ffH6dpSdsr4YdmldursuPe1nCO5nSPtgQsbmLe2fCu2fuuFp311g3dX1TJvE0n5NvV8z7fON2OdLcJ7X6T3s94encwUizxVANbejove0rj1403kUzYnnmKzF7tjnmKTzb2LPvyEN9RrPTXruh9N49rfjuiT6iPpRpHPaANZ8vl/5jOf77SCkvzRqjz4lU2JyAAAAAElFTkSuQmCC) 0 0 no-repeat;
    background-size: 100% auto
}

.episode-btn {
    cursor: pointer;
    padding-top: 13%;
    margin: 0 auto 5px auto;
    width: calc(50% - 10px);
    background: url(data:image/png;base64,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) 0 0 no-repeat;
    background-size: 100% auto
}

.episode-btn:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAABJCAMAAAA6wnJbAAAAbFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8+T+BWAAAAI3RSTlMAu0R374gQIjLezVWZqwT3ZWFnG8qxSOjQvDrYeCj5oo/UgSfEySsAAAXlSURBVHja7VzrepwgEAURFG9xL8lumqZN4vu/Y5cjMMuqJKbJn8j5+jUI7ADHYcZRgC3iUMv719Pd8HNxdzrfy/rAVqKUT8NW8CSf2YfR7Y7DtnDcdR9kRg/bg/4IO7/Otvaf48uuPHTs56I7lDvpp8i5fK/6i635uFNsG1D1ozXNb1FFKM6jyrwUbEt4bkZ3fDxE5tMJVdptMWNQtBj56RdbwMMdyh/YFvFwwrx6iFFzvxU7cwt1v0xOBmok2yw6CXKymRmXm5Id2zL2hoK8mGgUYoQ92zZAzpNiITDZBNs6BPx0mLczeX9Zwt+JZTkYY3P8yfHBR9Edjck5MEJrDPT2nvjm8HwXzqBfydjcmByKO02wdU4zakR3NqF2oDbbjBTmkBk6XGDVgqgEh0eyOIc/l3TGEhwejGc6eOPzyhIIJkZ4Q+o1BQszocMTgkzzom+rLybmocwzzrOdUpwl3EaXwlrlniVcox89d2dCqaVwoeYXKCTLS4oBmcnELxT3SdbzAAwoJL9I123NAHkpKBmbXkA8QaLYoel9DYmUEvzS6ZyLq27vW230XxYTeaJeaCOCwniqjpUmtorVGUbZwjt6aYZr6TWQtjwAxtD4ywoscC+DLuiBi8BRTNClrcExxNwXSMWAWvusRk3k5WK2jRhOiBt2eGGxBO3HXmEKulRjU2h6gZuyuu5fuZ4bQl44bkANofJ3KyQStQmVWscNDM4Ocpf1SzopaghStdMqXPg5ZdjI7ZxSGqNqhKiQUO9yk3t9t8WVuYCYxnODglwKAfIE3RYuRIO6Wl3L05acaRsxvIGVNmqKayPYJwbPvvLEkdqR3gMtBfd1jkbi3NAvqZg00tcowPNodsaWSwy+oLptIK9oQC7lfQQ1xBzjAcNgi6XXEPL5sOL4b2aE5QA+3EVTsM9ywzSSqDFWrJxYcNRavaA3vqWXR4QVa7hB+H1kOuKmbMNiNC2Xf07ZheOWswaX0xHKoCPo+me54QE3t19elbt9VFlaebG8OJ7xZJxjhixCkCbX4w3DjXG09WhQz4yQQ81CgNbMoppwU7mi0G4XuO1edj4aEFmrq1+Gs4FTTyhv0kYMB/gYE4R3cU8/wFtzBRbBhS9RVuOn3KB0hhtC1E8Rj71Gi142OcR27+6evFEjqk15q/yUAjf4WQQaatKYiVMZTRDWsPmExN9Zbth/ckOor2TL0DcLTGrCDDdsNTcdfjHE9QY9EYahzCQlzRWNBDmO7+Qm9DJlk1PN7+EGehOxN9Tp1owf01ajGf+w4J8A+wk3ZE4+a288dD2x1qVoR35Ka0xCQTP2plpvb6J+ynnqXKAhZUhwbTb+QUqj5VtuGtxuwlo/RTwW8zWUyE0VZ6oBapdqU95KP6Xp/sa8uB7VliOFpMqHAMVt/2vrzwBV9Z/14ZMaSoTTnQWPn2VonYAeeeufbzD0XTxeBzJyESVyQ8jJCBE/WC98Sevsi7hpBl5QlT0KoBY+Dq1Ceeg1/8xz8Us0nqKoiQymdiPXHMCkyoP+U7jc9lkmcwSb73KjhUUf4aaGVJFle+70tUGvTFbjwlqS1+gw77dF/348BQW4ZzFUZNat0yDVJfYm9hJRFKFfE4dHuJFTdVVVkLefyAM1q+PwHqM8sRgkBY0co7R5ecBeO50ZpabO1eyLuGHiivKGuuigyxl5xafe38Tf+5FIConhwXPqGGVPZ3TPx/5Kxb6MG6aE1ZO2ponf2FBiP5HHZTnbxvvv/ZxF+zbACX+H1Ox2PMj6GuydjqYvvrPm5nf6PrX4faqEJU3fNWemlEZKpu/hM9/Df1ujnNZRTNZRDIe0/mYOj1ePw1lat7W4bovxtN7vZr0fT+tEl9eJpvXFi+uL07r02Lp0wj7tZ7jez5D2wcT3wRDUU9pa5vdPpX13i/vu0n7Nxf2aaZ/vin2+RI7eZvTg9oencwUWzxVI51EsnkeRzjFZPMcknX+z9vwbQrdP5yZF2Nmdh23huOvSOW2rzmnb8vl+uY6f7/cPGNI4T/DVwocAAAAASUVORK5CYII=) 0 0 no-repeat;
    background-size: 100% auto
}

.episode-btn2 {
    margin-bottom: 5px;
    cursor: pointer;
    padding-top: 13%;
    margin-left: 10px;
    float: left;
    width: calc(50% - 10px);
    background: url(data:image/png;base64,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) 0 0 no-repeat;
    background-size: 100% auto
}

.episode-btn2:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAABJCAMAAAA6wnJbAAAAbFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8+T+BWAAAAI3RSTlMAu0R374gQIjLezVWZqwT3ZWFnG8qxSOjQvDrYeCj5oo/UgSfEySsAAAXlSURBVHja7VzrepwgEAURFG9xL8lumqZN4vu/Y5cjMMuqJKbJn8j5+jUI7ADHYcZRgC3iUMv719Pd8HNxdzrfy/rAVqKUT8NW8CSf2YfR7Y7DtnDcdR9kRg/bg/4IO7/Otvaf48uuPHTs56I7lDvpp8i5fK/6i635uFNsG1D1ozXNb1FFKM6jyrwUbEt4bkZ3fDxE5tMJVdptMWNQtBj56RdbwMMdyh/YFvFwwrx6iFFzvxU7cwt1v0xOBmok2yw6CXKymRmXm5Id2zL2hoK8mGgUYoQ92zZAzpNiITDZBNs6BPx0mLczeX9Zwt+JZTkYY3P8yfHBR9Edjck5MEJrDPT2nvjm8HwXzqBfydjcmByKO02wdU4zakR3NqF2oDbbjBTmkBk6XGDVgqgEh0eyOIc/l3TGEhwejGc6eOPzyhIIJkZ4Q+o1BQszocMTgkzzom+rLybmocwzzrOdUpwl3EaXwlrlniVcox89d2dCqaVwoeYXKCTLS4oBmcnELxT3SdbzAAwoJL9I123NAHkpKBmbXkA8QaLYoel9DYmUEvzS6ZyLq27vW230XxYTeaJeaCOCwniqjpUmtorVGUbZwjt6aYZr6TWQtjwAxtD4ywoscC+DLuiBi8BRTNClrcExxNwXSMWAWvusRk3k5WK2jRhOiBt2eGGxBO3HXmEKulRjU2h6gZuyuu5fuZ4bQl44bkANofJ3KyQStQmVWscNDM4Ocpf1SzopaghStdMqXPg5ZdjI7ZxSGqNqhKiQUO9yk3t9t8WVuYCYxnODglwKAfIE3RYuRIO6Wl3L05acaRsxvIGVNmqKayPYJwbPvvLEkdqR3gMtBfd1jkbi3NAvqZg00tcowPNodsaWSwy+oLptIK9oQC7lfQQ1xBzjAcNgi6XXEPL5sOL4b2aE5QA+3EVTsM9ywzSSqDFWrJxYcNRavaA3vqWXR4QVa7hB+H1kOuKmbMNiNC2Xf07ZheOWswaX0xHKoCPo+me54QE3t19elbt9VFlaebG8OJ7xZJxjhixCkCbX4w3DjXG09WhQz4yQQ81CgNbMoppwU7mi0G4XuO1edj4aEFmrq1+Gs4FTTyhv0kYMB/gYE4R3cU8/wFtzBRbBhS9RVuOn3KB0hhtC1E8Rj71Gi142OcR27+6evFEjqk15q/yUAjf4WQQaatKYiVMZTRDWsPmExN9Zbth/ckOor2TL0DcLTGrCDDdsNTcdfjHE9QY9EYahzCQlzRWNBDmO7+Qm9DJlk1PN7+EGehOxN9Tp1owf01ajGf+w4J8A+wk3ZE4+a288dD2x1qVoR35Ka0xCQTP2plpvb6J+ynnqXKAhZUhwbTb+QUqj5VtuGtxuwlo/RTwW8zWUyE0VZ6oBapdqU95KP6Xp/sa8uB7VliOFpMqHAMVt/2vrzwBV9Z/14ZMaSoTTnQWPn2VonYAeeeufbzD0XTxeBzJyESVyQ8jJCBE/WC98Sevsi7hpBl5QlT0KoBY+Dq1Ceeg1/8xz8Us0nqKoiQymdiPXHMCkyoP+U7jc9lkmcwSb73KjhUUf4aaGVJFle+70tUGvTFbjwlqS1+gw77dF/348BQW4ZzFUZNat0yDVJfYm9hJRFKFfE4dHuJFTdVVVkLefyAM1q+PwHqM8sRgkBY0co7R5ecBeO50ZpabO1eyLuGHiivKGuuigyxl5xafe38Tf+5FIConhwXPqGGVPZ3TPx/5Kxb6MG6aE1ZO2ponf2FBiP5HHZTnbxvvv/ZxF+zbACX+H1Ox2PMj6GuydjqYvvrPm5nf6PrX4faqEJU3fNWemlEZKpu/hM9/Df1ujnNZRTNZRDIe0/mYOj1ePw1lat7W4bovxtN7vZr0fT+tEl9eJpvXFi+uL07r02Lp0wj7tZ7jez5D2wcT3wRDUU9pa5vdPpX13i/vu0n7Nxf2aaZ/vin2+RI7eZvTg9oencwUWzxVI51EsnkeRzjFZPMcknX+z9vwbQrdP5yZF2Nmdh23huOvSOW2rzmnb8vl+uY6f7/cPGNI4T/DVwocAAAAASUVORK5CYII=) 0 0 no-repeat;
    background-size: 100% auto
}

.login-with-btns {
    display: table;
    margin: 10px auto 30px auto
}

.facebook-btn {
    cursor: pointer;
    margin-right: 10px;
    float: left;
    width: 50px;
    height: 50px;
    font-size: 22px;
    color: #fff;
    background: #3b5998;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #fff
}

.facebook-btn,.facebook-btn:hover {
    webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    transition: all .3s ease-in-out 0s
}

.facebook-btn:hover {
    border: 2px solid #fff;
    box-shadow: 0 8px 5px 0 rgba(0,0,0,.3)
}

.gplus-btn {
    cursor: pointer;
    margin-left: 10px;
    float: left;
    width: 50px;
    height: 50px;
    font-size: 22px;
    color: #fff;
    background: #db4437;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 1px solid #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.gplus-btn,.gplus-btn:hover {
    webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    transition: all .3s ease-in-out 0s
}

.gplus-btn:hover {
    border: 2px solid #fff;
    box-shadow: 0 8px 5px 0 rgba(0,0,0,.3)
}

.play-now-btn {
    cursor: pointer;
    margin: 10px auto 10px auto;
    padding: 8px 25px;
    display: table;
    text-align: center;
    font-size: 20px;
    color: #573093;
    border: 2px solid transparent;
    text-transform: uppercase;
    border-radius: 25px;
    -webkit-border-radius: 25px;
    background: #fff;
    background: linear-gradient(180deg,#fff 0,#e5e5e5);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#e5e5e5",GradientType=0)
}

.play-now-btn,.play-now-btn:hover {
    webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    transition: all .3s ease-in-out 0s
}

.play-now-btn:hover {
    color: #fff;
    background: #573093;
    border: 2px solid #fff
}

.welcome-txt {
    height: 50px;
    text-align: center;
    color: #fff;
    font-size: 18px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.welcome-txt span {
    padding-left: 5px;
    font-family: ProximaNova-Semibold
}

.padaav-m {
    position: fixed;
    top: 0;
    right: 0;
    z-index: 1040;
    width: 100%;
    height: 100%;
    background: url(mobile-bg.24b084dc6850c5116ac3.jpg) top no-repeat fixed;
    background-size: cover;
    transition: opacity .15s linear;
    overflow-y: scroll
}

.padaav-box {
    margin: 0 auto 20px auto;
    width: 75%;
    height: auto
}

.level-title {
    margin-top: 10px;
    padding-bottom: 10px;
    font-size: 16px;
    color: #fff;
    text-align: center;
    text-transform: uppercase
}

.level-row {
    margin-bottom: 5px;
    font-family: ProximaNova-Semibold;
    font-size: 20px;
    color: #fff
}

.level-stops {
    color: #feda57
}

.level-row.active {
    background: #fff;
    color: #000;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    border: 2px solid #feda57
}

.level-number {
    width: 15%
}

.level-number,.level-prize {
    float: left;
    text-align: right
}

.level-prize {
    width: 85%;
    padding-right: 20px
}

.cleared {
    background: url(cleared.4d8dd48b1e4abf7c4070.svg) 33% no-repeat;
    background-size: auto 55%
}

.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12 {
    position: relative;
    min-height: 1px;
    padding-right: 5px;
    padding-left: 5px
}

.signup.formPage {
    margin: 20px 0
}

.signup.formPage .form-group {
    margin-bottom: 10px
}

.form-control {
    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    border: 0;
    display: block;
    font-size: 15.97px;
    width: 100%;
    height: 49px;
    padding: 6px 12px;
    line-height: 1.42857143;
    color: #333;
    border-radius: 0;
    background-color: #fff;
    background-image: none;
    -ms-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

.dob label {
    font-size: 12px;
    color: #fff;
    line-height: 48px
}

.dob input {
    text-align: center
}

div.checkRadioContainer>label {
    padding: 13px 0!important;
    font-size: 13px!important
}

div.checkRadioContainer>label>span {
    display: inline-block!important;
    vertical-align: top!important;
    line-height: 2em!important
}

div.checkRadioContainer>label {
    cursor: pointer!important;
    color: #054292!important
}

div.checkRadioContainer>label>input+i {
    visibility: hidden;
    color: green!important;
    vertical-align: top!important;
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transform: translate(0);
    transform: translate(0)
}

.visible i {
    visibility: visible!important
}

div.checkRadioContainer .female,div.checkRadioContainer .male,div.checkRadioContainer .others {
    margin: .5em 0 0!important
}

div.checkRadioContainer>label>input {
    visibility: hidden!important;
    width: 1px
}

.parent {
    position: relative
}

.signup.formPage .signup-accept {
    margin-top: 10px;
    margin-bottom: 20px
}

.signup.formPage .signup-accept p {
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0
}

.signup.formPage .signup-accept p a {
    color: #fff;
    font-weight: 700;
    text-decoration: underline
}

.btn {
    line-height: 36px;
    height: 50px;
    font-size: 14px
}

.g-recaptcha {
    margin: 20px auto;
    display: table!important
}

.congrats-m {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1040;
    width: 100%;
    height: 100%;
    background: url(mobile-bg.24b084dc6850c5116ac3.jpg) top no-repeat fixed;
    background-size: cover;
    transition: opacity .15s linear;
    overflow-y: scroll
}

.congrats-content {
    height: 44%
}

.play-again-content {
    height: 20%
}

.congrats-content h2 {
    text-align: center;
    color: #feda57;
    text-shadow: 2px 2px 5px rgba(0,0,0,.8)
}

.congrats-content p {
    font-family: ProximaNova-Semibold;
    text-align: center;
    color: #fff;
    font-size: 16px;
    text-shadow: 2px 2px 5px rgba(0,0,0,.4)
}

.congrats-content p span {
    color: #feda57
}

.whatsapp-btn {
    cursor: pointer;
    margin-left: 20px;
    float: left;
    width: 50px;
    height: 50px;
    font-size: 22px;
    color: #fff;
    background: #1ebe35;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 1px solid #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.whatsapp-btn,.whatsapp-btn:hover {
    webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    transition: all .3s ease-in-out 0s
}

.whatsapp-btn:hover {
    border: 2px solid #fff;
    box-shadow: 0 8px 5px 0 rgba(0,0,0,.3)
}

.mail-btn {
    margin-left: 10px;
    float: left;
    width: 50px;
    height: 50px;
    font-size: 22px;
    color: #fff;
    background: #db9037;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 1px solid #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.play-again-btn {
    cursor: pointer;
    margin: 0 auto;
    padding: 8px 25px;
    display: table;
    text-align: center;
    font-size: 20px;
    color: #573093;
    border: 2px solid transparent;
    text-transform: uppercase;
    border-radius: 25px;
    -webkit-border-radius: 25px;
    background: #fff;
    background: linear-gradient(180deg,#fff 0,#e5e5e5);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#e5e5e5",GradientType=0)
}

.play-again-btn,.play-again-btn:hover {
    webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    transition: all .3s ease-in-out 0s
}

.play-again-btn:hover {
    color: #fff;
    background: #573093;
    border: 2px solid #fff
}

.home-btn {
    z-index: 999;
    cursor: pointer;
    position: absolute;
    top: 10px;
    left: 10px;
    width: 35px;
    height: 35px;
    background: url(data:image/png;base64,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) top no-repeat;
    background-size: 100% 100%
}

.home-btn:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD8AAAA/CAMAAABggeDtAAAAhFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8g2+bRAAAAK3RSTlMA8gW85fgeci0KwrRVh8hgrw3eWlcg7aGqn2WRMZNDz35O2KBvO5ZNFyLvHUrSNwAAAoBJREFUSMe1V+uWqiAUBpQ0zUzHHLXLNN2mc3z/9zsg2ZY2SpzVfD9ay+CDfWdvMga2LQ515UVeVR+KLSNOWAcxbYfgXvDnVTJLl60Jy+YVKeZnv7/zuKp3ya5eHXmr4AdzG32h2DwOBjqz8BxzdcJiWm/vLmmGlrJGaeXNJi6n3Y79yPK+O52OipB0En5PaZfLLYnZ7J9y7ZpNW3cjN52Ygb5Cso3rGOMD5O1+SOwIpYcqk+75mryCWY5tsJC3A91ygJRA03RNhe4gvA3hX7F9GAfSseA3O35kmMBnIT43xAXSjenDqUKf3JgZrOZVZoyDXNirpwRj0mdSr6/bmAbB/RJfKYNw+2olcjCsbjJfRVEq9uxNbjq2CuWFYFweFohEwprjrAcvCIZI56jzvToInV8+6KAqQIk9U9bjGc512mq4MuQCro6NRToh+gdvnxAjBysiowbpzqbyq/lRCU4ZCcVSiJIRA/tRMrcydrmuG7u2ZtCLvo9Lwx9EhOl/V+0YuF6eRHglsu6sUMyOohluFRXvU/1ocTkFOtx6ElfL/bvhn+Ukv3pKYk9Gb6J7vkzHLk828yc3Reh+kmUzq/BwP+gPsPNBf7C/gU/LDhzzwf7gf8z/UN8R8JH/If5c+BB/EP8ufIh/yD8XPuQf5L8zXxGh/tj5uP6g+mfh4/oH9dfOR/UX1X8rH9d//P7cev63ntI+fn/M79/pXjHvZi1UAPMAvX/o/bUAvb/w/u/+7/0HDS2tG2qXvPf0P6CBP3Pqv97Z/7n3n+y9/S/033OH/tu5//+B/v+N8wdgHdnnn+k5MO3nr7N5/mqIBVlgmf+sYI1l/vy9+RfP30vL/P0PMmyyu2DaUQoAAAAASUVORK5CYII=) top no-repeat;
    background-size: 100% 100%
}

.back-btn {
    z-index: 999;
    cursor: pointer;
    position: absolute;
    top: 10px;
    left: 10px;
    width: 35px;
    height: 35px;
    background: url(data:image/png;base64,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) top no-repeat;
    background-size: 100% 100%
}

.back-btn:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD8AAAA/CAMAAABggeDtAAAAk1BMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ROyVeAAAAMHRSTlMAINsE5eCzcTDw0Av2HbyTKRSfh2CtVefALE4I6sbyuVf5on6pD8qedGZjQ1iORDorcoerAAAChUlEQVRIx7VXbXeqMAwu7zBqnSgOXxCnbm7T7fL/f91trNcCgYaee9YP7oz0eZqkSZqwoeXF+2N2EoU4Zcd97DGr5XyEu7q5uPhwxoI3X2Xdt8qvzQh0Gvn3/a9umE3n0yx0X+9f/Cil4EtfYcOoYbMXR6Hi8Jdmu8Vt1/vnGxK9fb7fZMIxHJ7AjuJnQPxTgDgZVGEO4mBt0G8dwJZ5/4VnIJumZu9OYVPm9cDzpm6EjSEmOIB3V4xeK7ihU5/trjMuOF3sgyWcPgSfnBIePjcIQINlizKRtg8p//xyu7YGwQq2N0+r5Ia1Cd4xeQ2BpP/dw8UR8Npvfv2WHxaPS5X2uBsCXrutHJU+fPkXKhFoT8Hrb8Y6FkR3Lnm8IOFPnZQS0iKl80JKLyR81pH9eXhAZlVpCYdVykyFvw4QWcOV2o7yHk/t4SzlyoOhTKc++NYIfwC9HdBYw5XiO4/FckeMk5SGKyTELves4bA8Do4/yi1WcL2eoAzIqpd3FRsHZ7LiHeAn68B34+Dq6AqlbjUSzmQtrliBahkn4bpmFj3nP9R3J4w+H9sf1jSBth9+cOhpAsL/fffvBCSBvv8rxB9BYIg/Hf/WBAqp8s+SQOefzn9rAgCi+kMR4Pqj6x9NgOufrr80Aa6/qP5TBLj+6/eHJsDvj37/SIIZfv8a72+QUgTnlvMD9f6S778m2LZSt31pAhoagoB32qUC9T9mgsrQ/6j+ayBOJzcCHusP0H9dx/d/s/OWV7Gh/7PvP3Pvv/tfRHAY3X8fvF/o/yGOEhCLy4D4IkCcXA2tdUHOP4W5SV/4KtjQ/MVVE7uwmv/Ocv47E/Ofzfz5u/Mvnr9zUYrcOH//BVCZqrbDhSzRAAAAAElFTkSuQmCC) top no-repeat;
    background-size: 100% 100%
}

.leaderboard-title {
    padding-top: 20px;
    font-family: ProximaNova-Semibold;
    font-size: 15px;
    color: #fff;
    text-align: center;
    text-transform: uppercase
}

.first-rank {
    padding: 5px;
    margin: 10px auto 10px auto;
    width: 95%;
    box-shadow: 3px 3px 15px 0 rgba(0,0,0,.5)
}

.leaderboard-m {
    margin: 0 auto
}

.first-rank-title {
    color: #d4d4d4;
    text-align: center;
    font-size: 10px
}

.first-rank-name {
    margin: 0 0 5px 0;
    color: #fff;
    font-size: 16px;
    line-height: 18px;
    text-align: center
}

.add-star {
    color: #feda57
}

.first {
    margin: 0 auto;
    width: 35px;
    height: 35px;
    font-size: 16px;
    background: url(polygon.4a2e11e5776cdeac22e3.svg) 50% no-repeat;
    background-size: 100% 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.first,.first-rank-no {
    color: #fff;
    text-align: center
}

.first-rank-no {
    font-size: 18px
}

.leaderboard-list {
    padding: 10px 0;
    margin: 0 auto;
    width: 90%
}

.lead-m {
    margin-bottom: 15px;
    position: relative;
    padding: 5px 10px;
    background: hsla(0,0%,100%,.3);
    border-radius: 20px;
    -webkit-border-radius: 20px
}

.lead-rank {
    position: absolute;
    top: -5px;
    left: -5px;
    width: 40px;
    height: 40px;
    font-size: 16px;
    color: #fff;
    background: #4a2862;
    border: 2px solid #feda57;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    box-shadow: 0 0 10px 0 rgba(0,0,0,.5);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.lead-rank2 {
    position: inherit!important;
    top: inherit!important;
    left: inherit!important;
    float: left!important;
    background: none!important;
    color: #4a2862!important;
    border: none!important;
    box-shadow: none!important;
    min-width: 40px!important;
    width: auto!important;
    height: auto!important;
    padding-left: 2px!important;
    border-radius: inherit!important
}

.lead-name {
    padding-left: 10%;
    float: left;
    font-family: ProximaNova-Semibold;
    width: 60%;
    text-align: left;
    font-size: 14px;
    color: #fff
}


@media screen and (max-width: 500px)  {
.lead-name {
    padding-left: 9%;
    float: left;
    font-family: ProximaNova-Semibold;
    width: 55%;
    text-align: left;
    font-size: 14px;
    color: #fff
}

}

.lead-name2 {
    padding-left: 4%!important;
    width: auto!important
}

.lead-point {
    float: right;
    width: 25%;
    text-align: right;
    font-size: 14px;
    color: #fff
}

.lead-m.active {
    background: #fff
}

.lead-m.active .lead-rank {
    border: 2px solid #fff
}

.lead-m.active .lead-name,.lead-m.active .lead-point {
    color: #4a2862
}

.tnc-m {
    margin: 15px 0 10px 0;
    padding: 15px 10px;
    color: #fff;
    height: 61%;
    background: rgba(0,0,0,.25);
    overflow-y: scroll
}

.tnc-m a {
    color: #fff;
    text-decoration: underline
}

.tnc-m h2 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 18px;
    text-align: center;
    padding-bottom: 15px
}

.tnc-m p {
    font-size: 13px;
    display: block;
    padding-bottom: 10px;
    line-height: 18px;
    text-align: justify;
    font-family: ProximaNova-Semibold!important
}

.tnc-m h3 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 14px;
    display: block;
    padding: 10px 0 5px 0
}

.tnc-m ul {
    display: block;
    padding: 3px 10px 15px 10px
}

.tnc-m ul li {
    display: block;
    font-size: 13px;
    line-height: 18px;
    padding-bottom: 5px;
    font-family: ProximaNova-Semibold!important
}

.accept-btn {
    cursor: pointer;
    margin: 0 auto;
    width: 150px;
    height: 9%;
    background: url(data:image/png;base64,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) 50% no-repeat;
    background-size: 100% auto;
    display: table;
    outline: none;
    border: none
}

button[disabled].accept-btn,button[disabled].accept-btn:hover {
    opacity: .65;
    cursor: not-allowed;
    background: url(data:image/png;base64,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) 50% no-repeat;
    background-size: 100% auto
}

.accept-btn:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPMAAAA2CAMAAAAlDV8KAAAAbFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8+T+BWAAAAI3RSTlMARLvuEXcQzTMimWaI792qVQT2mBxR5Wk5LdoLXK0VsbjFpB//kTEAAAUQSURBVGje5ZrbYpswDIZlbGPOgZzbdFlWv/87DkmAYBza7Gpz/pv6hO3PlmWFAktq0qsKQddjA9/R7XRwPhjtXaG+4n477H1oOts7rOv46YPUvohhRZf9sDQuCkFOD0Bq+SD/7KoLFUMoup+ykrGKZsGu2XO5UwNh6XY5E9mP2wz5nQz/EhoxURcE/fiDLSZkl0KYup5ppyfQTYRlP28QqvjkFjBSQcgh2nWvO0GfpOAN879CRgY4onmf5UZymD1C2Lpi9JH1uQ/e9tBlEfON0w367B0EL+L8wekT8od6S3USUD7CeE8d4BXk+vvqyGb+CsrRV2PigvcUvIRu6LqvAIA/pyy8hn4wa6NXTNsopcSzKWttMlTV1uZUl6pObV3Spaj5IOkibR8yMFGaW1sPZYm1VnUV/YMxJhIlw1ABlsR9w5jLSNhiPKlBcis/OAYr166zrE9rj4oSIi48KTPciKvQF7KqGsAPspP4VtdjYn5CcxNVSQ77dYZKsQdsx4q4AEuyfpaKy0jYYjKpqVL87Qhw4rq5aAq8B5nvpFto4/qcMzNmlpox0+QztfMVDEp03yZj/yI56ne3zezt88xQ0m0l2ynqBiulX20NJLsWE2DHO1m36AVWWTYjmgemdjhbTLStxbaxJXUqZ6ciwzF5i15DghAp52w3bdsxk2076j0ZMftkhVkmtXhbXeGw5MJ4b+uWrluchMuQvC00NOco74Yk0Tz6fmX88T2RGjcqsn3wl0SKVtJyznvdb5Vi5nHvY+YyXmVWG07sg5hzmMkg745g1cQQ7Kj5E8x4lJymtxLSXDLQDieLreg8t/DxBrNjvqeYifYCn0QuEpgCcqK1aHvjqRrJydGZ2vac2Tg6IWNKJxklP+hrBMAxEWqDOcGj9+x5LtCq15gd7ULpSyPLJmP3WvVhwizI7AIzrpTqgUSSjII+rlhnJq9X/w3zim0nvAsZ1k2teccmKcyZReWTu2oO5bzL0dPng5noiQ+X85P3zARVrDLT7MpsmfnAk1q2bSZf8mBVFEUV9pEMkzdMabvc/DyLsxTmnqnGoVzlrSyeko6012boJqF++Y7cYI4dW5WcjPg7PuwEl6W7ypR+UApVt9HGRQpSNFHC0Fm66MOWmFXPMKABbTsltDVYlfXF1TBtt8kMacnMwD6cN2SVWe6q0+wnBg9cRqgKV1BhgFArW7V/+LQUShV0kYptbzOn9KjhHmSNtFV1Rjet0W3znHNqmHaqN5mhJmYy2fe2K7TcdMu2G1ykO4VjZQNTRf1INQWmuURe46gsG7uLTWaqrCI9eeEqAV1OZiM52ap6mxkKZo5LCfvWfZgE2mfc7nlYmg4RaA0UgslVU9NkqxyeYDa0UjvlmIllK3pUdS00NUkm936xzQyOG8YHj3rPYZP50r0d2snab2kSyRmJKb+WPGNmhemkMFEK/lrJN+b06CzhA9cHXkL3fWfAMSYUvIKs57CDjfsnvICa8+ARr568WPi6IGjMafcabwFjPXqprZD/AqErw8v5zml+9bkP/RX3SeJY1FHjfWUgZL3tkbGZvgP1LpzPhRaQ9cyWDwQd7r+grxoBP2D+Qck51NDksvcLEfaNoP0hRPtOH16QJ9A7qtBFaAb+lu2JzC5Ho6zIqlBc+FEVjqHK08pBf/eD9H+sspfgRKvW21jtQ9T7afuD0IA+0u/0+Pqz3fTy6UL5WF+77OMO31U8lvlXFD8nWNZvc1p4VyLwtN0AAAAASUVORK5CYII=) 50% no-repeat;
    background-size: 100% auto
}

.notification-div {
    z-index: 9999;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

div {
    -webkit-transition-property: all;
    -webkit-transition-duration: .2s;
    -webkit-transition-timing-function: ease;
    -webkit-transition-delay: 0s
}

.wrapperOutside {
    display: table;
    width: 100vw;
    height: 100vh
}

.wrapperInside {
    display: table-cell;
    text-align: center;
    vertical-align: middle
}

.dialogContainer {
    width: 280px;
    height: auto;
    -webkit-box-shadow: 0 -2px 25px 0 rgba(0,0,0,.15),0 13px 25px 0 rgba(0,0,0,.3);
    background-color: #fff;
    padding-top: 0;
    padding-left: 0;
    padding-right: 0;
    padding-bottom: 0;
    margin-top: 0;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0
}

.dialogContent {
    width: auto;
    height: auto;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    padding-top: 21px;
    padding-left: 24px;
    padding-right: 24px;
    padding-bottom: 12px
}

.dialogContent,.dialogContentTitle {
    background-color: #fff;
    margin-top: 0;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0
}

.dialogContentTitle {
    font-weight: 500;
    font-size: 20px;
    color: rgba(0,0,0,.8);
    padding-top: 0
}

.dialogContentBody,.dialogContentTitle {
    font-family: Roboto,sans-serif;
    line-height: 24px;
    text-align: left;
    letter-spacing: .03px;
    padding-left: 0;
    padding-right: 0;
    padding-bottom: 0
}

.dialogContentBody {
    font-weight: 400;
    font-size: 16px;
    color: rgba(0,0,0,.5);
    padding-top: 14px
}

.dialogActionBar,.dialogContentBody {
    margin-top: 0;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0
}

.dialogActionBar {
    width: auto;
    height: 48px;
    background-color: #fff;
    text-align: right;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px;
    padding-top: 0;
    padding-left: 16px;
    padding-right: 15px;
    padding-bottom: 8px
}

.buttonTouchTarget {
    display: inline-block;
    background-color: transparent;
    -webkit-tap-highlight-color: rgba(0,0,0,0)
}

.buttonFlat {
    cursor: pointer;
    display: inline-block;
    height: 36px;
    background-color: rgba(9,9,9,0);
    font-family: Roboto,sans-serif;
    font-weight: 500;
    font-size: 14px;
    color: rgba(33,150,243,.9);
    line-height: 36px;
    text-align: center;
    letter-spacing: .4px;
    padding-top: 0;
    padding-left: 8px;
    padding-right: 8px;
    padding-bottom: 0;
    margin-top: 6px;
    margin-left: 4px;
    margin-right: 4px;
    margin-bottom: 6px
}

.buttonFlat:hover {
    background-color: rgba(0,0,0,.2);
    -webkit-tap-highlight-color: rgba(0,0,0,.2)
}

.how-to-play-m {
    margin: 15px auto;
    width: 100%
}

.how-to-play-m img {
    width: 100%
}

.how-to-play-footer {
    width: 100%;
    height: 65px
}

.htp-btn-grid {
    float: left;
    width: 33.33%;
    height: 65px
}

.prev-btn {
    cursor: pointer;
    margin-left: 20px;
    float: left;
    width: 40px;
    height: 65px;
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABRCAMAAAC+CuvRAAACQ1BMVEUAAAD3lkn3lkn4lkn3lkn3lkn7q1H3lkn3lkn3lkn3lkn3lkn4mkr6qlH6pk/3k0j3lkn+wVn3k0j6qFD3lkn2kEf+v1j3lkn2kEf9vVj5ok32kEf/xFv+wFn/xVv5n0z2j0b/xVv3lEj7rVL6pk/3kkf8uFb2jkb7rlL2j0b/xlv2kUf+wVn/xFv9vVj3lkn3l0n+vlj9uVb5pE75oU3+xVv1jUb+wlr9vFj+xVv4m0v9vlj3lUn+wlr9uFb4mkr9vVj3lEj8tVX4nkz2kUf+w1r2jUb6qlD2jkb/xVv+v1n6qVD2kUf2kEf8slT4nkz+xVr7sFP5o076q1D/x1z+w1r7r1L2kUf4n0z4nkz3lkn7r1L+xlv2jkb9uVf/yFz7slT2kEf7rVH6pk/9uFb7r1L5pE77s1T/yV37sVP1jUX9ulb7sFP5pk/5oEz4mkr5pk/1jUX6pk/5pU/+xVv6pk/+w1r2kEf6qVH4nEz5oU36q1H6qFD4oU36p0/3lEj6qVD3mUr6qVH2jkX+x1v5pU/8uFb8tFX7r1L5pE7+wlr8tlX2kUf4n036qlH+w1r9vlj2kUf6q1H9vlj5oU33mEr9u1j7slT6rFH6rFL1i0X7rlL7rlL9vFf3lkn2j0b2kEf+xFv3mEr3k0j4nkz9vVj8t1b7slT5oU3+wVn4m0v/xVv8tVX1jkb7rlL6q1H6qFD9u1f+w1r5pE/7sFP2kkf5pE75p0/+wlr9v1j9ulf5n038tFT6qlH4mkr/x1v9uFar/jSaAAAAnnRSTlMAd7tE7yED3WaZVRQRCgYyiCAdAapgK8yzVRz2rpNxcXEvLSkf8ebm2dGzn4dXTk4oIx8P9/b08fHl5eTk4ODf3dzIyL28ubGuoaGTkohyZWAwMA3z6t/e3dDQz8HBv7m0oZ+fYvr6+PXy7uno6Ofn39zb2NDPyMfDv7y7u7Srp52UiIV+fnFmV1dDQzojCfDp6ejg3r+7s6yqqH59MD3L2zUAAAVySURBVFjDlNT3TxNRHADwF4X+gAEsBAKyMYwCMsLeW8reiQtZDlwY95Yo7oFGExON9t3rdV2vR0tp6bCAf5qv7V3puHeF709395JPvvcdDxBDNv7u98LPJw+fPl98/X4iARw4qkbmrths6+vmbYvF4tjcNNQ8zvl8ECDhQpfHo9f7jW2LAxtbBsNfTffofrOJf1OoM3n02LhY3Lcw+HJwse/OJZ+h0TTlxO+HSC/U6Uwmz+W5kXHZXm0mcp7VYMRobIqLKsh/uP/pdLqut9URR9Wj3Rrjzo76UGyUJBo23G7d+Y+E48OPsKGOkUoluUyr3XC3lQNyVLSr1SrV0WTiQAxosZEVL13xF9hQlcoIRKZLq21IB9EiLgYjaaJdTh5gXNrmPyB65LeoaHpF7HfKGJerQw72E7GdNE0Pi3SEYZhmEpG0UpCRVhn03kLT9ojuyOudTH0qgai8qaIpeDUIyS+g7QXhc9LrZJhyIqH2Gtyv4B7b7VRPaElOWJ1MFolYNvqNouCvQ3aKSglpeqPV2bEmThxf1vgMjrsV/Hmtk6KKgkcpG1md5QTihkHD5xHaiQqKonKD7otGZO0lEZuCoQhbwx6cyN6kjSFk/SBOfHMIhuJI2NknioJ7FTmH0H1x4rrZsuU3MBEeDyg4E5gNnMaYOLFutvjzOBNJgBQKwqRARVHtpAiRWqi3mR2+PMQIMJnBQaGqJQiViBHXTHo+D0yIRRqEafzOTyGULUbovIa3pqfFCZALuTr/RZLHIpQXSXzdwIbNmweJAPkQwkT/nLNsrSyCmNZiw/cvRALIMiDf3VcsezeSYATjHiZIoeC4Vd9DP4syw87ypq2CIUUAJYTzvodMlu0PI6aQYJyVIkAphErfwyzLhq397C7LG9IEGOK4k/5JZ1FZ6NHSLp9HFAIMQ26GkMeSkEfxMRA1D0I9SoQ89FGQUg4q+b6wYX2p+hKoqTSi5OA8aT6qWgO9vS2FKCBc5ecURcypvFUwHBiRmFMuhbgvGAnM+ikiks9xXCK/t6zI3sq/C4aBiORCWCeTuj/kHYHdb08CUe4PkM2K3mPyNmz477H/tJfNCgFRGIZ3FGHhJ7KxmJ3dLGyElNyAwkopKyvuwC0oshNNEWtHYePSvH6Oz0zzTieyncXTzGK+93nCvpAWftuC3NO13z21q2A8b7IvJI3N0c/pXbfbB32T6wJx3XW+LwLRDKcDiHdfcIEMds5q631ZAUJ3LnhvrdF7K8dR994qvbey+5UYgbw3u+hShY7efQP/sGaaMaT+IR6UI5Dui1H6FEylVCPp9bHdifmYVXsymsTH5GvwImWbaGH4ziglPr1QqQjxUwKJFqf5ZoL7qXjyCZ6cMfPkpZMK/errTjZOMs6wGxAO/fjf+kU66hrQUXvpKN61vfMZTUh7Dow56zn5ngG6coOuXJCuTCfN+hZtiry99+0EfTt59e2F9C3t7K10Nlr9+GCgs7/vfTBuIrG/jxh3mJ00AzHuMApGAZmAgxEImIGFJCMI8AAzOJgB6IuMViwGYSA6sZFoEeyD4N/Pty6T2+X6sOw8WHpsjiZtw9q7D20Dt9mdIHm1CoxmeqBQeXBR8QqjUhA+9C0LaMAM0ZhAKXJcvFBdrH/Q6KyCuLzDiIyxvSsNw/0GbvdxOLpXVHvSkUQw334dgwvA9iGHcX4q7XCUGFD+ukfOA1ismLqqCjcyuxyORq7/54Gbhkfnv4cr5XSgqVi9hP6LYDe1q17eRMAD6eieZHg/HMq9ORO9UG2cjocCcugEkc4rr6ZGB9qUhNfp0ATrdx6oJEc6VL3NQqbq/lhRC8FljwdOh5b1nYdmtfA60Da5ZcZcZAjVHuSq+AFd064o2IccZQAAAABJRU5ErkJggg==) 50% no-repeat;
    background-size: 100% auto
}

.prev-btn:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABRCAMAAAC+CuvRAAAAh1BMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9qkf8RAAAALHRSTlMAeLsgRN7wVeYSCGZx9BzQs4iqk2DamS8rr58y6cjAoSj4Tg7MhiO9cuzDOhHEHO8AAANfSURBVFjDlJXZdoIwEIZjkKUIiiIHpXXliLbN+z9fE4X+bOOQuVJm8mX2CFpyf1Zs5I/cFDM/D4W1VI/EU225yKiyAYTbgxqTwyKcSoiC5u5sX6TrtNhnl/pLEE2i+C/CJXnk7dxEyYsT+CzBkbXX5UBVLl4RSodx4pnI45xQz49G7b115WZM3Kug5eoakzVtcDL6NHyf8dQYFZR6Dz/ZeJOQ9CLIBS87U7kNlQvXEVPEycZz4hsvKMRy48XJufXfeOIP0DpIb0cgzs+2+25Bdsa8f6Npres7RC8FV/3/PowkZRAqaH81Jd52iq7N3JBBqKxzJNPQ9pGIjuT8VRNQCUQTdd2QLGLVG8N7x5GttpiziI+e7reTkaMe9skIyEFP+H9vADgRAfeXyGhcUnNBI0QZI6uJUskYgvZieBC4yQgEUK9bbZXbIGCjlZ9Nn8dWCEjcFGOmzawQkJVSt2Z/7Xu6nENge57wo4uIpyFE0VwvB2MvWQQWgGw6/dZL1USEWOtuhx/jjGwpWD+IfCSKhSAfRF0qj4fgeqI/KpeDoD/IPnVYCPoU80JDXECIecHc2kEwt1gDthAcxB6zh2CPYZ/yEHqfYq/bVQd7He+LrSd4X/DO8RDyncN7y4XzJ07M+haj3idkiBRKvc8Kdwbh9gfCEE2M9gdm0cVOwBBeNEvVCbbHMA1hQm+PkdIu5AMbwiuN1i4krX3KKSXDyySNv32KaCdLEN1Opll7nYGL+H6DPBfl/Rca9aMQQE2OYH9OjnDnQoRAv1KEDv1bwv1smvf3CY87jAJAe2SsHDEIA9EVAnkYKlPQ0FLu/39fspwnR5FJkfpegceL9UDyh3/S7JsMuIkKZBOtWnv2oW3gMrt2sHM3B2ozPZAobmSKcBhFQomqb5lAA2ZRWiaQkhyZGR7Kxiuqg64QOQaM2Bjbs9JQIy7giqiHY4TD7ZbjlSjU24+jsgNYUeUwzlelHY5UKsRv99jzADodU1dV4cJmpcPRyP73PHDRcOv853CRTgeaitVL0X9ROEztqpeHUhAF2zECosY4HOJanDt6QrVxOm4qkEMnKBnM+2pqtKJNSZhPhybo73nASdbtUPUyKzJ5xG1JLRR2u6PgdGjp73loVh2PA22RS2bMThZFPgrZHV+JkbuudqRJYwAAAABJRU5ErkJggg==) 50% no-repeat;
    background-size: 100% auto
}

.next-btn {
    cursor: pointer;
    margin-right: 20px;
    float: right;
    width: 40px;
    height: 65px;
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABRCAMAAAC+CuvRAAACTFBMVEUAAAD3lkn3lkn3lkn7rFH3lUj3lkn3lUn7r1P6qFD3lkn4mkv3lkn2kEf3lEj9vVj+wVr9uVb4mEr3lEj+xFr2kUf/xFv2kEf+wlr/xVv2j0b3k0j/x1z7sFP+wFn7rVL7sFP1jUX8uFb3lkn+v1j/xVv3lkn2j0b2jkb2jkb3lkn8tVX/xFv9vVj5nkz6qFD+vlj7sVP5oU32j0b9vFj3kkf2kEf+xVv4m0v3lUn2kUf9ulf6pU/5pE74nkz9uVf5n03+w1r6qVD/x1z7slT6q1H/xlv7rVH6qE/8slT4nkz+wlr7sFP5o072jkb+vlj/xlv9uVb+vlj/x1z+wlr3l0n9wFn2j0b3lUn9v1n4nEv4mEn8s1T7rVL8t1X3lEj/x1z7rlL+vlj8tVX+xlv+xFv3lUj+wFn+v1n+w1v6qVD2kEf2kUf2k0f9t1X5pE7/yFz7sVP4nUv/yV35o039vFf+wlr2j0b7rVH8tVX+w1r2kEf8tVX6qVH+xlv4oU37rVL6pk/3lkn9ulf3mUr6qVH2jkX+x1v5pU/7rlL4oE38uFb4m0v5ok37r1L5pE74m0v+wlr8tlX4nUz2kUf/yFz7slT7rlP6q1H5p1D8tVX5p1D5pE/5oU33mEr/yV32kkj/yV32k0j5qFD9wFr3lkn/xVv+w1r2j0b+wVn4nkz2kEf9vlj9u1f3k0j7slT8t1b5oU33mEr6q1H8tVX6qFD4m0v7rlL5pE/7sFP1jUb9vVj5pE75p0/3lEj/x1v9uFb8tFT4mkr5oE2UHI0MAAAApXRSTlMAd7tEAyJVHwoB7waIYCtVIB4QC/azrqCIcXEzMCkcHBPz5t3c0czAuq5mZFdOKh8V+ff28fHm5eXk4N/e2ci+vby7ubSroJ+fcmVgMDAvLRUOB/Lx8e/r6eTg4N7d3Nzb2NDQwbOrpaCTk5GHTCL69vLp6Ojn39DPysjHxsO0tLGwmZSUiIV+fn11cXFwV1dPQ0NDOijo6Ojo58/Pz7+op52UkpHt4acxAAAE4UlEQVRYw+3YdXMaQRQA8IUGKJRUaKqkniZtU3d3d3d3d3d3d/fd2+PI4UlKAiXtF+s7uAMO9u5g2j/7ZpK52Zv8Zm/1vSDtKJn/8M6sGVMvTJ0x+/ajBS1Q0XFwzvQjP37U1YVCkUgkVl8fGDr5rqUYYGn1+aYmn08xYmA0BgK/PRPnFtqb5vd6+sNNPjCGbLk8a++NvbOvTDiUNDye0ffbFkK06un3h8NNQ6bPmV+SGZsFDy4NBaO2drTVUGg9qSbh9/vPVLvyXrnmTvTU/voVNNsMOjG8BoxJTxE7nk0GI7hCryv2jg0NNTXjBiDteLw2GMTYaddcELu9YFxrrj/i18HAHUo0iPZeb8PwVsgorCsAacecZfsu3us9sQgZR8sxOB7/zPqcjkBUtEaFhG1TPC7uZ8wIz/NrsokXO8qW72qjgYwRRdGaty6Wc/zKRdnEMsLx3hNdND5nhCiOyF0nUzieV83pp5+SUdNTAzkgikKVekj6cxz/XdVyLGX432og+0RBKFVN+iiOq1Cvi82yEX7JRppvEoSR2RuwE8dxA3KmSTIawPC9YiMHBEHonHVeQDemIHUs6S33w1f3mo30gY5kVto86MYTlBOLe0tGAozQm4Es47kg0MyIbOe4swjlI3I/QpHjTOScQKvSa4MQbh5iIFsVo56JlAqU2pQRJVzZEsSIwVsl40co1hg4ykDaDqNUGdWLhNuBEBuR+xHwsJB2lLaT9zys6k5IA9kmGTEwale3zHvbmdIeqYOknBBSjjQR+JaIZATzkYWUUndqnRNSBppGdN9WJxs4DykZRuXZvUVIb4S0kdOKIa7KRU5FozeTDzMJaY90kUhjyhBWLVS/6ktph+RDe0JmIl3kXb1s0B5qpAOlfZMP0wjZg/SR94oR7aM+AJSG7YR0RAbIB8XooWrfT6NVBfYDdZuQMVj9MB4PINLf0pcxHsbzAsT49JiusjDmxXB9ALEhohhj1QQ6RelN43UKxJZQTDaAyF2n0VJlv3Dl2sT69FoHIne/RKNuZd+STlpE140+xVhn0963cH6QHRpEm43pvQ8E6/wwOsdQ13GJpAH7Za2NfY7pn6dAVMjnaWMACN3zFFY7d5ZJeMFInkHjbfrnOvt+AeJk+m4YP4h5v8AJpHfPAbGZUwwgDO459n27eDNRjA1M4oAI923OvX9Sfe9/+akYbKLt2My9n8k/9jDzj/B6JoG+KvmHOg9SpZWHU0ZiPTsls0JCVmXPzcd4dT42LWVsbKOdj+VuH/gayAuz/qD8sGSMYxO2MXHIC1n5Ke+tyEamla3cPVg3P2XnyWsKzJNxfGfJX+XrDiAgX2dGiwLrhiDUDS3+pn5ZJ9cvBnVUQqeOqjWqoyAOJuu58JnqJex6DoyPhnWuvRrqSr9OXVlqL6y+DYelElmub7/J9a2HUd/q19k+QDK1eqNRnW1c74NRbL3P/r/D//gf/yj6mRCExWSBJymauUzJFqvJnWqAN0Zhxk743Qw3gycpTMiEAXFjs9wAb4wNbJUNs9xU6bAkfyAkDhkbvRwOi9pwO8xO3A8VYZituFIyQEuOB7SZMN6JijKQEzuzxwOBiE1FGqgSO7O/xdXLYcbuIg2LA2cbO3Ezl6OXqzgDWXHWePTDTqnlapEGcmbGw+KoRBBXsVXD+AO0oKMH2pI7wwAAAABJRU5ErkJggg==) 50% no-repeat;
    background-size: 100% auto
}

.next-btn:hover {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABRCAMAAAC+CuvRAAAAh1BMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9qkf8RAAAALHRSTlMAuyB3BOXd8qDP+HFVKkQxHAq0iOngk68UZe+/YA/ayE25qlcufkOGxZpzOjFfV84AAALzSURBVFjD7Zhtc6IwEICTQAGBikJRAfHd2t7t//99t0GZDSIJOe6+dWc6MpvyuG/ZbGTD4ibna3DiX/wUXM+Jy6xFRKkPqoT8l7ABuMUXvJJ9MdaaZfTWfvduHayyVbDehQ/NW7Qcg4jvhDCNEleJTZSGd0psjkP1sLruLdXFHqRwYTCiCWT1ObD8yQHF15qSAUp+0PzHIQeUbDgdAaCslvqIrwAlcAcQa7LT6G/6GhLIqF+YWd5l5k5DsfDEuCL2AOD2wkJphYp4T0M/WAxApCVxT4tOlhcV4YOkvvcB7ar/bLRMfCenJwAd5CDLqKs6y6R2NB+gh8gUbztJR/+8bl3s4CEfryFLD/nqKxF5QmkiyKA3kVJdaAZ/3mEzE+SIhlClbQGgt802JsjvTkQqgD1+2EL2SmoEAUdCyHxBEQ1rZg9ZhhTVFCDFD3sIvej6hLODoAP+PTMJACTsbyAX+WZb56Gk2UPcsE3GFWBGeisILt3a/rVmIyFPbW4NENDDSIhPkM7XH2nbmyHHbgNoFRWdF2aI39HfACqyQy+LHTF6dlA8xiFg3YsHPWgRHiVG9PJC9TEOkYt+fVCd6h0hRL9Oab/YWkH7hfatLYL2LbUBSwS9aOhjiMg1COpj1E/trKB+Sn1dj/CEtq/T+dJ3hBC684XOOU1dEKJ3zmnP240JQectnft599z/NiCWOZ37pvkDEfr5g4Q/D1hhi6CR7Hl8q0zz2JEQxnlM9eZNeSFpDMkXY+dCmk9VyDEsg41uPp0+J7uT5vWS5vWJ94bp95fp96jJ97nKfLkoDPfK7f+/306/Z0+/75t/d/iRH/lHUjhNnToCn6TMa6fRxE5yV+CKSXjTYeYwxycpDnMAIQnwhwJXzAyIHwzejn+laP5QJM4s3CtL0WUkJc+gYBYMHsPszvCaeKDOATgxKwbLIFPjgZ7hhyWDzSBTfam9kkNiyRAlqIwTzOvSq+0YLAYlHgVkUvNtyWAZxUOUs/tgFA8w/gDhDK/s+lbKYwAAAABJRU5ErkJggg==) 50% no-repeat;
    background-size: 100% auto
}

.table {
    display: table;
    margin-bottom: 0
}

.cell,.table {
    width: 100%;
    height: 100%
}

.cell {
    vertical-align: middle;
    display: table-cell
}

.login-content {
    width: 100%;
    height: auto
}

.home-content {
    width: 100%;
    height: 48vw
}

.login-footer {
    width: 100%;
    height: auto
}

.copy,.copy2 {
    padding: 5px;
    background: #281448
}

.copy,.copy2,.footer-links {
    font-family: Roboto,sans-serif;
    font-weight: 400;
    font-size: 10px;
    color: #fff;
    text-align: center
}

.footer-links {
    padding: 10px 5px 10px 5px;
    width: 100%;
    height: auto;
    background: rgba(0,0,0,.2)
}

.footer-links a {
    color: #fff
}

.footer-link {
    text-align: center;
    margin-bottom: 5px
}

.table-responsive {
    font-family: Roboto,sans-serif;
    color: #fff;
    font-weight: 400
}

.table-responsive th {
    color: #ffca5d
}

.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: hsla(0,0%,100%,.2)
}

.stats-list {
    padding: 10px 0;
    width: 100%
}

.last-played {
    padding-top: 5px;
    padding-bottom: 5px;
    color: #fff;
    font-size: 12px
}

.no-data {
    text-align: center;
    width: 100%;
    height: 64vh;
    color: #fff
}

@media screen and (min-width: 600px) {
    .q-timer,.question-title {
        font-size:20px;
        height: 50px
    }

    .q-timer {
        padding-top: 22px
    }

    .question-price {
        font-size: 20px;
        height: 50px
    }
}

@media screen and (min-width: 768px) {
    .bottom-btns,.bottom-btns2,.bottom-btns3 {
        width:50%
    }
}

@media screen and (min-width: 801px) {
    body {
        min-height:500px!important
    }

    .congrats-m,body {
        background: url(desktop-bg.36e5f4633e63b068b4a5.jpg) top no-repeat fixed;
        background-size: cover
    }

    .question-top {
        margin: 0 auto
    }

    .question-title {
        background: url(data:image/png;base64,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) right 90% no-repeat;
        background-size: 70% auto
    }

    .question-price {
        background: url(data:image/png;base64,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) left 90% no-repeat;
        background-size: 70% auto
    }

    .desktop-blank-space {
        height: 130px
    }

    .desktop-box {
        float: none;
        margin: 0 auto;
        padding: 20px 0 0 0;
        width: 80%;
        background: #35144c;
        border: 2px solid #feda57;
        border-radius: 5px;
        box-shadow: 10px 10px 15px 0 rgba(0,0,0,.75)
    }

    .question {
        margin-bottom: 20px;
        padding: 15px 10%;
        font-size: 20px
    }

    .options {
        margin-bottom: 20px;
        float: left;
        padding: 20px 5%;
        width: 50%;
        font-size: 18px
    }

    .kbc-lifeline {
        margin-right: 15px
    }

    .gameplay-logo {
        position: absolute;
        top: 10px;
        left: 0;
        display: block;
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .sponser-logo {
        position: absolute;
        top: 15px;
        right: 20px;
        display: block;
        width: 100px
    }

    .logo {
        margin: 0 auto;
        width: 280px;
        padding-bottom: 10px
    }

    .logo .inner-logo {
        width: 100%
    }

    .bottom-btns {
        width: 30%
    }

    .bottom-btns2 {
        width: 45%
    }

    .bottom-btns3 {
        width: 50%
    }

    .jio-logo {
        width: 80px
    }

    .digital-kbc {
        width: 100px
    }

    .kbc-logo {
        width: 225px
    }

    .padaav-m {
        position: inherit;
        top: inherit;
        right: inherit;
        overflow: hidden;
        width: 340px;
        background: url(mobile-bg.24b084dc6850c5116ac3.jpg) top no-repeat;
        background-size: cover;
        border-left: 2px solid #feda57;
        box-shadow: -10px 10px 15px 0 rgba(0,0,0,.75)
    }

    .full-gameplay,.padaav-m {
        float: left;
        height: calc(100% - 24px)!important
    }

    .full-gameplay {
        position: relative;
        width: calc(100% - 340px)
    }

    .kbc-desktop-container {
        position: relative;
        width: 100%;
        height: calc(100% - 24px)!important;
        overflow-y: scroll
    }

    .kbc-desktop-container2 {
        position: relative;
        width: 100%;
        height: calc(100% - 58px)!important;
        overflow-y: scroll
    }

    .level-title {
        margin-top: 0
    }

    .padaav-box {
        margin: 0 auto 0 auto
    }

    .signup.formPage {
        margin: 20px auto;
        width: 431px;
        float: none
    }

    .dob label {
        color: #fff;
        font-size: 15.97px;
        line-height: 48px
    }

    .leaderboard-m {
        width: 480px
    }

    .how-to-play-m {
        width: 75%
    }

    .login-content {
        width: 100%;
        height: 31%
    }

    .home-content {
        width: 100%;
        height: 29%
    }

    .login-footer {
        width: 100%;
        height: 10%
    }

    .login-footer2 {
        width: 100%;
        height: 18%
    }

    .footer-link {
        width: 20%
    }

    .footer-link:nth-child(4),.footer-link:nth-child(5) {
        width: 20%;
        border-left: 1px solid hsla(0,0%,100%,.5)!important
    }

    .gameplay-footer {
        margin-top: 83px;
        position: absolute;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,.5)
    }

    .gameplay-blank-space {
        display: none
    }

    .copy {
        position: relative
    }

    .copy2 {
        display: none
    }

    .tnc-m {
        height: calc(100% - 255px)
    }

    .lifelines-m {
        bottom: 24px;
        right: 340px
    }

    .how-to-play-btn2,.leaderboard-btn2 {
        padding-top: 9%;
        width: calc(25% - 10px)
    }

    .leaderboard-btn2 {
        margin-left: 0
    }

    .stats-btn {
        margin-right: 10px;
        width: calc(25% - 10px)
    }

    .stats-btn,.stats-btn3 {
        padding-top: 9%;
        float: left;
        margin-bottom: 0
    }

    .stats-btn3 {
        margin-left: 10px;
        width: calc(33.33% - 10px)
    }

    .episode-btn2 {
        padding-top: 9%;
        float: left;
        margin-bottom: 0;
        margin-right: 10px;
        margin-left: 0;
        width: calc(25% - 10px)
    }

    .how-to-play-btn {
        margin-left: 10px;
        margin-right: 0
    }

    .episode-btn,.how-to-play-btn,.leaderboard-btn {
        padding-top: 9%;
        width: calc(33.3% - 10px)
    }

    .episode-btn {
        float: left
    }

    .login-footer2 {
        height: 14%
    }

    .no-data {
        height: 70vh
    }
}

@media screen and (min-width: 1367px) {
    .bottom-btns {
        width:30%
    }

    .bottom-btns2 {
        width: 50%
    }

    .bottom-btns3 {
        width: 30%
    }

    .home-content,.login-content {
        width: 100%;
        height: 41.5%
    }

    .login-footer {
        width: 100%;
        height: 14%
    }

    .kbc-logo {
        width: 14%
    }

    .desktop-box {
        margin: 11% auto 0 auto;
        width: 58%
    }
}

@media screen and (max-width: 767px) {
    .table-responsive {
        border:none
    }
}

@media screen and (max-width: 360px) {
    .table-responsive {
        font-size:13px
    }
}

@media screen and (max-width: 359px) {
    .question {
        font-size:16px
    }

    .options {
        font-size: 14px
    }

    .footer-btn-grid {
        width: 25%
    }

    .footer-btn-grid:nth-child(2) {
        width: 50%
    }

    .question-price,.question-title {
        padding-top: 10px;
        font-size: 13px
    }

    .table-responsive {
        font-size: 11px
    }
}

    </style>


</head><body><div _ngcontent-c4="" class="leaderboard-m">
    <div _ngcontent-c4="" class="leaderboard-title">Leaderboard</div>
    <div _ngcontent-c4="" class="first-rank">
        <div _ngcontent-c4="" class="col-xs-3">
            <div _ngcontent-c4="" class="first-rank-title" style="padding-top: 30px;">Rank</div>
            <div _ngcontent-c4="" class="first">1</div>
        </div>
        <div _ngcontent-c4="" class="col-xs-6">
            <div _ngcontent-c4="" class="first-rank-title">Top Scorer</div>
            <div _ngcontent-c4="" class="first-rank-name">Abhinav
                Pandey(117)
            </div>
            <div _ngcontent-c4="" class="text-center"><img _ngcontent-c4="" alt="IIIT ALLAHABAD" width="50" src="assets/images/cup.png"></div>
        </div>
        
        
        
        
        <div _ngcontent-c4="" class="clearfix"></div>
    </div>
    <div _ngcontent-c4="" class="leaderboard-list">

        <!----><span _ngcontent-c4="">
            <!---->
        </span><span _ngcontent-c4="">
            <!----><div _ngcontent-c4="" class="lead-m">
                <div _ngcontent-c4="" class="lead-rank">2</div>
                <div _ngcontent-c4="" class="lead-name">Ravi Pandey(115)</div><span>BITS GOA</span>
                
                <div _ngcontent-c4="" class="clearfix"></div>
            </div>
        </span><span _ngcontent-c4="">
            <!----><div _ngcontent-c4="" class="lead-m">
                <div _ngcontent-c4="" class="lead-rank">3</div>
                <div _ngcontent-c4="" class="lead-name">Naveen Gupta(113)</div><span>NIT SURATKAL</span>
                
                <div _ngcontent-c4="" class="clearfix"></div>
            </div>
        </span><span _ngcontent-c4="">
            <!----><div _ngcontent-c4="" class="lead-m">
                <div _ngcontent-c4="" class="lead-rank">4</div>
                <div _ngcontent-c4="" class="lead-name"> Kripal Negi(111)</div><span>IIIT HYDERABAD</span>
                
                <div _ngcontent-c4="" class="clearfix"></div>
            </div>
        </span><span _ngcontent-c4="">
            <!----><div _ngcontent-c4="" class="lead-m">
                <div _ngcontent-c4="" class="lead-rank">5</div>
                <div _ngcontent-c4="" class="lead-name">Raman Sharma(109)</div><span>NIT ALLAHABAD</span>
                
                <div _ngcontent-c4="" class="clearfix"></div>
            </div>
        </span><span _ngcontent-c4="">
            <!----><div _ngcontent-c4="" class="lead-m">
                <div _ngcontent-c4="" class="lead-rank">6</div>
                <div _ngcontent-c4="" class="lead-name">Ramkumar m(107)</div><span>---</span>
                
                <div _ngcontent-c4="" class="clearfix"></div>
            </div>
        </span><span _ngcontent-c4="">
            <!----><div _ngcontent-c4="" class="lead-m">
                <div _ngcontent-c4="" class="lead-rank">7</div>
                <div _ngcontent-c4="" class="lead-name">Kumar Kishan(107)</div><span>NIT BHOPAL</span>
                
                <div _ngcontent-c4="" class="clearfix"></div>
            </div>
        </span><span _ngcontent-c4="">
            <!----><div _ngcontent-c4="" class="lead-m">
                <div _ngcontent-c4="" class="lead-rank">8</div>
                <div _ngcontent-c4="" class="lead-name">Hari Singh(104)</div><span>PESIT BANGALORE</span>
                
                <div _ngcontent-c4="" class="clearfix"></div>
            </div>
        </span><span _ngcontent-c4="">
            <!----><div _ngcontent-c4="" class="lead-m">
                <div _ngcontent-c4="" class="lead-rank">9</div>
                <div _ngcontent-c4="" class="lead-name">Subhi kumari(103)</div><span>BITS PILANI</span>
                
                <div _ngcontent-c4="" class="clearfix"></div>
            </div>
        </span><span _ngcontent-c4="">
            <!----><div _ngcontent-c4="" class="lead-m">
                <div _ngcontent-c4="" class="lead-rank">10</div>
                <div _ngcontent-c4="" class="lead-name">Sachin kunal(102)</div><span>NIT TRICHY</span>
                
                <div _ngcontent-c4="" class="clearfix"></div>
            </div>
        </span>

        <!---->

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </div>
</div></body></html>
