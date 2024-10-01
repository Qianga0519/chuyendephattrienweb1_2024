<?php

define('KEY_SECURITY', "securekey");

$key = KEY_SECURITY;

function encryptId($id, $key)
{
    $cipher = "AES-128-CTR";  // Sử dụng thuật toán AES
    $iv_length = openssl_cipher_iv_length($cipher);
    $options = 0;
    // Tạo IV ngẫu nhiên
    $iv = random_bytes($iv_length);
    // Mã hóa ID
    $encrypted_id = openssl_encrypt($id, $cipher, $key, $options, $iv);
    // Gộp IV và kết quả mã hóa lại thành chuỗi cuối cùng
    return base64_encode($iv . $encrypted_id);
}

function decryptId($encrypted_id, $key)
{
    $cipher = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($cipher);
    $options = 0;

    // Tách IV và chuỗi đã mã hóa từ chuỗi base64
    $decoded = base64_decode($encrypted_id);
    $iv = substr($decoded, 0, $iv_length);
    $encrypted_data = substr($decoded, $iv_length);

    // Giải mã ID
    return openssl_decrypt($encrypted_data, $cipher, $key, $options, $iv);
}

function validateName($name)
{
    // Kiểm tra name bắt buộc nhập và hợp lệ
    if (empty($name)) {
        return "Vui lòng nhập tên";
    }

    // Kiểm tra ký tự và độ dài
    if (!preg_match('/^[A-Za-z0-9]{5,15}$/', $name)) {
        return "Tên phải dài từ 5-15 ký tự và chỉ chứa chữ cái và số.";
    }

    return true;
}
function validatePassword($password)
{
    // Kiểm tra password bắt buộc nhập
    if (empty($password)) {
        return "Vui lòng nhập mật khẩu.";
    }

    // Kiểm tra độ dài từ 5 đến 10 ký tự
    if (strlen($password) < 5 || strlen($password) > 10) {
        return "Mật khẩu phải có độ dài từ 5 - 10 kí tự.";
    }

    // Kiểm tra có ít nhất 1 chữ thường, 1 chữ HOA, 1 số, và 1 ký tự đặc biệt
    if (!preg_match('/[a-z]/', $password)) {
        return "Mật phải tồn tại ít nhất một chữ thường.";
    }

    if (!preg_match('/[A-Z]/', $password)) {
        return "Mật phải tồn tại ít nhất một chữ hoa.";
    }

    if (!preg_match('/[0-9]/', $password)) {
        return "Mật phải tồn tại ít nhất một chữ số.";
    }

    if (!preg_match('/[~!@#$%^&*()]/', $password)) {
        return "Mật phải tồn tại ít nhất một kí tự đặc biệt (~!@#$%^&*()).";
    }

    return true;
}
