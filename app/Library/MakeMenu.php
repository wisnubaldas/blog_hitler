<?php
class MakeMenu
{
    
    public static function make_tree_array($items) {

        $childs = [];
    
        foreach ($items as &$item) $childs[$item['parent_id']][] = &$item;
        unset($item);
    
        foreach ($items as &$item) if (isset($childs[$item['id']]))
            $item['childs'] = $childs[$item['id']];
    
        return $childs[0];
    }
    public static function buildTreeFromObjects($items) {

        $childs = [];
    
        foreach ($items as $item)
            $childs[$item->parent_id][] = $item;
    
        foreach ($items as $item) if (isset($childs[$item->id]))
            $item->childs = $childs[$item->id];
    
        return $childs[0];
    }
    
}
