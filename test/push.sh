#! /bin/bash
name=`basename $0 .sh`
flag=$2
case $1 in
 flag)
        if [ ! -n "$2" ] ;then
            echo "Incomplete Parameter!"
        else
            echo "$flag" > /flag
            chmod 644 /flag
            rm -rf /mnt/push.sh
        fi
        ;;
 *)
        echo "Usage: $name [flag]"
        exit 1
        ;;
esac
exit 0
