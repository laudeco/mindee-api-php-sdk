<?php

namespace Laudeco\Mindee\Domain\File;

final class FilePath implements FileInterface
{

    private function __construct(private string $path){
        if(!is_file($this->path)){
            throw new \InvalidArgumentException('File does not exist');
        }
    }

    public static function fromPath(string $path):self{
        return new self($path);
    }

    public function content(): string
    {
        return file_get_contents($this->path);
    }

}