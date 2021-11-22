<?php

declare(strict_types=1);

use function Is\isTrue;
use function Is\isFalse;
use function Is\isBoolean;
use function Is\isIP;
use function Is\isEmail;
use function Is\isUrl;

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

test('test isBoolean', function (): void {
    expect(isBoolean(true))->toBeTrue();
    expect(isBoolean(false))->toBeTrue();
    expect(isBoolean('1'))->toBeTrue();
    expect(isBoolean(1))->toBeTrue();
    expect(isBoolean('true'))->toBeTrue();
    expect(isBoolean('trUe'))->toBeTrue();
    expect(isBoolean('TRUE'))->toBeTrue();
    expect(isBoolean('on'))->toBeTrue();
    expect(isBoolean('0'))->toBeTrue();
    expect(isBoolean(0))->toBeTrue();
    expect(isBoolean('false'))->toBeTrue();
    expect(isBoolean('off'))->toBeTrue();
    expect(isBoolean('falSe'))->toBeTrue();
    expect(isBoolean('FALSE'))->toBeTrue();
});

test('test isIP', function (): void {
    expect(isIP('127.0.0.1'))->toBeTrue();
    expect(isIP('fòôbàřs'))->toBeFalse();
});

test('test isEmail', function (): void {
    expect(isEmail('is@msn.com'))->toBeTrue();
    expect(isEmail('is.msn.com'))->toBeFalse();
});

test('test isUrl', function (): void {
    expect(isUrl('http://atomastic.com'))->toBeTrue();
    expect(isUrl('atomastic.com'))->toBeFalse();
});
