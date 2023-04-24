<?php

namespace Laudeco\Mindee;

use Laudeco\Mindee\Domain\File\FileInterface;

interface MindeeClientInterface
{

    public function parse(FileInterface $file);

}