#!/bin/bash
# Renkler
ESC_SEQ="\x1b["
kirmizi=$ESC_SEQ"31;02m"

echo -e "$kirmizi
                  
                                             $kirmizi  
                 ╔/════════════════╔๑ஜ۩۞۩ஜ๑╗════════════════\╗
                 ║                                          ║
                 ║        ♦ Script created by hasanatilan ♦        ║
                 ║          ♦ Web www.tsbakkali.net ♦           ║
                 ║           ♦ Hasan Atilan ♦            ║
                 ║                                          ║
                 ╚\════════════════╚๑ஜ۩۞۩ஜ๑╝════════════════/╝
				 $kirmizi
				 "
 
if [ $1 = 'durdur' ] 
    then 
        pkill -f DDOSBildirim
		echo -e "DDOSBildirim: $COL_GREEN Bot Durduruldu! $COL_RESET"
    fi

if [ $1 = 'baslat' ] 
    then 
        screen -A -m -d -S DDOSBildirim php ddosguard.php
		echo -e "DDOSBildirim: $COL_GREEN Bot Başlatıldı! $COL_RESET"
    fi
