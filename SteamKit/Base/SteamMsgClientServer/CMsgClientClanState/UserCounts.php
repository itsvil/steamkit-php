<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer\CMsgClientClanState;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientClanState.UserCounts
 */
class UserCounts extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * members optional uint32 = 1
     *
     * @var int
     */
    protected $members = null;

    /**
     * online optional uint32 = 2
     *
     * @var int
     */
    protected $online = null;

    /**
     * chatting optional uint32 = 3
     *
     * @var int
     */
    protected $chatting = null;

    /**
     * in_game optional uint32 = 4
     *
     * @var int
     */
    protected $in_game = null;

    /**
     * Check if 'members' has a value
     *
     * @return bool
     */
    public function hasMembers()
    {
        return $this->members !== null;
    }

    /**
     * Get 'members' value
     *
     * @return int
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set 'members' value
     *
     * @param int $value
     */
    public function setMembers($value = null)
    {
        $this->members = $value;
    }

    /**
     * Check if 'online' has a value
     *
     * @return bool
     */
    public function hasOnline()
    {
        return $this->online !== null;
    }

    /**
     * Get 'online' value
     *
     * @return int
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set 'online' value
     *
     * @param int $value
     */
    public function setOnline($value = null)
    {
        $this->online = $value;
    }

    /**
     * Check if 'chatting' has a value
     *
     * @return bool
     */
    public function hasChatting()
    {
        return $this->chatting !== null;
    }

    /**
     * Get 'chatting' value
     *
     * @return int
     */
    public function getChatting()
    {
        return $this->chatting;
    }

    /**
     * Set 'chatting' value
     *
     * @param int $value
     */
    public function setChatting($value = null)
    {
        $this->chatting = $value;
    }

    /**
     * Check if 'in_game' has a value
     *
     * @return bool
     */
    public function hasInGame()
    {
        return $this->in_game !== null;
    }

    /**
     * Get 'in_game' value
     *
     * @return int
     */
    public function getInGame()
    {
        return $this->in_game;
    }

    /**
     * Set 'in_game' value
     *
     * @param int $value
     */
    public function setInGame($value = null)
    {
        $this->in_game = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'members' => null,
            'online' => null,
            'chatting' => null,
            'in_game' => null
        ], $values);

        $message->setMembers($values['members']);
        $message->setOnline($values['online']);
        $message->setChatting($values['chatting']);
        $message->setInGame($values['in_game']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'UserCounts',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'members',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'online',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'chatting',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'in_game',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->members !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->members);
        }

        if ($this->online !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->online);
        }

        if ($this->chatting !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->chatting);
        }

        if ($this->in_game !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->in_game);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->members = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->online = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->chatting = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->in_game = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->members !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->members);
        }

        if ($this->online !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->online);
        }

        if ($this->chatting !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->chatting);
        }

        if ($this->in_game !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->in_game);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->members = null;
        $this->online = null;
        $this->chatting = null;
        $this->in_game = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\UserCounts) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->members = ($message->members !== null) ? $message->members : $this->members;
        $this->online = ($message->online !== null) ? $message->online : $this->online;
        $this->chatting = ($message->chatting !== null) ? $message->chatting : $this->chatting;
        $this->in_game = ($message->in_game !== null) ? $message->in_game : $this->in_game;
    }


}

