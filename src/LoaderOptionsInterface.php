<?php

namespace DeepFreezeSpi\Intl\Resource;

/**
 * Interface LoaderOptionsInterface
 *
 * This interface is used to provide run-time configuration options to a given loader.
 *
 */
interface LoaderOptionsInterface {
  public function fromArray(array $options);
}
