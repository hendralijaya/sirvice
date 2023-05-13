<?php 
require '../vendor/autoload.php';
class Helper {
    public static function setUpMailConfiguration($email, $name, $subject, $body)
    {
      $phpmailer = new PHPMailer\PHPMailer\PHPMailer();
      $phpmailer->isSMTP();
      $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
      $phpmailer->SMTPAuth = true;
      $phpmailer->Port = 2525;
      $phpmailer->Username = 'b272e14150bdf4';
      $phpmailer->Password = 'a23971afb634c7';
      $phpmailer->setFrom('sirvice@gmail.com', 'Sirvice Corps');
      $phpmailer->addAddress($email, $name);
      $phpmailer->Subject = $subject;
      $phpmailer->isHTML(true);
      $phpmailer->Body = $body;
      return $phpmailer;
    }

    public static function uploadFile($file, $targetDir) {
      // Check if file was uploaded without errors
      if(isset($file)) {
          // Get file details
          $fileName = basename($file['name']);
          $fileTmpName = $file['tmp_name'];
          $fileSize = $file['size'];
          $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  
          // Check if file type is allowed
          $allowedTypes = array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'webp');
          if(!in_array($fileType, $allowedTypes)) {
              return 'Sorry, only JPG, JPEG, PNG, GIF, PDF, and WEBP files are allowed.';
          }
  
          // Check if file size is within limits
          $maxFileSize = 5000000; // 5MB
          if($fileSize > $maxFileSize) {
              return 'Sorry, your file is too large. Please upload a file smaller than 5MB.';
          }
  
          // Generate unique file name to avoid overwriting existing files
          $newFileName = uniqid() . '_' . $fileName;
  
          // Set target directory and path
          $targetPath = $targetDir . '/' . $newFileName;
          
          //Check if directory exists
          if(!file_exists($targetDir)) {
              mkdir($targetDir, 0777, true);
          }
  
          // Attempt to move uploaded file to target directory
          if(move_uploaded_file($fileTmpName, $targetPath)) {
              return $newFileName;
          } else {
              return 'Sorry, there was an error uploading your file.';
          }
      } else {
          return 'Sorry, there was an error uploading your file.';
      }
  }

  public static function deleteFile($filePath) {
    if(file_exists($filePath)) {
        unlink($filePath);
        return 'File deleted successfully.';
    } else {
        return 'File not found.';
    }
  }

  public static function getDay($scheduled_date)
    {
    $timestamp = strtotime($scheduled_date);
    $day = date('l', $timestamp);
    return $day;
    }
}