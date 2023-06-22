<?php

namespace App\Components;

use App\Models\Menu;

class MenuRecusive {
    private $html;

    public function __construct()
    {
        $this->html = '';
    }

    public function menuRecusiveCreate($parentId = 0, $text = '') {
        $data = Menu::where([
            ['parent_id', $parentId],
            ['active', 1],
        ])->get();
        foreach ($data as $value) {
            $this->html .= "<option value=$value->id>$text $value->name<option>";
            $this->menuRecusiveCreate($value->id, $text.'--');
        }
        return $this->html;
    }

    public function menuRecusiveEdit($parentIdSelect, $parentId = 0, $text = '') {
        $data = Menu::where([
            ['parent_id', $parentId],
            ['active', 1],
        ])->get();
        foreach ($data as $value) {
            if(!empty($parentIdSelect) && $parentIdSelect == $value->id) {
                $this->html .= "<option selected value=$value->id>$text $value->name<option>";
            } else {
                $this->html .= "<option value=$value->id>$text $value->name<option>";
            }
            $this->menuRecusiveEdit($parentIdSelect, $value->id, $text.'--');
        }
        return $this->html;
    }
}