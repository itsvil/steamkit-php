<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMEnumerateUserSubscribedFilesWithUpdatesResponse;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientUCMEnumerateUserSubscribedFilesWithUpdatesResponse.PublishedFileId
 */
class PublishedFileId extends \Protobuf\AbstractMessage
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
     * published_file_id optional fixed64 = 1
     *
     * @var int
     */
    protected $published_file_id = null;

    /**
     * rtime32_subscribed optional fixed32 = 2
     *
     * @var int
     */
    protected $rtime32_subscribed = null;

    /**
     * appid optional uint32 = 3
     *
     * @var int
     */
    protected $appid = null;

    /**
     * file_hcontent optional fixed64 = 4
     *
     * @var int
     */
    protected $file_hcontent = null;

    /**
     * file_size optional uint32 = 5
     *
     * @var int
     */
    protected $file_size = null;

    /**
     * rtime32_last_updated optional fixed32 = 6
     *
     * @var int
     */
    protected $rtime32_last_updated = null;

    /**
     * is_depot_content optional bool = 7
     *
     * @var bool
     */
    protected $is_depot_content = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->rtime32_subscribed = '0';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'published_file_id' has a value
     *
     * @return bool
     */
    public function hasPublishedFileId()
    {
        return $this->published_file_id !== null;
    }

    /**
     * Get 'published_file_id' value
     *
     * @return int
     */
    public function getPublishedFileId()
    {
        return $this->published_file_id;
    }

    /**
     * Set 'published_file_id' value
     *
     * @param int $value
     */
    public function setPublishedFileId($value = null)
    {
        $this->published_file_id = $value;
    }

    /**
     * Check if 'rtime32_subscribed' has a value
     *
     * @return bool
     */
    public function hasRtime32Subscribed()
    {
        return $this->rtime32_subscribed !== null;
    }

    /**
     * Get 'rtime32_subscribed' value
     *
     * @return int
     */
    public function getRtime32Subscribed()
    {
        return $this->rtime32_subscribed;
    }

    /**
     * Set 'rtime32_subscribed' value
     *
     * @param int $value
     */
    public function setRtime32Subscribed($value = null)
    {
        $this->rtime32_subscribed = $value;
    }

    /**
     * Check if 'appid' has a value
     *
     * @return bool
     */
    public function hasAppid()
    {
        return $this->appid !== null;
    }

    /**
     * Get 'appid' value
     *
     * @return int
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set 'appid' value
     *
     * @param int $value
     */
    public function setAppid($value = null)
    {
        $this->appid = $value;
    }

    /**
     * Check if 'file_hcontent' has a value
     *
     * @return bool
     */
    public function hasFileHcontent()
    {
        return $this->file_hcontent !== null;
    }

    /**
     * Get 'file_hcontent' value
     *
     * @return int
     */
    public function getFileHcontent()
    {
        return $this->file_hcontent;
    }

    /**
     * Set 'file_hcontent' value
     *
     * @param int $value
     */
    public function setFileHcontent($value = null)
    {
        $this->file_hcontent = $value;
    }

    /**
     * Check if 'file_size' has a value
     *
     * @return bool
     */
    public function hasFileSize()
    {
        return $this->file_size !== null;
    }

    /**
     * Get 'file_size' value
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->file_size;
    }

    /**
     * Set 'file_size' value
     *
     * @param int $value
     */
    public function setFileSize($value = null)
    {
        $this->file_size = $value;
    }

    /**
     * Check if 'rtime32_last_updated' has a value
     *
     * @return bool
     */
    public function hasRtime32LastUpdated()
    {
        return $this->rtime32_last_updated !== null;
    }

    /**
     * Get 'rtime32_last_updated' value
     *
     * @return int
     */
    public function getRtime32LastUpdated()
    {
        return $this->rtime32_last_updated;
    }

    /**
     * Set 'rtime32_last_updated' value
     *
     * @param int $value
     */
    public function setRtime32LastUpdated($value = null)
    {
        $this->rtime32_last_updated = $value;
    }

    /**
     * Check if 'is_depot_content' has a value
     *
     * @return bool
     */
    public function hasIsDepotContent()
    {
        return $this->is_depot_content !== null;
    }

    /**
     * Get 'is_depot_content' value
     *
     * @return bool
     */
    public function getIsDepotContent()
    {
        return $this->is_depot_content;
    }

    /**
     * Set 'is_depot_content' value
     *
     * @param bool $value
     */
    public function setIsDepotContent($value = null)
    {
        $this->is_depot_content = $value;
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
            'published_file_id' => null,
            'rtime32_subscribed' => '0',
            'appid' => null,
            'file_hcontent' => null,
            'file_size' => null,
            'rtime32_last_updated' => null,
            'is_depot_content' => null
        ], $values);

        $message->setPublishedFileId($values['published_file_id']);
        $message->setRtime32Subscribed($values['rtime32_subscribed']);
        $message->setAppid($values['appid']);
        $message->setFileHcontent($values['file_hcontent']);
        $message->setFileSize($values['file_size']);
        $message->setRtime32LastUpdated($values['rtime32_last_updated']);
        $message->setIsDepotContent($values['is_depot_content']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PublishedFileId',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'published_file_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'rtime32_subscribed',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'file_hcontent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'file_size',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'rtime32_last_updated',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'is_depot_content',
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

        if ($this->published_file_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->published_file_id);
        }

        if ($this->rtime32_subscribed !== null) {
            $writer->writeVarint($stream, 21);
            $writer->writeFixed32($stream, $this->rtime32_subscribed);
        }

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->file_hcontent !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeFixed64($stream, $this->file_hcontent);
        }

        if ($this->file_size !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->file_size);
        }

        if ($this->rtime32_last_updated !== null) {
            $writer->writeVarint($stream, 53);
            $writer->writeFixed32($stream, $this->rtime32_last_updated);
        }

        if ($this->is_depot_content !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->is_depot_content);
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

                $this->published_file_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->rtime32_subscribed = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->file_hcontent = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->file_size = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->rtime32_last_updated = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_depot_content = $reader->readBool($stream);

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

        if ($this->published_file_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->rtime32_subscribed !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->file_hcontent !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->file_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->file_size);
        }

        if ($this->rtime32_last_updated !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->is_depot_content !== null) {
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
        $this->published_file_id = null;
        $this->rtime32_subscribed = '0';
        $this->appid = null;
        $this->file_hcontent = null;
        $this->file_size = null;
        $this->rtime32_last_updated = null;
        $this->is_depot_content = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMEnumerateUserSubscribedFilesWithUpdatesResponse\PublishedFileId) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->published_file_id = ($message->published_file_id !== null) ? $message->published_file_id : $this->published_file_id;
        $this->rtime32_subscribed = ($message->rtime32_subscribed !== null) ? $message->rtime32_subscribed : $this->rtime32_subscribed;
        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->file_hcontent = ($message->file_hcontent !== null) ? $message->file_hcontent : $this->file_hcontent;
        $this->file_size = ($message->file_size !== null) ? $message->file_size : $this->file_size;
        $this->rtime32_last_updated = ($message->rtime32_last_updated !== null) ? $message->rtime32_last_updated : $this->rtime32_last_updated;
        $this->is_depot_content = ($message->is_depot_content !== null) ? $message->is_depot_content : $this->is_depot_content;
    }


}

