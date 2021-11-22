<?php

declare(strict_types=1);

namespace Is;

function isTrue($value): bool
{
   return Is::true($value);
}

function isFalse($value): bool
{
   return Is::false($value);
}