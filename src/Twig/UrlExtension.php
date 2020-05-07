<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class UrlExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('formatUrl', [$this, 'formatUrl']),
        ];
    }

    public function formatUrl($url)
    {
        if (preg_match('/dailymotion/', $url)) {
            $url = preg_replace('#/video/#', '/embed/video/', $url);
        }
        elseif (preg_match('#youtu\.*be#', $url)) {
            $url = preg_replace('#/watch\?v=#', '/embed/', $url);
        }
            
        return $url;
    }
}