#############################
# This script is made by: mkgeeky
# Web: https://mkgeeky.xyz
# Git: https://github.com/mkgeeky/
# Mail: contact@mkgeeky.xyz
# Lines above MAY NOT BE removed!
#############################
#bin/bash
RTORRENT=""
DELUGE=""

url=$1
Torrent=$2

die() { echo "$*" 1>&2 ; exit 1; }
LOGFILE="notification.log"
log() { echo "[`date +"%Y-%m-%d %T"`]: $*" >> $LOGFILE; }

if [ -z "$Torrent" ]
then
    die "Empty text"
fi
if [ "$url" = "rt" ]
then
    url=$RTORRENT
fi
if [ "$url" = "del" ]
then
    url=$DELUGE
fi
if [ -z "$url" ]
then
    die "Can't send to nobody."
fi

MessageToSend="**$Torrent**\nhas been downloaded"

msg_content=\"$MessageToSend\"
curl -H "Content-Type: application/json" -X POST -d "{\"content\": $msg_content}" $url
