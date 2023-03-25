<?php

/**
 *
 * Helper Fonksiyonları
 *
 */

use Illuminate\Http\Request;

function findByGroupId($gid, $array) {
    $response = array();
    foreach($array as $key => $value) {
        if($value["gid"] == $gid) {
            $response[] = $value;
        }
    }
    return $response;
}

function DOMinnerHTML(\DOMNode $element)
{
    $innerHTML = "";
    $children  = $element->childNodes;

    foreach ($children as $child)
    {
        $innerHTML .= $element->ownerDocument->saveHTML($child);
    }

    return $innerHTML;
}
