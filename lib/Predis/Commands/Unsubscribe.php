<?php

namespace Predis\Commands;

class Unsubscribe extends Command {
    protected function canBeHashed() { return false; }
    public function getId() { return 'UNSUBSCRIBE'; }
}
