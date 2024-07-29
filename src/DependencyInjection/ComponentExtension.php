<?php
declare(strict_types=1);

namespace App\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\AbstractExtension;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

final class ComponentExtension extends AbstractExtension
{
    public function __construct(
        private readonly string $componentsDir,
    ) {
    }

    public function prependExtension(ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->extension('twig', [
            'paths' => [$this->componentsDir],
        ]);

        $container->extension('stimulus', [
            'controller_paths' => [$this->componentsDir],
        ]);

        $container->extension('framework', [
            'asset_mapper' => [
                'paths' => [$this->componentsDir],
            ]
        ]);
        
        $container->extension('twig_component', [
            'defaults' => [
                'App\\Component\\' => $this->componentsDir,
            ]
        ]);
    }
}
