<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    public function upload(Request $request)
    {



        if ($request->hasFile('file')) {

            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName); // ذخیره فایل در مسیر مورد نظر، مانند storage/app/uploads
            $uploadedFiles = $filePath;

            return response()->json(['files' => $uploadedFiles], 200);
        }
        else {
            return response()->json(['success' => false, 'message' => 'خطا در بارگذاری فایل']);
        }

    }

    public function remove(Request $request)
    {
        $id = $request->input('id');
        // اینجا کدی برای حذف فایل از سیستم فایل شما قرار بگیرد
        // مثال:
        Storage::delete('uploads/' . explode("-",$id)[2]);

        // در صورت موفقیت آمیز بودن حذف فایل
        return response()->json(['success' => true, 'message' => 'فایل با موفقیت حذف شد']);
    }


}
