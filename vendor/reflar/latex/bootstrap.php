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

namespace Reflar\Latex;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->subscribe(Listeners\AddClientAssets::class);
    $events->subscribe(Listeners\FindLatexExpressions::class);
};
