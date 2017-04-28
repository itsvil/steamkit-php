<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer\CMsgClientPICSProductInfoResponse;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientPICSProductInfoResponse.PackageInfo
 */
class PackageInfo extends \Protobuf\AbstractMessage
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
     * packageid optional uint32 = 1
     *
     * @var int
     */
    protected $packageid = null;

    /**
     * change_number optional uint32 = 2
     *
     * @var int
     */
    protected $change_number = null;

    /**
     * missing_token optional bool = 3
     *
     * @var bool
     */
    protected $missing_token = null;

    /**
     * sha optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $sha = null;

    /**
     * buffer optional bytes = 5
     *
     * @var \Protobuf\Stream
     */
    protected $buffer = null;

    /**
     * size optional uint32 = 6
     *
     * @var int
     */
    protected $size = null;

    /**
     * Check if 'packageid' has a value
     *
     * @return bool
     */
    public function hasPackageid()
    {
        return $this->packageid !== null;
    }

    /**
     * Get 'packageid' value
     *
     * @return int
     */
    public function getPackageid()
    {
        return $this->packageid;
    }

    /**
     * Set 'packageid' value
     *
     * @param int $value
     */
    public function setPackageid($value = null)
    {
        $this->packageid = $value;
    }

    /**
     * Check if 'change_number' has a value
     *
     * @return bool
     */
    public function hasChangeNumber()
    {
        return $this->change_number !== null;
    }

    /**
     * Get 'change_number' value
     *
     * @return int
     */
    public function getChangeNumber()
    {
        return $this->change_number;
    }

    /**
     * Set 'change_number' value
     *
     * @param int $value
     */
    public function setChangeNumber($value = null)
    {
        $this->change_number = $value;
    }

    /**
     * Check if 'missing_token' has a value
     *
     * @return bool
     */
    public function hasMissingToken()
    {
        return $this->missing_token !== null;
    }

    /**
     * Get 'missing_token' value
     *
     * @return bool
     */
    public function getMissingToken()
    {
        return $this->missing_token;
    }

    /**
     * Set 'missing_token' value
     *
     * @param bool $value
     */
    public function setMissingToken($value = null)
    {
        $this->missing_token = $value;
    }

    /**
     * Check if 'sha' has a value
     *
     * @return bool
     */
    public function hasSha()
    {
        return $this->sha !== null;
    }

    /**
     * Get 'sha' value
     *
     * @return \Protobuf\Stream
     */
    public function getSha()
    {
        return $this->sha;
    }

    /**
     * Set 'sha' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setSha($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->sha = $value;
    }

    /**
     * Check if 'buffer' has a value
     *
     * @return bool
     */
    public function hasBuffer()
    {
        return $this->buffer !== null;
    }

    /**
     * Get 'buffer' value
     *
     * @return \Protobuf\Stream
     */
    public function getBuffer()
    {
        return $this->buffer;
    }

    /**
     * Set 'buffer' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setBuffer($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->buffer = $value;
    }

    /**
     * Check if 'size' has a value
     *
     * @return bool
     */
    public function hasSize()
    {
        return $this->size !== null;
    }

    /**
     * Get 'size' value
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set 'size' value
     *
     * @param int $value
     */
    public function setSize($value = null)
    {
        $this->size = $value;
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
            'packageid' => null,
            'change_number' => null,
            'missing_token' => null,
            'sha' => null,
            'buffer' => null,
            'size' => null
        ], $values);

        $message->setPackageid($values['packageid']);
        $message->setChangeNumber($values['change_number']);
        $message->setMissingToken($values['missing_token']);
        $message->setSha($values['sha']);
        $message->setBuffer($values['buffer']);
        $message->setSize($values['size']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PackageInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'packageid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'change_number',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'missing_token',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'sha',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'buffer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'size',
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

        if ($this->packageid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->packageid);
        }

        if ($this->change_number !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->change_number);
        }

        if ($this->missing_token !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->missing_token);
        }

        if ($this->sha !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->sha);
        }

        if ($this->buffer !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeByteStream($stream, $this->buffer);
        }

        if ($this->size !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->size);
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

                $this->packageid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->change_number = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->missing_token = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->sha = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->buffer = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->size = $reader->readVarint($stream);

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

        if ($this->packageid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->packageid);
        }

        if ($this->change_number !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->change_number);
        }

        if ($this->missing_token !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->sha !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->sha);
        }

        if ($this->buffer !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->buffer);
        }

        if ($this->size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->size);
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
        $this->packageid = null;
        $this->change_number = null;
        $this->missing_token = null;
        $this->sha = null;
        $this->buffer = null;
        $this->size = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientPICSProductInfoResponse\PackageInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->packageid = ($message->packageid !== null) ? $message->packageid : $this->packageid;
        $this->change_number = ($message->change_number !== null) ? $message->change_number : $this->change_number;
        $this->missing_token = ($message->missing_token !== null) ? $message->missing_token : $this->missing_token;
        $this->sha = ($message->sha !== null) ? $message->sha : $this->sha;
        $this->buffer = ($message->buffer !== null) ? $message->buffer : $this->buffer;
        $this->size = ($message->size !== null) ? $message->size : $this->size;
    }


}
