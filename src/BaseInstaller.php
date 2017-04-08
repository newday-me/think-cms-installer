<?php
namespace cms\composer;

use Composer\Installer\LibraryInstaller;

class BaseInstaller extends LibraryInstaller
{

    /**
     * cms路径
     *
     * @return string
     */
    public function getCmsPath()
    {
        if ($this->composer->getPackage()) {
            $extra = $this->composer->getPackage()->getExtra();
            if (! empty($extra['cms-path'])) {
                return $extra['cms-path'];
            }
        }
        
        return 'thinkcms';
    }

}