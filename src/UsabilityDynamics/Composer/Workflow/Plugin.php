<?php
/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 * Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UsabilityDynamics\Composer\Workflow {

	use Composer\Composer;
	use Composer\EventDispatcher\EventSubscriberInterface;
	use Composer\Config;
	use Composer\IO\IOInterface;
	use Composer\Plugin\PluginInterface;
	use Composer\Plugin\PluginEvents;
	use Composer\Plugin\PreFileDownloadEvent;
	use Composer\Plugin\CommandEvent;

	//$ application = new Application();

	// s$application->run();
	// die( '-sadflkjf');

	//die( '<pre>' . print_r( $application->getIO(), true ) . '</pre>');

	/**
	 * Composer Plugin for Workflow functionality
	 *
	 * @author Nils Adermann <naderman@naderman.de>
	 */
	class Plugin implements PluginInterface, EventSubscriberInterface {

		protected $composer;
		protected $io;

		/**
		 * @see https://getcomposer.org/doc/articles/plugins.md
		 *
		 * @param Composer $composer
		 * @param IOInterface $io
		 */
		public function activate( Composer $composer, IOInterface $io ) {
			//die( "all your base are belong to us. \n");

			// Creates new config instance...
			// $this->config = new Config();

			// Gets actual instance config.
			// die( '<pre>' . print_r( $composer->getConfig(), true ) . '</pre>');
			// die( '<pre>' . print_r( $composer->getPluginManager(), true ) . '</pre>');

			// get a config setting
			// die( $this->config->get( 'vendor-dir' ) );
			// die( Composer::BRANCH_ALIAS_VERSION );

			 # die( '<pre>' . print_r( get_class_methods( $composer ), true ) . '</pre>');

			if( method_exists( $composer, 'setPackage' ) ){
				// die('setPackage');
			}
			//$composer->setDefaultCommand();

			$this->composer = $composer;
			$this->io       = $io;

			//$io->ask( 'Wanna party?' );
			// $io->askAndValidate( 'Really wanna party?' );
			//$io->write( 'asdf' );

			// die( '<pre>' . print_r( $composer->getConfig(), true ) . '</pre>');
			// $installer = new TemplateInstaller($io, $composer);
			// $composer->getInstallationManager()->addInstaller($installer);

			// Workflow\PushCommand();

		}

		public static function getSubscribedEvents() {

			return array(
				PluginEvents::PRE_FILE_DOWNLOAD => array( array( 'onPreFileDownload', 0 ) ),
				PluginEvents::COMMAND           => array( array( 'commandHandler', 0 ) ),
			);

		}

		/**
		 * Catches All Evensts, inclduing script events.
		 *
		 * @see https://getcomposer.org/doc/articles/scripts.md#event-names
		 *
		 * @param CommandEvent $event
		 */
		public function commandHandler( CommandEvent $event ) {

			//$_interface = new CLI();
			//$_interface->write( 'asdf' );
			// IOInterface::ask( 'asdf' );

			//$this->io->write( $event->getName() . ' -> ' . '' , true );
			//$this->io->write( $event->getCommandName() . ' -> ' . '' , true );
			// $this->io->write( $event->getName() . ' -> ' . $event->getCommandName(), true );

		}

		public function onPreFileDownload( PreFileDownloadEvent $event ) {

			$protocol = parse_url( $event->getProcessedUrl(), PHP_URL_SCHEME );

			if ( $protocol === 'gs' ) {
				// $awsClient = new GoogleStorageClient($this->io, $this->composer->getConfig());
				// $s3RemoteFilesystem = new S3RemoteFilesystem($this->io, $event->getRemoteFilesystem()->getOptions(), $awsClient);
				// $event->setRemoteFilesystem($s3RemoteFilesystem);
			}
		}

	}

}