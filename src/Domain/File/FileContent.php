<?php

namespace Laudeco\Mindee\Domain\File;

final class FileContent implements FileInterface
{
    private function __construct(
        private string $content
    ) {
    }

    public static function fromContent(string $content): self
    {
        return new self($content);
    }

    public function content(): string
    {
        return $this->content;
    }

}
