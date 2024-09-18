CURL *hnd = curl_easy_init();

curl_easy_setopt(hnd, CURLOPT_CUSTOMREQUEST, "POST");
curl_easy_setopt(hnd, CURLOPT_URL, "https://mob2.temp-mail.org/mailbox");

CURLcode ret = curl_easy_perform(hnd);
