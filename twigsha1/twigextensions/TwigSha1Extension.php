<?php

namespace Craft;

class TwigSha1Extension extends \Twig_Extension
{
  public function getFilters() {
    return array(
      'sha1_encode' => new \Twig_Filter_Method($this, 'sha1Encode'),
    );
  }

  public function getName() {
      return 'Twig Base 64 Extension';
  }

  public function sha1Encode($str){
      return sha1($str);
  }
}
