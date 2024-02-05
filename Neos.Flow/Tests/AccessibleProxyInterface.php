<?php

namespace Neos\Flow\Tests;

use Neos\Utility\ObjectAccess;

/**
 * This interface defines the methods provided by {@see BaseTestCase::getAccessibleMock()}
 * Do not implement this interface in own classes.
 *
 * It allows for calling even protected methods and access of protected properties.
 *
 * Note that this interface is not actually implemented by the accessible proxy, but only provides IDE support.
 *
 * @deprecated you should not use this for unit testing
 */
interface AccessibleProxyInterface
{
    /** @deprecated */
    public function _call(string $methodName, mixed ...$arguments): mixed;
    /** @deprecated */
    public function _callRef(string $methodName, mixed ...$argumentsPassedByReference): mixed;
    /** @deprecated please use {@see BaseTestCase::inject()} instead */
    public function _set(string $propertyName, mixed $value): void;
    /** @deprecated */
    public function _setRef(string $propertyName, mixed &$value): void;
    /** @deprecated please use {@see ObjectAccess::getProperty()} instead */
    public function _get(string $propertyName): mixed;
}
