<?php

namespace Spatie\EventSourcing\Tests\TestClasses\AutoDiscoverEventHandlers;

use Spatie\EventSourcing\Projectors\Projector;
use Spatie\EventSourcing\Projectors\ProjectsEvents;

class TestProjector implements Projector
{
    use ProjectsEvents;
}
