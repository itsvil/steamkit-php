<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_player.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgPlayer;

/**
 * Protobuf service : SteamKit.Base.Unified.SteamMsgPlayer.PlayerClient
 */
interface PlayerClient
{

    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgPlayer\CPlayer_LastPlayedTimes_Notification
     * $input
     * @return \SteamKit\Base\Unified\SteamMsgUnifiedBase\NoResponse
     */
    public function notifyLastPlayedTimes(\SteamKit\Base\Unified\SteamMsgPlayer\CPlayer_LastPlayedTimes_Notification $input);

}
