<?php

namespace Matthias\Common\App\Command;

use Matthias\Common\App\Event\IsHandledAsynchronously;
use SimpleBus\Message\Bus\Middleware\MessageBusMiddleware;
use SimpleBus\Message\Message;

class AsynchronousCommandBusMiddleware implements MessageBusMiddleware
{
    /**
     * The provided $next callable should be called whenever the next middleware should start handling the message.
     * Its only argument should be a Message object (usually the same as the originally provided message).
     *
     * @param Message $message
     * @param callable $next
     * @return void
     */
    public function handle(Message $message, callable $next)
    {
        // do whatever you want

        // handle the message synchronously, i.e. right-away
        $next($message);

        // maybe do some more things
    }
}