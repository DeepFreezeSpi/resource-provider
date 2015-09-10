<?php

namespace DeepFreezeSpi\Intl\Resource;

/**
 * Interface ResourceDataRequestInterface
 *
 * Provides context about the requested text-domain that is given to the Loader.
 *
 * The rationale for this class is to ensure that the loader will not have to perform
 * any parsing of locale, which would be liable to be inconsistent between implementations
 * with regards to edge-cases and nuances.
 *
 * @package DeepFreezeSpi\Intl\Resource
 */
interface ResourceRequestInterface {
  /**
   * The value of the TextDomain requested
   * @return string
   */
  public function getTextDomain();

  /**
   * The complete Locale string
   *
   * The locale MUST confirm to BCP-47
   * The locale MUST be in CANONICAL fom as described in BCP-47 4.5
   *
   * @see https://tools.ietf.org/html/bcp47#section-4.5
   * @return string
   */
  public function getLanguageTag();

  /**
   * Language Code
   * @return string
   */
  public function getLanguage();

  /**
   * Language Script.
   *
   * If No Script is specified then this function MUST return the empty string ("").
   *
   * @return string
   */
  public function getScript();

  /**
   * Language Region
   *
   * If No Region is specified, then this function MUST return the empty string ("").
   * @return string
   */
  public function getRegion();

  /**
   * Language Variants.
   *
   * If No Variants are specified, then this function MUST return an empty array ( [] ).
   * The variants MUST be returned in CANONICAL order.
   *
   * In order to conform to BCP-47, Variant Subtags MUST NOT be duplicated.
   * @see https://tools.ietf.org/html/bcp47#section-2.2.5
   * @see https://tools.ietf.org/html/bcp47#section-4.1
   * @return string[]
   */
  public function getVariants();

  /**
   * Language Variants
   *
   * If no variants are specified, then this function MUST return an empty array ( "" ).
   * The variants MUST be returned in CANONICAL order.
   *
   * @return string
   */
  public function getVariantsTag();

  /**
   * Language Tag Extension (Including Private Use)
   *
   * As a matter of course, private use tags will be available under the extension key "x".
   * If no extensions are specified, then this function MUST return an empty array. ( [] )
   *
   * The result will be in the format as
   * @return string[][]
   */
  public function getExtensions();

  /**
   * Language Tag Extension (Including Private Use)
   *
   * Returns the subtags for the given extension.
   * If the requested extension is not defined, this function MUST return an empty string ( '' )
   * The extensions SHOULD be in canonical order as defined by the extension.
   *
   * @param $key
   * @return string[]
   */
  public function getExtension($key);

  /**
   * Language Tag Extension (Including Private Use)
   *
   * Returns the requested extension value as a string.
   *
   * If the requested extension is not defined, this function MUST return an empty string ( '' )
   *
   * The returned value MUST begin with the extension prefix.  For example, for the language tag
   * "en-US-a-ccc-b-ddd-aaa", a call to getExtensionTag('b') will return the value "b-ddd-aaa".
   *
   *
   * @param $key
   * @return string
   */
  public function getExtensionTag($key);

  /**
   * Language Tag Extension (Including Private Use)
   *
   * Returns the subtags for the given extension as a valid string.
   *
   * @return string
   */
  public function getExtensionsTag();
}
