<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaController extends Controller
{
    public function destroy(Request $request)
    {
        try {
            $media = Media::find($request->data);

            $media->delete();

            return response()->json(['message' => "image deleted"]);
        } catch (\Exception $e) {
            Log::error(
                'Product could not be deleted',
                [
                    'error' => $e,
                ]
            );
        }
    }
}
