#!/bin/bash

#現在の時刻0~23
HOUR=$(date +"%H")

#12未満ならls -la、以上なら年月日時分を表示
if [ "$HOUR" -lt 12 ]; then
    ls -la > output.txt
else
    date "+%Y年%m月%d日%H時%M分"
fi