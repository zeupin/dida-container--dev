<?php
/**
 * Dida Framework  -- A Rapid Development Framework
 * Copyright (c) Zeupin LLC. (http://zeupin.com)
 *
 * Licensed under The MIT License.
 * Redistributions of files must retain the above copyright notice.
 */

namespace Dida;

/**
 * ContainerException
 */
class ContainerException extends \Exception
{
    /**
     * 版本号。
     */
    const VERSION = '20180104';

    /**
     * 属性不存在。
     */
    const PROPERTY_NOT_FOUND = 1001;

    /**
     * 服务不存在。
     */
    const SERVICE_NOT_FOUND = 1002;

    /**
     * 已被注册为单例服务，不可生成新的服务实例。
     */
    const SINGLETON_VIOLATE = 1003;

    /**
     * 无效的服务类型。
     */
    const INVALID_SERVICE_TYPE=1004;
}
