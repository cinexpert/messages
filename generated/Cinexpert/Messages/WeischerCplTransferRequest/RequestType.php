<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: weischer-cpl-transfer.proto

namespace Cinexpert\Messages\WeischerCplTransferRequest;

use UnexpectedValueException;

/**
 * Protobuf type <code>Cinexpert.Messages.WeischerCplTransferRequest.RequestType</code>
 */
class RequestType
{
    /**
     * Generated from protobuf enum <code>NOT_SET = 0;</code>
     */
    const NOT_SET = 0;
    /**
     * Generated from protobuf enum <code>DOWNLOAD = 1;</code>
     */
    const DOWNLOAD = 1;
    /**
     * Generated from protobuf enum <code>DELETE = 2;</code>
     */
    const DELETE = 2;

    private static $valueToName = [
        self::NOT_SET => 'NOT_SET',
        self::DOWNLOAD => 'DOWNLOAD',
        self::DELETE => 'DELETE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequestType::class, \Cinexpert\Messages\WeischerCplTransferRequest_RequestType::class);

