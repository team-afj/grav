<?php

declare(strict_types=1);

namespace Grav\Framework\Media\Interfaces;

use Grav\Common\Media\Interfaces\MediaInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * Interface MediaManipulationInterface
 * @package Grav\Framework\Media\Interfaces
 */
interface MediaManipulationInterface extends MediaInterface
{
    /**
     * @param UploadedFileInterface $uploadedFile
     */
    public function uploadMediaFile(UploadedFileInterface $uploadedFile) : void;

    /**
     * @param string $filename
     */
    public function deleteMediaFile(string $filename) : void;
}