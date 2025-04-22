<?php

use Intervention\Image\Image;

if (!function_exists('saveImageVersion')) {
    /**
     * Guarda una versión de la imagen en el formato especificado.
     *
     * @param Image $img Objeto de imagen (Intervention Image).
     * @param string $format Formato de la imagen ('jpeg', 'webp', 'png').
     * @param string $storagePath Directorio de almacenamiento relativo.
     * @param string $filename Nombre del archivo sin extensión.
     * @param int|null $quality Calidad de la imagen (solo para JPEG y WebP).
     * @param bool $interlaced Si el PNG es entrelazado.
     * @return void
     */
    function saveImageVersion(Image $img, string $format, string $storagePath, string $filename, int $quality = null, bool $interlaced = false): void
    {
        $extension = strtolower($format);
        $filePath = storage_path("app/public/{$storagePath}/{$filename}.{$extension}");

        switch ($format) {
            case 'jpeg':
                $img->toJpeg($quality)->save($filePath);
                break;
            case 'webp':
                $img->toWebp($quality)->save($filePath);
                break;
            case 'png':
                $img->toPng($interlaced)->save($filePath);
                break;
            default:
                throw new \InvalidArgumentException("Formato no soportado: {$format}");
        }
    }
}