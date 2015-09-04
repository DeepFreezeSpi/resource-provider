<?php

namespace DeepFreezeSpi\Intl\Resource;

interface ResourceLoaderInterface {
  /**
   * Loader Options Interface.
   *
   * This method will instantiate a new instance of a class specific Options class that will be
   * used with the load() method.
   *
   * This method MUST NOT reuse option classes, as they are to be considered Value Objects.
   *
   * @return LoaderOptionsInterface
   */
  public function getOptions();

  /**
   * Load the defined resource.
   *
   * TODO: Detail this section out.
   *
   * @param string $textDomain
   * @param string $language
   * @return array
   */
  public function load($textDomain, $language);
}
