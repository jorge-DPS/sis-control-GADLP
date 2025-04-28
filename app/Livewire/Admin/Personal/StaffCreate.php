<?php

namespace App\Livewire\Admin\Personal;

use App\Models\Admin\UserType;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
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
    public $user_type_id;
    public $phone;
    public $password;
    public $password_confirmation;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'last_name' => 'required|string',
            'identity_card' => ['required', 'numeric', 'lowercase', 'unique:users'],
            'photo' => 'nullable|image|max:1024',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'user_type_id' => 'required|numeric',
            'phone' => 'numeric',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => 'required|min:8',
        ];
    }

    public function storeStaff()
    {
        $datos = $this->validate();

        $manager = new ImageManager(
            new Driver()
        );

        $storagePath = "user/images";

        // Asegurarse de que el directorio principal existe
        ensureDirectoryExists(storage_path("app/public/{$storagePath}"));

        if ($this->photo) {
            // Guardar la imagen original en el almacenamiento
            $imagen = $this->photo->store($storagePath, 'public');
            $filename = pathinfo($imagen, PATHINFO_FILENAME);

            // Procesar la imagen original usando el path real
            $img = $manager->read($this->photo->getRealPath()); // Usar getRealPath() en el archivo cargado
            $img->scale(1500, 1500);

            // Guardar las versiones de la imagen utilizando el helper
            saveImageVersion($img, 'jpeg', $storagePath, $filename, 80);
            saveImageVersion($img, 'webp', $storagePath, $filename, 80);
            saveImageVersion($img, 'png', $storagePath, $filename);

            $datos['photo'] = $filename;
        }


        // Obtener las iniciales de los nombres y apellidos
        $nameParts = explode(' ', $this->name); // Divide el nombre completo en partes
        $lastNameParts = explode(' ', $this->last_name); // Divide el apellido completo en partes

        // Iniciales del nombre y apellido
        $firstNameInitial = strtoupper(substr($nameParts[0], 0, 1)); // Primera letra del primer nombre
        $secondNameInitial = isset($nameParts[1]) ? strtoupper(substr($nameParts[1], 0, 1)) : ''; // Segunda letra del segundo nombre, si existe
        $firstLastNameInitial = strtoupper(substr($lastNameParts[0], 0, 1)); // Primera letra del primer apellido
        $secondLastNameInitial = isset($lastNameParts[1]) ? strtoupper(substr($lastNameParts[1], 0, 1)) : ''; // Segunda letra del segundo apellido, si existe

        // Concatenar todas las iniciales (ejemplo: "JCPG" para "Juan Carlos Pérez Gómez")
        $initials = $firstNameInitial . $secondNameInitial . $firstLastNameInitial . $secondLastNameInitial;

        // añadir las iniciales para los datos
        $datos['cod_user'] = $initials;

        // Crear el registro en la base de datos
        User::create($datos);

        $this->reset(); // Esto reseteará todas las propiedades a sus valores iniciales
        // Redirigir al índice después de guardar el nuevo personal
        return redirect()->route('personal.index'); // Reemplaza 'personal.index' con la ruta de tu índice
    }

    public function render()
    {
        $typeUsers = UserType::all();
        return view('livewire.admin.personal.staff-create', [
            'type_users' => $typeUsers,
        ]);
    }
}
