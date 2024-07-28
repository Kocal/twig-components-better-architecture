<?php
declare(strict_types=1);

namespace App\Component\Alert;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('Alert', template: 'Alert/Alert.html.twig')]
final class Alert
{
    public ?string $type = null;
}
