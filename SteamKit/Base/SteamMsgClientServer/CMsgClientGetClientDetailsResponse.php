<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientGetClientDetailsResponse
 */
class CMsgClientGetClientDetailsResponse extends \Protobuf\AbstractMessage
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
     * package_version optional uint32 = 1
     *
     * @var int
     */
    protected $package_version = null;

    /**
     * protocol_version optional uint32 = 8
     *
     * @var int
     */
    protected $protocol_version = null;

    /**
     * os optional string = 2
     *
     * @var string
     */
    protected $os = null;

    /**
     * machine_name optional string = 3
     *
     * @var string
     */
    protected $machine_name = null;

    /**
     * ip_public optional string = 4
     *
     * @var string
     */
    protected $ip_public = null;

    /**
     * ip_private optional string = 5
     *
     * @var string
     */
    protected $ip_private = null;

    /**
     * bytes_available optional uint64 = 7
     *
     * @var int
     */
    protected $bytes_available = null;

    /**
     * games_running repeated message = 6
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientGetClientDetailsResponse\Game>
     */
    protected $games_running = null;

    /**
     * Check if 'package_version' has a value
     *
     * @return bool
     */
    public function hasPackageVersion()
    {
        return $this->package_version !== null;
    }

    /**
     * Get 'package_version' value
     *
     * @return int
     */
    public function getPackageVersion()
    {
        return $this->package_version;
    }

    /**
     * Set 'package_version' value
     *
     * @param int $value
     */
    public function setPackageVersion($value = null)
    {
        $this->package_version = $value;
    }

    /**
     * Check if 'protocol_version' has a value
     *
     * @return bool
     */
    public function hasProtocolVersion()
    {
        return $this->protocol_version !== null;
    }

    /**
     * Get 'protocol_version' value
     *
     * @return int
     */
    public function getProtocolVersion()
    {
        return $this->protocol_version;
    }

    /**
     * Set 'protocol_version' value
     *
     * @param int $value
     */
    public function setProtocolVersion($value = null)
    {
        $this->protocol_version = $value;
    }

    /**
     * Check if 'os' has a value
     *
     * @return bool
     */
    public function hasOs()
    {
        return $this->os !== null;
    }

    /**
     * Get 'os' value
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set 'os' value
     *
     * @param string $value
     */
    public function setOs($value = null)
    {
        $this->os = $value;
    }

    /**
     * Check if 'machine_name' has a value
     *
     * @return bool
     */
    public function hasMachineName()
    {
        return $this->machine_name !== null;
    }

    /**
     * Get 'machine_name' value
     *
     * @return string
     */
    public function getMachineName()
    {
        return $this->machine_name;
    }

    /**
     * Set 'machine_name' value
     *
     * @param string $value
     */
    public function setMachineName($value = null)
    {
        $this->machine_name = $value;
    }

    /**
     * Check if 'ip_public' has a value
     *
     * @return bool
     */
    public function hasIpPublic()
    {
        return $this->ip_public !== null;
    }

    /**
     * Get 'ip_public' value
     *
     * @return string
     */
    public function getIpPublic()
    {
        return $this->ip_public;
    }

    /**
     * Set 'ip_public' value
     *
     * @param string $value
     */
    public function setIpPublic($value = null)
    {
        $this->ip_public = $value;
    }

    /**
     * Check if 'ip_private' has a value
     *
     * @return bool
     */
    public function hasIpPrivate()
    {
        return $this->ip_private !== null;
    }

    /**
     * Get 'ip_private' value
     *
     * @return string
     */
    public function getIpPrivate()
    {
        return $this->ip_private;
    }

    /**
     * Set 'ip_private' value
     *
     * @param string $value
     */
    public function setIpPrivate($value = null)
    {
        $this->ip_private = $value;
    }

    /**
     * Check if 'bytes_available' has a value
     *
     * @return bool
     */
    public function hasBytesAvailable()
    {
        return $this->bytes_available !== null;
    }

    /**
     * Get 'bytes_available' value
     *
     * @return int
     */
    public function getBytesAvailable()
    {
        return $this->bytes_available;
    }

    /**
     * Set 'bytes_available' value
     *
     * @param int $value
     */
    public function setBytesAvailable($value = null)
    {
        $this->bytes_available = $value;
    }

    /**
     * Check if 'games_running' has a value
     *
     * @return bool
     */
    public function hasGamesRunningList()
    {
        return $this->games_running !== null;
    }

    /**
     * Get 'games_running' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientGetClientDetailsResponse\Game>
     */
    public function getGamesRunningList()
    {
        return $this->games_running;
    }

    /**
     * Set 'games_running' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientGetClientDetailsResponse\Game> $value
     */
    public function setGamesRunningList(\Protobuf\Collection $value = null)
    {
        $this->games_running = $value;
    }

    /**
     * Add a new element to 'games_running'
     *
     * @param
     * \SteamKit\Base\SteamMsgClientServer\CMsgClientGetClientDetailsResponse\Game
     * $value
     */
    public function addGamesRunning(\SteamKit\Base\SteamMsgClientServer\CMsgClientGetClientDetailsResponse\Game $value)
    {
        if ($this->games_running === null) {
            $this->games_running = new \Protobuf\MessageCollection();
        }

        $this->games_running->add($value);
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
            'package_version' => null,
            'protocol_version' => null,
            'os' => null,
            'machine_name' => null,
            'ip_public' => null,
            'ip_private' => null,
            'bytes_available' => null,
            'games_running' => []
        ], $values);

        $message->setPackageVersion($values['package_version']);
        $message->setProtocolVersion($values['protocol_version']);
        $message->setOs($values['os']);
        $message->setMachineName($values['machine_name']);
        $message->setIpPublic($values['ip_public']);
        $message->setIpPrivate($values['ip_private']);
        $message->setBytesAvailable($values['bytes_available']);

        foreach ($values['games_running'] as $item) {
            $message->addGamesRunning($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientGetClientDetailsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'package_version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'protocol_version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'os',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'machine_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ip_public',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'ip_private',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'bytes_available',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'games_running',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientGetClientDetailsResponse.Game'
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

        if ($this->package_version !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->package_version);
        }

        if ($this->protocol_version !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->protocol_version);
        }

        if ($this->os !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->os);
        }

        if ($this->machine_name !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->machine_name);
        }

        if ($this->ip_public !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->ip_public);
        }

        if ($this->ip_private !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->ip_private);
        }

        if ($this->bytes_available !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->bytes_available);
        }

        if ($this->games_running !== null) {
            foreach ($this->games_running as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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

                $this->package_version = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->protocol_version = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->os = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->machine_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ip_public = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ip_private = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->bytes_available = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientGetClientDetailsResponse\Game();

                if ($this->games_running === null) {
                    $this->games_running = new \Protobuf\MessageCollection();
                }

                $this->games_running->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->package_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->package_version);
        }

        if ($this->protocol_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->protocol_version);
        }

        if ($this->os !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->os);
        }

        if ($this->machine_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->machine_name);
        }

        if ($this->ip_public !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ip_public);
        }

        if ($this->ip_private !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ip_private);
        }

        if ($this->bytes_available !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->bytes_available);
        }

        if ($this->games_running !== null) {
            foreach ($this->games_running as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->package_version = null;
        $this->protocol_version = null;
        $this->os = null;
        $this->machine_name = null;
        $this->ip_public = null;
        $this->ip_private = null;
        $this->bytes_available = null;
        $this->games_running = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientGetClientDetailsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->package_version = ($message->package_version !== null) ? $message->package_version : $this->package_version;
        $this->protocol_version = ($message->protocol_version !== null) ? $message->protocol_version : $this->protocol_version;
        $this->os = ($message->os !== null) ? $message->os : $this->os;
        $this->machine_name = ($message->machine_name !== null) ? $message->machine_name : $this->machine_name;
        $this->ip_public = ($message->ip_public !== null) ? $message->ip_public : $this->ip_public;
        $this->ip_private = ($message->ip_private !== null) ? $message->ip_private : $this->ip_private;
        $this->bytes_available = ($message->bytes_available !== null) ? $message->bytes_available : $this->bytes_available;
        $this->games_running = ($message->games_running !== null) ? $message->games_running : $this->games_running;
    }


}
