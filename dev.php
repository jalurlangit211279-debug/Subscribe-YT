<?php 
 /* 
 the developer 
 */ 
 // Started // 
  
 // Msg Usage // 
 if ( $argc < 2 ){ 
   print " __     __      _______    _                     
  \ \   / /     |__   __|  | |                    
   \ \_/ /__  _   _| |_   _| |__   ___            
    \   / _ \| | | | | | | | '_ \ / _ \           
     | | (_) | |_| | | |_| | |_) |  __/           
    _|_|\___/ \__,_|_|\__,_|_.__/ \___|           
   / ____|     | |                 (_) |          
  | (___  _   _| |__  ___  ___ _ __ _| |__   ___  
   \___ \| | | | '_ \/ __|/ __| '__| | '_ \ / _ \ 
   ____) | |_| | |_) \__ \ (__| |  | | |_) |  __/ 
  |_____/ \__,_|_.__/|___/\___|_|  |_|_.__/ \___| 
  
 "; 
   exit( "[??] Youtube Subscribe  [??]\n[??]   the developer  [??]\n----------------------------------\nPerintah: php dev.php <URL YouToube>\n\n\n" ); 
 } 
 // Config // 
   print " __     __      _______    _                     
  \ \   / /     |__   __|  | |                    
   \ \_/ /__  _   _| |_   _| |__   ___            
    \   / _ \| | | | | | | | '_ \ / _ \           
     | | (_) | |_| | | |_| | |_) |  __/           
    _|_|\___/ \__,_|_|\__,_|_.__/ \___|           
   / ____|     | |                 (_) |          
  | (___  _   _| |__  ___  ___ _ __ _| |__   ___  
   \___ \| | | | '_ \/ __|/ __| '__| | '_ \ / _ \ 
   ____) | |_| | |_) \__ \ (__| |  | | |_) |  __/ 
  |_____/ \__,_|_.__/|___/\___|_|  |_|_.__/ \___| 
  
 "; 
 echo "\033[1;37m[\033[1;32m+\033[1;37m] Link Channel: \033[1;32m ".$argv[1]."\n"; 
 echo "\033[1;37m[\033[1;32m*\033[1;37m] Tools Used:\033[1;32m Started\n"; 
 echo "\033[1;32m[\033[1;37m~\033[1;32m] Prosses Run: \033[1;33m".date("Y/m/d H:i:s")."\n"; 
 echo "\033[1;32m[\033[1;37m@\033[1;32m] Refresh the Suff[\033[1;37m5\033[1;32m]\033[1;37m Seconds\n\n"; 
 while (1){ 
   $arrContextOptions=array(
"ssl"=>array(
"verify_peer"=>false,
"verify_peer_name"=>false,
),
);
   $channel_id = " ID_SALURAN_ANDA " ;
 $api_key = " KUNCI_API " ;
 $api_response = file_get_contents ( ' https://www.googleapis.com/youtube/v3/channels?part=statistics&id= ' . $channel_id . ' &fields=items/statistics/subscriberCount&key= ' . $api_key );
 $api_response_decoded = json_decode ($api_response , true);
 echo  $api_response_decoded [ ' items ' ][ 0 ][ ' statistics ' ][ ' subscriberCount ' ];
   $t = file_get_contents($channel); 
   $pattern = '/yt-uix-tooltip" title="(.*)" tabindex/'; 
   preg_subscibe($pattern, $t, $subscibe, PREG_OFFSET_CAPTURE); 
   echo "\033[1;32m[\033[1;37m+\033[1;32m]\033[1;37m Jumlah >>>\033[1;32m ".$chanel-subscribeCount[1]." \033[1;37m<<< \033[1;32mSubscribers\n"; 
   for($s=5; $s >=0; $s--){ 
   echo "Sedang Berjalan... [ ${s}s ] \r"; 
   sleep(1); 
   } 
   echo ""; 
 } 
 ?>
