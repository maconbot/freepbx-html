��    #      4  /   L           	  
        %     6     D  �  Q  '   �          %     1     L     T     i  <   {  +  �     �  �     b   �     >	  w   C	  	   �	     �	     �	     �	     �	     
     #
     4
     O
     [
     v
  	   �
     �
     �
  �  �
  '   �  '   �     �          -  �  B  Q   �     N     ]  >   n     �  #   �  '   �  �     �  �  0   +  e  \  �   �     �  	  �     �     �  ;   �  %     /   7  .   g     �  $   �  %   �  %   �  &   #     J     a                 #            "         	   !          
                                                                                                               Add Announcement Allow Skip Announcement: %s Announcements Applications Check this to keep the channel from explicitly being answered. When checked, the message will be played and if the channel is not already answered it will be delivered as early media if the channel supports that. When not checked, the channel is answered followed by a 1 second delay. When using an announcement from an IVR or other sources that have already answered the channel, that 1 second delay may not be desired. Checking if recordings need migration.. Delete Description Destination after playback Disable Don't Answer Channel Edit Announcement If the caller is allowed to press a key to skip the message. If this announcement came from an IVR and this box is checked, the destination below will be ignored and instead it will return to the calling IVR. Otherwise, the destination below will be taken. Don't check if not using in this mode. <br>The IVR return location will be to the last IVR in the call chain that was called so be careful to only check when needed. For example, if an IVR directs a call to another destination which eventually calls this announcement and this box is checked, it will return to that IVR which may not be the expected behavior. Invalid description specified Key to press that will allow for the message to be replayed. If you choose this option there will be a short delay inserted after the message. If a longer delay is needed it should be incorporated into the recording. Message to be played.<br>To add additional recordings use the "System Recordings" MENU to the left None Plays back one of the system recordings (optionally allowing the user to skip it) and then goes to another destination. Recording Repeat Return to IVR Submit Changes The name of this announcement adding recording_id field.. already migrated dropping recording field.. fatal error migrate to recording ids.. migrated %s entries migrating no recording field??? ok Project-Id-Version: 1.3
Report-Msgid-Bugs-To: 
POT-Creation-Date: 2011-09-23 09:52+0000
PO-Revision-Date: 2014-02-28 04:52+0200
Last-Translator: Andrew <andrew.nagy@the159.com>
Language-Team: Russian <http://example.com/projects/freepbx-211/announcement/ru/>
Language: ru_RU
MIME-Version: 1.0
Content-Type: text/plain; charset=utf-8
Content-Transfer-Encoding: 8bit
Plural-Forms: nplurals=3; plural=n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2;
X-Generator: Weblate 1.9-dev
 Добавить приветствие Разрешить пропустить Приветствия: %s Приветствия Приложения Использование этой опции при явном ответе. Если отмечено, приветствие воспроизводится, даже если канал ещё не открылся. Если не отмечено, то канал отвечает с задержкой примерно в 1 секунду. Если приветствие используется как шаг, перенаправленый из Интерактивного меню или другого источника, который уже проговорил что-то в канал, то эта задержка в 1 секунду может быть нежелательна. Проверка нуждаются ли записи в перемещении.. Удалить Описание Назначение после воспроизведения Выключено Не отвечать в канал Изменить приветствие Разрешить пропуск приветствия по нажатию клавиши, чтобы не слушать его каждый раз. Если приветствие используется как шаг в Интерактивном меню и отмечено использование возврата назад здесь птичкой, то назначение ниже будет проигнорировано, и звонок вернётся в Интерактивное меню после воспроизведения приветствия. В другом случае звонок переходит на следующий шаг, по назначению, указанному ниже. Не отмечайте эту опцию, если не используете этот режим.<br>Возврат в Интерактивное меню происходит на тот шаг, с которого было использовано направление на это приветствие, поэтому используйте эту опцию только тогда, когда это оправданно. Например, если Интеракивное меню направляет звонок в другое назначение, где планируется воспроизвести это приветствие, и отмечена эта опция, то возврат в Интерактивное меню может привести к непредсказуемому поведению. Указано неверное описание Какую кнопку нажимать для повторения приветствия. Если используется эта опция, то будет небольшая задержка после сообщения. Если нужна более длительная задержка, её нужно вводить в конце записи. Сообщение, которое будет воспроизведено.<br>Для создания сообщения воспользуйтесь разделом "Запись сообщений" в меню слева. Нет Воспроизводится одна из системных аудиозаписей (опцуионально можно разрешить абоненту пропускать её) и затем вызов направляется по назначению. Запись Повторить Вернуться в 'Интерактивное меню' Применить изменения Имя для этого приветствия добавляется поле recording_id.. уже перемещено сброс поля записей.. неустранимая ошибка переход к id записей.. перемещено %s записей перемещение нет поля записи? ok 