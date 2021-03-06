<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Exception;

use Symfony\Component\HttpKernel\Exception\HttpException;

class InternalServerErrorHttpException extends HttpException
{
    /**
     * @param string|null     $message
     * @param \Exception|null $previous
     * @param int             $code
     */
    public function __construct(string $message = null, \Exception $previous = null, $code = 0)
    {
        parent::__construct(500, $message, $previous, [], $code);
    }
}
