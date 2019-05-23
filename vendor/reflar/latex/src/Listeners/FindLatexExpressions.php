<?php

/*
 * This file is part of reflar/latex.
 *
 * Copyright (c) 2018 ReFlar.
 * Copyright (c) 2016 Flagrow.
 *
 * https://reflar.redevs.org
 *
 * For the full copyright and license information, please view the license.md
 * file that was distributed with this source code.
 */

namespace Reflar\Latex\Listeners;

use Flarum\Event\PostWillBeSaved;
use Flarum\Settings\SettingsRepositoryInterface;
use Illuminate\Contracts\Events\Dispatcher;

class FindLatexExpressions
{
    /**
     * Subscribes to the Flarum events.
     *
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(PostWillBeSaved::class, [$this, 'findExpressions']);
    }

    /**
     * This function searches for LaTeX expressions, delimited by $ and $$.
     * It then adds backticks (``) around the expression, so that is does not
     * get modifed by Markdown or BBcode.
     *
     * @param PostWillBeSaved $event
     */
    public function findExpressions(PostWillBeSaved $event)
    {
        if (app(SettingsRepositoryInterface::class)->get('reflar-latex.prevent_formatting')) {
            // get the text from the post, comment or answer
            $text = $event->post->content;
            // this is the regular expresssion used. To check what it does use regex101.com
            $regex = '/(?<!\\\\)(?: ((?<!\\$)(?<!\\`)(?<!\\`\\n)\\${1,2}(?!\\n\\`)(?!\\`)(?!\\$)))\\n?(.*(?R)?.*)(?<!\\\\)(?: ((?<!\\$)(?<!\\`)(?<!\\`\\n)\\1(?!\\n\\`)(?!\\`)(?!\\$)))/mxU';
            // run the replace and edit the post content
            $event->post->content = preg_replace($regex, '`\\1\\2\\3`', $text);
        }
    }
}
