<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientUFSGetSingleFileInfoResponse
 */
class CMsgClientUFSGetSingleFileInfoResponse extends \Protobuf\AbstractMessage
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
     * eresult optional int32 = 1
     *
     * @var int
     */
    protected $eresult = null;

    /**
     * app_id optional uint32 = 2
     *
     * @var int
     */
    protected $app_id = null;

    /**
     * file_name optional string = 3
     *
     * @var string
     */
    protected $file_name = null;

    /**
     * sha_file optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $sha_file = null;

    /**
     * time_stamp optional uint64 = 5
     *
     * @var int
     */
    protected $time_stamp = null;

    /**
     * raw_file_size optional uint32 = 6
     *
     * @var int
     */
    protected $raw_file_size = null;

    /**
     * is_explicit_delete optional bool = 7
     *
     * @var bool
     */
    protected $is_explicit_delete = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->eresult = '2';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'eresult' has a value
     *
     * @return bool
     */
    public function hasEresult()
    {
        return $this->eresult !== null;
    }

    /**
     * Get 'eresult' value
     *
     * @return int
     */
    public function getEresult()
    {
        return $this->eresult;
    }

    /**
     * Set 'eresult' value
     *
     * @param int $value
     */
    public function setEresult($value = null)
    {
        $this->eresult = $value;
    }

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
     * Check if 'file_name' has a value
     *
     * @return bool
     */
    public function hasFileName()
    {
        return $this->file_name !== null;
    }

    /**
     * Get 'file_name' value
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * Set 'file_name' value
     *
     * @param string $value
     */
    public function setFileName($value = null)
    {
        $this->file_name = $value;
    }

    /**
     * Check if 'sha_file' has a value
     *
     * @return bool
     */
    public function hasShaFile()
    {
        return $this->sha_file !== null;
    }

    /**
     * Get 'sha_file' value
     *
     * @return \Protobuf\Stream
     */
    public function getShaFile()
    {
        return $this->sha_file;
    }

    /**
     * Set 'sha_file' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setShaFile($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->sha_file = $value;
    }

    /**
     * Check if 'time_stamp' has a value
     *
     * @return bool
     */
    public function hasTimeStamp()
    {
        return $this->time_stamp !== null;
    }

    /**
     * Get 'time_stamp' value
     *
     * @return int
     */
    public function getTimeStamp()
    {
        return $this->time_stamp;
    }

    /**
     * Set 'time_stamp' value
     *
     * @param int $value
     */
    public function setTimeStamp($value = null)
    {
        $this->time_stamp = $value;
    }

    /**
     * Check if 'raw_file_size' has a value
     *
     * @return bool
     */
    public function hasRawFileSize()
    {
        return $this->raw_file_size !== null;
    }

    /**
     * Get 'raw_file_size' value
     *
     * @return int
     */
    public function getRawFileSize()
    {
        return $this->raw_file_size;
    }

    /**
     * Set 'raw_file_size' value
     *
     * @param int $value
     */
    public function setRawFileSize($value = null)
    {
        $this->raw_file_size = $value;
    }

    /**
     * Check if 'is_explicit_delete' has a value
     *
     * @return bool
     */
    public function hasIsExplicitDelete()
    {
        return $this->is_explicit_delete !== null;
    }

    /**
     * Get 'is_explicit_delete' value
     *
     * @return bool
     */
    public function getIsExplicitDelete()
    {
        return $this->is_explicit_delete;
    }

    /**
     * Set 'is_explicit_delete' value
     *
     * @param bool $value
     */
    public function setIsExplicitDelete($value = null)
    {
        $this->is_explicit_delete = $value;
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
            'eresult' => '2',
            'app_id' => null,
            'file_name' => null,
            'sha_file' => null,
            'time_stamp' => null,
            'raw_file_size' => null,
            'is_explicit_delete' => null
        ], $values);

        $message->setEresult($values['eresult']);
        $message->setAppId($values['app_id']);
        $message->setFileName($values['file_name']);
        $message->setShaFile($values['sha_file']);
        $message->setTimeStamp($values['time_stamp']);
        $message->setRawFileSize($values['raw_file_size']);
        $message->setIsExplicitDelete($values['is_explicit_delete']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUFSGetSingleFileInfoResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'eresult',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '2'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'file_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'sha_file',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'time_stamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'raw_file_size',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'is_explicit_delete',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
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

        if ($this->eresult !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->eresult);
        }

        if ($this->app_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->app_id);
        }

        if ($this->file_name !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->file_name);
        }

        if ($this->sha_file !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->sha_file);
        }

        if ($this->time_stamp !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->time_stamp);
        }

        if ($this->raw_file_size !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->raw_file_size);
        }

        if ($this->is_explicit_delete !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->is_explicit_delete);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->eresult = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->file_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->sha_file = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->time_stamp = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->raw_file_size = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_explicit_delete = $reader->readBool($stream);

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

        if ($this->eresult !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->eresult);
        }

        if ($this->app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_id);
        }

        if ($this->file_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->file_name);
        }

        if ($this->sha_file !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->sha_file);
        }

        if ($this->time_stamp !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->time_stamp);
        }

        if ($this->raw_file_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->raw_file_size);
        }

        if ($this->is_explicit_delete !== null) {
            $size += 1;
            $size += 1;
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
        $this->eresult = '2';
        $this->app_id = null;
        $this->file_name = null;
        $this->sha_file = null;
        $this->time_stamp = null;
        $this->raw_file_size = null;
        $this->is_explicit_delete = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientUFSGetSingleFileInfoResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->eresult = ($message->eresult !== null) ? $message->eresult : $this->eresult;
        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->file_name = ($message->file_name !== null) ? $message->file_name : $this->file_name;
        $this->sha_file = ($message->sha_file !== null) ? $message->sha_file : $this->sha_file;
        $this->time_stamp = ($message->time_stamp !== null) ? $message->time_stamp : $this->time_stamp;
        $this->raw_file_size = ($message->raw_file_size !== null) ? $message->raw_file_size : $this->raw_file_size;
        $this->is_explicit_delete = ($message->is_explicit_delete !== null) ? $message->is_explicit_delete : $this->is_explicit_delete;
    }


}

