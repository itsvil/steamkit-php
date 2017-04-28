<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientUFSLoginRequest
 */
class CMsgClientUFSLoginRequest extends \Protobuf\AbstractMessage
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
     * protocol_version optional uint32 = 1
     *
     * @var int
     */
    protected $protocol_version = null;

    /**
     * am_session_token optional uint64 = 2
     *
     * @var int
     */
    protected $am_session_token = null;

    /**
     * apps repeated uint32 = 3
     *
     * @var \Protobuf\Collection
     */
    protected $apps = null;

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
     * Check if 'am_session_token' has a value
     *
     * @return bool
     */
    public function hasAmSessionToken()
    {
        return $this->am_session_token !== null;
    }

    /**
     * Get 'am_session_token' value
     *
     * @return int
     */
    public function getAmSessionToken()
    {
        return $this->am_session_token;
    }

    /**
     * Set 'am_session_token' value
     *
     * @param int $value
     */
    public function setAmSessionToken($value = null)
    {
        $this->am_session_token = $value;
    }

    /**
     * Check if 'apps' has a value
     *
     * @return bool
     */
    public function hasAppsList()
    {
        return $this->apps !== null;
    }

    /**
     * Get 'apps' value
     *
     * @return \Protobuf\Collection
     */
    public function getAppsList()
    {
        return $this->apps;
    }

    /**
     * Set 'apps' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setAppsList(\Protobuf\Collection $value = null)
    {
        $this->apps = $value;
    }

    /**
     * Add a new element to 'apps'
     *
     * @param int $value
     */
    public function addApps($value)
    {
        if ($this->apps === null) {
            $this->apps = new \Protobuf\ScalarCollection();
        }

        $this->apps->add($value);
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
            'protocol_version' => null,
            'am_session_token' => null,
            'apps' => []
        ], $values);

        $message->setProtocolVersion($values['protocol_version']);
        $message->setAmSessionToken($values['am_session_token']);

        foreach ($values['apps'] as $item) {
            $message->addApps($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUFSLoginRequest',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'protocol_version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'am_session_token',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'apps',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->protocol_version !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->protocol_version);
        }

        if ($this->am_session_token !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->am_session_token);
        }

        if ($this->apps !== null) {
            foreach ($this->apps as $val) {
                $writer->writeVarint($stream, 24);
                $writer->writeVarint($stream, $val);
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

                $this->protocol_version = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->am_session_token = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                if ($this->apps === null) {
                    $this->apps = new \Protobuf\ScalarCollection();
                }

                $this->apps->add($reader->readVarint($stream));

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

        if ($this->protocol_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->protocol_version);
        }

        if ($this->am_session_token !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->am_session_token);
        }

        if ($this->apps !== null) {
            foreach ($this->apps as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
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
        $this->protocol_version = null;
        $this->am_session_token = null;
        $this->apps = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientUFSLoginRequest) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->protocol_version = ($message->protocol_version !== null) ? $message->protocol_version : $this->protocol_version;
        $this->am_session_token = ($message->am_session_token !== null) ? $message->am_session_token : $this->am_session_token;
        $this->apps = ($message->apps !== null) ? $message->apps : $this->apps;
    }


}
