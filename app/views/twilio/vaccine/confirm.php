<?php
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
  <Gather action='<?php echo $actionUrl ?>' method='GET' finishOnKey='#' timeout="60">
    <Say language='ja-jp'>
      お子さんの予防接種を<?php echo $date ?>と記録しました。
      よろしければ１を訂正する場合は２を押してください。
      入力が終わったらシャープを押して下さい。
    </Say>
  </Gather>
</Response>
