<?php

namespace App\Trait;

Trait UpLoadImage {
    public function TraitUpLoadFile($request, $fieldName, $folderName) {
        if($request->hasFile($fieldName)) {
            $file = $request->$fieldName;
            $fileName = $file->getClientOriginalName();
            $filePath = $file->move($folderName, $fileName);
            $pathName = $filePath->getPathname();
            $upLoadData = [
                'image_name' => $fileName,
                'image_path' => $pathName,
            ];
            return $upLoadData;
        }
        return null;
    }

    public function TraitMultiUpLoadFile($file, $folderName) { 
        $fileName = $file->getClientOriginalName();
        $filePath = $file->move($folderName, $fileName);
        $pathName = $filePath->getPathname();
        $upLoadData = [
            'image_name' => $fileName,
            'image_path' => $pathName,
        ];
        return $upLoadData;
    }
}
