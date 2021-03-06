<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_publishedfile.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgPublishedFile;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgPublishedFile.CPublishedFile_Unsubscribe_Request
 */
class CPublishedFile_Unsubscribe_Request extends \Protobuf\AbstractMessage
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
     * publishedfileid optional uint64 = 1
     *
     * @var int
     */
    protected $publishedfileid = null;

    /**
     * list_type optional uint32 = 2
     *
     * @var int
     */
    protected $list_type = null;

    /**
     * appid optional int32 = 3
     *
     * @var int
     */
    protected $appid = null;

    /**
     * notify_client optional bool = 4
     *
     * @var bool
     */
    protected $notify_client = null;

    /**
     * Check if 'publishedfileid' has a value
     *
     * @return bool
     */
    public function hasPublishedfileid()
    {
        return $this->publishedfileid !== null;
    }

    /**
     * Get 'publishedfileid' value
     *
     * @return int
     */
    public function getPublishedfileid()
    {
        return $this->publishedfileid;
    }

    /**
     * Set 'publishedfileid' value
     *
     * @param int $value
     */
    public function setPublishedfileid($value = null)
    {
        $this->publishedfileid = $value;
    }

    /**
     * Check if 'list_type' has a value
     *
     * @return bool
     */
    public function hasListType()
    {
        return $this->list_type !== null;
    }

    /**
     * Get 'list_type' value
     *
     * @return int
     */
    public function getListType()
    {
        return $this->list_type;
    }

    /**
     * Set 'list_type' value
     *
     * @param int $value
     */
    public function setListType($value = null)
    {
        $this->list_type = $value;
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
     * Check if 'notify_client' has a value
     *
     * @return bool
     */
    public function hasNotifyClient()
    {
        return $this->notify_client !== null;
    }

    /**
     * Get 'notify_client' value
     *
     * @return bool
     */
    public function getNotifyClient()
    {
        return $this->notify_client;
    }

    /**
     * Set 'notify_client' value
     *
     * @param bool $value
     */
    public function setNotifyClient($value = null)
    {
        $this->notify_client = $value;
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
            'publishedfileid' => null,
            'list_type' => null,
            'appid' => null,
            'notify_client' => null
        ], $values);

        $message->setPublishedfileid($values['publishedfileid']);
        $message->setListType($values['list_type']);
        $message->setAppid($values['appid']);
        $message->setNotifyClient($values['notify_client']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CPublishedFile_Unsubscribe_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'publishedfileid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'list_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'notify_client',
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

        if ($this->publishedfileid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->publishedfileid);
        }

        if ($this->list_type !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->list_type);
        }

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->notify_client !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->notify_client);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->publishedfileid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->list_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->notify_client = $reader->readBool($stream);

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

        if ($this->publishedfileid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->publishedfileid);
        }

        if ($this->list_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->list_type);
        }

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->notify_client !== null) {
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
        $this->publishedfileid = null;
        $this->list_type = null;
        $this->appid = null;
        $this->notify_client = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgPublishedFile\CPublishedFile_Unsubscribe_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->publishedfileid = ($message->publishedfileid !== null) ? $message->publishedfileid : $this->publishedfileid;
        $this->list_type = ($message->list_type !== null) ? $message->list_type : $this->list_type;
        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->notify_client = ($message->notify_client !== null) ? $message->notify_client : $this->notify_client;
    }


}

