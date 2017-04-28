<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/base_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGC;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgGC.CMsgGameServerInfo
 */
class CMsgGameServerInfo extends \Protobuf\AbstractMessage
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
     * server_public_ip_addr optional fixed32 = 1
     *
     * @var int
     */
    protected $server_public_ip_addr = null;

    /**
     * server_private_ip_addr optional fixed32 = 2
     *
     * @var int
     */
    protected $server_private_ip_addr = null;

    /**
     * server_port optional uint32 = 3
     *
     * @var int
     */
    protected $server_port = null;

    /**
     * server_tv_port optional uint32 = 4
     *
     * @var int
     */
    protected $server_tv_port = null;

    /**
     * server_key optional string = 5
     *
     * @var string
     */
    protected $server_key = null;

    /**
     * server_hibernation optional bool = 6
     *
     * @var bool
     */
    protected $server_hibernation = null;

    /**
     * server_type optional enum = 7
     *
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGameServerInfo\ServerType
     */
    protected $server_type = null;

    /**
     * server_region optional uint32 = 8
     *
     * @var int
     */
    protected $server_region = null;

    /**
     * server_loadavg optional float = 9
     *
     * @var float
     */
    protected $server_loadavg = null;

    /**
     * server_tv_broadcast_time optional float = 10
     *
     * @var float
     */
    protected $server_tv_broadcast_time = null;

    /**
     * server_game_time optional float = 11
     *
     * @var float
     */
    protected $server_game_time = null;

    /**
     * server_relay_connected_steam_id optional fixed64 = 12
     *
     * @var int
     */
    protected $server_relay_connected_steam_id = null;

    /**
     * relay_slots_max optional uint32 = 13
     *
     * @var int
     */
    protected $relay_slots_max = null;

    /**
     * relays_connected optional int32 = 14
     *
     * @var int
     */
    protected $relays_connected = null;

    /**
     * relay_clients_connected optional int32 = 15
     *
     * @var int
     */
    protected $relay_clients_connected = null;

    /**
     * relayed_game_server_steam_id optional fixed64 = 16
     *
     * @var int
     */
    protected $relayed_game_server_steam_id = null;

    /**
     * parent_relay_count optional uint32 = 17
     *
     * @var int
     */
    protected $parent_relay_count = null;

    /**
     * tv_secret_code optional fixed64 = 18
     *
     * @var int
     */
    protected $tv_secret_code = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->server_type = \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGameServerInfo\ServerType::UNSPECIFIED();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'server_public_ip_addr' has a value
     *
     * @return bool
     */
    public function hasServerPublicIpAddr()
    {
        return $this->server_public_ip_addr !== null;
    }

    /**
     * Get 'server_public_ip_addr' value
     *
     * @return int
     */
    public function getServerPublicIpAddr()
    {
        return $this->server_public_ip_addr;
    }

    /**
     * Set 'server_public_ip_addr' value
     *
     * @param int $value
     */
    public function setServerPublicIpAddr($value = null)
    {
        $this->server_public_ip_addr = $value;
    }

    /**
     * Check if 'server_private_ip_addr' has a value
     *
     * @return bool
     */
    public function hasServerPrivateIpAddr()
    {
        return $this->server_private_ip_addr !== null;
    }

    /**
     * Get 'server_private_ip_addr' value
     *
     * @return int
     */
    public function getServerPrivateIpAddr()
    {
        return $this->server_private_ip_addr;
    }

    /**
     * Set 'server_private_ip_addr' value
     *
     * @param int $value
     */
    public function setServerPrivateIpAddr($value = null)
    {
        $this->server_private_ip_addr = $value;
    }

    /**
     * Check if 'server_port' has a value
     *
     * @return bool
     */
    public function hasServerPort()
    {
        return $this->server_port !== null;
    }

    /**
     * Get 'server_port' value
     *
     * @return int
     */
    public function getServerPort()
    {
        return $this->server_port;
    }

    /**
     * Set 'server_port' value
     *
     * @param int $value
     */
    public function setServerPort($value = null)
    {
        $this->server_port = $value;
    }

    /**
     * Check if 'server_tv_port' has a value
     *
     * @return bool
     */
    public function hasServerTvPort()
    {
        return $this->server_tv_port !== null;
    }

    /**
     * Get 'server_tv_port' value
     *
     * @return int
     */
    public function getServerTvPort()
    {
        return $this->server_tv_port;
    }

    /**
     * Set 'server_tv_port' value
     *
     * @param int $value
     */
    public function setServerTvPort($value = null)
    {
        $this->server_tv_port = $value;
    }

    /**
     * Check if 'server_key' has a value
     *
     * @return bool
     */
    public function hasServerKey()
    {
        return $this->server_key !== null;
    }

    /**
     * Get 'server_key' value
     *
     * @return string
     */
    public function getServerKey()
    {
        return $this->server_key;
    }

    /**
     * Set 'server_key' value
     *
     * @param string $value
     */
    public function setServerKey($value = null)
    {
        $this->server_key = $value;
    }

    /**
     * Check if 'server_hibernation' has a value
     *
     * @return bool
     */
    public function hasServerHibernation()
    {
        return $this->server_hibernation !== null;
    }

    /**
     * Get 'server_hibernation' value
     *
     * @return bool
     */
    public function getServerHibernation()
    {
        return $this->server_hibernation;
    }

    /**
     * Set 'server_hibernation' value
     *
     * @param bool $value
     */
    public function setServerHibernation($value = null)
    {
        $this->server_hibernation = $value;
    }

    /**
     * Check if 'server_type' has a value
     *
     * @return bool
     */
    public function hasServerType()
    {
        return $this->server_type !== null;
    }

    /**
     * Get 'server_type' value
     *
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGameServerInfo\ServerType
     */
    public function getServerType()
    {
        return $this->server_type;
    }

    /**
     * Set 'server_type' value
     *
     * @param \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGameServerInfo\ServerType $value
     */
    public function setServerType(\SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGameServerInfo\ServerType $value = null)
    {
        $this->server_type = $value;
    }

    /**
     * Check if 'server_region' has a value
     *
     * @return bool
     */
    public function hasServerRegion()
    {
        return $this->server_region !== null;
    }

    /**
     * Get 'server_region' value
     *
     * @return int
     */
    public function getServerRegion()
    {
        return $this->server_region;
    }

    /**
     * Set 'server_region' value
     *
     * @param int $value
     */
    public function setServerRegion($value = null)
    {
        $this->server_region = $value;
    }

    /**
     * Check if 'server_loadavg' has a value
     *
     * @return bool
     */
    public function hasServerLoadavg()
    {
        return $this->server_loadavg !== null;
    }

    /**
     * Get 'server_loadavg' value
     *
     * @return float
     */
    public function getServerLoadavg()
    {
        return $this->server_loadavg;
    }

    /**
     * Set 'server_loadavg' value
     *
     * @param float $value
     */
    public function setServerLoadavg($value = null)
    {
        $this->server_loadavg = $value;
    }

    /**
     * Check if 'server_tv_broadcast_time' has a value
     *
     * @return bool
     */
    public function hasServerTvBroadcastTime()
    {
        return $this->server_tv_broadcast_time !== null;
    }

    /**
     * Get 'server_tv_broadcast_time' value
     *
     * @return float
     */
    public function getServerTvBroadcastTime()
    {
        return $this->server_tv_broadcast_time;
    }

    /**
     * Set 'server_tv_broadcast_time' value
     *
     * @param float $value
     */
    public function setServerTvBroadcastTime($value = null)
    {
        $this->server_tv_broadcast_time = $value;
    }

    /**
     * Check if 'server_game_time' has a value
     *
     * @return bool
     */
    public function hasServerGameTime()
    {
        return $this->server_game_time !== null;
    }

    /**
     * Get 'server_game_time' value
     *
     * @return float
     */
    public function getServerGameTime()
    {
        return $this->server_game_time;
    }

    /**
     * Set 'server_game_time' value
     *
     * @param float $value
     */
    public function setServerGameTime($value = null)
    {
        $this->server_game_time = $value;
    }

    /**
     * Check if 'server_relay_connected_steam_id' has a value
     *
     * @return bool
     */
    public function hasServerRelayConnectedSteamId()
    {
        return $this->server_relay_connected_steam_id !== null;
    }

    /**
     * Get 'server_relay_connected_steam_id' value
     *
     * @return int
     */
    public function getServerRelayConnectedSteamId()
    {
        return $this->server_relay_connected_steam_id;
    }

    /**
     * Set 'server_relay_connected_steam_id' value
     *
     * @param int $value
     */
    public function setServerRelayConnectedSteamId($value = null)
    {
        $this->server_relay_connected_steam_id = $value;
    }

    /**
     * Check if 'relay_slots_max' has a value
     *
     * @return bool
     */
    public function hasRelaySlotsMax()
    {
        return $this->relay_slots_max !== null;
    }

    /**
     * Get 'relay_slots_max' value
     *
     * @return int
     */
    public function getRelaySlotsMax()
    {
        return $this->relay_slots_max;
    }

    /**
     * Set 'relay_slots_max' value
     *
     * @param int $value
     */
    public function setRelaySlotsMax($value = null)
    {
        $this->relay_slots_max = $value;
    }

    /**
     * Check if 'relays_connected' has a value
     *
     * @return bool
     */
    public function hasRelaysConnected()
    {
        return $this->relays_connected !== null;
    }

    /**
     * Get 'relays_connected' value
     *
     * @return int
     */
    public function getRelaysConnected()
    {
        return $this->relays_connected;
    }

    /**
     * Set 'relays_connected' value
     *
     * @param int $value
     */
    public function setRelaysConnected($value = null)
    {
        $this->relays_connected = $value;
    }

    /**
     * Check if 'relay_clients_connected' has a value
     *
     * @return bool
     */
    public function hasRelayClientsConnected()
    {
        return $this->relay_clients_connected !== null;
    }

    /**
     * Get 'relay_clients_connected' value
     *
     * @return int
     */
    public function getRelayClientsConnected()
    {
        return $this->relay_clients_connected;
    }

    /**
     * Set 'relay_clients_connected' value
     *
     * @param int $value
     */
    public function setRelayClientsConnected($value = null)
    {
        $this->relay_clients_connected = $value;
    }

    /**
     * Check if 'relayed_game_server_steam_id' has a value
     *
     * @return bool
     */
    public function hasRelayedGameServerSteamId()
    {
        return $this->relayed_game_server_steam_id !== null;
    }

    /**
     * Get 'relayed_game_server_steam_id' value
     *
     * @return int
     */
    public function getRelayedGameServerSteamId()
    {
        return $this->relayed_game_server_steam_id;
    }

    /**
     * Set 'relayed_game_server_steam_id' value
     *
     * @param int $value
     */
    public function setRelayedGameServerSteamId($value = null)
    {
        $this->relayed_game_server_steam_id = $value;
    }

    /**
     * Check if 'parent_relay_count' has a value
     *
     * @return bool
     */
    public function hasParentRelayCount()
    {
        return $this->parent_relay_count !== null;
    }

    /**
     * Get 'parent_relay_count' value
     *
     * @return int
     */
    public function getParentRelayCount()
    {
        return $this->parent_relay_count;
    }

    /**
     * Set 'parent_relay_count' value
     *
     * @param int $value
     */
    public function setParentRelayCount($value = null)
    {
        $this->parent_relay_count = $value;
    }

    /**
     * Check if 'tv_secret_code' has a value
     *
     * @return bool
     */
    public function hasTvSecretCode()
    {
        return $this->tv_secret_code !== null;
    }

    /**
     * Get 'tv_secret_code' value
     *
     * @return int
     */
    public function getTvSecretCode()
    {
        return $this->tv_secret_code;
    }

    /**
     * Set 'tv_secret_code' value
     *
     * @param int $value
     */
    public function setTvSecretCode($value = null)
    {
        $this->tv_secret_code = $value;
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
            'server_public_ip_addr' => null,
            'server_private_ip_addr' => null,
            'server_port' => null,
            'server_tv_port' => null,
            'server_key' => null,
            'server_hibernation' => null,
            'server_type' => \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGameServerInfo\ServerType::UNSPECIFIED(),
            'server_region' => null,
            'server_loadavg' => null,
            'server_tv_broadcast_time' => null,
            'server_game_time' => null,
            'server_relay_connected_steam_id' => null,
            'relay_slots_max' => null,
            'relays_connected' => null,
            'relay_clients_connected' => null,
            'relayed_game_server_steam_id' => null,
            'parent_relay_count' => null,
            'tv_secret_code' => null
        ], $values);

        $message->setServerPublicIpAddr($values['server_public_ip_addr']);
        $message->setServerPrivateIpAddr($values['server_private_ip_addr']);
        $message->setServerPort($values['server_port']);
        $message->setServerTvPort($values['server_tv_port']);
        $message->setServerKey($values['server_key']);
        $message->setServerHibernation($values['server_hibernation']);
        $message->setServerType($values['server_type']);
        $message->setServerRegion($values['server_region']);
        $message->setServerLoadavg($values['server_loadavg']);
        $message->setServerTvBroadcastTime($values['server_tv_broadcast_time']);
        $message->setServerGameTime($values['server_game_time']);
        $message->setServerRelayConnectedSteamId($values['server_relay_connected_steam_id']);
        $message->setRelaySlotsMax($values['relay_slots_max']);
        $message->setRelaysConnected($values['relays_connected']);
        $message->setRelayClientsConnected($values['relay_clients_connected']);
        $message->setRelayedGameServerSteamId($values['relayed_game_server_steam_id']);
        $message->setParentRelayCount($values['parent_relay_count']);
        $message->setTvSecretCode($values['tv_secret_code']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGameServerInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'server_public_ip_addr',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'server_private_ip_addr',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'server_port',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'server_tv_port',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'server_key',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'server_hibernation',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'server_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.CSGO.SteamMsgGC.CMsgGameServerInfo.ServerType',
                    'default_value' => \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGameServerInfo\ServerType::UNSPECIFIED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'server_region',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'server_loadavg',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'server_tv_broadcast_time',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'server_game_time',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'server_relay_connected_steam_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'relay_slots_max',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'relays_connected',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'relay_clients_connected',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 16,
                    'name' => 'relayed_game_server_steam_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 17,
                    'name' => 'parent_relay_count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 18,
                    'name' => 'tv_secret_code',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
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

        if ($this->server_public_ip_addr !== null) {
            $writer->writeVarint($stream, 13);
            $writer->writeFixed32($stream, $this->server_public_ip_addr);
        }

        if ($this->server_private_ip_addr !== null) {
            $writer->writeVarint($stream, 21);
            $writer->writeFixed32($stream, $this->server_private_ip_addr);
        }

        if ($this->server_port !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->server_port);
        }

        if ($this->server_tv_port !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->server_tv_port);
        }

        if ($this->server_key !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->server_key);
        }

        if ($this->server_hibernation !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->server_hibernation);
        }

        if ($this->server_type !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->server_type->value());
        }

        if ($this->server_region !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->server_region);
        }

        if ($this->server_loadavg !== null) {
            $writer->writeVarint($stream, 77);
            $writer->writeFloat($stream, $this->server_loadavg);
        }

        if ($this->server_tv_broadcast_time !== null) {
            $writer->writeVarint($stream, 85);
            $writer->writeFloat($stream, $this->server_tv_broadcast_time);
        }

        if ($this->server_game_time !== null) {
            $writer->writeVarint($stream, 93);
            $writer->writeFloat($stream, $this->server_game_time);
        }

        if ($this->server_relay_connected_steam_id !== null) {
            $writer->writeVarint($stream, 97);
            $writer->writeFixed64($stream, $this->server_relay_connected_steam_id);
        }

        if ($this->relay_slots_max !== null) {
            $writer->writeVarint($stream, 104);
            $writer->writeVarint($stream, $this->relay_slots_max);
        }

        if ($this->relays_connected !== null) {
            $writer->writeVarint($stream, 112);
            $writer->writeVarint($stream, $this->relays_connected);
        }

        if ($this->relay_clients_connected !== null) {
            $writer->writeVarint($stream, 120);
            $writer->writeVarint($stream, $this->relay_clients_connected);
        }

        if ($this->relayed_game_server_steam_id !== null) {
            $writer->writeVarint($stream, 129);
            $writer->writeFixed64($stream, $this->relayed_game_server_steam_id);
        }

        if ($this->parent_relay_count !== null) {
            $writer->writeVarint($stream, 136);
            $writer->writeVarint($stream, $this->parent_relay_count);
        }

        if ($this->tv_secret_code !== null) {
            $writer->writeVarint($stream, 145);
            $writer->writeFixed64($stream, $this->tv_secret_code);
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
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->server_public_ip_addr = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->server_private_ip_addr = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->server_port = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->server_tv_port = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->server_key = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->server_hibernation = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->server_type = \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGameServerInfo\ServerType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->server_region = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->server_loadavg = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->server_tv_broadcast_time = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->server_game_time = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->server_relay_connected_steam_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->relay_slots_max = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->relays_connected = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->relay_clients_connected = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 16) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->relayed_game_server_steam_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 17) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->parent_relay_count = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 18) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->tv_secret_code = $reader->readFixed64($stream);

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

        if ($this->server_public_ip_addr !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->server_private_ip_addr !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->server_port !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->server_port);
        }

        if ($this->server_tv_port !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->server_tv_port);
        }

        if ($this->server_key !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->server_key);
        }

        if ($this->server_hibernation !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->server_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->server_type->value());
        }

        if ($this->server_region !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->server_region);
        }

        if ($this->server_loadavg !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->server_tv_broadcast_time !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->server_game_time !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->server_relay_connected_steam_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->relay_slots_max !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->relay_slots_max);
        }

        if ($this->relays_connected !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->relays_connected);
        }

        if ($this->relay_clients_connected !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->relay_clients_connected);
        }

        if ($this->relayed_game_server_steam_id !== null) {
            $size += 2;
            $size += 8;
        }

        if ($this->parent_relay_count !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->parent_relay_count);
        }

        if ($this->tv_secret_code !== null) {
            $size += 2;
            $size += 8;
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
        $this->server_public_ip_addr = null;
        $this->server_private_ip_addr = null;
        $this->server_port = null;
        $this->server_tv_port = null;
        $this->server_key = null;
        $this->server_hibernation = null;
        $this->server_type = \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGameServerInfo\ServerType::UNSPECIFIED();
        $this->server_region = null;
        $this->server_loadavg = null;
        $this->server_tv_broadcast_time = null;
        $this->server_game_time = null;
        $this->server_relay_connected_steam_id = null;
        $this->relay_slots_max = null;
        $this->relays_connected = null;
        $this->relay_clients_connected = null;
        $this->relayed_game_server_steam_id = null;
        $this->parent_relay_count = null;
        $this->tv_secret_code = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGameServerInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->server_public_ip_addr = ($message->server_public_ip_addr !== null) ? $message->server_public_ip_addr : $this->server_public_ip_addr;
        $this->server_private_ip_addr = ($message->server_private_ip_addr !== null) ? $message->server_private_ip_addr : $this->server_private_ip_addr;
        $this->server_port = ($message->server_port !== null) ? $message->server_port : $this->server_port;
        $this->server_tv_port = ($message->server_tv_port !== null) ? $message->server_tv_port : $this->server_tv_port;
        $this->server_key = ($message->server_key !== null) ? $message->server_key : $this->server_key;
        $this->server_hibernation = ($message->server_hibernation !== null) ? $message->server_hibernation : $this->server_hibernation;
        $this->server_type = ($message->server_type !== null) ? $message->server_type : $this->server_type;
        $this->server_region = ($message->server_region !== null) ? $message->server_region : $this->server_region;
        $this->server_loadavg = ($message->server_loadavg !== null) ? $message->server_loadavg : $this->server_loadavg;
        $this->server_tv_broadcast_time = ($message->server_tv_broadcast_time !== null) ? $message->server_tv_broadcast_time : $this->server_tv_broadcast_time;
        $this->server_game_time = ($message->server_game_time !== null) ? $message->server_game_time : $this->server_game_time;
        $this->server_relay_connected_steam_id = ($message->server_relay_connected_steam_id !== null) ? $message->server_relay_connected_steam_id : $this->server_relay_connected_steam_id;
        $this->relay_slots_max = ($message->relay_slots_max !== null) ? $message->relay_slots_max : $this->relay_slots_max;
        $this->relays_connected = ($message->relays_connected !== null) ? $message->relays_connected : $this->relays_connected;
        $this->relay_clients_connected = ($message->relay_clients_connected !== null) ? $message->relay_clients_connected : $this->relay_clients_connected;
        $this->relayed_game_server_steam_id = ($message->relayed_game_server_steam_id !== null) ? $message->relayed_game_server_steam_id : $this->relayed_game_server_steam_id;
        $this->parent_relay_count = ($message->parent_relay_count !== null) ? $message->parent_relay_count : $this->parent_relay_count;
        $this->tv_secret_code = ($message->tv_secret_code !== null) ? $message->tv_secret_code : $this->tv_secret_code;
    }


}
