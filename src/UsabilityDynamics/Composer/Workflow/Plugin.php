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

namespace UsabilityDynamics\Composer\Workflow;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PluginEvents;
use Composer\Plugin\PreFileDownloadEvent;

/**
 * Composer Plugin for Workflow functionality
 *
 * @author Nils Adermann <naderman@naderman.de>
 */
class Plugin implements PluginInterface, EventSubscriberInterface {

    protected $composer;
    protected $io;

    public function activate(Composer $composer, IOInterface $io) {
	    // die( "all your base are belong to us.'\n");
        $this->composer = $composer;
        $this->io = $io;
    }

    public static function getSubscribedEvents() {

        return array(
            // PluginEvents::PRE_FILE_DOWNLOAD => array( array('onPreFileDownload', 0) ),
        );

    }

    public function onPreFileDownload(PreFileDownloadEvent $event) {

    }
}
