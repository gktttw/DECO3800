<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

    public function register($first_name, $last_name, $birthday, $gender, $email, $phone, $password) {
        $check_unique = $this->db->query("SELECT * FROM staff WHERE Email = '$email'");
        $rowcount = $check_unique->num_rows();

        if($rowcount == 0){
            
            // new user 
            $salt = base64_encode(openssl_random_pseudo_bytes(16));
            $pwd = $this->hashing($password, $salt);

            // insertion for new user
            $sql = "INSERT INTO staff (First_name, Last_name, Birthday, Gender, Email, Password, Phone, Salt) VALUES ('$first_name', '$last_name', STR_TO_DATE('$birthday', '%d/%m/%Y'), '$gender', '$email', '$pwd', '$phone','$salt')";

            if ($this->db->query($sql)) {
                    return "SUCCESS";
            } else {
                return "INSERT ERROR";
            }
        }else{
            // email already exsists
            // $data = ['signup' => false,'error' => 'Email already exsists'];
            // header('Content-type: application/json');
            // echo json_encode( $data );
            return "DUPLICATED";
        }
    }

    public function login($email, $password) {
        $query = $this->db->query("SELECT password,salt FROM staff WHERE email='$email' LIMIT 1;");
        $rowcount = $query->num_rows();

        if($rowcount == 0){
            return "NO SUCH USER";// for debug
        }else {
            $res = $query->row();
            $salt = $res->salt;
            $pass = $res->password;
            $pwd = $this->hashing($password, $salt);
            if ($pass == $pwd){
                return "SUCCESS";
            }else {
                return "WRONG PW";
            }
        }
    }

    

    /*
    hashing fn to encript password
    param:
        pwd: password
        salt: the salt for that user

    out:
        a hashed code
    */
    public function hashing($pwd, $salt){
        // $salt = base64_encode(openssl_random_pseudo_bytes(16));
        $iterations = 1000;
        $hash = hash_pbkdf2("sha256", $pwd, $salt, $iterations, 20);
        return $hash;
    }

}

/* End of file Auth.php */
/* Location: ./application/models/Auth.php */