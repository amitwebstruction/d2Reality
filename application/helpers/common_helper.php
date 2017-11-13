<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('convertToBase64')) {

    function convertToBase64($path) {
// $path = FCPATH.$path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }

}

if (!function_exists('getStoreInfo')) {

    function getStoreInfo() {
        return 'store info : test website ';
    }

}


if (!function_exists('getUrl')) {

    function getUrl($url = null) {
        return site_url($url);
    }

}

if (!function_exists('getJs')) {

    function getJs($script = null) {
        return '<script type="text/javascript" src="' . getUrl("assets/js/" . $script) . '"></script>';
    }

}

if (!function_exists('getJsUrl')) {

    function getJsUrl($script = null) {
        if (strstr($script, 'http')) {
            return $script;
        }
        return getUrl("assets/js/" . $script);
    }

}

if (!function_exists('getCss')) {

    function getCss($style) {
        return '<link rel="stylesheet" type="text/css"  href="' . getUrl("assets/css/" . $style) . '">';
    }

}

if (!function_exists('getCssUrl')) {

    function getCssUrl($style = null) {
        return getUrl("assets/css/" . $style);
    }

}


if (!function_exists('getImage')) {

    function getImage($image, $class = '', $id = '') {
        return ' <img class="' . $class . '" id="' . $id . '" src="' . getUrl("assets/images/" . $image) . '">';
    }

}


if (!function_exists('getImageUrl')) {

    function getImageUrl($image = null) {
        return getUrl("assets/images/" . $image);
    }

}
if (!function_exists('getUploadImageUrl')) {

    function getUploadImageUrl($image = null) {
        return getUrl("uploads/products/" . $image);
    }

}

if (!function_exists('getMetaTags')) {

    function getMetaTags($meta_tags) {
        $meta_html = '';
        foreach ($meta_tags as $meta_key => $meta_value) {
            $meta_html .= '<meta name="' . $meta_key . '" content="' . $meta_value . '">' . "\n";
        }
        return $meta_html;
    }

}

if (!function_exists('addCss')) {

    function addCss($css) {
        $ci = &get_instance();
        if ($css)
            if (is_array($css))
                $ci->data['css_files'] = array_merge($ci->data['css_files'], $css);
            else
                $ci->data['css_files'][] = $css;
    }

}

if (!function_exists('addJs')) {

    function addJs($js) {
        $ci = &get_instance();
        if ($js)
            if (is_array($js))
                $ci->data['js_files'] = array_merge($ci->data['js_files'], $js);
            else
                $ci->data['js_files'][] = $js;
    }

}


if (!function_exists('loadCss')) {

    function loadCss() {
        $ci = &get_instance();
        $html = '';
        foreach ($ci->data['css_files'] as $value) {
            $html .= '<link rel="stylesheet" type="text/css"  href="' . getCssUrl($value) . '">' . "\n";
        }
        echo $html;
    }

}

if (!function_exists('loadJs')) {

    function loadJs() {
        $ci = &get_instance();
        $html = '';
        foreach ($ci->data['js_files'] as $value) {
            $html .= '<script type="text/javascript" src="' . getJsUrl($value) . '"></script>' . "\n";
        }
        echo $html;
    }

}
if (!function_exists('getTodayDate')) {

    function getTodayDate() {
        $CI = & get_instance();
        $CI->load->model('common_model', 'commonMdl');
        $result = $CI->commonMdl->getTodayDate();
        return $result;
    }

}
if (!function_exists('getTomorrowDate')) {

    function getTomorrowDate() {
        $datetime = new DateTime('tomorrow');
        $result = $datetime->format('d-m-Y');
        return $result;
    }

}


if (!function_exists('getSubscriptionDateRange')) {

    function getSubscriptionDateRange() {
        $CI = & get_instance();
        $CI->load->model('common_model', 'commonMdl');
        $result = $CI->commonMdl->getSubscriptionDateRange();
        return $result;
    }

}
if (!function_exists('searchValue')) {

    function searchValue($array, $key, $value) {
        $results = array();
        if (is_array($array)) {
            if (isset($array[$key]) && $array[$key] == $value) {
                $results[] = $array;
            }
            foreach ($array as $subarray) {
                $results = array_merge($results, searchValue($subarray, $key, $value));
            }
        }
        return $results;
    }

}


if (!function_exists('getInputForm')) {

    function getInputForm($form_label, $form_input) {
        $form_label_html = form_label($form_label);
        $form_input_html = form_input($form_input);
        $form_error_html = form_error($form_input['name']);
        $form_error_ajax_html = '<div id="error_' . $form_input['id'] . '" class="ajax_error" style="color:red"></div>';
        $html = <<<"EOD"
                <div class="form-group">
                    {$form_label_html}
                    {$form_input_html}
                    {$form_error_html}
                    {$form_error_ajax_html}
                </div>
EOD;
        return $html;
    }

}

if (!function_exists('getDropdownForm')) {

    function getDropdownForm($form_label, $form_name, $option, $selected_value, $extra_attribute = array()) {
        $form_label_html = form_label($form_label);
        $form_dropdown_html = form_dropdown($form_name, $option, $selected_value, $extra_attribute);
        $form_error_html = form_error($form_name);
        $form_error_ajax_html = '<div id="error_' . $form_name . '" class="ajax_error"></div>';
        $html = <<<"EOD"
                <div class="form-group">
                    {$form_label_html}
                    {$form_dropdown_html}
                    {$form_error_html}
                    {$form_error_ajax_html}
                </div>
EOD;
        return $html;
    }

}


if (!function_exists('isUserLoggedIn')) {

    function isUserLoggedIn() {
        $ci = &get_instance();
        $is_logged_in = array('flag' => false, 'id' => '');
        $user = $ci->session->userdata('user');
        if (isset($user['id'])) {
            $is_logged_in['id'] = $user['id'];
            $is_logged_in['flag'] = true;
        }
        return $is_logged_in;
    }

}

if (!function_exists('sendSms')) {

    function sendSms($msg, $mobile) {
        $ci = &get_instance();
        $msg = rawurlencode($msg);
        $sender_id = "  ";
        $username = "   ";
        $password = "   ";
//your sms api should be here
        $sender_id = "  ";
        $username = "";
        $password = "";


        $httpResp = file_get_contents($url);
//        $httpResp = true;
        return $httpResp;
    }

}
if (!function_exists('big_rand')) {

    function big_rand($len = 6) {
        $ci = &get_instance();
        $rand = '';
        while (!( isset($rand[$len - 1]) )) {
            $rand .= mt_rand();
        }
        return substr($rand, 0, $len);
    }

}
if (!function_exists('sendMail')) {

    function sendMail($email, $password) {
        $to = "$email";
        $subject = "SuccessFully Changed Password";

        $htmlContent = '
                                <html>
                                <head>
                                    <title>From yourname website</title>
                                </head>
                                <body>
                                    <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
                                        <tr>
                                            <th>Name:</th><td>' . $password . '</td>
                                        </tr>

                                    </table>
                                </body>
                                </html>';
        // Set content-type header for sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers
        $headers .= 'From:  yourname.com' . '<' . $email . '>' . "\r\n";
        $headers .= 'Bcc: contact@yourname.in' . "\r\n";

        $data['status'] = true;
        mail($to, $subject, $htmlContent, $headers);
    }

}

if (!function_exists('checkCustomerLogin')) {

    function checkCustomerLogin() {
        $ci = &get_instance();
        $shopping_cart_sess = $ci->session->userdata('shopping_cart');
        $user = $ci->session->userdata('user');
        if (isset($user['id'])) {
            return $user['id'];
        } else {
            redirect(getUrl(''));
        }
    }

}

if (!function_exists('checkCustomerLogin')) {

    function checkCustomerLogin() {
        $ci = &get_instance();
        $shopping_cart_sess = $ci->session->userdata('shopping_cart');
        $user = $ci->session->userdata('user');
        if (isset($user['id'])) {
            return $user['id'];
        } else {
            redirect(getUrl(''));
        }
    }

}

if (!function_exists('isUserLogin')) {

    function isUserLogin() {
        $ci = &get_instance();
        $shopping_cart_sess = $ci->session->userdata('shopping_cart');
        $user = $ci->session->userdata('user');
        if (isset($user['id'])) {
            return true;
        } else {
            return false;
        }
    }

}


if (!function_exists('isUserRegForClaim')) {

    function isUserRegForClaim() {
        $ci = &get_instance();
        $user = $ci->session->userdata('user');
        if (isset($user['id'])) {
            $ci->load->model('common_model', 'commonMdl');
            $reg_claim = $ci->commonMdl->getRegClaimDetailByUserId($user['id']);
            if ($reg_claim) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}



if (!function_exists('getAnilTest')) {

    function getAnilTest() {
        return 'return ing from common';
    }

}







if (!function_exists('bigRand')) {

    function bigRand($len = 6) {
        $rand = '';
        while (!( isset($rand[$len - 1]) )) {
            $rand .= mt_rand();
        }
        return substr($rand, 0, $len);
    }

}


if (!function_exists('userCurrentLocation')) {

    function userCurrentLocation($customer_area) {
        $ci = &get_instance();
        $data = json_decode(json_encode(json_decode($customer_area)), true);
        if ($data) {
            $ci->session->set_userdata('user_location', $data);
        }
    }

}


if (!function_exists('sendEmail')) {

    function sendEmail($data) {
//        $data = array(
//            "from" => email,
//            "to" => email,
//            "from_title" => str,
//            "subject" => str,
//            "reply_to" => email,
//            "reply_to_title" => str,
//            "template_variables" => array(),
//            "template_name" => filename',
//        );
//
        $ci = &get_instance();
        try {
            $ci->load->library('email');
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = isset($data['mailtype']) ? $data['mailtype'] : 'html';
            $config['priority'] = 1;
            $config['bcc_batch_mode'] = TRUE;
            $config['crlf'] = "\r\n";
            $config['newline'] = "\r\n";
            $ci->email->initialize($config);

            $from = isset($data['from']) ? $data['from'] : 'info@yourname.com';
            $from_title = isset($data['from_title']) ? $data['from_title'] : 'WELCOME TO MA\'SWAD: HAR GHAR KI RASOI';
            $to = isset($data['to']) ? $data['to'] : 'info@yourname.com';
            $subject = isset($data['subject']) ? $data['subject'] : 'Empty Subject';
            $ci->data['template_variables'] = $template_variables = isset($data['template_variables']) ? $data['template_variables'] : array();
            $template_name = isset($data['template_name']) ? $data['template_name'] : 'default.php';
            $reply_to = isset($data['reply_to']) ? $data['reply_to'] : $from;
            $reply_to_title = isset($data['reply_to_title']) ? $data['reply_to_title'] : $from_title;

            $ci->email->from($from, $from_title);
            $ci->email->reply_to($reply_to, $reply_to_title);
            $ci->email->to($to);
            $bcc_list = array('numit.yourname@gmail.com');
            $ci->email->bcc($bcc_list);
            $ci->email->subject($subject);
            $body = $ci->load->view('emails/' . $template_name, $ci->data, TRUE);
            $ci->email->message($body);
//        $ci->email->attach('/path/to/photo1.jpg');
//        {unwrap}http://example.com/a_long_link_that_should_not_be_wrapped.html{/unwrap}
            $ci->email->send();
            $ci->email->clear();
            return array('status' => true);
        } catch (Exception $e) {
            return array('status' => false, 'error' => $e);
        }
    }

}

if (!function_exists('sendThanksEmail')) {

    function sendThanksEmail($data) {
//        $data = array(
//            "from" => email,
//            "to" => email,
//            "from_title" => str,
//            "subject" => str,
//            "reply_to" => email,
//            "reply_to_title" => str,
//            "template_variables" => array(),
//            "template_name" => filename',
//        );
//
        $ci = &get_instance();
        try {
            $ci->load->library('email');
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = isset($data['mailtype']) ? $data['mailtype'] : 'html';
            $config['priority'] = 1;
            $config['bcc_batch_mode'] = TRUE;
            $config['crlf'] = "\r\n";
            $config['newline'] = "\r\n";
            $ci->email->initialize($config);

            $from = isset($data['from']) ? $data['from'] : 'info@yourname.com';
            $from_title = isset($data['from_title']) ? $data['from_title'] : 'WELCOME TO MA\'SWAD: HAR GHAR KI RASOI';
            $to = isset($data['to']) ? $data['to'] : 'info@yourname.com';
            $subject = isset($data['subject']) ? $data['subject'] : 'Empty Subject';
            $ci->data['template_variables'] = $template_variables = isset($data['template_variables']) ? $data['template_variables'] : array();
            $template_name = isset($data['template_name']) ? $data['template_name'] : 'default.php';
            $reply_to = isset($data['reply_to']) ? $data['reply_to'] : $from;
            $reply_to_title = isset($data['reply_to_title']) ? $data['reply_to_title'] : $from_title;

            $ci->email->from($from, $from_title);
            $ci->email->reply_to($reply_to, $reply_to_title);
            $ci->email->to($to);
            $ci->email->subject($subject);
            $body = $ci->load->view('emails/' . $template_name, $ci->data, TRUE);
            $ci->email->message($body);
//        $ci->email->attach('/path/to/photo1.jpg');
//        {unwrap}http://example.com/a_long_link_that_should_not_be_wrapped.html{/unwrap}
            $ci->email->send();
            $ci->email->clear();
            return array('status' => true);
        } catch (Exception $e) {
            return array('status' => false, 'error' => $e);
        }
    }

}


#################### START OF :: PayTm Integration Functions ###################################

if (!function_exists('paytm_encrypt_e')) {

    function paytm_encrypt_e($input, $ky) {
        $key = $ky;
        $size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
        $input = paytm_pkcs5_pad_e($input, $size);
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', 'cbc', '');
        $iv = "@@@@&&&&####$$$$";
        mcrypt_generic_init($td, $key, $iv);
        $data = mcrypt_generic($td, $input);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        $data = base64_encode($data);
        return $data;
    }

}

if (!function_exists('paytm_decrypt_e')) {

    function paytm_decrypt_e($crypt, $ky) {

        $crypt = base64_decode($crypt);
        $key = $ky;
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', 'cbc', '');
        $iv = "@@@@&&&&####$$$$";
        mcrypt_generic_init($td, $key, $iv);
        $decrypted_data = mdecrypt_generic($td, $crypt);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        $decrypted_data = paytm_pkcs5_unpad_e($decrypted_data);
        $decrypted_data = rtrim($decrypted_data);
        return $decrypted_data;
    }

}

if (!function_exists('paytm_pkcs5_pad_e')) {

    function paytm_pkcs5_pad_e($text, $blocksize) {
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }

}

if (!function_exists('paytm_pkcs5_unpad_e')) {

    function paytm_pkcs5_unpad_e($text) {
        $pad = ord($text{strlen($text) - 1});
        if ($pad > strlen($text))
            return false;
        return substr($text, 0, -1 * $pad);
    }

}

if (!function_exists('paytm_generateSalt_e')) {

    function paytm_generateSalt_e($length) {
        $random = "";
        srand((double) microtime() * 1000000);

        $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
        $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
        $data .= "0FGH45OP89";

        for ($i = 0; $i < $length; $i++) {
            $random .= substr($data, (rand() % (strlen($data))), 1);
        }

        return $random;
    }

}

if (!function_exists('paytm_checkString_e')) {

    function paytm_checkString_e($value) {
        $myvalue = ltrim($value);
        $myvalue = rtrim($myvalue);
        if ($myvalue == 'null')
            $myvalue = '';
        return $myvalue;
    }

}

if (!function_exists('paytm_getChecksumFromArray')) {

    function paytm_getChecksumFromArray($arrayList, $key, $sort = 1) {
        if ($sort != 0) {
            ksort($arrayList);
        }
        $str = paytm_getArray2Str($arrayList);
        $salt = paytm_generateSalt_e(4);
        $finalString = $str . "|" . $salt;
        $hash = hash("sha256", $finalString);
        $hashString = $hash . $salt;
        $checksum = paytm_encrypt_e($hashString, $key);
        return $checksum;
    }

}

if (!function_exists('paytm_verifychecksum_e')) {

    function paytm_verifychecksum_e($arrayList, $key, $checksumvalue) {
        $arrayList = paytm_removeCheckSumParam($arrayList);
        ksort($arrayList);
        $str = paytm_getArray2Str($arrayList);
        $paytm_hash = paytm_decrypt_e($checksumvalue, $key);
        $salt = substr($paytm_hash, -4);

        $finalString = $str . "|" . $salt;

        $website_hash = hash("sha256", $finalString);
        $website_hash .= $salt;

        $validFlag = "FALSE";
        if ($website_hash == $paytm_hash) {
            $validFlag = "TRUE";
        } else {
            $validFlag = "FALSE";
        }
        return $validFlag;
    }

}

if (!function_exists('paytm_getArray2Str')) {

    function paytm_getArray2Str($arrayList) {
        $paramStr = "";
        $flag = 1;
        foreach ($arrayList as $key => $value) {
            if ($flag) {
                $paramStr .= paytm_checkString_e($value);
                $flag = 0;
            } else {
                $paramStr .= "|" . paytm_checkString_e($value);
            }
        }
        return $paramStr;
    }

}

if (!function_exists('paytm_redirect2PG')) {

    function paytm_redirect2PG($paramList, $key) {
        $hashString = getchecksumFromArray($paramList);
        $checksum = paytm_encrypt_e($hashString, $key);
    }

}

if (!function_exists('paytm_removeCheckSumParam')) {

    function paytm_removeCheckSumParam($arrayList) {
        if (isset($arrayList["CHECKSUMHASH"])) {
            unset($arrayList["CHECKSUMHASH"]);
        }
        return $arrayList;
    }

}

if (!function_exists('paytm_getTxnStatus')) {

    function paytm_getTxnStatus($requestParamList) {
        return paytm_callAPI(PAYTM_STATUS_QUERY_URL, $requestParamList);
    }

}

if (!function_exists('paytm_initiateTxnRefund')) {

    function paytm_initiateTxnRefund($requestParamList) {
        $CHECKSUM = paytm_getChecksumFromArray($requestParamList, PAYTM_MERCHANT_KEY, 0);
        $requestParamList["CHECKSUM"] = $CHECKSUM;
        return paytm_callAPI(PAYTM_REFUND_URL, $requestParamList);
    }

}

if (!function_exists('paytm_callAPI')) {

    function paytm_callAPI($apiURL, $requestParamList) {
        $jsonResponse = "";
        $responseParamList = array();
        $JsonData = json_encode($requestParamList);
        $postData = 'JsonData=' . urlencode($JsonData);
        $ch = curl_init($apiURL);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($postData))
        );
        $jsonResponse = curl_exec($ch);
        $responseParamList = json_decode($jsonResponse, true);
        return $responseParamList;
    }

}

#################### END OF :: PayTm Integration Functions ###################################

if (!function_exists('seo_friendly_url')) {

    function seo_friendly_url($string) {
        $string = str_replace(array('[\', \']'), '', $string);
        $string = preg_replace('/\[.*\]/U', '', $string);
        $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
        $string = htmlentities($string, ENT_COMPAT, 'utf-8');
        $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string);
        $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/'), '-', $string);
        return strtolower(trim($string, '-'));
    }

}

if (!function_exists('onlyAlphanumericAndSpaces')) {

    function onlyAlphanumericAndSpaces($text) {
        # allow only alphanumeric
        return preg_replace("[^A-Za-z0-9 ]", "", $text);
    }

}


if (!function_exists('getPaymentMethodTitle')) {

    function getPaymentMethodTitle($code) {
        $ci = &get_instance();
        $ci->load->model('common_model', 'commonMdl');
        $payment_method = $ci->commonMdl->getPaymentMethodTitle($code);
        $method_title = isset($payment_method['name']) ? $payment_method['name'] : $code;
        return $method_title;
    }

}
if (!function_exists('getPaymentMethodType')) {

    function getPaymentMethodType($order_type) {
        $ci = &get_instance();
        $ci->load->model('common_model', 'commonMdl');
        $payment_method = $ci->commonMdl->getPaymentMethodType($order_type);
        return $payment_method;
    }

}


if (!function_exists('updateUserSessionId')) {

    function updateUserSessionId() {
        $ci = &get_instance();
        $session_id = $ci->session->session_id;
        $ci->session->set_userdata('session_id', $session_id);
        $session_record = array('session_id' => $session_id);
        $ci->load->model('Login_Model', 'loginMdl');
        $ci->loginMdl->updateUserSessionId($userData['id'], $session_record);
        return $session_id;
    }

}

if (!function_exists('stopClaim')) {

    function stopClaim() {
        $ci = &get_instance();
        $today = getTodayDate();
        $datetime_obj = new DateTime($today['datetime']);
        $datetime_obj->modify('+1 day');
        $tommorrow_date = $datetime_obj->format('Y-m-d');
        $ci->load->model('Meal_Model', 'mealMdl');
        $claim_counter = $ci->mealMdl->getClaimCounter($tommorrow_date);
        $today = getTodayDate();
        $stop_status = true;
        if ($today['hour'] >= 10 && $today['hour'] < 15) {
            if ($claim_counter <= 200) {
                $stop_status = false;
            }
        } else if ($claim_counter <= 200) {
            if ($today['hour'] >= 10 && $today['hour'] < 15) {
                $stop_status = false;
            }
        }
        return $stop_status;
    }

}

if (!function_exists('claimCounterExceed')) {

    function claimCounterExceed() {
        $ci = &get_instance();
        $today = getTodayDate();
        $datetime_obj = new DateTime($today['datetime']);
        $datetime_obj->modify('+1 day');
        $tommorrow_date = $datetime_obj->format('Y-m-d');
        $ci->load->model('Meal_Model', 'mealMdl');
        $claim_counter = $ci->mealMdl->getClaimCounter($tommorrow_date);
        $claim_up = true;
        if ($claim_counter <= 200) {
            $claim_up = false;
        }
        return $claim_up;
    }

}

if (!function_exists('claimTimeExceed')) {

    function claimTimeExceed() {
        $ci = &get_instance();
        $today = getTodayDate();
        $time_status = true;
        if (($today['hour'] >= 10 && $today['hour'] < 15)) {
            $time_status = false;
        }
        return $time_status;
    }

}

if (!function_exists('getSkipDates')) {

    function getSkipDates($meal_end_date, $subscription_type = 'weeklymeal') {
        $ci = &get_instance();
        $day_to_skip = 2;
        $no_days = 1;
        switch ($subscription_type) {
            case 'monthlymeal':
                $day_to_skip = $day_to_skip + 5;
                $no_days = 4;
                break;
            case 'weeklymeal':
                $day_to_skip = $day_to_skip + 3;
                $no_days = 2;
                break;
            default:
                $day_to_skip = $day_to_skip + 1;
                $no_days = 0;
        }

        $date_range = array();

        if ($no_days) {
            $skip_start_date = new DateTime($meal_end_date);
            $skip_end_date = new DateTime($meal_end_date);
            $skip_end_date = $skip_end_date->modify("+$day_to_skip day");
            $interval = new DateInterval('P1D');
            $date_period = new DatePeriod($skip_start_date, $interval, $skip_end_date);
            foreach ($date_period as $date) {
                if ($date->format("D") !== 'Sun' && $date->format("Y-m-d") !== $meal_end_date)
                    array_push($date_range, $date->format("Y-m-d"));
            }
        }
        return array_slice($date_range, 0, $no_days);
    }

}



if (!function_exists('isShippingAvailable')) {

    function isShippingAvailable($order_id, $userid = 0) {
        
    }

}



if (!function_exists('do_miltiupload_files')) {

    function do_miltiupload_files($path, $title, $files, $product_id) {
        $ci = &get_instance();
        $config = array(
            'upload_path' => $path,
            'allowed_types' => '*',
            'max_size' => '1000000',
            'overwrite' => TRUE,
            'remove_spaces' => TRUE,
        );
        $ci->load->library('upload', $config);
        $images = array();
        foreach ($files['name'] as $key => $image) {

            $_FILES['multi_images[]']['name'] = $files['name'][$key];
            $_FILES['multi_images[]']['type'] = $files['type'][$key];
            $_FILES['multi_images[]']['tmp_name'] = $files['tmp_name'][$key];
            $_FILES['multi_images[]']['error'] = $files['error'][$key];
            $_FILES['multi_images[]']['size'] = $files['size'][$key];
            $fileName = $title . '_' . $image;
            $images[] = $fileName;
            $config['file_name'] = $fileName;
            $ci->upload->initialize($config);

            if ($ci->upload->do_upload('multi_images[]')) {
                $fileName = array('upload_data' => $ci->upload->data());
                $ci->productMdl->insertImages($product_id, $fileName);
            } else {
                $data = array('msg' => $ci->upload->display_errors());
                $ci->load->admintemplate('product_add', $ci->data);
            }
        }
        return $images;
    }

}
