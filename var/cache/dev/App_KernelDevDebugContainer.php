<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXhlM5SF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXhlM5SF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXhlM5SF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXhlM5SF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXhlM5SF\App_KernelDevDebugContainer([
    'container.build_hash' => 'XhlM5SF',
    'container.build_id' => 'c8c0d298',
    'container.build_time' => 1579169294,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXhlM5SF');
