<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
                new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
                new Symfony\Bundle\TwigBundle\TwigBundle(),
                new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
                new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
// 				new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
                new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
                new AppBundle\AppBundle(),
                new IzBundle\IzBundle(),
        ];

// 		if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
// 			$bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
// 			$bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
// 			$bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
// 			$bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
// 			$bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
// 		}

        return $bundles;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/app/tmp/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/app/tmp/log/'.$this->getEnvironment();
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
