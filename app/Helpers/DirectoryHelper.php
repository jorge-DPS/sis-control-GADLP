<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

if (!function_exists('ensureDirectoryExists')) {
    /**
     * Verifica si un directorio existe y lo crea si no.
     *
     * @param string $directory Ruta del directorio.
     * @param int $permissions Permisos para el directorio.
     * @param bool $recursive Si se crean directorios de manera recursiva.
     * @return void
     */
    function ensureDirectoryExists(string $directory, int $permissions = 0755, bool $recursive = true): void
    {
        if (!File::exists($directory)) {
            try {
                File::makeDirectory($directory, $permissions, $recursive);
                Log::info("El directorio '{$directory}' fue creado exitosamente.");
            } catch (\Exception $e) {
                Log::warning("No se pudo crear el directorio '{$directory}'. Error: {$e->getMessage()}");
            }
        } else {
            Log::info("El directorio '{$directory}' ya existe.");
        }
    }
}
