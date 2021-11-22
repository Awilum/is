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

function isBoolean($value): bool
{
   return Is::boolean($value);
}

function isIP($value): bool
{
   return Is::ip($value);
}

function isEmail($value): bool
{
   return Is::email($value);
}