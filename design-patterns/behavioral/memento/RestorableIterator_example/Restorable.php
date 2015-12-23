<?php

/**
 * Originator
 */
interface Restorable
{
    public function getState();
    public function setState($state);
}