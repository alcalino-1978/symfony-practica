<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVmd8Kxh\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVmd8Kxh/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerVmd8Kxh.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerVmd8Kxh\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerVmd8Kxh\App_KernelProdContainer([
    'container.build_hash' => 'Vmd8Kxh',
    'container.build_id' => '727e8ef1',
    'container.build_time' => 1678542329,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVmd8Kxh');
