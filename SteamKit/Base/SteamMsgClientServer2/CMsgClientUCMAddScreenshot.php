<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientUCMAddScreenshot
 */
class CMsgClientUCMAddScreenshot extends \Protobuf\AbstractMessage
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
     * appid optional uint32 = 1
     *
     * @var int
     */
    protected $appid = null;

    /**
     * filename optional string = 2
     *
     * @var string
     */
    protected $filename = null;

    /**
     * thumbname optional string = 3
     *
     * @var string
     */
    protected $thumbname = null;

    /**
     * vr_filename optional string = 14
     *
     * @var string
     */
    protected $vr_filename = null;

    /**
     * rtime32_created optional fixed32 = 4
     *
     * @var int
     */
    protected $rtime32_created = null;

    /**
     * width optional uint32 = 5
     *
     * @var int
     */
    protected $width = null;

    /**
     * height optional uint32 = 6
     *
     * @var int
     */
    protected $height = null;

    /**
     * permissions optional uint32 = 7
     *
     * @var int
     */
    protected $permissions = null;

    /**
     * caption optional string = 8
     *
     * @var string
     */
    protected $caption = null;

    /**
     * shortcut_name optional string = 9
     *
     * @var string
     */
    protected $shortcut_name = null;

    /**
     * tag repeated message = 10
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMAddScreenshot\Tag>
     */
    protected $tag = null;

    /**
     * tagged_steamid repeated fixed64 = 11
     *
     * @var \Protobuf\Collection
     */
    protected $tagged_steamid = null;

    /**
     * spoiler_tag optional bool = 12
     *
     * @var bool
     */
    protected $spoiler_tag = null;

    /**
     * tagged_publishedfileid repeated uint64 = 13
     *
     * @var \Protobuf\Collection
     */
    protected $tagged_publishedfileid = null;

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
     * Check if 'filename' has a value
     *
     * @return bool
     */
    public function hasFilename()
    {
        return $this->filename !== null;
    }

    /**
     * Get 'filename' value
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set 'filename' value
     *
     * @param string $value
     */
    public function setFilename($value = null)
    {
        $this->filename = $value;
    }

    /**
     * Check if 'thumbname' has a value
     *
     * @return bool
     */
    public function hasThumbname()
    {
        return $this->thumbname !== null;
    }

    /**
     * Get 'thumbname' value
     *
     * @return string
     */
    public function getThumbname()
    {
        return $this->thumbname;
    }

    /**
     * Set 'thumbname' value
     *
     * @param string $value
     */
    public function setThumbname($value = null)
    {
        $this->thumbname = $value;
    }

    /**
     * Check if 'vr_filename' has a value
     *
     * @return bool
     */
    public function hasVrFilename()
    {
        return $this->vr_filename !== null;
    }

    /**
     * Get 'vr_filename' value
     *
     * @return string
     */
    public function getVrFilename()
    {
        return $this->vr_filename;
    }

    /**
     * Set 'vr_filename' value
     *
     * @param string $value
     */
    public function setVrFilename($value = null)
    {
        $this->vr_filename = $value;
    }

    /**
     * Check if 'rtime32_created' has a value
     *
     * @return bool
     */
    public function hasRtime32Created()
    {
        return $this->rtime32_created !== null;
    }

    /**
     * Get 'rtime32_created' value
     *
     * @return int
     */
    public function getRtime32Created()
    {
        return $this->rtime32_created;
    }

    /**
     * Set 'rtime32_created' value
     *
     * @param int $value
     */
    public function setRtime32Created($value = null)
    {
        $this->rtime32_created = $value;
    }

    /**
     * Check if 'width' has a value
     *
     * @return bool
     */
    public function hasWidth()
    {
        return $this->width !== null;
    }

    /**
     * Get 'width' value
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set 'width' value
     *
     * @param int $value
     */
    public function setWidth($value = null)
    {
        $this->width = $value;
    }

    /**
     * Check if 'height' has a value
     *
     * @return bool
     */
    public function hasHeight()
    {
        return $this->height !== null;
    }

    /**
     * Get 'height' value
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set 'height' value
     *
     * @param int $value
     */
    public function setHeight($value = null)
    {
        $this->height = $value;
    }

    /**
     * Check if 'permissions' has a value
     *
     * @return bool
     */
    public function hasPermissions()
    {
        return $this->permissions !== null;
    }

    /**
     * Get 'permissions' value
     *
     * @return int
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Set 'permissions' value
     *
     * @param int $value
     */
    public function setPermissions($value = null)
    {
        $this->permissions = $value;
    }

    /**
     * Check if 'caption' has a value
     *
     * @return bool
     */
    public function hasCaption()
    {
        return $this->caption !== null;
    }

    /**
     * Get 'caption' value
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set 'caption' value
     *
     * @param string $value
     */
    public function setCaption($value = null)
    {
        $this->caption = $value;
    }

    /**
     * Check if 'shortcut_name' has a value
     *
     * @return bool
     */
    public function hasShortcutName()
    {
        return $this->shortcut_name !== null;
    }

    /**
     * Get 'shortcut_name' value
     *
     * @return string
     */
    public function getShortcutName()
    {
        return $this->shortcut_name;
    }

    /**
     * Set 'shortcut_name' value
     *
     * @param string $value
     */
    public function setShortcutName($value = null)
    {
        $this->shortcut_name = $value;
    }

    /**
     * Check if 'tag' has a value
     *
     * @return bool
     */
    public function hasTagList()
    {
        return $this->tag !== null;
    }

    /**
     * Get 'tag' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMAddScreenshot\Tag>
     */
    public function getTagList()
    {
        return $this->tag;
    }

    /**
     * Set 'tag' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMAddScreenshot\Tag> $value
     */
    public function setTagList(\Protobuf\Collection $value = null)
    {
        $this->tag = $value;
    }

    /**
     * Add a new element to 'tag'
     *
     * @param \SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMAddScreenshot\Tag
     * $value
     */
    public function addTag(\SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMAddScreenshot\Tag $value)
    {
        if ($this->tag === null) {
            $this->tag = new \Protobuf\MessageCollection();
        }

        $this->tag->add($value);
    }

    /**
     * Check if 'tagged_steamid' has a value
     *
     * @return bool
     */
    public function hasTaggedSteamidList()
    {
        return $this->tagged_steamid !== null;
    }

    /**
     * Get 'tagged_steamid' value
     *
     * @return \Protobuf\Collection
     */
    public function getTaggedSteamidList()
    {
        return $this->tagged_steamid;
    }

    /**
     * Set 'tagged_steamid' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setTaggedSteamidList(\Protobuf\Collection $value = null)
    {
        $this->tagged_steamid = $value;
    }

    /**
     * Add a new element to 'tagged_steamid'
     *
     * @param int $value
     */
    public function addTaggedSteamid($value)
    {
        if ($this->tagged_steamid === null) {
            $this->tagged_steamid = new \Protobuf\ScalarCollection();
        }

        $this->tagged_steamid->add($value);
    }

    /**
     * Check if 'spoiler_tag' has a value
     *
     * @return bool
     */
    public function hasSpoilerTag()
    {
        return $this->spoiler_tag !== null;
    }

    /**
     * Get 'spoiler_tag' value
     *
     * @return bool
     */
    public function getSpoilerTag()
    {
        return $this->spoiler_tag;
    }

    /**
     * Set 'spoiler_tag' value
     *
     * @param bool $value
     */
    public function setSpoilerTag($value = null)
    {
        $this->spoiler_tag = $value;
    }

    /**
     * Check if 'tagged_publishedfileid' has a value
     *
     * @return bool
     */
    public function hasTaggedPublishedfileidList()
    {
        return $this->tagged_publishedfileid !== null;
    }

    /**
     * Get 'tagged_publishedfileid' value
     *
     * @return \Protobuf\Collection
     */
    public function getTaggedPublishedfileidList()
    {
        return $this->tagged_publishedfileid;
    }

    /**
     * Set 'tagged_publishedfileid' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setTaggedPublishedfileidList(\Protobuf\Collection $value = null)
    {
        $this->tagged_publishedfileid = $value;
    }

    /**
     * Add a new element to 'tagged_publishedfileid'
     *
     * @param int $value
     */
    public function addTaggedPublishedfileid($value)
    {
        if ($this->tagged_publishedfileid === null) {
            $this->tagged_publishedfileid = new \Protobuf\ScalarCollection();
        }

        $this->tagged_publishedfileid->add($value);
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
            'appid' => null,
            'filename' => null,
            'thumbname' => null,
            'vr_filename' => null,
            'rtime32_created' => null,
            'width' => null,
            'height' => null,
            'permissions' => null,
            'caption' => null,
            'shortcut_name' => null,
            'tag' => [],
            'tagged_steamid' => [],
            'spoiler_tag' => null,
            'tagged_publishedfileid' => []
        ], $values);

        $message->setAppid($values['appid']);
        $message->setFilename($values['filename']);
        $message->setThumbname($values['thumbname']);
        $message->setVrFilename($values['vr_filename']);
        $message->setRtime32Created($values['rtime32_created']);
        $message->setWidth($values['width']);
        $message->setHeight($values['height']);
        $message->setPermissions($values['permissions']);
        $message->setCaption($values['caption']);
        $message->setShortcutName($values['shortcut_name']);
        $message->setSpoilerTag($values['spoiler_tag']);

        foreach ($values['tag'] as $item) {
            $message->addTag($item);
        }

        foreach ($values['tagged_steamid'] as $item) {
            $message->addTaggedSteamid($item);
        }

        foreach ($values['tagged_publishedfileid'] as $item) {
            $message->addTaggedPublishedfileid($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUCMAddScreenshot',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'filename',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'thumbname',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'vr_filename',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'rtime32_created',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'width',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'height',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'permissions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'caption',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'shortcut_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'tag',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer2.CMsgClientUCMAddScreenshot.Tag'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'tagged_steamid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'spoiler_tag',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'tagged_publishedfileid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
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

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->filename !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->filename);
        }

        if ($this->thumbname !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->thumbname);
        }

        if ($this->vr_filename !== null) {
            $writer->writeVarint($stream, 114);
            $writer->writeString($stream, $this->vr_filename);
        }

        if ($this->rtime32_created !== null) {
            $writer->writeVarint($stream, 37);
            $writer->writeFixed32($stream, $this->rtime32_created);
        }

        if ($this->width !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->width);
        }

        if ($this->height !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->height);
        }

        if ($this->permissions !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->permissions);
        }

        if ($this->caption !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->caption);
        }

        if ($this->shortcut_name !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->shortcut_name);
        }

        if ($this->tag !== null) {
            foreach ($this->tag as $val) {
                $writer->writeVarint($stream, 82);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->tagged_steamid !== null) {
            foreach ($this->tagged_steamid as $val) {
                $writer->writeVarint($stream, 89);
                $writer->writeFixed64($stream, $val);
            }
        }

        if ($this->spoiler_tag !== null) {
            $writer->writeVarint($stream, 96);
            $writer->writeBool($stream, $this->spoiler_tag);
        }

        if ($this->tagged_publishedfileid !== null) {
            foreach ($this->tagged_publishedfileid as $val) {
                $writer->writeVarint($stream, 104);
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

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->filename = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->thumbname = $reader->readString($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->vr_filename = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->rtime32_created = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->width = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->height = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->permissions = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->caption = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->shortcut_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMAddScreenshot\Tag();

                if ($this->tag === null) {
                    $this->tag = new \Protobuf\MessageCollection();
                }

                $this->tag->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                if ($this->tagged_steamid === null) {
                    $this->tagged_steamid = new \Protobuf\ScalarCollection();
                }

                $this->tagged_steamid->add($reader->readFixed64($stream));

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->spoiler_tag = $reader->readBool($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                if ($this->tagged_publishedfileid === null) {
                    $this->tagged_publishedfileid = new \Protobuf\ScalarCollection();
                }

                $this->tagged_publishedfileid->add($reader->readVarint($stream));

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

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->filename !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->filename);
        }

        if ($this->thumbname !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->thumbname);
        }

        if ($this->vr_filename !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->vr_filename);
        }

        if ($this->rtime32_created !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->width !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->width);
        }

        if ($this->height !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->height);
        }

        if ($this->permissions !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->permissions);
        }

        if ($this->caption !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->caption);
        }

        if ($this->shortcut_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->shortcut_name);
        }

        if ($this->tag !== null) {
            foreach ($this->tag as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->tagged_steamid !== null) {
            foreach ($this->tagged_steamid as $val) {
                $size += 1;
                $size += 8;
            }
        }

        if ($this->spoiler_tag !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->tagged_publishedfileid !== null) {
            foreach ($this->tagged_publishedfileid as $val) {
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
        $this->appid = null;
        $this->filename = null;
        $this->thumbname = null;
        $this->vr_filename = null;
        $this->rtime32_created = null;
        $this->width = null;
        $this->height = null;
        $this->permissions = null;
        $this->caption = null;
        $this->shortcut_name = null;
        $this->tag = null;
        $this->tagged_steamid = null;
        $this->spoiler_tag = null;
        $this->tagged_publishedfileid = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMAddScreenshot) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->filename = ($message->filename !== null) ? $message->filename : $this->filename;
        $this->thumbname = ($message->thumbname !== null) ? $message->thumbname : $this->thumbname;
        $this->vr_filename = ($message->vr_filename !== null) ? $message->vr_filename : $this->vr_filename;
        $this->rtime32_created = ($message->rtime32_created !== null) ? $message->rtime32_created : $this->rtime32_created;
        $this->width = ($message->width !== null) ? $message->width : $this->width;
        $this->height = ($message->height !== null) ? $message->height : $this->height;
        $this->permissions = ($message->permissions !== null) ? $message->permissions : $this->permissions;
        $this->caption = ($message->caption !== null) ? $message->caption : $this->caption;
        $this->shortcut_name = ($message->shortcut_name !== null) ? $message->shortcut_name : $this->shortcut_name;
        $this->tag = ($message->tag !== null) ? $message->tag : $this->tag;
        $this->tagged_steamid = ($message->tagged_steamid !== null) ? $message->tagged_steamid : $this->tagged_steamid;
        $this->spoiler_tag = ($message->spoiler_tag !== null) ? $message->spoiler_tag : $this->spoiler_tag;
        $this->tagged_publishedfileid = ($message->tagged_publishedfileid !== null) ? $message->tagged_publishedfileid : $this->tagged_publishedfileid;
    }


}
