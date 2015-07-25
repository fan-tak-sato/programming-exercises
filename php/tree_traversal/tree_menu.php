<?php

/**
 * PHP code to traverse hierarchical data (adjacency list model)
 */
mysql_connect("localhost", "root", "");
mysql_select_db("tree");

$data = array();
$index = array();
$queryResult = mysql_query("SELECT id, parent_id, name FROM categories ORDER BY name");

$menuData = array( 
    'items' => array(), 
    'parents' => array()
);

while ($menuItem = mysql_fetch_assoc($queryResult))
{
	$menuData['items'][$menuItem['id']] = $menuItem;
	$menuData['parents'][$menuItem['parent_id']][] = $menuItem['id'];
}

function buildMenu($parentId, $menuData) 
{ 
    $html = ''; 

    if (isset($menuData['parents'][$parentId]))
    {
        $html = '<ul>';
        foreach ($menuData['parents'][$parentId] as $itemId) 
        {
            $html .= '<li>'. $menuData['items'][$itemId]['name'];

            $html .= buildMenu($itemId, $menuData); 

            $html .= '</li>';
        }
        $html .= '</ul>';
    }

    return $html; 
} 

// Keep an eye on $parentId, it can be null or 0
echo buildMenu(null, $menuData);
