<?php

declare(strict_types=1);

use function Is\isTrue;
use function Is\isFalse;

test('test isTrue', function (): void {
    expect(isTrue(true))->toBeTrue();
    expect(isTrue('1'))->toBeTrue();
    expect(isTrue(1))->toBeTrue();
    expect(isTrue('true'))->toBeTrue();
    expect(isTrue('trUe'))->toBeTrue();
    expect(isTrue('TRUE'))->toBeTrue();
    expect(isTrue('on'))->toBeTrue();
});

test('test isFalse', function (): void {
    expect(isFalse(false))->toBeTrue();
    expect(isFalse('0'))->toBeTrue();
    expect(isFalse(0))->toBeTrue();
    expect(isFalse('false'))->toBeTrue();
    expect(isFalse('falSe'))->toBeTrue();
    expect(isFalse('FALSE'))->toBeTrue();
    expect(isFalse('off'))->toBeTrue();
});