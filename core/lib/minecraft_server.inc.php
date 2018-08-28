<?php

function server_online($server, $port)
{
  fsockopen($server, $port, $errno, $errstr, 1);
  return ($errno === 0 );
}

?>
