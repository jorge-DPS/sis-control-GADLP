<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

if (!function_exists('clearTemporaryFiles')) {
    function clearTemporaryFiles()
    {
        $tempDirectory = 'livewire-tmp';

        // Verifica si el directorio existe antes de intentar borrar los archivos
        if (Storage::disk('local')->exists($tempDirectory)) {
            $files = Storage::disk('local')->files($tempDirectory);
            
            // Borra todos los archivos en el directorio
            foreach ($files as $file) {
                Storage::disk('local')->delete($file);
                Log::info("Archivo temporal eliminado: $file");
            }
        }else {
            Log::warning("El directorio '$tempDirectory' no existe.");
        }
    }
}
