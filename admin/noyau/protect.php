<?php

if (!isset($_SESSION['user'])):
    header('location: ' . BASE_URL_PUBLIC . 'users/login');
  endif;
