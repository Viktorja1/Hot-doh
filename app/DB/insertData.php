<?php

require_once (__DIR__ . '/DB.php');

$insert = new DB();

$sql = "INSERT IGNORE INTO article 
(text, updated_at, created_at, title, img, price)
   VALUES 
   ('New York City Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2020-09-01 22:57:12', '2020-09-01 22:57:12', 'New York City', 'app/static/img/New_York_city.png', '5$'), 
  ('Chicago Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2020-09-01 22:57:12', '2020-09-01 22:57:12', 'Chicago', 'app/static/img/Chicago.png', '11$'),
     ('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2020-09-01 22:57:12', '2020-09-01 22:57:12', 'Atlanta', 'app/static/img/Atlanta.png', '3$'), 
  ('Test Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2020-09-01 22:57:12', '2020-09-01 22:57:12', 'Kansas', 'app/static/img/Kansas.png', '10$')";

$insert->connect($sql);
