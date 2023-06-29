<?php

namespace App\Trait;

use Illuminate\Support\Facades\Log;

Trait DeleteModel {
    //xóa user vĩnh viễn
    public function TraitDeleteUser($model) {
        try {
            $model->delete();
            $data = [
                'code' => 200,
                'message' => 'success',
            ];
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($data);

        } catch (\Exception $ex) {
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
            $data = [
                'code' => 500,
                'message' => 'fail',
            ];
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($data);
        }
    }
    
    //ẩn danh
    public function TraitHideRecord($model) {
        try {
            $model->active = 0;
            $model->save();
            $data = [
                'code' => 200,
                'message' => 'success',
            ];
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($data);

        } catch (\Exception $ex) {
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
            $data = [
                'code' => 500,
                'message' => 'fail',
            ];
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($data);
        }
    }
}