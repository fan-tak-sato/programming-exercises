<?php

/**
 * PHP code to traverse hierarchical data (adjacency list model)
 */
 
mysql_connect("localhost", "root", "");
mysql_select_db("tree");

$data = array();
$index = array();
$query = mysql_query("SELECT id, parent_id, name FROM categories ORDER BY name");

while ($row = mysql_fetch_assoc($query)) {
    $id = $row['id'];
    $parent_id = $row['parent_id'] === NULL ? "NULL" : $row["parent_id"];
    $data[$id] = $row;
    $index[$parent_id][] = $id;
}

// echo "<pre>".print_r($index,1)."</pre>";
// echo "<pre>".print_r($data,1)."</pre>";

function display_child_nodes($parent_id, $level)
{
    global $data, $index;
    $parent_id = $parent_id === NULL ? "NULL" : $parent_id;
    if (isset($index[$parent_id])) {
        foreach ($index[$parent_id] as $id) {
			if ($level == 0)
				echo '<strong>'.$data[$id]["name"]."</strong><br>";
			else
				echo str_repeat("&nbsp;&nbsp;&nbsp;", $level).'<a href="#">'.$data[$id]["name"]."</a><br>";
            display_child_nodes($id, $level + 1);
        }
    }
}

function delete_child_nodes($parent_id)
{
    global $data, $index;
    $parent_id = $parent_id === NULL ? "NULL" : $parent_id;
    if (isset($index[$parent_id])) {
        foreach ($index[$parent_id] as $id) {
            delete_child_nodes($id);
            echo "DELETE FROM category WHERE id = " . $data[$id]["id"] . "\n";
        }
    }
}

/**
 * Retrieving nodes using variables passed as reference:
 * Get ids of child nodes
 */
function get_child_nodes1($parent_id, &$children)
{
    global $data, $index;
    $parent_id = $parent_id === NULL ? "NULL" : $parent_id;
    if (isset($index[$parent_id])) {
        foreach ($index[$parent_id] as $id) {
            $children[] = $id;
            get_child_nodes1($id, $children);
        }
    }
}

/*
 * Retrieving nodes using return statement:
 * Get ids of child nodes
 */
function get_child_nodes2($parent_id)
{
    $children = array();
    global $data, $index;
    $parent_id = $parent_id === NULL ? "NULL" : $parent_id;
    if (isset($index[$parent_id])) {
        foreach ($index[$parent_id] as $id) {
            $children[] = $id;
            $children = array_merge($children, get_child_nodes2($id));
        }
    }
    return $children;
}

/**
 * Display parent nodes
 */
function display_parent_nodes($id)
{
    global $data;
    $current = $data[$id];
    $parent_id = $current["parent_id"] === NULL ? "NULL" : $current["parent_id"];
    $parents = array();
    while (isset($data[$parent_id])) {
        $current = $data[$parent_id];
        $parent_id = $current["parent_id"] === NULL ? "NULL" : $current["parent_id"];
        $parents[] = $current["name"];
    }
    echo implode(" > ", array_reverse($parents));
}

display_child_nodes(NULL, 0);
// delete_child_nodes(NULL);

/*
$children = array();
get_child_nodes1(5, $children); // TV and Audio
echo implode("\n", $children);
*/

// display_parent_nodes(24); /* Breadcrumb */