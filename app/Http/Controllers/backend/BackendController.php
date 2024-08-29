<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BackendController extends Controller
{

    public function dashboard(){
        $data = ["title" =>"Dashboard | Prompt Xchange"];
        return view('backend.account-dashboard',$data);
    }


public  function create_subscription ()
{
    $data = ["title" =>"Create Subscription  | Prompt Xchange"];
    return view('backend.subscriptions.create',$data);

}

    public function get_subs()
    {
        $subscriptions = Pricing::all(); // Adjust according to your model and query
        return response()->json($subscriptions);
    }

    public  function list_subscription ()
    {
        $data = ["title" =>"Subscriptions  | Prompt Xchange"];
        return view('backend.subscriptions.list',$data);

    }

    public function store_subscription(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'features' => 'required|array',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $price = Pricing::create([
                'name' => $request->name,
                'price' => $request->price,
                'features' => $request->features,
            ]);

            return response()->json(['success' => 'Pricing added successfully!', 'price' => $price], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while saving the pricing.'], 500);
        }
    }

    public function update_subscription(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'features' => 'required|array',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $price = Pricing::findOrFail($id);
            $price->update([
                'name' => $request->name,
                'price' => $request->price,
                'features' => $request->features,
            ]);

            return response()->json(['success' => 'Pricing updated successfully!', 'price' => $price], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Pricing not found.'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the pricing.'], 500);
        }
    }

    public function destroy_subscription($id)
    {
        try {
            $price = Pricing::findOrFail($id);
            $price->delete();

            return response()->json(['success' => 'Pricing deleted successfully!'], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Pricing not found.'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while deleting the pricing.'], 500);
        }
    }



    public function testApi(Request $request)
{

     $request->validate([
        'file' => 'nullable|file|mimes:jpg,png,jpeg',
        'inpainting' => 'nullable|file|mimes:jpg,png,jpeg',
    ]);
    $model =  $request->model_name;
    $image_prompt = $request->file('image_prompt');
    $inpainting = $request->file('inpainting');
    $positive_prompt = $request->positive_prompt;
    $negative_prompt = $request->negative_prompt;
    $num_inference_steps = $request->steps;
    $guidance_scale  = $request->cdg_scale;
    $samples =  $request->samples;

    if (empty($image_prompt) && empty($inpainting)) {

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://modelslab.com/api/v3/text2img', [
            'key' => 'HlUWYMUSIX0oQHHdmOJCI4ECICejcJxbcZuwdr15cie9hEMTHxJubfeuRSnP',
            'prompt' => $positive_prompt,
            'negative_prompt' => $negative_prompt,
            'width' => '1024',
            'height' => '1024',
            'samples' => $samples,
            'num_inference_steps' => $num_inference_steps,
            'guidance_scale' => $guidance_scale,

        ]);
    } elseif (!empty($image_prompt)) {

        $imageName = time() . '.' . $image_prompt->getClientOriginalExtension();
        $imagePath = $image_prompt->storeAs('public/image_prompt_images', $imageName);
        $imageUrl = asset('storage/image_prompt_images/' . $imageName);


        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://modelslab.com/api/v3/img2img', [
            'key' => 'HlUWYMUSIX0oQHHdmOJCI4ECICejcJxbcZuwdr15cie9hEMTHxJubfeuRSnP',
            'prompt' => $positive_prompt,
            'negative_prompt' => $negative_prompt,
            'init_image' => $imageUrl,
            'width' => '1024',
            'height' => '1024',
            'samples' => $samples,
            'num_inference_steps' => $num_inference_steps,
            'guidance_scale' => $guidance_scale,
            'strength' => 0.7,

        ]);
    } elseif (!empty($inpainting)) {

        $inpainting_imageName = time() . '.' . $inpainting->getClientOriginalExtension();
        $inpaing_imagePath = $image_prompt->storeAs('public/inpaint_images', $inpainting_imageName);
        $inpaint_imageUrl = asset('storage/inpaing_images/' . $inpainting_imageName);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://modelslab.com/api/v6/realtime/inpaint', [
            'key' => 'HlUWYMUSIX0oQHHdmOJCI4ECICejcJxbcZuwdr15cie9hEMTHxJubfeuRSnP',
            'prompt' => $positive_prompt,
            'negative_prompt' => $negative_prompt,
            'init_image' => "$inpaint_imageUrl",
            'mask_image' => "https://raw.githubusercontent.com/CompVis/stable-diffusion/main/data/inpainting_examples/overture-creations-5sI6fQgYIuo_mask.png" ,
            'width' => '1024',
            'height' => '1024',
            'samples' => $samples,
            'temp' => 'yes',
            'safety_checker'=>'no',
            'num_inference_steps' => $num_inference_steps,
            'guidance_scale' => $guidance_scale,
            'strength' => 0.7,
            'seed' =>null,
            'webhook'=> null,
            'track_id'=> null

        ]);
    }

    if ($response->successful()) {
        $result = $response->json();
        return response()->json($result);
    } else {
        $error = $response->body();
        return response()->json(['error' => $error], $response->status());
    }
}


}
