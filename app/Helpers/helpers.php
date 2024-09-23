<?php
function getAssetsURLs($part = '') {
    return url('assets/' . $part );
}

function getAssetsFileURLs($part = '') {
    return url('src/' . $part );
}

function d($data, $ext = true) {
    echo "<pre>";
    print_r($data);
    if($ext)
        exit;
}

function geInvoicePDF($pdf, $returnPath = true) {

    $dir = \App\Models\Billing::getBillInvoicesDir();

    if ($pdf == '' || !File::exists($dir . $pdf) ) {
        $path = url("images/no-image.png");
        $rtn = false; } else {
        $path = url($dir . $pdf);
        $rtn = true;  }
    return $returnPath ? $path : $rtn;
}

//slug generation code goes
function convertTitleToSlug($str) {
    // Convert string to lowercase
    $str = strtolower($str);
    // Replace the spaces with hyphens
    $str = str_replace(' ', '-', $str);
    // Remove the special characters
    $str = preg_replace('/[^a-z0-9\-]/', '', $str);
    // Remove the consecutive hyphens
    $str = preg_replace('/-+/', '-', $str);
    // Trim hyphens from the beginning
    // and ending of String
    $str = trim($str, '-');
    return $str;
}

function getBasicDateTimeFormat($date, $format = 'd-m-Y g:i A') {
    return date($format, strtotime($date));
}

function returnMonth ($billing_details = false) {
   return  Carbon\Carbon::parse($billing_details->bill_month)->format('M');
}

function getBasicDateFormat($date, $format = 'jS F Y') {
    return date($format, strtotime($date));
}

function getDateInStandardFormat ($date) {
    $currentDate = $date->format('d-m-Y');
    return $currentDate;
}

function getShortDateTimeFormat($date, $format = 'j M y h:i A') {
    return date($format, strtotime($date));
}

function getMyStatusLabel($statusId = '') {
    switch($statusId) {
        case 0:
            return '<span class="mr-2 badge badge-danger font-weight-lighter">In-Active</span>';
            break;
        case 1:
            return '<span class="mr-2 badge badge-success font-weight-lighter">Active</span>';
            break;
    }
}

function titleFilter($title) {
    return str_replace('_', ' ', ucfirst($title));
}

function BackEndUrl () {
    return env('APP_API_URL', 'http://localhost:4201');
}

function AvatarImagePath($image, $returnPath = true)
{
    $dir = \App\Models\User::AvatarImage();

    if ($image == '' || ! File::exists($image)) {
        $path = url('src/media/avatars/300-1.jpg');
        $rtn = false;

    } else {

        $path = url($image);
        $rtn = true;

    }

    return $returnPath ? $path : $rtn;
}


function CustomerAvatarImagePath($image, $returnPath = true)
{
    $dir = \App\Models\Customer::AvatarImage();

    if ($image == '' || ! File::exists($image)) {
        $path = url('src/media/avatars/300-1.jpg');
        $rtn = false;

    } else {

        $path = url($image);
        $rtn = true;

    }

    return $returnPath ? $path : $rtn;
}

function generateRandomString($length = 10) {
    return bin2hex(random_bytes($length));
}


function genSSH512($datetime)
{
    $salt = \Str::random(12);
    $value = base64_encode(hash('sha512', $datetime.$salt, true).$salt);
    //only allowing alpha numberic through a generated string
    $result = preg_replace("/[^a-zA-Z0-9]+/", "", $value);
    return  $result ;
}

function checkPersonPermission($per, $perString = false)
{
    if (auth()->user()->role_id == 1) {
        return true;
    }

    $per = is_array($per) ? $per[0].'-'.$per[1].'-'.$per[2] : $per;
    if ($perString === false) { $perString = session()->get('rights'); }
    $per = '|'.$per.'|';

    return Str::of($perString)->contains($per);
}


function checkPersonPermissionforValidation($per, $perString = false)
{
    $per = is_array($per)
    ? $per[0] . '-' . $per[1] . '-' . $per[2]
    : $per;

    if ($perString === false) {
        $perString = session()->get('rights');
    }

    $per = '|' . $per . '|';
    //d($perString);
    return Str::of($perString)->contains($per);
}

function getRootUsers () {
   return array(1);
}

function getApplicationlanguages()
{
    $languages = ['English' => 'en', 'Arabic' => 'ar'];
    return $languages;
}

function mrNumberGenerator($id) {

    $year = date("y");
    $number = "CSC-SIRM-" . $year . "-" . $id;
    return $number;
}
