<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

if (! function_exists('ensureDirectoryExists')) {
    function ensureDirectoryExists($path)
    {
        // Verificar si el directorio existe
        if (!File::exists($path)) {
            // Si no existe, crear el directorio
            File::makeDirectory($path, 0755, true);  // 0755 es el permiso de acceso
            Log::info("Directorio creado: {$path}");  // Log de éxito
        } else {
            // Si ya existe, loguear que no es necesario crear el directorio
            Log::info("El directorio ya existe: {$path}");  // Log si ya existe
        }
    }
}