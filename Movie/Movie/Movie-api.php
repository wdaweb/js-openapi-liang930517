<?php
//使用CURL函式 去取得API

//初始化CURL
$mycurl=curl_init();

//用戶代理作為識別身分，使對方能信任且取得請求端的相關資訊而不是惡意請求。
curl_setopt($mycurl,CURLOPT_USERAGENT,"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");

//驗證SSL伺服器憑證，當你拜訪HTTPS網站時如果沒有做SSL設定會失敗
curl_setopt($mycurl,CURLOPT_SSL_VERIFYPEER,false);

//設定URL
curl_setopt($mycurl,CURLOPT_URL,"https://data.ntpc.gov.tw/od/data/api/61C99F42-8A90-4ADC-9C40-BA9E0EA097AA?\$format=json");

/*
//關閉exec()的預設echo改為return，如果你沒有特別此功能可以不用寫
curl_setopt($mycurl,CURLOPT_RETURNTRANSFER,true);
$result=json_decode(curl_exec($mycurl));
print_r($result);
*/

//執行
curl_exec($mycurl);

?>