<?php
namespace cms\composer;

use Composer\Package\PackageInterface;

class FrameworkInstaller extends BaseInstaller
{

    /**
     * (non-PHPdoc)
     *
     * @see \Composer\Installer\LibraryInstaller::getInstallPath()
     */
    public function getInstallPath(PackageInterface $package)
    {
        return $this->getCmsPath();
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Composer\Installer\LibraryInstaller::supports()
     */
    public function supports($packageType)
    {
        return 'think-cms-framework' === $packageType;
    }
}