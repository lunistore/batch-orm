<?php

namespace Kiboko\Component\BatchORM\Deleter;

interface DeleterInterface
{
    /**
     * @param object $object
     */
    public function delete($object);

    /**
     * @return \Traversable
     */
    public function flush();
}
