<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCsc4toj\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCsc4toj/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCsc4toj.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCsc4toj\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerCsc4toj\appDevDebugProjectContainer([
    'container.build_hash' => 'Csc4toj',
    'container.build_id' => '64c02475',
    'container.build_time' => 1615372527,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCsc4toj');
