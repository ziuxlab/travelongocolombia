@extends('layouts.app.app')

@section('title')
    Checkout page
@stop

@section('keywords')
    {{ $Config->keywords}}
@stop

@section('description')
    {{$Config->meta_description}}
@stop

@section('critical-css')
    <style>.table, label {
            max-width: 100%
        }
        
        .col-lg-2, .col-lg-3, .col-lg-6, .col-md-10, .col-md-12, .col-sm-12, .col-sm-3, .col-sm-4, .col-xs-5 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px
        }
        
        @-ms-viewport {
            width: device-width
        }
        
        @font-face {
            font-family: FontAwesome;
            src: url(/fonts/fontawesome-webfont.eot?25a32416abee198dd821b0b17a198a8f);
            src: url(/fonts/fontawesome-webfont.eot?25a32416abee198dd821b0b17a198a8f?#iefix&v=4.6.3) format("embedded-opentype"), url(/fonts/fontawesome-webfont.woff2?e6cf7c6ec7c2d6f670ae9d762604cb0b) format("woff2"), url(/fonts/fontawesome-webfont.woff?c8ddf1e5e5bf3682bc7bebf30f394148) format("woff"), url(/fonts/fontawesome-webfont.ttf?1dc35d25e61d819a9c357074014867ab) format("truetype"), url(/fonts/fontawesome-webfont.svg?d7c639084f684d66a1bc66855d193ed8#fontawesomeregular) format("svg");
            font-weight: 400;
            font-style: normal
        }
        
        @font-face {
            font-family: Simple-Line-Icons;
            src: url(/fonts/Simple-Line-Icons.eot?f19a7f6c7a0b54b748277c40d7cf8882);
            src: url(/fonts/Simple-Line-Icons.eot?f19a7f6c7a0b54b748277c40d7cf8882?#iefix) format("embedded-opentype"), url(/fonts/Simple-Line-Icons.woff?ff94ad94c3a9d04bd2f80cb3c87dcccb) format("woff"), url(/fonts/Simple-Line-Icons.ttf?596814caa4fbaecbf5014bcfe8e363fb) format("truetype"), url(/fonts/Simple-Line-Icons.svg?5db2ea1bcb7a6cc078755c90458c3b65#Simple-Line-Icons) format("svg");
            font-weight: 400;
            font-style: normal
        }
        
        .flex-center, .flex-left {
            display: flex
        }
        
        input[type=email].form-control, input[type=password].form-control, input[type=text].form-control {
            -webkit-appearance: none
        }
        
        body {
            margin: 0
        }
        
        .col-xs-5, .dropdown-menu {
            float: left
        }
        
        *, :after, :before {
            box-sizing: border-box
        }
        
        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }
        
        aside, header, main, nav {
            display: block
        }
        
        a {
            background-color: transparent
        }
        
        img {
            border: 0;
            vertical-align: middle
        }
        
        button, input {
            color: inherit;
            font: inherit;
            margin: 0
        }
        
        button {
            overflow: visible
        }
        
        button {
            text-transform: none
        }
        
        button {
            -webkit-appearance: button
        }
        
        button::-moz-focus-inner, input::-moz-focus-inner {
            border: 0;
            padding: 0
        }
        
        td {
            padding: 0
        }
        
        table {
            border-collapse: collapse;
            border-spacing: 0
        }
        
        .btn, .form-control {
            background-image: none
        }
        
        .img-responsive, .table, label {
            max-width: 100%
        }
        
        html {
            font-size: 10px
        }
        
        body {
            line-height: 1.6
        }
        
        button, input {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }
        
        .img-responsive {
            display: block;
            height: auto
        }
        
        .h3, h1, h3 {
            margin-top: 22px;
            margin-bottom: 11px
        }
        
        .h4, h4, h5, h6 {
            margin-top: 11px;
            margin-bottom: 11px
        }
        
        table {
            background-color: transparent
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
        
        .text-capitalize {
            text-transform: capitalize
        }
        
        .bg-primary {
            color: #fff
        }
        
        ul {
            margin-top: 0
        }
        
        ul ul {
            margin-bottom: 0
        }
        
        ul {
            margin-bottom: 11px
        }
        
        #header-navbar:after, .block-header:after, .block-options:after, .dropdown-menu > li > a, .form-horizontal .form-group:after, .nav-header:after, .row:after, .side-header:after {
            clear: both
        }
        
        .row:after, .row:before {
            display: table;
            content: " "
        }
        
        .row {
            margin-left: -15px;
            margin-right: -15px
        }
        
        .col-lg-2, .col-lg-3, .col-lg-6, .col-md-10, .col-md-12, .col-sm-12, .col-sm-3, .col-sm-4, .col-sm-6, .col-xs-5 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px
        }
        
        .col-xs-5 {
            width: 41.66666667%
        }
        
        @media (min-width: 768px) {
            .col-sm-12, .col-sm-3, .col-sm-4, .col-sm-6 {
                float: left
            }
            
            .col-sm-3 {
                width: 25%
            }
            
            .col-sm-4 {
                width: 33.33333333%
            }
            
            .col-sm-6 {
                width: 50%
            }
            
            .col-sm-12 {
                width: 100%
            }
        }
        
        @media (min-width: 992px) {
            .col-md-10, .col-md-12 {
                float: left
            }
            
            .col-md-10 {
                width: 83.33333333%
            }
            
            .col-md-12 {
                width: 100%
            }
            
            .col-md-offset-1 {
                margin-left: 8.33333333%
            }
        }
        
        @media (min-width: 1200px) {
            .col-lg-2, .col-lg-3, .col-lg-6 {
                float: left
            }
            
            .col-lg-2 {
                width: 16.66666667%
            }
            
            .col-lg-3 {
                width: 25%
            }
            
            .col-lg-6 {
                width: 50%
            }
        }
        
        .table {
            width: 100%;
            margin-bottom: 22px
        }
        
        .table > tbody > tr > td {
            line-height: 1.6;
            vertical-align: top
        }
        
        label {
            display: inline-block;
            margin-bottom: 5px
        }
        
        .form-control {
            display: block;
            font-size: 14px;
            line-height: 1.6;
            color: #555
        }
        
        .form-control {
            width: 100%;
            height: 36px;
            padding: 6px 12px;
            background-color: #fff
        }
        
        .form-control::-moz-placeholder {
            opacity: 1
        }
        
        .form-control::-ms-expand {
            border: 0;
            background-color: transparent
        }
        
        .form-horizontal .form-group {
            margin-left: -15px;
            margin-right: -15px
        }
        
        .form-horizontal .form-group:after, .form-horizontal .form-group:before {
            content: " ";
            display: table
        }
        
        .btn {
            display: inline-block;
            margin-bottom: 0;
            text-align: center;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.6
        }
        
        .btn-link {
            color: #3097d1;
            font-weight: 400;
            border-radius: 0
        }
        
        .btn-link {
            background-color: transparent;
            box-shadow: none
        }
        
        .btn-link {
            border-color: transparent
        }
        
        .btn-xs {
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
        }
        
        .fade {
            opacity: 0
        }
        
        .caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            border-top: 4px dashed;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            margin: 2px 0 0;
            list-style: none;
            font-size: 14px;
            text-align: left;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, .15);
            background-clip: padding-box
        }
        
        .dropdown-menu-right {
            left: auto;
            right: 0
        }
        
        .dropdown-menu > li > a {
            display: block;
            font-weight: 400;
            line-height: 1.6;
            color: #333;
            white-space: nowrap
        }
        
        .dropdown-header {
            display: block;
            font-size: 12px;
            line-height: 1.6;
            white-space: nowrap
        }
        
        .btn-group {
            position: relative;
            display: inline-block;
            vertical-align: middle
        }
        
        .btn-group > .btn {
            position: relative;
            float: left
        }
        
        .btn .caret, .btn-group > .btn:first-child {
            margin-left: 0
        }
        
        .input-group {
            position: relative
        }
        
        .input-group {
            display: table;
            border-collapse: separate
        }
        
        .input-group .form-control {
            position: relative;
            z-index: 2;
            float: left;
            width: 100%;
            margin-bottom: 0
        }
        
        .input-group .form-control, .input-group-addon {
            display: table-cell
        }
        
        .input-group-addon {
            width: 1%;
            white-space: nowrap;
            vertical-align: middle
        }
        
        .input-group-addon {
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
            text-align: center;
            border: 1px solid #ccd0d2
        }
        
        .modal {
            overflow: hidden
        }
        
        .modal {
            top: 0;
            right: 0;
            left: 0;
            bottom: 0
        }
        
        .table-vcenter > tbody > tr > td {
            vertical-align: middle
        }
        
        .modal-content {
            background-clip: padding-box
        }
        
        .modal {
            -webkit-overflow-scrolling: touch
        }
        
        .modal {
            display: none;
            position: fixed;
            z-index: 1050;
            outline: 0
        }
        
        .modal.fade .modal-dialog {
            -webkit-transform: translateY(-25%);
            transform: translateY(-25%)
        }
        
        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px
        }
        
        .modal-content {
            position: relative;
            background-color: #fff;
            outline: 0
        }
        
        @media (min-width: 768px) {
            .modal-dialog {
                width: 600px;
                margin: 30px auto
            }
            
            .modal-content {
                box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
            }
        }
        
        .content, .side-content {
            max-width: 100%
        }
        
        .dropdown-header {
            text-transform: uppercase
        }
        
        .pull-right {
            float: right !important
        }
        
        .visible-sm, .visible-xs {
            display: none !important
        }
        
        a {
            color: #eb6212
        }
        
        .btn {
            border-radius: 2px
        }
        
        @media (max-width: 767px) {
            .visible-xs {
                display: block !important
            }
        }
        
        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm {
                display: block !important
            }
            
            .hidden-sm {
                display: none !important
            }
        }
        
        @media (min-width: 1200px) {
            .hidden-lg {
                display: none !important
            }
        }
        
        @media (max-width: 767px) {
            .hidden-xs {
                display: none !important
            }
        }
        
        @media (min-width: 992px) and (max-width: 1199px) {
            .hidden-md {
                display: none !important
            }
        }
        
        body, html {
            height: 100%
        }
        
        body {
            font-family: Maven Pro, icomoon, Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #646464;
            background-color: #f9f7fa
        }
        
        a {
            text-decoration: none
        }
        
        .h3, .h4, h1, h3, h4, h5, h6 {
            margin: 0;
            font-family: Maven Pro, Source Sans Pro, Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
            font-weight: 600;
            line-height: 1.2;
            color: inherit
        }
        
        .h3, .h4 {
            font-weight: inherit
        }
        
        h1 {
            font-size: 36px
        }
        
        .h3, h3 {
            font-size: 24px
        }
        
        .h4, h4 {
            font-size: 20px
        }
        
        h5 {
            font-size: 16px
        }
        
        h6 {
            font-size: 14px
        }
        
        .font-w600 {
            font-weight: 600 !important
        }
        
        .font-w700 {
            font-weight: 700 !important
        }
        
        .text-primary {
            color: #eb6212
        }
        
        .text-success {
            color: #46c37b
        }
        
        .text-white {
            color: #fff
        }
        
        .text-white-op {
            color: hsla(0, 0%, 100%, .85)
        }
        
        .bg-primary {
            background-color: #eb6212
        }
        
        .bg-white {
            background-color: #fff
        }
        
        .bg-black-op {
            background-color: rgba(0, 0, 0, .4)
        }
        
        .bg-gray-lighter {
            background-color: #f9f9f9
        }
        
        .btn {
            font-weight: 600
        }
        
        .btn.btn-minw {
            min-width: 110px
        }
        
        .btn-link {
            text-decoration: none
        }
        
        .btn-default {
            color: #545454;
            background-color: #f5f5f5;
            border-color: #e9e9e9
        }
        
        .btn-primary {
            color: #fff;
            background-color: #eb6212;
            border-color: #bc4e0e
        }
        
        label {
            font-size: 13px;
            font-weight: 600
        }
        
        .form-control {
            color: #646464;
            border: 1px solid #e6e6e6;
            border-radius: 3px;
            box-shadow: none
        }
        
        .input-group-addon {
            border-radius: 3px
        }
        
        .form-control::-moz-placeholder {
            color: #aaa
        }
        
        .form-control:-ms-input-placeholder {
            color: #aaa
        }
        
        .form-control::-webkit-input-placeholder {
            color: #aaa
        }
        
        .form-group {
            margin-bottom: 20px
        }
        
        .input-group-addon {
            color: #646464;
            background-color: #f9f9f9;
            border-color: #e6e6e6
        }
        
        .input-group .form-control:first-child {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0
        }
        
        .input-group-addon:last-child {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }
        
        .input-group-addon:last-child {
            border-left: 0
        }
        
        .dropdown-menu {
            box-shadow: 0 10px 30px rgba(0, 0, 0, .05)
        }
        
        .dropdown-menu {
            min-width: 180px;
            padding: 5px 0;
            border-color: #ddd;
            border-radius: 2px
        }
        
        .modal-content {
            box-shadow: none
        }
        
        .dropdown-menu > li > a {
            padding: 7px 12px
        }
        
        .dropdown-header {
            padding: 5px 12px 4px;
            font-weight: 600;
            color: #999
        }
        
        .table > tbody > tr > td {
            padding: 12px 10px;
            border-top: 1px solid #f0f0f0
        }
        
        .table-borderless, .table-borderless > tbody > tr > td {
            border: none
        }
        
        .table > tbody > tr.success > td {
            background-color: #e0f5e9
        }
        
        .fa {
            display: inline-block
        }
        
        .modal-content {
            border: none;
            border-radius: 0
        }
        
        .img-responsive {
            width: 100%
        }
        
        .fa {
            font: 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
        
        .fa-times:before {
            content: "\F00D"
        }
        
        .fa-shopping-cart:before {
            content: "\F07A"
        }
        
        .fa-navicon:before {
            content: "\F0C9"
        }
        
        .si {
            font-family: Simple-Line-Icons;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased
        }
        
        .si-close:before {
            content: "\E082"
        }
        
        .si-magnifier:before {
            content: "\E090"
        }
        
        .si-refresh:before {
            content: "\E098"
        }
        
        #page-loader {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: #fff;
            z-index: 999998
        }
        
        #page-loader:after {
            position: absolute;
            top: 50%;
            left: 50%;
            display: block;
            margin-top: -30px;
            margin-left: -30px;
            width: 60px;
            height: 60px;
            background-color: #eb6212;
            border-radius: 100%;
            content: "";
            z-index: 999999;
            -webkit-animation: .9s ease-in-out infinite page-loader;
            animation: .9s ease-in-out infinite page-loader
        }
        
        @-webkit-keyframes page-loader {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
        
        @keyframes page-loader {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
        
        #header-navbar {
            min-height: 60px
        }
        
        #header-navbar:after, #header-navbar:before {
            content: " ";
            display: table
        }
        
        #page-container {
            background-color: #2f4781
        }
        
        #page-container {
            margin: 0 auto;
            width: 100%;
            min-width: 320px
        }
        
        #side-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            z-index: 1032;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }
        
        #side-overlay {
            background-color: #fff
        }
        
        .sidebar-l #side-overlay {
            right: 0;
            -webkit-transform: translateX(100%) translateY(0) translateZ(0);
            transform: translateX(100%) translateY(0) translateZ(0)
        }
        
        @media screen and (max-width: 991px) {
            #side-overlay {
                width: 100%;
                opacity: 0
            }
        }
        
        @media screen and (min-width: 992px) {
            #side-overlay {
                width: 320px;
                box-shadow: 0 0 20px rgba(0, 0, 0, .3)
            }
            
            .sidebar-l #side-overlay {
                -webkit-transform: translateX(110%) translateY(0) translateZ(0);
                transform: translateX(110%) translateY(0) translateZ(0)
            }
        }
        
        .side-header {
            margin: 0 auto;
            min-height: 60px
        }
        
        .side-header:after, .side-header:before {
            content: " ";
            display: table
        }
        
        .side-header.side-content {
            overflow: visible
        }
        
        #main-container, .side-content {
            overflow-x: hidden
        }
        
        .side-header > span {
            display: inline-block;
            line-height: 34px
        }
        
        .side-content {
            margin: 0 auto;
            padding: 13px 20px 1px
        }
        
        .side-content .block {
            margin-bottom: 13px
        }
        
        .side-content .pull-r-l {
            margin-right: -20px;
            margin-left: -20px
        }
        
        .block-content, .content, .content-mini {
            overflow-x: visible
        }
        
        #main-container {
            background-color: #f9f7fa
        }
        
        .content {
            margin: 0 auto;
            padding: 16px 14px 1px
        }
        
        .content .block {
            margin-bottom: 16px
        }
        
        .content.content-full {
            padding-bottom: 16px
        }
        
        @media screen and (min-width: 768px) {
            .content {
                margin: 0 auto;
                padding: 30px 30px 1px;
                max-width: 100%;
                overflow-x: visible
            }
            
            .content .block {
                margin-bottom: 30px
            }
            
            .content.content-full {
                padding-bottom: 30px
            }
            
            .content.content-narrow {
                max-width: 95%
            }
        }
        
        .content-mini {
            margin: 0 auto;
            padding: 13px 14px 1px;
            max-width: 100%
        }
        
        .content-mini.content-mini-full {
            padding-bottom: 13px
        }
        
        @media screen and (min-width: 768px) {
            .content-mini {
                margin: 0 auto;
                padding: 13px 30px 1px;
                max-width: 100%;
                overflow-x: visible
            }
            
            .content-mini.content-mini-full {
                padding-bottom: 13px
            }
        }
        
        .content-boxed {
            margin: 0 auto;
            width: 100%;
            max-width: 1280px
        }
        
        .bg-image {
            background-color: #f9f9f9;
            background-position: 0 50%;
            background-size: cover
        }
        
        .block {
            margin-bottom: 30px;
            background-color: #fff;
            box-shadow: 0 2px rgba(0, 0, 0, .01)
        }
        
        .side-content .block {
            box-shadow: none
        }
        
        .block-header {
            padding: 15px 20px
        }
        
        .block-header:after, .block-header:before {
            content: " ";
            display: table
        }
        
        .block-title {
            text-transform: uppercase;
            line-height: 1.2
        }
        
        .block-content {
            margin: 0 auto;
            padding: 20px 20px 1px;
            max-width: 100%
        }
        
        .block-content.block-content-full {
            padding-bottom: 20px
        }
        
        .block-content .pull-r-l {
            margin-right: -20px;
            margin-left: -20px
        }
        
        @media screen and (min-width: 1200px) {
            .block-content.block-content-narrow {
                padding-left: 10%;
                padding-right: 10%
            }
        }
        
        .block.block-themed > .block-header {
            border-bottom: none
        }
        
        .block.block-transparent {
            background-color: transparent;
            box-shadow: none
        }
        
        .block-options {
            float: right;
            margin: -3px 0 -3px 15px;
            padding: 0;
            height: 24px;
            list-style: none
        }
        
        .block-options:after, .block-options:before {
            content: " ";
            display: table
        }
        
        .block-options > li {
            display: inline-block;
            margin: 0 2px;
            padding: 0
        }
        
        .block-options > li > button {
            display: block;
            padding: 2px 3px;
            color: #999;
            opacity: .6
        }
        
        .block.block-themed > .block-header .block-options > li > button {
            color: #fff
        }
        
        .block-options > li > button {
            background: 0 0;
            border: none
        }
        
        .nav-main-header a.nav-submenu:before {
            content: "\F107"
        }
        
        .nav-main-header {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: 0;
            padding: 20px;
            width: 100%;
            list-style: none;
            background-color: #2f4781;
            z-index: 1031;
            opacity: 0;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateX(0) translateY(-100%) translateZ(0);
            transform: translateX(0) translateY(-100%) translateZ(0)
        }
        
        .nav-main-header > li {
            margin: 0 0 10px
        }
        
        .nav-main-header a {
            display: block;
            padding: 0 12px;
            min-height: 34px;
            color: hsla(0, 0%, 100%, .5);
            font-weight: 600;
            line-height: 34px
        }
        
        .nav-main-header a.active {
            color: #fff
        }
        
        .nav-main-header a.nav-submenu {
            position: relative;
            padding-right: 32px
        }
        
        .nav-main-header a.nav-submenu:before {
            position: absolute;
            right: 10px;
            font-family: FontAwesome
        }
        
        .nav-main-header ul {
            margin: 0 0 0 15px;
            padding: 0;
            list-style: none;
            display: none
        }
        
        .nav-main-header ul a {
            min-height: 32px;
            font-weight: 400;
            line-height: 32px
        }
        
        @media screen and (min-width: 992px) {
            .nav-main-header {
                position: static;
                top: auto;
                right: auto;
                bottom: auto;
                left: auto;
                padding: 0;
                width: auto;
                background-color: transparent;
                z-index: auto;
                opacity: 1;
                overflow-y: visible;
                -webkit-overflow-scrolling: auto;
                -webkit-backface-visibility: visible;
                backface-visibility: visible;
                -webkit-transform: translateX(0) translateY(0) translateZ(0);
                transform: translateX(0) translateY(0) translateZ(0)
            }
            
            .nav-main-header > li {
                position: relative;
                margin: 0 10px 0 0;
                float: left
            }
            
            .nav-main-header ul {
                position: absolute;
                left: 0;
                margin: 0;
                padding: 13px 0;
                min-width: 160px;
                background-color: #4a4a4a
            }
            
            .nav-main-header > li:last-child > ul {
                left: auto;
                right: 0
            }
        }
        
        .nav-header {
            margin: 0;
            list-style: none
        }
        
        .nav-header {
            padding: 0
        }
        
        .nav-header:after, .nav-header:before {
            content: " ";
            display: table
        }
        
        .nav-header > li {
            margin-right: 12px;
            float: left
        }
        
        .img-rounded {
            border-radius: 4px
        }
        
        .push-5-r {
            margin-right: 5px !important
        }
        
        .push-5-l {
            margin-left: 5px !important
        }
        
        .push-10-t {
            margin-top: 10px !important
        }
        
        .push-10-r {
            margin-right: 10px !important
        }
        
        .push-20 {
            margin-bottom: 20px !important
        }
        
        .push-20-r {
            margin-right: 20px !important
        }
        
        .push-30-t {
            margin-top: 30px !important
        }
        
        .push-50-t {
            margin-top: 50px !important
        }
        
        .push-150-t {
            margin-top: 150px !important
        }
        
        .remove-margin {
            margin: 0 !important
        }
        
        .remove-padding {
            padding: 0 !important
        }
        
        .remove-padding-t {
            padding-top: 0 !important
        }
        
        .border-black-op {
            border: 1px solid rgba(0, 0, 0, .1)
        }
        
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }
        
        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes fadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }
        
        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn
        }
        
        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        
        @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        
        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown
        }
        
        @-webkit-keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        
        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        
        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft
        }
        
        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        
        @keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        
        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight
        }
        
        .modal-dialog, .modal:before {
            display: inline-block;
            vertical-align: middle
        }
        
        nav {
            height: 60px
        }
        
        .modal {
            text-align: center;
            padding: 0 !important
        }
        
        .modal:before {
            content: '';
            height: 100%;
            margin-right: -4px
        }
        
        .modal-dialog {
            text-align: left
        }
        
        .flex, .flex-center, .flex-left {
            display: flex
        }
        
        .logo {
            max-height: 50px
        }
        
        .bg-secondary {
            background: #4a4a4a
        }
        
        .sub-menu .active {
            border-bottom: 5px solid #eb6212
        }
        
        .sub-menu li {
            height: 50px;
            margin-right: 5px
        }
        
        .flex-left {
            justify-content: flex-start
        }
        
        .flex-center {
            justify-content: center;
            align-items: center
        }
        
        .flex-between {
            display: flex;
            justify-content: space-between
        }
        
        #header-navbar {
            background-color: #2c343f
        }
        
        .nav-main-header ul {
            min-width: 250px;
            border-radius: 5px
        }
        
        .nav-main-header ul a {
            font-size: 16px
        }
        
        .content-boxed {
            overflow: inherit
        }
        
        .btn-minw150 {
            min-width: 150px
        }
        
        .flex {
            flex-wrap: wrap
        }
        
        .block-title {
            font-size: 20px;
            font-weight: 700
        }
        
        .v-center {
            display: flex;
            align-items: center
        }
        
        .overflow-hidden {
            overflow: hidden
        }
        
        @media (max-width: 768px) {
            .h3 {
                letter-spacing: -1px
            }
            
            .modal:before {
                content: '';
                display: inline-block;
                height: 20%;
                vertical-align: middle;
                margin-right: -4px
            }
            
            .h3 {
                font-size: 22px !important;
                line-height: 22px !important
            }
            
            .h4 {
                font-size: 20px !important;
                line-height: 18px !important
            }
            
            .sub-menu .v-center {
                display: initial
            }
            
            .sub-menu .js-nav-main-header {
                background-color: #4a4a4a
            }
        }
        
        @media screen and (max-width: 576px) {
            .h3 {
                letter-spacing: -1px
            }
            
            .h3 {
                font-size: 20px !important;
                line-height: 20px !important
            }
            
            .h4 {
                font-size: 18px !important;
                line-height: 18px !important
            }
            
            .sub-menu li {
                margin-right: 0;
                height: 30px
            }
            
            .nav-main-header ul a {
                font-size: 13px
            }
        }</style>
@endsection

@section('style')
    {{$Config->css}}
@stop

@section('scripts_header')
    {{$Config->scripts_header}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    <div class="bg-image  overflow-hidden" style="background-image: url('{{ asset('img/checkoutC.jpg')}}');">
        <div class="content content-full bg-black-op">
            <h1 class="h1 font-w700 text-center text-white push-50 push-50-t animated fadeInDown"
                data-class="animated fadeInDown">
                <i class="fa fa-shopping-cart"></i> Checkout
            </h1>
        </div>
    </div>
    <div class="bg-white">
        <div class="content-boxed">
            <div class="content-mini content-mini-full bg-transparent">
                <ol class="breadcrumb">
                    <li class="h6"><a class="" href="{{url('cart')}}">@lang('general.shopping_cart')</a></li>
                    <li class="h6">@lang('general.checkout')</li>
                </ol>
            </div>
        </div>
    </div>
    
    
    <div class="content-boxed content">
        <div class="row text-center">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <div class="block block-rounded block-bordered remove-margin-b">
                    <div class="block-content block-content-full ">
                        @if(Session::get('plan') == 'design')
                            <p class="h5 font-w400">@lang('general.step-back')</p>
                            <div class="row flex-between">
                                <div>
                                    <a class="btn btn-minw btn-primary"
                                       href="{{url(str_slug(trans('cabecera.Design')).'?step=5')}}">
                                        <i class="si si-arrow-left pull-left"></i>@lang('general.back')</a>
                                </div>
                            </div>
                        @else
                            <p class="h5 font-w400">@lang('general.cart-back')</p>
                            <div class="row flex-between">
                                <div>
                                    <a class="btn btn-minw btn-primary"
                                       href="{{url('cart')}}">
                                        <i class="si si-arrow-left pull-left"></i>@lang('general.back')</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-boxed content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 bg-white remove-padding">
                @if (Auth::guest())
                    <div class="block block-bordered remove-margin">
                        <div class="block-content block-content-narrow  block-content-full">
                            <div class="row">
                                <div class="col-sm-6 text-center border-r">
                                    <a href="" data-toggle="modal"
                                       data-target="#loginModal"
                                       class="btn btn-primary btn-minw ">@lang('cabecera.Login')</a>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <a href="#" data-toggle="modal" data-target="#registerModal"
                                       class="btn btn-primary btn-minw ">@lang('cabecera.Register')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="js-wizard-classic-validation block block-bordered remove-margin">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a class="inactive" href="#validation-classic-step1"
                               data-toggle="tab">1. @lang('general.personal information')</a>
                        </li>
                        <li>
                            <a class="inactive" href="#validation-classic-step2"
                               data-toggle="tab">2. @lang('general.credit card')</a>
                        </li>
                    </ul>
                    {!! Form::open(['action'=> ['CheckoutController@store'],'class'=>'js-card-form js-form1 validation form-horizontal','novalidate','id'=>'form_stripe']) !!}
                    <div class="block-content block-content-mini block-content-full border-b">
                        <div class="wizard-progress progress active progress-mini remove-margin-b">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar"
                                 aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="block-content block-content-mini block-content-narrow tab-content ">
                        <div class="tab-pane  push-30-t push-50 active" id="validation-classic-step1">
                            @for ($i = 0; $i < Session::get('adults'); $i++)
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header bg-gray-lighter">
                                        <h4 class="block-title">@lang('general.adult') {{$i + 1}}</h4>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>@lang('general.name')</label>
                                                <input class="form-control" type="text"
                                                       value="{{is_null($contacts['adult']) ? '': (empty($contacts['adult'][$i]) ? '':$contacts['adult'][$i]['name'])}}"
                                                       name="adult[full_name][{{$i}}]"
                                                       placeholder="@lang('cabecera.placeholder_name')">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>@lang('general.email')</label>
                                                <input class="form-control" type="email" name="adult[email][{{$i}}]"
                                                       value="{{is_null($contacts['adult']) ? '': (empty($contacts['adult'][$i]) ? '':$contacts['adult'][$i]['email'])}}"
                                                       placeholder="@lang('cabecera.placeholder_email')">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <label>@lang('general.phone')</label>
                                                <input class="form-control" type="text" name="adult[phone][{{$i}}]"
                                                       value="{{is_null($contacts['adult']) ? '': (empty($contacts['adult'][$i]) ? '':$contacts['adult'][$i]['phone'])}}"
                                                       placeholder="@lang('general.placeholder phone')">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>@lang('general.city')</label>
                                                <input class="form-control" type="text" name="adult[city][{{$i}}]"
                                                       value="{{is_null($contacts['adult']) ? '': (empty($contacts['adult'][$i]) ? '':$contacts['adult'][$i]['city'])}}"
                                                       placeholder="@lang('general.enter_city')">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>@lang('general.country')</label>
                                                <input class="form-control" type="text"
                                                       name="adult[country][{{$i}}]"
                                                       value="{{is_null($contacts['adult']) ? '': (empty($contacts['adult'][$i]) ? '':$contacts['adult'][$i]['country'])}}"
                                                       placeholder="@lang('general.placeholder country')">
                                                @if(!is_null($contacts['adult']) and !empty($contacts['adult'][$i]))
                                                    {!! Form::hidden('adult[contact_id]['.$i.']', $contacts['adult'][$i]['id']) !!}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            @for ($i = 0; $i < Session::get('children'); $i++)
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header bg-gray-lighter">
                                        <h4 class="block-title">@lang('general.child') {{$i + 1}}</h4>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>@lang('general.name')</label>
                                                <input class="form-control" type="text"
                                                       name="child[full_name][{{$i}}]"
                                                       value="{{is_null($contacts['child']) ? '': $contacts['child'][$i]['name']}}"
                                                       placeholder="@lang('cabecera.placeholder_name')">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>@lang('general.age')</label>
                                                <input class="form-control" type="number" name="child[age][{{$i}}]"
                                                       value="{{is_null($contacts['child']) ? '': $contacts['child'][$i]['age']}}"
                                                       placeholder="@lang('general.placeholder age')">
                                                @if(!is_null($contacts['child']))
                                                    {!! Form::hidden('child[contact_id]['.$i.']', $contacts['child'][$i]['id']) !!}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            @for ($i = 0; $i < Session::get('infants'); $i++)
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header bg-gray-lighter">
                                        <h4 class="block-title">@lang('general.infant') {{$i + 1}}</h4>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>@lang('general.name')</label>
                                                <input class="form-control" type="text"
                                                       value="{{is_null($contacts['infant']) ? '': $contacts['infant'][$i]['name']}}"
                                                       name="infant[full_name][{{$i}}]"
                                                       placeholder="@lang('cabecera.placeholder_name')">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>@lang('general.age')</label>
                                                <input class="form-control" type="number" name="infant[age][{{$i}}]"
                                                       value="{{is_null($contacts['infant']) ? '': $contacts['infant'][$i]['age']}}"
                                                       placeholder="@lang('general.placeholder age')">
                                                @if(!is_null($contacts['infant']))
                                                    {!! Form::hidden('infant[contact_id]['.$i.']', $contacts['infant'][$i]['id']) !!}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="tab-pane push-30-t push-50 " id="validation-classic-step2">
                            <div class="js-card-container hidden-xs push-50">
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label>@lang('general.number')</label>
                                            <input class="form-control" id="number" data-stripe="number"
                                                   name="number"
                                                   type="text" value="4242424242424242"
                                                   placeholder="**** **** **** ****">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label>@lang('general.name')</label>
                                            <input class="form-control" id="name" name="name" type="text"
                                                   placeholder="JOHN DOE" value="mauricio">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label>@lang('general.expiration') (MM/YY)</label>
                                            <div class="form-inline">
                                                <input class="form-control" type="text" name="month" size="2"
                                                       data-stripe="exp_month" value="02">
                                                <span> / </span>
                                                <input class="form-control" type="text" name="year" size="4"
                                                       data-stripe="exp_year" value="2020">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="checkout-cc-cvc">CVC</label>
                                            <input class="form-control" id="cvc" data-stripe="cvc" name="cvc"
                                                   type="text" placeholder="***" value="345">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label class="css-input css-checkbox css-checkbox-success">
                                                <input type="checkbox" required><span></span> Accept this <a
                                                        href="{{url(str_slug(trans('general.terms')))}}"
                                                        target="_blank">terms and conditions?</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <span class="payment-errors" style="color: red;margin-top:10px;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-mini block-content-full border-t">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="wizard-prev btn btn-default btn-minw hidden" type="button"><i
                                            class="fa fa-arrow-left"></i> @lang('general.previous')
                                </button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="wizard-next btn btn-default btn-minw"
                                        type="button">@lang('general.next')
                                    <i
                                            class="fa fa-arrow-right"></i></button>
                                <button id="submit" class="wizard-finish btn btn-primary btn-minw" type="submit"
                                        style="display: none;"><i class="fa fa-check"></i> @lang('general.Submit')
                                </button>
                            </div>
                        </div>
                    
                    </div>
                    {!! Form::close() !!}
                </div>
            
            </div>
        </div>
    </div>
    <div class="content-boxed content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 remove-padding">
                @include('app.partials.needhelp')
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{$Config->scripts_footer}}
    <script src="{{asset('js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/plugins/card/jquery.card.min.js')}}"></script>
    <script>var BaseFormWizard = function () {
            var a = function () {
                var e = jQuery(".js-form1");
                e.on("keyup keypress", function (e) {
                    var a = e.keyCode || e.which;
                    return 13 === a ? (e.preventDefault(), !1) : void 0
                });
                var i = e.validate({
                    errorClass: "help-block animated fadeInDown",
                    errorElement: "div",
                    errorPlacement: function (e, a) {jQuery(a).parents(".form-group > div").append(e)},
                    highlight: function (e) {jQuery(e).closest(".form-group").removeClass("has-error").addClass("has-error"), jQuery(e).closest(".help-block").remove()},
                    success: function (e) {jQuery(e).closest(".form-group").removeClass("has-error"), jQuery(e).closest(".help-block").remove()},
                    rules: {
                        "adult[full_name][0]": {required: !0, minlength: 2},
                        "adult[phone][0]": {required: !0, minlength: 2},
                        "adult[email][0]": {required: !0, email: !0},
                        "adult[country][0]": {required: !0},
                        "adult[city][0]": {required: !0},
                        
                    },
                    messages: {
                        "adult[full_name][0]": {
                            required: "Please enter a name",
                            minlength: "Your name must consist of at least 2 characters"
                        },
                        "adult[phone][0]": {
                            required: "Please enter a phone",
                            minlength: "Your phone must consist of at least 2 numbers"
                        },
                        "adult[email][0]": "Please enter a valid email address",
                        "adult[country][0]": "Please enter a Country",
                        "adult[city][0]": "Please enter a City"
                    }
                });
                jQuery(".js-wizard-classic-validation").bootstrapWizard({
                    tabClass: "",
                    previousSelector: ".wizard-prev",
                    nextSelector: ".wizard-next",
                    onTabShow: function (e, a, i) {
                        var r = a.find("li").length, s = i + 1, t = s / r * 100, n = a.parents(".block"), l = n.find(".wizard-progress > .progress-bar"), o = (n.find(".wizard-prev"), n.find(".wizard-next")), d = n.find(".wizard-finish");
                        l && l.css({width: t + "%"}), s >= r ? (o.hide(), d.show()) : (o.show(), d.hide())
                    },
                    
                    onNext: function () {
                        var a = e.valid();
                        $(".wizard-prev").removeClass("hidden");
                        return a ? void 0 : (i.focusInvalid(), !1)
                    },
                    onTabClick: function () {return !1}
                }), jQuery(".js-wizard-validation").bootstrapWizard({
                    tabClass: "",
                    previousSelector: ".wizard-prev",
                    nextSelector: ".wizard-next",
                    onTabShow: function (e, a, i) {
                        var r = a.find("li").length, s = i + 1, t = a.parents(".block"), n = t.find(".wizard-next"), l = t.find(".wizard-finish");
                        s >= r ? (n.hide(), l.show()) : (n.show(), l.hide())
                    },
                    onNext: function () {
                        var e = a.valid();
                        return e ? void 0 : (r.focusInvalid(), !1)
                    },
                    onTabClick: function () {return !1}
                })
            };
            return {init: function () { a()}}
        }();
        jQuery(function () {BaseFormWizard.init()});
    </script>
    <script>
        jQuery(function () {
            App.initHelpers('appear');
            jQuery('.js-card-form').card({
                container: '.js-card-container',
                formSelectors: {
                    numberInput: '#number',
                    expiryInput: 'input[name="month"], input[name="year"]',
                    cvcInput: '#cvc',
                    nameInput: '#name'
                }
            });
        });
    </script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        Stripe.setPublishableKey("pk_test_P0EjYfOJsYofkY5AMGlWt4gh");
        jQuery(function ($) {
            $('#form_stripe').submit(function (event) {
                var $form = $(this);
                $form.find('#submit').prop('disabled', true);
                Stripe.card.createToken($form, stripeResponseHandler);
                event.preventDefault();
            });
        });
        function stripeResponseHandler(status, response) {
            var $form = $('#form_stripe');
            if (response.error) {
                $form.find('.payment-errors').text(response.error.message);
                $form.find('.payment-errors').addClass('alert alert-danger');
                $form.find('#submit').prop('disabled', false);
                $('#submit').button('reset');
            } else {
                var token = response.id;
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                HTMLFormElement.prototype.submit.call($('#form_stripe')[0]);
            }
        }
        ;
    </script>
@stop