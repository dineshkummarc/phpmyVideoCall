## VideoCall-HTML5-Videochat-PHP / 2 Way Video Calls - Standalone PHP

- [Video Call PHP / HTML5 Videochat on P2P WebRTC](https://demo.videowhisper.com/p2p-html5-videocall/)
- [Video Call PHP / HTML5 Videochat on Wowza SE relay](https://demo.videowhisper.com/videocall-html5-videochat-php/)

![PHP HTML5 Videochat / Video Call](/snapshots/h5a-2way-call.jpg)

Before installing, test the simple setup in the live demos above.

This plain php edition includes code and minimal scripts to embed the HTML5 Videochat app and test/showcase basic features. This edition is for integrating/using application with own scripts/framework/database.
This edition showcases 2 way videocalls.
For a complete implementation of advanced capabilities, see [Turnkey HTML5 Videochat Site](https://paidvideochat.com/html5-videochat/) edition, available as WordPress plugin with full php source. The turnkey site edition implements pay per minute videochat (group and private 2 way video calls) with membership, billing, advanced tools.

### Simple PHP Edition Features: Video Call

- [x] Automatically create a room as caller and show link to invite client
- [x] Embed the Video Call - HTML5 Videochat app to run with basic 2 way video chat features

### Key Features for HTML5 Videochat / Video Call

Warning: some of these features are not active/implemented in this simplified edition, but can be enabled as in turnkey site edition.

- [x] WebRTC 2 way video call
- [x] P2P streaming using VideoWhisper WebRTC signaling server + STUN/TURN
- [x] WebRTC relayed streaming (reliable and scalable to many clients from streaming server, independent of broadcaster upload connection)
- [x] video/audio recorder, emoticons, mentions in text chat
- [x] fullscreen for videochat interface or playback video
- [x] adaptive target video bitrate (depending on cam resolution) and configuration in resolution change
- [x] broadcasting/playback stats (open controls and stats should show in few seconds)
- [x] dark mode / lights on: each user can toggle interface mode live at runtime, SFX (sound effects)
- [ ] live wallet balance display (updates from tips and other transfers)
- [ ] tips with multiple customizable options, gift images
- [x] translation, text change support

### Installation Instructions

Before installing, make sure your have a supported live streaming server: Wowza SE as HTML5 WebRTC streaming relay and/or the [VideoWhisper WebRTC signaling server](https://github.com/videowhisper/videowhisper-webrtc/). Production implementations should also involve Session Control for security and website integration (like list of live channels).
For testing, get a free plan from [Free WebRTC Host: P2P](https://webrtchost.com/hosting-plans/#WebRTC-Only).

1.  Configure WebRTC + SSL with Wowza SE or the VideoWhisper WebRTC + STUN/TURN server.
2.  Deploy files to your web installation location. (Example: yoursite.domain/html5-videochat/)
3.  Fill your streaming settings in settings.php file
4.  If you don't have SuPHP, enable write permissions (0777) for folder "uploads", required to save session and chat info.

### Plain PHP Edition Limitations

- The plain php edition refers to minimal scripts for configuring and accessing videochat room, so developers can integrate with own scripts.
- Plain php edition does not involve database and systems to manage members, rooms, billing. These depend on framework you want to integrate, plugins, database, member system.
- Applications reads parameters, wallet balance and other data with ajax calls from framework/integration scripts (that need to be implemented depending on framework, database, user scripts).
- A complete implementation of features is available for WordPress framework. See [Turnkey HTML5 Videochat Site](https://paidvideochat.com/html5-videochat/) edition, available as WordPress plugin with full php source. Includes user role management (performers/clients), pay per minute, integrates billing wallets.
- This plain edition implements 2 way videocall with broadcast / playback.
- Setup starts in demo mode, to prevent high resource usage by visitors. To enable and confirm full mode you need to fill application version in modeVersion parameter. [Consult VideoWhisper](https://consult.videowhisper.com) for assistance or a turnkey site setup.

### Main Integration Scripts

- index.php embeds the html5 application: accessed directly creates a room and shows room link to invite others
- app-call.php is called by application to retrieve parameters, interact with web server, update status and chat (ajax calls)
- app-functions.php functions implementing features for app-call.php , including translated texts, app settings
- settings.php settings and options, including streaming settings and url for calls (when integrating with own framework)

Scripts also contain comments for clarifications/suggestions.

This is a simple setup showcasing easy app deployment and integration with other PHP scripts.
For a quick setup, see [VideoWhisper Turnkey Stream Hosting Plans](https://webrtchost.com/hosting-plans/) that include requirements for all features and free installation.

### VideoWhisper HTML5 Project Demos

- [Video Call PHP / HTML5 Videochat on Wowza SE](https://demo.videowhisper.com/videocall-html5-videochat-php/)
- [Video Call PHP / HTML5 Videochat on VideoWhisper WebRTC](https://demo.videowhisper.com/p2p-html5-videocall/)
- [Live Streaming PHP / HTML5 Videochat on Wowza SE](https://demo.videowhisper.com/html5-videochat-php/)
- [Live Streaming PHP / HTML5 Videochat on VideoWhisper WebRTC](https://demo.videowhisper.com/vws-html5-livestreaming/)
- [Cam/Mic Recorder HTML5 - Standalone](https://demo.videowhisper.com/cam-recorder-html5-video-audio/)
- [PaidVideochat Turnkey Site](https://paidvideochat.com/demo/)

### VideoWhisper HTML5 Project Downloads

- [Video Call - HTML5 Videochat - GitHub](https://github.com/videowhisper/VideoCall-HTML5-Videochat-PHP)
- [Live Streaming - HTML5 Videochat - GitHub](https://github.com/videowhisper/HTML5-Videochat-PHP)
- [Cam/Mic Recorder HTML5 - GitHub](https://github.com/videowhisper/Cam-Recorder-HTML5-Video-Audio)
- [PaidVideochat Turnkey Site - WordPress](https://wordpress.org/plugins/ppv-live-webcams/)
- [Video Calls & Random Chat Turnkey Site - WordPress](https://wordpress.org/plugins/webcam-2way-videochat/)
- [WebRTC Signaling Server](https://github.com/videowhisper/videowhisper-webrtc/)

[Consult VideoWhisper](https://consult.videowhisper.com) for commercial services like turnkey site platforms, compatible hosting, custom development services.
