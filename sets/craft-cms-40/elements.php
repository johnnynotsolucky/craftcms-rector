<?php

declare(strict_types = 1);

use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\ValueObject\MethodCallRename;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function(ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(RenameMethodRector::class)
        ->configure([
            new MethodCallRename('craft\base\Element', 'getHasFreshContent', 'getIsFresh'),
            new MethodCallRename('craft\base\Element', 'getIsUnsavedDraft', 'getIsUnpublishedDraft'),
        ]);
};