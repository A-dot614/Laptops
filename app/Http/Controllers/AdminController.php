<?php


namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AdminController extends Controller
{
    
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function create()
{
    return view('admin.laptops.create');
}

    public function card(){
        return view('admin.laptops.card');
    }

   public function index(){
        $laptops = Laptop::all();
        return view('admin.laptops.index', compact('laptops'));
   }

   public function postLaptops(Request $request)
{
//      dd($request->all());
    $request->validate([
        "model_name" => "required|string",
        "serial_number" => "required|string",
        "cpu_type" => "required|string",
        "memory" => "required|string",
        "price"=> "required|numeric",
        "primary_storage" => "required|string",
        "admin_notes" => "required|string",
        "status" => "nullable|string",
        "cover_image" => ["required","mimes:jpeg,png,jpg,gif,svg", "max:2048"]
    ]);

    $laptop = new Laptop();
    $laptop->model_name = $request->model_name;
    $laptop->price = $request->price;

    $slug = Str::slug($request->model_name . '-' . $request->serial_number);
    $status = $request->status === "Active" ? true : false;

        if($request->hasFile("cover_image")){
            // fetch the orignal image from temporary server storage
            $image = $request->file("cover_image");

            // name the image
            $imageName = "IMG-" . time() . "." . $image->getClientOriginalExtension();



            // store the image
            $image->storeAs("book_covers", $imageName, "public");
        }else{

        }

    Laptop::create([
    'cover_image' => $imageName ?? null,
    'model_name' => $request->model_name,
    'price'=> $request->price,
    'serial_number' => $request->serial_number,
    'cpu_type' => $request->cpu_type,
    'memory' => $request->memory,
    'primary_storage' => $request->primary_storage,
    'admin_notes' => $request->admin_notes,
    'slug' => Str::slug($request->model_name . '-' . $request->serial_number),
    'is_active' => $request->has('is_active') ? 1 : 0
]);
    return redirect()
        ->route("admin.laptops.index")
        ->with("success", "Laptop created successfully!");
}

}
