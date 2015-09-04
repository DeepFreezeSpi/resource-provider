<?php

namespace DeepFreezeSpi\Intl\Resource;

interface ResourceProviderInterface {
  /**
   * @param $namespace string
   * @param $key string
   * @return string
   */
  public function getMessage($namespace, $key);


  /**
   * @param $namespace string
   * @param $key string
   * @return bool
   */
  public function hasMessage($namespace, $key);


  /**
   * Returns all the messages
   * @param $namespace
   * @return array
   */
  public function getAll($namespace);


  /**
   * @param $namespace string
   * @return NamespacedResourceProviderInterface
   */
  public function getNamespaceInstance($namespace);
}
