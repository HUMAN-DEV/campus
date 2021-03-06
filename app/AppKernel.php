<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
	public function __construct ($environment, $debug)
	{
		date_default_timezone_set ('America/Bogota');
		ini_set ('memory_limit', '128M');
		parent::__construct ($environment, $debug);
	}

	public function registerBundles ()
	{
		$bundles = [
			new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
			new Symfony\Bundle\SecurityBundle\SecurityBundle(),
			new Symfony\Bundle\TwigBundle\TwigBundle(),
			new Symfony\Bundle\MonologBundle\MonologBundle(),
			new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
			new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
			new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
			new AppBundle\AppBundle(),
			new Sonata\CoreBundle\SonataCoreBundle(),
			new Sonata\BlockBundle\SonataBlockBundle(),
			new Knp\Bundle\MenuBundle\KnpMenuBundle(),
			new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
			new Sonata\AdminBundle\SonataAdminBundle(),
			new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
			new FOS\UserBundle\FOSUserBundle(),
			new Sonata\UserBundle\SonataUserBundle(),
			new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
			new FOS\JsRoutingBundle\FOSJsRoutingBundle(),

		];

		if (in_array ($this->getEnvironment (), ['dev', 'test'], true)) {
			$bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
			$bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
			$bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
			$bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
		}

		return $bundles;
	}

	public function registerContainerConfiguration (LoaderInterface $loader)
	{
		$loader->load ($this->getRootDir () . '/config/config_' . $this->getEnvironment () . '.yml');
	}
}
