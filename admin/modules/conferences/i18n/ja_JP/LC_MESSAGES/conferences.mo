Þ    O        k         ¸     ¹  
   È     Ó  U   ß     5  ,   N     {       !   £  '   Å  
   í     ø     	          /     G     S     `     o     {          §  <   ·     ô     	  :   	     Õ	     ã	  8   ð	     )
     ?
     Ù
    r            ¬   ¤     Q     _     b     k  $   p  &     B   ¼     ÿ  +        7     J  Ä   e     *     9     K    `  ,   t     ¡  	   ­     ·  T   È          0  ¾   4     ó  Y   w     Ñ     ë           	          *     2     :     S     _      g          £  	   ·     Á     Õ  ´  Ø          ¬     ¼  o   Õ  7   E  W   }     Õ  )   î  C     ,   \               »  $   Ú  (   ÿ     (     A     [     w       !        ¿  T   Þ  ÷   3     +  ]   A          ¸  N   Î       Ç   3  ë   û  [  ç     C     Y  ç   f  $   N  	   s  	   }       <     ?   Ë  h         t   <      !   Í   -   ï   ø   !     "     &"     6"  a  I"  W   «#     $     "$     5$  _   R$     ²$     Á$  0  È$  °   ù%     ª&  (   5'  "   ^'     '     '     '     ¹'     É'  +   ß'     (     !(  B   ((     k(      (  	   £(  /   ­(     Ý(     H       =   C   ?   .   <   $              6           2   M   &      ,              -   B   ;              N   (      D         9   3              /   7   I          J      @                 5       '      O                     L   0   K          !      8      F      :              +   G       1               >   #   %   *      "   A                    	         
   )   4   E                  Add Conference Admin PIN: Allow Menu: Allow creation of conference rooms (meet-me) where multiple people can talk together. Announce user join/leave Announce user(s) count on joining conference Applications Checking for users field.. Checking if music field present.. Checking if recordings need migration.. Conference Conference Name: Conference Number: Conference Options Conference Room %s : %s Conference: Conference:  Conference: %s Conferences Conflicting Extensions Delete Conference %s Edit Conference Enable Music On Hold when the conference has a single caller Enter a PIN number for the admin user.<br><br>This setting is optional unless the 'leader wait' option is in use, then this PIN will identify the leader. FATAL error Give this conference a brief name to help you identify it. Join Message: Leader Wait: Maximum Number of users allowed to join this conference. Maximum Participants: Message to be played to the caller before joining the conference.<br><br>To add additional recordings please use the "System Recordings" MENU to the left Message to be played to the caller before joining the conference.<br><br>You must install and enable the "Systems Recordings" Module to edit this option Music (or Commercial) played to the caller while they wait in line for the conference to start. Choose "inherit" if you want the MoH class to be what is currently selected, such as by the inbound route.<br><br>  This music is defined in the "Music on Hold" to the left. Music on Hold Class: Music on Hold: Mute everyone when they initially join the conference. Please note that if you do not have 'Leader Wait' set to yes you must have 'Allow Menu' set to Yes to unmute yourself Mute on Join: No No Limit None Please enter a valid Conference Name Please enter a valid Conference Number Present Menu (user or admin) when '*' is received ('send' to menu) Quiet Mode: Quiet mode (do not play enter/leave sounds) Record Conference: Record the conference call Sets talker detection. Asterisk will sends events on the Manager Interface identifying
the channel that is talking. The talker will also be identified on the output of
the meetme list CLI command. Submit Changes Talker Detection: Talker Optimization: Turns on talker optimization. With talker optimization, Asterisk treats talkers who
are not speaking as being muted, meaning that no encoding is done on transmission
and that received audio that is not registered as talking is omitted, causing no
buildup in background noise. Use this number to dial into the conference. User Count: User PIN: User join/leave: Wait until the conference leader (admin user) arrives before starting the conference Warning! Extension Yes You can require callers to enter a password before they can enter this conference.<br><br>This setting is optional.<br><br>If either PIN is entered, the user will be prompted to enter a PIN. You must set Allow Menu to Yes when not using a Leader or Admin in your conference, otherwise you will be unable to unmute yourself You must set an admin PIN for the Conference Leader when selecting the leader wait option adding joinmsg_id field.. adding music field.. adding.. already migrated already present default deleted dropping joinmsg field.. fatal error inherit is not allowed for your account. migrate to recording ids.. migrated %s entries migrating no joinmsg field??? ok Project-Id-Version: FreePBX 2.10.0.8
Report-Msgid-Bugs-To: 
POT-Creation-Date: 2013-11-05 19:32+0900
PO-Revision-Date: 2014-02-20 05:11+0200
Last-Translator: Chise Mishima <c.mishima@qloog.com>
Language-Team: Japanese <http://example.com/projects/freepbx/conferences/ja/>
Language: ja
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
Plural-Forms: nplurals=1; plural=0;
X-Generator: Weblate 1.8
 ã«ã³ãã¡ã¬ã³ã¹ãè¿½å  ç®¡çèPINï¼ ã¡ãã¥ã¼ãè¨±å¯ï¼ è¤æ°ã®äººããä¸ç·ã«ä¼è©±ãã§ããã«ã³ãã¡ã¬ã³ã¹ã«ã¼ã (meet-me)ã®ä½æãè¨±å¯ããã ã¦ã¼ã¶ã¼ã®åå /éåºãã¢ãã¦ã³ã¹ãã¾ã ã«ã³ãã¡ã¬ã³ã¹ã«åå ãã¦ããã¦ã¼ã¶ã¼ã®æ°ãã¢ãã¦ã³ã¹ãã¾ã ã¢ããªã±ã¼ã·ã§ã³ users ãã£ã¼ã«ãã®ãã§ãã¯ä¸­.. musicãã£ã¼ã«ããå­å¨ãã¦ãããã©ãããã§ãã¯.. é²é³ã®ç§»è¡ãå¿è¦ããã§ãã¯ä¸­.. ã«ã³ãã¡ã¬ã³ã¹ ã«ã³ãã¡ã¬ã³ã¹åï¼ ã«ã³ãã¡ã¬ã³ã¹çªå·ï¼ ã«ã³ãã¡ã¬ã³ã¹ãªãã·ã§ã³ ã«ã³ãã¡ã¬ã³ã¹ã«ã¼ã  %s ï¼ %s ã«ã³ãã¡ã¬ã³ã¹ï¼ ã«ã³ãã¡ã¬ã³ã¹ï¼  ã«ã³ãã¡ã¬ã³ã¹ï¼ %s ã«ã³ãã¡ã¬ã³ã¹ åç·ã®ç«¶å ã«ã³ãã¡ã¬ã³ã¹ã®åé¤ %s ã«ã³ãã¡ã¬ã³ã¹ã®ç·¨é ã«ã³ãã¡ã¬ã³ã¹ã®åå èãä¸äººã®å ´åã¯ä¿çé³ãæå¹ã«ãã¾ã ç®¡çèã¦ã¼ã¶ã¼ç¨ã®PINçªå·ãå¥åãã¾ãã<br><br>'ãªã¼ãã¼å¾ã¡'ãªãã·ã§ã³ãä½¿ç¨ä¸­ã§ãªããã°ããã®è¨­å®ã¯ãªãã·ã§ã³ã§ãããã®éããã®PINã«ãã£ã¦ãªã¼ãã¼ãã©ãããè­å¥ãã¾ãã è´å½çãªã¨ã©ã¼ èªè­ããããããã«ããã®ã«ã³ãã¡ã¬ã³ã¹ã«ç°¡æ½ãªååãä»ãã¾ãã åå ã¡ãã»ã¼ã¸ï¼ ãªã¼ãã¼å¾ã¡ï¼ ãã®ã«ã³ãã¡ã¬ã³ã¹ã«åå ãè¨±å¯ãããæå¤§ã¦ã¼ã¶ã¼æ°ã æå¤§åå èæ°ï¼ çºä¿¡èãã«ã³ãã¡ã¬ã³ã¹ã«åå ããåã«åçãããã¡ãã»ã¼ã¸ã<br><br>é²é³ãè¿½å ããã«ã¯ãå·¦å´ã«ãã"ã·ã¹ãã é²é³"ã¡ãã¥ã¼ãä½¿ç¨ãã¦ãã ãã ã«ã³ãã¡ã¬ã³ã¹ã«åå ããåã«çºä¿¡èã«åçãããã¡ãã»ã¼ã¸ã<br><br>ãã®ãªãã·ã§ã³ãç·¨éããã«ã¯"ã·ã¹ãã é²é³"ã¢ã¸ã¥ã¼ã«ãã¤ã³ã¹ãã¼ã«ãæå¹ã«ããªããã°ãªãã¾ãã ã«ã³ãã¡ã¬ã³ã¹ãã¹ã¿ã¼ãããã¾ã§å¾ã£ã¦ããéã«ãçºä¿¡èã«åçãããé³æ¥½(ãã³ãã¼ã·ã£ã«)ã§ããçä¿¡ã«ã¼ãçµç±ãªã©ãMoHã¯ã©ã¹ãç¾å¨é¸æããã¦ãããã®ã«ãããå ´åã¯"ç¶æ¿"ãé¸æãã¦ãã ããã<br><br>ãã®é³æ¥½ã¯å·¦å´ã®"ä¿çé³"ã«å®ç¾©ããã¦ãã¾ãã ä¿çã¯ã©ã¹é³ï¼ ä¿çé³ï¼ åãã¦ã«ã³ãã¡ã¬ã³ã¹ã«åå ãããäººããã¥ã¼ãã«ãã¾ãã'ãªã¼ãã¼å¾ã¡'ã'ã¯ã'ã«è¨­å®ããªãå ´åã'ã¡ãã¥ã¼è¨±å¯' ãå¿ã'ã¯ã'ã«è¨­å®ãããã¥ã¼ããè§£é¤ãã¦ãã ãã åå æã«ãã¥ã¼ããã¾ãï¼ ããã ç¡å¶é ãªã æ­£ããã«ã³ãã¡ã¬ã³ã¹åãå¥åãã¦ãã ãã æ­£ããã«ã³ãã¡ã¬ã³ã¹çªå·ãå¥åãã¦ãã ãã '*'ãæ¼ãããéã«(ã¦ã¼ã¶ã¼orç®¡çè)ã¡ãã¥ã¼ãæµãã¾ãã(ã¡ãã¥ã¼ã«'éã') ãµã¤ã¬ã³ãã¢ã¼ãï¼ ãµã¤ã¬ã³ãã¢ã¼ã(å¥å®¤/éåºé³ãåçããªã) ã«ã³ãã¡ã¬ã³ã¹ãé²é³ï¼ ã«ã³ãã¡ã¬ã³ã¹éè©±ãé²é³ãã¾ã è©±èæ¤ç¥ãã»ãããã¾ããAsteriskã¯ä¼è©±ä¸­ã®ãã£ãã«ãè­å¥ãã¦ããã¼ã¸ã£ã¼ã¤ã³ã¿ã¼ãã§ã¤ã¹ã«ã¤ãã³ããéä¿¡ãã¾ããmeetmeãªã¹ãCLIã³ãã³ãã®åºåã«ãã£ã¦ãè©±èã¯è­å¥ããã¾ãã å¤æ´ãé©ç¨ è©±èæ¤ç¥ï¼ è©±èæé©åï¼ è©±èæé©åããªã³ã«ãã¾ããè©±èæé©åããããã¨ã«ãããAsteriskã¯è©±ããã¦ããªãè©±èããã¥ã¼ãã¨åãæ±ãããã¾ããã¤ã¾ããéä¿¡ã®éã«ã¨ã³ã³ã¼ãå¦çãçºçãããè©±ã¨ãã¦ç»é²ããã¦ããªãåä¿¡é³å£°ã¯çç¥ãããããã¯ã°ã©ã¦ã³ããã¤ãºãçºçãã¾ããã ã«ã³ãã¡ã¬ã³ã¹ã«ãã¤ã¤ã«ã¤ã³ããã®ã«ãã®çªå·ãä½¿ç¨ãã¾ãã ã¦ã¼ã¶ã¼æ°ã«ã¦ã³ãï¼ ã¦ã¼ã¶ã¼PINï¼ ã¦ã¼ã¶ã¼åå /éåºï¼ ãªã¼ãã¼(ç®¡çã¦ã¼ã¶ã¼)ãåå ããè¿ãã«ã³ãã¡ã¬ã³ã¹éå§ãå¾ã¡ã¾ã è­¦å! åç· ã¯ã çºä¿¡èã«å¯¾ãã¦ããã®ã«ã³ãã¡ã¬ã³ã¹ã«å¥å®¤ããåã«ãã¹ã¯ã¼ãã®å¥åãè¦æ±ãããã¨ãã§ãã¾ãã<br><br>ãã®è¨­å®ã¯ãªãã·ã§ã³ã§ãã<br><br>ã©ã¡ããã®PINãå¥åãããå ´åãã¦ã¼ã¶ã¼ã«ã¯PINã®å¥åãã­ã³ãããè¡¨ç¤ºããã¾ãã ãªã¼ãã¼ã¾ãã¯ç®¡çèãä½¿ç¨ãã¦ããªãæãã¡ãã¥ã¼ã®è¨±å¯ã¯å¿ã'ã¯ã'ã«è¨­å®ããªããã°ããã¥ã¼ããè§£é¤ãããã¨ãã§ãã¾ãã ãªã¼ãã¼å¾ã¡ããªãã·ã§ã³ã«é¸æããå ´åã¯ãã«ã³ãã¡ã¬ã³ã¹ãªã¼ãã¼ç¨ã®ç®¡çèPINã®è¨­å®ãå¿é ã§ã joinmsg_id ãã£ã¼ã«ãã®è¿½å ä¸­.. musicãã£ã¼ã«ãã®è¿½å ä¸­.. è¿½å ä¸­.. ç§»è¡æ¸ã¿ ãã§ã«å­å¨ãã¦ãã¾ã ããã©ã«ã åé¤ããã¾ãã joinmsg ãã£ã¼ã«ãã®ãã­ããä¸­.. è´å½çãªã¨ã©ã¼ ç¶æ¿ ã¯ãããªãã®ã¢ã«ã¦ã³ãã«ã¯æ¨©éãããã¾ããã é²é³IDã«ç§»è¡ä¸­.. %sã¨ã³ããªã¼ãç§»è¡ãã ç§»è¡ä¸­ joinmsg ãã£ã¼ã«ããå­å¨ãã¾ãã??? ok 