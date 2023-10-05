<?php

namespace Laudeco\Mindee\Domain\Response;

final class Inference
{

    private \DateTimeImmutable $finishedAt;
    private \DateTimeImmutable $startedAt;
    private int $processingTime;
    private bool $isRotationApplied;
    private Prediction $prediction;

    /**
     * @var array<Page>
     */
    private array $pages;


}