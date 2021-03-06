<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientMMSLobbyChatMsg
 */
class CMsgClientMMSLobbyChatMsg extends \Protobuf\AbstractMessage
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
     * app_id optional uint32 = 1
     *
     * @var int
     */
    protected $app_id = null;

    /**
     * steam_id_lobby optional fixed64 = 2
     *
     * @var int
     */
    protected $steam_id_lobby = null;

    /**
     * steam_id_sender optional fixed64 = 3
     *
     * @var int
     */
    protected $steam_id_sender = null;

    /**
     * lobby_message optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $lobby_message = null;

    /**
     * Check if 'app_id' has a value
     *
     * @return bool
     */
    public function hasAppId()
    {
        return $this->app_id !== null;
    }

    /**
     * Get 'app_id' value
     *
     * @return int
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Set 'app_id' value
     *
     * @param int $value
     */
    public function setAppId($value = null)
    {
        $this->app_id = $value;
    }

    /**
     * Check if 'steam_id_lobby' has a value
     *
     * @return bool
     */
    public function hasSteamIdLobby()
    {
        return $this->steam_id_lobby !== null;
    }

    /**
     * Get 'steam_id_lobby' value
     *
     * @return int
     */
    public function getSteamIdLobby()
    {
        return $this->steam_id_lobby;
    }

    /**
     * Set 'steam_id_lobby' value
     *
     * @param int $value
     */
    public function setSteamIdLobby($value = null)
    {
        $this->steam_id_lobby = $value;
    }

    /**
     * Check if 'steam_id_sender' has a value
     *
     * @return bool
     */
    public function hasSteamIdSender()
    {
        return $this->steam_id_sender !== null;
    }

    /**
     * Get 'steam_id_sender' value
     *
     * @return int
     */
    public function getSteamIdSender()
    {
        return $this->steam_id_sender;
    }

    /**
     * Set 'steam_id_sender' value
     *
     * @param int $value
     */
    public function setSteamIdSender($value = null)
    {
        $this->steam_id_sender = $value;
    }

    /**
     * Check if 'lobby_message' has a value
     *
     * @return bool
     */
    public function hasLobbyMessage()
    {
        return $this->lobby_message !== null;
    }

    /**
     * Get 'lobby_message' value
     *
     * @return \Protobuf\Stream
     */
    public function getLobbyMessage()
    {
        return $this->lobby_message;
    }

    /**
     * Set 'lobby_message' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setLobbyMessage($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->lobby_message = $value;
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
            'app_id' => null,
            'steam_id_lobby' => null,
            'steam_id_sender' => null,
            'lobby_message' => null
        ], $values);

        $message->setAppId($values['app_id']);
        $message->setSteamIdLobby($values['steam_id_lobby']);
        $message->setSteamIdSender($values['steam_id_sender']);
        $message->setLobbyMessage($values['lobby_message']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientMMSLobbyChatMsg',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'steam_id_lobby',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'steam_id_sender',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'lobby_message',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
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

        if ($this->app_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->app_id);
        }

        if ($this->steam_id_lobby !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeFixed64($stream, $this->steam_id_lobby);
        }

        if ($this->steam_id_sender !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeFixed64($stream, $this->steam_id_sender);
        }

        if ($this->lobby_message !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->lobby_message);
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

                $this->app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steam_id_lobby = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steam_id_sender = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->lobby_message = $reader->readByteStream($stream);

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

        if ($this->app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_id);
        }

        if ($this->steam_id_lobby !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->steam_id_sender !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->lobby_message !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->lobby_message);
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
        $this->app_id = null;
        $this->steam_id_lobby = null;
        $this->steam_id_sender = null;
        $this->lobby_message = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientMMSLobbyChatMsg) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->steam_id_lobby = ($message->steam_id_lobby !== null) ? $message->steam_id_lobby : $this->steam_id_lobby;
        $this->steam_id_sender = ($message->steam_id_sender !== null) ? $message->steam_id_sender : $this->steam_id_sender;
        $this->lobby_message = ($message->lobby_message !== null) ? $message->lobby_message : $this->lobby_message;
    }


}

