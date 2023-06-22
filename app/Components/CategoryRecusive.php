<?php

namespace App\Components;

use App\Models\Category;

class CategoryRecusive 
{
    private $html;
    public function __construct()
    {
        $this->html = '';
    }
    public function categoryRecusiveCreate($parentId = 0, $text ='') {
        $data = Category::where([
            ['parent_id',  $parentId],
            ['active', 1],
        ])->get();
        foreach ($data as $value) {
            $this->html .= "<option value=$value->id>$text $value->name</option>";
            $this->categoryRecusiveCreate($value->id, $text.'--');
        }
        return $this->html;
    }

    public function categoryRecusiveEdit($parentIdSelect, $parentId = 0, $text ='') {
        $data = Category::where([
            ['parent_id',  $parentId],
            ['active', 1],
        ])->get();
        foreach ($data as $value) {
            if(!empty($parentIdSelect) && $parentIdSelect == $value->id) {
                $this->html .= "<option selected value=$value->id>$text $value->name</option>";
            } else {
                $this->html .= "<option value=$value->id>$text $value->name</option>";
            }
            $this->categoryRecusiveEdit($parentIdSelect, $value->id, $text.'--');
        }
        return $this->html;
    }
}