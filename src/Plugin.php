<?php
namespace cms\composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{

    /**
     * (non-PHPdoc)
     *
     * @see \Composer\Plugin\PluginInterface::activate()
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $manager = $composer->getInstallationManager();
        
        // framework
        $manager->addInstaller(new FrameworkInstaller($io, $composer));
    }
}