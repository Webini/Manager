<?php

namespace Wini\Manager;

use Wini\Manager\FlushManagerInterface;

/**
 * @author nico
 */
abstract class AbstractFlushManager implements FlushManagerInterface {
    use FlushManagerTrait;
}
