<?php

$galleries = array(1, 2, 5);

// echo "SELECT * FROM galleries WHERE id IN ('".join("','",$galleries)."') ";

echo "SELECT * FROM galleries WHERE id IN('".implode("','",$galleries).'\')';