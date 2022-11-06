## Requirements
* Discord Webhook URL
* curl

## Installation
* Clone repo to your own server `git clone ttps://github.com/mkgeeky/discord-messages.git`
* Rename discode_sample.sh to discode.sh `mv discode_sample.sh discode.sh`
* Make discode.sh executeable `chmod +x FullPathTo/discode.sh`
* Edit discode.sh with Discode Webhook URL

### rTorrent
Add following line to .rtorrent.rc
`method.set_key = event.download.finished,notify_me,"execute=FullPathTo/discode.sh,rt,$d.name="`

From now on; When rtorrent funusged download a torrent - you will get a notification on Discode :slightly_smiling_face: