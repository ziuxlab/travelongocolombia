@extends('layouts.app.app')

@section('title')
    {{$item->tittle or $Config->tittle}}
@stop

@section('keywords')
    {{$item->keywords or $Config->keywords}}
@stop

@section('description')
    {{$item->meta_description or $Config->meta_description}}
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
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick-theme.min.css')}}">
@stop

@section('scripts_header')
    {{$Config->scripts_header}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @include('app.partials.banner')
    <div class="content-boxed">
        <div class="content-mini content-mini-full bg-transparent">
            <ol class="breadcrumb">
                <li class="h6"><a class="" href="{{url(trans('general.home'))}}">@lang('general.home')</a></li>
                <li class="h6">{{$item->tittle}}</li>
            </ol>
        </div>
    </div>
    <div class="bg-white">
        <div class="content-boxed ">
            <div class="content">
                <h2 class="h2 push-30 text-center">@lang('general.restaurants')</h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header ">
                                <h3 class="block-title">Camino Real Parrilla Bar</h3>
                            </div>
                            <div class="">
                                <!-- Slider -->
                                <div class="js-slider">
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/camino1.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/camino2.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/camino3.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/camino4.jpg')}}">
                                    </div>
                                </div>
                            
                            </div>
                            <div class="block-content">
                                <div class="h5 text-capitalize">@lang('general.details'):</div>
                                @if (App::isLocale('en'))
                                    <p class="text-justify">Here you will delight your palade with the more wonderful
                                                            tastes of Oriental salmon, seefood casserole, Shrimp Scampi,
                                                            grilled meats and trout in different preparations,
                                                            vegetarian food and "patacones" to accompany.</p>
                                @else
                                    <p class="text-justify"> Allí podrás deleitar tu paladar con los deliciosos sabores
                                                             que te ofrece el salmón oriental, la cazuela de mariscos,
                                                             langostinos al ajillo, las carnes a la parrilla, y las
                                                             truchas en sus diferentes presentaciones, platos
                                                             vegetarianos, y
                                                             los típicos patacones para acompañar.</p>
                                @endif
                            
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header ">
                                <h3 class="block-title">Helena adentro
                                </h3>
                            </div>
                            <div class="">
                                <!-- Slider -->
                                <div class="js-slider">
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/helena1.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/helena2.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/helena3.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/helena4.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/papaya1.jpg')}}">
                                    </div>
                                </div>
                            
                            </div>
                            <div class="block-content">
                                <div class="h5 text-capitalize">@lang('general.details'):</div>
                                @if (App::isLocale('en'))
                                    <p class="text-justify">At Helena Adentro you will enjoy of colombian food and
                                                            delight with 100% natural food.</p>
                                @else
                                    <p class="text-justify">Aquí disfrutaras de la esencia de la comida Colombiana,
                                                            deleitandote con alimentos 100% naturales.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header ">
                                <h3 class="block-title">Dar Papaya
                                </h3>
                            </div>
                            <div class="">
                                <!-- Slider -->
                                <div class="js-slider">
                                    
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/papaya3.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/papaya4.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/papaya5.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/papaya6.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/papaya7.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/papaya8.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies" class="img-responsive "
                                             src="{{asset('img/restaurants/papaya9.jpg')}}">
                                    </div>
                                </div>
                            
                            </div>
                            <div class="block-content">
                                <div class="h5 text-capitalize">@lang('general.details'):</div>
                                @if (App::isLocale('en'))
                                    <p class="text-justify">If you want to enjoy of the first resturant of latino-asian
                                                            food in the coffee area, you should come here.</p>
                                @else
                                    <p class="text-justify">Aquí disfrutaras del primer restaurante-bar de cocina latino
                                                            asiática del eje cafetero.</p>
                                @endif
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="block">
                    <div class="block-header ">
                        <h2 class="h2 push-30 text-center">@lang('general.Transport')</h2>
                        @if (App::isLocale('en'))
                            <h5 class="text-justify">With B.S. TRANSPORTES TURÍSTICOS  a transport turism
                                                     company with 12 years of experience, you will travel around
                                                     the colombian coffee area comfortably with a quality
                                                     service, security, eficiency and a full range of
                                                     vehicles.</h5>
                        @else
                            <h5 class="text-justify">B.S TRANSPORTES TURISTICOS te brinda la posibilidad de
                                                     recorrer el Eje cafetero colombiano de la manera más
                                                     confortable, ofreciendo a nuestros clientes un servicio de
                                                     calidad gracias a la seguridad,   eficiencia y variedad en
                                                     su gama de vehículos.</h5>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 flex">
                        <div class="col-sm-4">
                            <div class="block block-rounded block-bordered">
                                <img alt="travelongo allies" class="img-responsive "
                                     src="{{asset('img/restaurants/transporte1.jpg')}}">
                            
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="block block-rounded block-bordered">
                                <img alt="travelongo allies" class="img-responsive "
                                     src="{{asset('img/restaurants/transporte2.jpg')}}">
                            
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="block block-rounded block-bordered">
                                <img alt="travelongo allies" class="img-responsive "
                                     src="{{asset('img/restaurants/transporte3.jpg')}}">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

@stop

@section('scripts')
    {{$Config->scripts_footer}}
    <script src="{{asset('js/plugins/slick/slick.min.js')}}"></script>
    <script>
        $('.js-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: true,
            fade: true,
        });
    </script>
@stop