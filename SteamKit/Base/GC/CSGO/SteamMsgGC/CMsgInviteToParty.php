<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/base_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGC;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgGC.CMsgInviteToParty
 */
class CMsgInviteToParty extends \Protobuf\AbstractMessage
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
     * steam_id optional fixed64 = 1
     *
     * @var int
     */
    protected $steam_id = null;

    /**
     * client_version optional uint32 = 2
     *
     * @var int
     */
    protected $client_version = null;

    /**
     * team_invite optional uint32 = 3
     *
     * @var int
     */
    protected $team_invite = null;

    /**
     * Check if 'steam_id' has a value
     *
     * @return bool
     */
    public function hasSteamId()
    {
        return $this->steam_id !== null;
    }

    /**
     * Get 'steam_id' value
     *
     * @return int
     */
    public function getSteamId()
    {
        return $this->steam_id;
    }

    /**
     * Set 'steam_id' value
     *
     * @param int $value
     */
    public function setSteamId($value = null)
    {
        $this->steam_id = $value;
    }

    /**
     * Check if 'client_version' has a value
     *
     * @return bool
     */
    public function hasClientVersion()
    {
        return $this->client_version !== null;
    }

    /**
     * Get 'client_version' value
     *
     * @return int
     */
    public function getClientVersion()
    {
        return $this->client_version;
    }

    /**
     * Set 'client_version' value
     *
     * @param int $value
     */
    public function setClientVersion($value = null)
    {
        $this->client_version = $value;
    }

    /**
     * Check if 'team_invite' has a value
     *
     * @return bool
     */
    public function hasTeamInvite()
    {
        return $this->team_invite !== null;
    }

    /**
     * Get 'team_invite' value
     *
     * @return int
     */
    public function getTeamInvite()
    {
        return $this->team_invite;
    }

    /**
     * Set 'team_invite' value
     *
     * @param int $value
     */
    public function setTeamInvite($value = null)
    {
        $this->team_invite = $value;
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
            'steam_id' => null,
            'client_version' => null,
            'team_invite' => null
        ], $values);

        $message->setSteamId($values['steam_id']);
        $message->setClientVersion($values['client_version']);
        $message->setTeamInvite($values['team_invite']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgInviteToParty',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steam_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'client_version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'team_invite',
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

        if ($this->steam_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steam_id);
        }

        if ($this->client_version !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->client_version);
        }

        if ($this->team_invite !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->team_invite);
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steam_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->client_version = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->team_invite = $reader->readVarint($stream);

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

        if ($this->steam_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->client_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->client_version);
        }

        if ($this->team_invite !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->team_invite);
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
        $this->steam_id = null;
        $this->client_version = null;
        $this->team_invite = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgInviteToParty) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steam_id = ($message->steam_id !== null) ? $message->steam_id : $this->steam_id;
        $this->client_version = ($message->client_version !== null) ? $message->client_version : $this->client_version;
        $this->team_invite = ($message->team_invite !== null) ? $message->team_invite : $this->team_invite;
    }


}

