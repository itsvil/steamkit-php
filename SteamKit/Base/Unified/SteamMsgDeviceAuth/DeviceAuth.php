<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_deviceauth.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgDeviceAuth;

/**
 * Protobuf service : SteamKit.Base.Unified.SteamMsgDeviceAuth.DeviceAuth
 */
interface DeviceAuth
{

    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetOwnAuthorizedDevices_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetOwnAuthorizedDevices_Response
     */
    public function getOwnAuthorizedDevices(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetOwnAuthorizedDevices_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_AcceptAuthorizationRequest_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_AcceptAuthorizationRequest_Response
     */
    public function acceptAuthorizationRequest(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_AcceptAuthorizationRequest_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_AuthorizeRemoteDevice_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_AuthorizeRemoteDevice_Response
     */
    public function authorizeRemoteDevice(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_AuthorizeRemoteDevice_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_DeauthorizeRemoteDevice_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_DeauthorizeRemoteDevice_Response
     */
    public function deauthorizeRemoteDevice(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_DeauthorizeRemoteDevice_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetUsedAuthorizedDevices_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetUsedAuthorizedDevices_Response
     */
    public function getUsedAuthorizedDevices(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetUsedAuthorizedDevices_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetAuthorizedBorrowers_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetAuthorizedBorrowers_Response
     */
    public function getAuthorizedBorrowers(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetAuthorizedBorrowers_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_AddAuthorizedBorrowers_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_AddAuthorizedBorrowers_Response
     */
    public function addAuthorizedBorrowers(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_AddAuthorizedBorrowers_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_RemoveAuthorizedBorrowers_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_RemoveAuthorizedBorrowers_Response
     */
    public function removeAuthorizedBorrowers(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_RemoveAuthorizedBorrowers_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetAuthorizedAsBorrower_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetAuthorizedAsBorrower_Response
     */
    public function getAuthorizedAsBorrower(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetAuthorizedAsBorrower_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetExcludedGamesInLibrary_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetExcludedGamesInLibrary_Response
     */
    public function getExcludedGamesInLibrary(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetExcludedGamesInLibrary_Request $input);

}

