<?php
extendLayout();

_include('components.header');
_include('components.banner');
_include('components.starts');
_include('components.navbar');
_include('components.exhibition');
_include('components.footer');
section('title', $title);

section('content', function() {
    ob_start();
    echo _yield('header');
    echo _yield('banner');
    echo _yield('starts');
    echo _yield('navbar');
    echo _yield('exhibition');
    echo _yield('footer');
    return ob_get_clean();
});