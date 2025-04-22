<?php

namespace App\Livewire\Admin\Personal;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class StaffCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $last_name;
    public $identity_card;
    public $photo;
    public $email;
    public $rol;
    public $phone;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|string',
        'last_name' => 'required|string',
        'identity_card' => 'required|numeric',
        'photo' => 'image|max:1024',
        'email' => 'required|email',
        'rol' => 'required|numeric',
        'phone' => 'numeric',
        'password' => 'required|min:8|confirmed', // 'confirmed' se encarga de validar que coincidan
        'password_confirmation' => 'required|min:8',
    ];

    public function storeStaff()
    {
        $datos = $this->validate();
        // Generar un nombre único para la imagen
        $uniqueName = uniqid(); // Puedes usar Str::random() o cualquier otro método si prefieres

        $manager = new ImageManager(
            new Driver()
        );

        $storagePath = "user/images";

         // Asegurarse de que el directorio principal existe
         ensureDirectoryExists(storage_path("app/public/{$storagePath}"));

         foreach ($this->images as $image) {
             // Guardar la imagen original en el almacenamiento
             $imagen = $image->store('activity/galery', 'public');
             $filename = pathinfo($imagen, PATHINFO_FILENAME);

             // Procesar la imagen original
             $img = $manager->read($image->getRealPath());
             $img->scale(1500, 1500);

             // Guardar las versiones de la imagen utilizando el helper
             saveImageVersion($img, 'jpeg', $storagePath, $filename, 80);
             saveImageVersion($img, 'webp', $storagePath, $filename, 80);
             saveImageVersion($img, 'png', $storagePath, $filename);

             // Guardar el thumbnail
             $thumbStoragePath = "{$storagePath}/thumbs";
             ensureDirectoryExists(storage_path("app/public/{$thumbStoragePath}")); // Asegura el directorio de thumbnails
             saveImageVersion($img->scale(width: 300), 'webp', $thumbStoragePath, $filename, 80);

             // Crear el registro en la base de datos
             ActivityImage::create([
                 'image_url' => $filename,
                 'thumbnail_url' => $filename,
                 'activity_id' => $this->activity->id,
             ]);
         }
        dd($datos);
        // read image from filesystem
        $image = $manager->read('images/example.jpg');
    }
    public function render()
    {
        return view('livewire.admin.personal.staff-create');
    }
}
