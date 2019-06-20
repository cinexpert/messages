<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: high-priority-content.proto

namespace Cinexpert\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Cinexpert.Messages.HighPriorityContentUpdateRequest</code>
 */
class HighPriorityContentUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.HighPriorityContentUpdateRequest.ContentType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>string playerId = 2;</code>
     */
    private $playerId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $playerId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\HighPriorityContent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.HighPriorityContentUpdateRequest.ContentType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.Cinexpert.Messages.HighPriorityContentUpdateRequest.ContentType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Cinexpert\Messages\HighPriorityContentUpdateRequest_ContentType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string playerId = 2;</code>
     * @return string
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * Generated from protobuf field <code>string playerId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->playerId = $var;

        return $this;
    }

}

