<?php

namespace App\Services;

class UploadFileService
{
    public function uploadToPublic($request, $inputName, $folderName)
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            $fileName = str_replace(' ', '', (date('YmdHis') . '_' . $file->getClientOriginalName()));
            $file->move($folderName, $fileName);

            return $fileName;
        }

        return null;
    }
}
