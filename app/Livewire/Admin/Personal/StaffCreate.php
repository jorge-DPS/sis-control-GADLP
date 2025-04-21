<?php

namespace App\Livewire\Admin\Personal;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

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

        // create new manager instance with desired driver
        $manager = new ImageManager(new Driver());

        // read image from filesystem
        $image = $manager->read('images/example.jpg');
        // read image from file system
        dd($datos);
        // read image from filesystem
        $image = $manager->read('images/example.jpg');
    }
    public function render()
    {
        return view('livewire.admin.personal.staff-create');
    }
}
