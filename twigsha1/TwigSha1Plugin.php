<?php
/**
 * @package   Twig Base64 Encode
 * @author    Louder Than Ten
 * @copyright Copyright 2014
 * @link      https://github.com/louderthanten/Craft-TwigSha1Encode
 * @license   MIT
 */
namespace Craft;

class TwigSha1Plugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Twig Sha1 Encode');
    }

    function getVersion()
    {
        return '0.1';
    }

    function getDeveloper()
    {
        return 'Louder Than Ten';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/louderthanten/';
    }

    function addTwigExtension()
    {
        Craft::import('plugins.twigsha1.twigextensions.TwigSha1Extension');
        return new TwigSha1Extension();
    }
}
