<?php

declare(strict_types = 1);

namespace Universal\ComposerInstallersExtender;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Universal\ComposerInstallersExtender\Installers\Installer;

class Plugin implements PluginInterface
{
    /**
     * {@inheritDoc}
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
