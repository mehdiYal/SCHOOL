<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('th', array (
  'validators' => 
  array (
    'This value should be false.' => 'ค่านี้ควรจะเป็น false',
    'This value should be true.' => 'ค่านี้ควรจะเป็น true',
    'This value should be of type {{ type }}.' => 'ค่านี้ควรจะเป็นชนิด {{ type }}',
    'This value should be blank.' => 'ควรจะเป็นค่าว่าง',
    'The value you selected is not a valid choice.' => 'คุณเลือกค่าที่ไม่ตรงกับตัวเลือก',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'คุณต้องเลือกอย่างน้อย {{ limit }} ตัวเลือก',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'คุณเลือกได้มากที่สุด {{ limit }} ตัวเลือก',
    'One or more of the given values is invalid.' => 'มีบางค่าที่ส่งมาไม่ถูกต้อง',
    'This field was not expected.' => 'ฟิลด์นี้ที่ไม่ได้คาดหวัง',
    'This field is missing.' => 'ฟิลด์นี้จะหายไป',
    'This value is not a valid date.' => 'ค่าของวันที่ไม่ถูกต้อง',
    'This value is not a valid datetime.' => 'ค่าของวันที่และเวลาไม่ถูกต้อง',
    'This value is not a valid email address.' => 'ค่าของอีเมล์ไม่ถูกต้อง',
    'The file could not be found.' => 'ไม่พบไฟล์',
    'The file is not readable.' => 'ไฟล์ไม่อยู่ในสถานะที่สามารถอ่านได้',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ไฟล์ใหญ่เกิน ({{ size }} {{ suffix }}) อนุญาตให้ใหญ่ที่สุดได้ไม่เกิน {{ limit }} {{ suffix }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime type ของไฟล์ไม่ถูกต้อง ({{ type }}) Mime types ที่อนุญาตคือ {{ types }}',
    'This value should be {{ limit }} or less.' => 'ค่านี้ควรจะเป็น {{ limit }} หรือน้อยกว่านั้น',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'ค่านี้ยาวเกินไป ควรจะมีแค่ {{ limit }} ตัวอักษรหรือน้อยกว่านั้น',
    'This value should be {{ limit }} or more.' => 'ค่านี้ควรจะมี {{ limit }} หรือมากกว่านั้น',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'ค่านี้สั้นเกินไป ควรจะมี {{ limit }} ตัวอักษรหรือมากกว่านั้น',
    'This value should not be blank.' => 'ค่านี้ไม่ควรเป็นค่าว่าง',
    'This value should not be null.' => 'ค่านี้ไม่ควรเป็นค่า null',
    'This value should be null.' => 'ค่านี้ควรเป็นค่า null',
    'This value is not valid.' => 'ค่านี้ไม่ถูกต้อง',
    'This value is not a valid time.' => 'ค่าของเวลาไม่ถูกต้อง',
    'This value is not a valid URL.' => 'ค่าของ URL ไม่ถูกต้อง',
    'The two values should be equal.' => 'ค่าทั้งสองค่าควรจะเหมือนกัน',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ขนาดไฟล์ใหญ่เกินไป อนุญาตให้ไฟล์ขนาดใหญ่ได้ไม่เกิน {{ limit }} {{ suffix }}',
    'The file is too large.' => 'ขนาดไฟล์ใหญ่เกินไป',
    'The file could not be uploaded.' => 'ไม่สามารถอัปโหลดไฟล์ได้',
    'This value should be a valid number.' => 'ค่าของตัวเลขไม่ถูกต้อง',
    'This file is not a valid image.' => 'ไฟล์นี้ไม่ใช่ไฟล์รูปภาพ',
    'This is not a valid IP address.' => 'ค่าของ IP ไม่ถูกต้อง',
    'This value is not a valid language.' => 'ค่าของภาษาไม่ถูกต้อง',
    'This value is not a valid locale.' => 'ค่าของภูมิภาค (Locale) ไม่ถูกต้อง',
    'This value is not a valid country.' => 'ค่าของประเทศไม่ถูกต้อง',
    'This value is already used.' => 'Tค่านี้ถูกใช้งานไปแล้ว',
    'The size of the image could not be detected.' => 'ไม่สามารถตรวจสอบขนาดไฟล์ของภาพได้',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'ความกว้างของภาพเกินขนาด ({{ width }}px) อนุญาตให้กว้างได้มากที่สุด {{ max_width }}px',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'ความกว้างของภาพไม่ได้ขนาด ({{ width }}px) อนุญาตให้สั้นที่สุด {{ min_width }}px',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ความสูงของภาพเกินขนาด ({{ height }}px) อนุญาตให้สูงได้มากที่สุด {{ max_height }}px',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ความสูงของภาพไม่ได้ขนาด ({{ height }}px) อนุญาตให้สูงอย่างน้อยที่สุด {{ min_height }}px',
    'This value should be the user\'s current password.' => 'ค่านี้ควรจะเป็นรหัสผ่านปัจจุบันของผู้ใช้',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ค่านี้ควรจะมีความยาว {{ limit }} ตัวอักษร',
    'The file was only partially uploaded.' => 'อัปโหลดไฟล์ได้เพียงบางส่วนเท่านั้น',
    'No file was uploaded.' => 'ไม่มีไฟล์ใดถูกอัปโหลด',
    'No temporary folder was configured in php.ini.' => 'ไม่พบไฟล์ temp ควรจะกำหนดใน php.ini',
    'Cannot write temporary file to disk.' => 'ไม่สามารถเขียน temp ไฟล์ลงดิสก์ได้',
    'A PHP extension caused the upload to fail.' => 'PHP extension เกี่ยวกับการอัปโหลดมีปัญหา',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'คอเล็กชั่นนี้ควรจะประกอบไปด้วยอ่างน้อย {{ limit }} สมาชิก',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'คอเล็กชั่นนี้ไม่ควรมีสมาชิกเกิน {{ limit }}',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'คอเล็กชั่นนี้ควรจะมีสมาชิก {{ limit }} เท่านั้น',
    'Invalid card number.' => 'หมายเลขบัตรไม่ถูกต้อง',
    'Unsupported card type or invalid card number.' => 'ไม่รู้จักประเภทของบัตร หรือหมายเลขบัตรไม่ถูกต้อง',
    'This is not a valid International Bank Account Number (IBAN).' => 'นี่ไม่ถูกต้องตาม International Bank Account Number (IBAN)',
    'This value is not a valid ISBN-10.' => 'ค่านี้ไม่ถูกต้องตาม ISBN-10',
    'This value is not a valid ISBN-13.' => 'ค่านี้ไม่ถูกต้องตาม ISBN-13',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'ค่านี้ไม่ถูกต้องตามทั้ง ISBN-10 และ ISBN-13',
    'This value is not a valid ISSN.' => 'ค่านี้ไม่ถุกต้องตาม ISSN',
    'This value is not a valid currency.' => 'ค่านี้ไม่ถูกต้องตามสกุลเงิน',
    'This value should be equal to {{ compared_value }}.' => 'ค่านี้ไม่ตรงกับ {{ compared_value }}',
    'This value should be greater than {{ compared_value }}.' => 'ค่านี้ควรจะมากกว่า {{ compared_value }}',
    'This value should be greater than or equal to {{ compared_value }}.' => 'ค่านี้ควรจะมากกว่าหรือตรงกับ {{ compared_value }}',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ค่านี้ควรจะเหมือนกันกับ {{ compared_value_type }} {{ compared_value }}',
    'This value should be less than {{ compared_value }}.' => 'ค่านี้ควรจะน้อยกว่า {{ compared_value }}',
    'This value should be less than or equal to {{ compared_value }}.' => 'ค่านี้ควรจะน้อยกว่าหรือเท่ากับ {{ compared_value }}',
    'This value should not be equal to {{ compared_value }}.' => 'ค่านี้ไม่ควรเท่ากันกับ {{ compared_value }}',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ค่านี้ไม่ควรเหมือนกันกับ {{ compared_value_type }} {{ compared_value }}',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'สัดส่วนของภาพใหญ่เกิน ({{ ratio }}) สามารถมีขนาดใหญ่ที่สุดได้ {{ max_ratio }}',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'สัดส่วนของภาพเล็กเกิน ({{ ratio }}) สามารถมีขนาดเล็กที่สุดได้ {{ min_ratio }}',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'รูปภาพเป็นจุตรัส ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นสี่เหลี่ยมจตุรัส',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'ภาพนี้เป็นแนวนอน ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นแนวนอน',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'ภาพนี้เป็นแนวตั้ง ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นแนวตั้ง',
    'fos_user.username.already_used' => 'ชื่อผู้ใช้นี้ถูกใช้ไปแล้ว',
    'fos_user.username.blank' => 'กรุณาระบุชื่อผู้ใช้',
    'fos_user.username.short' => 'ชื่อผู้ใช้สั้นเกินไป',
    'fos_user.username.long' => 'ชื่อผู้ใช้ยาวเกินไป',
    'fos_user.email.already_used' => 'อีเมล์นี้มีอยู่ในระบบแล้ว',
    'fos_user.email.blank' => 'กรุณาระบุอีเมล์',
    'fos_user.email.short' => 'ที่อยู่อีเมล์สั้นเกินไป',
    'fos_user.email.long' => 'ที่อยู่อีเมล์ยาวเกินไป',
    'fos_user.email.invalid' => 'ที่อยู่อีเมล์ไม่ถูกต้อง',
    'fos_user.password.blank' => 'กรุณาระบุรหัสผ่าน',
    'fos_user.password.short' => 'รหัสผ่านสั้นเกินไป',
    'fos_user.password.mismatch' => 'รหัสผ่านที่ระบุไม่ตรงกัน',
    'fos_user.new_password.blank' => 'กรุณาระบุระหัสผ่านใหม่',
    'fos_user.new_password.short' => 'รหัสผ่านใหม่สั้นเกินไป',
    'fos_user.current_password.invalid' => 'รหัสผ่านปัจจุบันไม่ถูกต้อง',
    'fos_user.group.blank' => 'ระบุชื่อกลุ่ม',
    'fos_user.group.short' => 'ชื่อกลุ่มสั้นเกินไป',
    'fos_user.group.long' => 'ชื่อกลุ่มยาวเกินไป',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'พบความผิดพลาดในการรับรองตัวตน',
    'Authentication credentials could not be found.' => 'ไม่พบข้อมูลในการรับรองตัวตน (credentials) ',
    'Authentication request could not be processed due to a system problem.' => 'คำร้องในการรับรองตัวตนไม่สามารถดำเนินการได้ เนื่องมาจากปัญหาของระบบ',
    'Invalid credentials.' => 'ข้อมูลการรับรองตัวตนไม่ถูกต้อง',
    'Cookie has already been used by someone else.' => 'Cookie ถูกใช้งานไปแล้วด้วยผู้อื่น',
    'Not privileged to request the resource.' => 'ไม่ได้รับสิทธิ์ให้ใช้งานส่วนนี้ได้',
    'Invalid CSRF token.' => 'CSRF token ไม่ถูกต้อง',
    'Digest nonce has expired.' => 'Digest nonce หมดอายุ',
    'No authentication provider found to support the authentication token.' => 'ไม่พบ authentication provider ที่รองรับสำหรับ authentication token',
    'No session available, it either timed out or cookies are not enabled.' => 'ไม่มี session ที่พร้อมใช้งาน, Session หมดอายุไปแล้วหรือ cookies ไม่ถูกเปิดใช้งาน',
    'No token could be found.' => 'ไม่พบ token',
    'Username could not be found.' => 'ไม่พบ Username',
    'Account has expired.' => 'บัญชีหมดอายุไปแล้ว',
    'Credentials have expired.' => 'ข้อมูลการระบุตัวตนหมดอายุแล้ว',
    'Account is disabled.' => 'บัญชีถูกระงับแล้ว',
    'Account is locked.' => 'บัญชีถูกล็อกแล้ว',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'บันทึกการแก้ไข',
    'group.show.name' => 'ชื่อกลุ่ม',
    'group.new.submit' => 'สร้างกลุ่ม',
    'group.flash.updated' => 'กลุ่มถูกแก้ไขแล้ว',
    'group.flash.created' => 'กลุ่มถูกแก้ไขแล้ว',
    'group.flash.deleted' => 'กลุ่มถูกแก้ไขแล้ว',
    'security.login.username' => 'ชื่อผู้ใช้',
    'security.login.password' => 'รหัสผ่าน',
    'security.login.remember_me' => 'จำการเข้าระบบ',
    'security.login.submit' => 'เข้าระบบ',
    'profile.show.username' => 'ชื่อผู้ใช้',
    'profile.show.email' => 'อีเมล์',
    'profile.edit.submit' => 'บันทึกการแก้ไข',
    'profile.flash.updated' => 'ข้อมูลส่วนตัวถูกแก้ไขแล้ว',
    'change_password.submit' => 'เปลี่ยนรหัสผ่าน',
    'change_password.flash.success' => 'รหัสผ่านถูกแก้ไขแล้ว',
    'registration.check_email' => 'ระบบได้ส่งอีเมลยืนยันการสมัครสมาชิกไปที่ %email% คุณต้องคลิกลิงค์ที่ส่งไปเพื่อยืนยันการสมัคร',
    'registration.confirmed' => 'ยินดีด้วย %username%, บัญชีของคุณถูกยืนยันแล้ว',
    'registration.back' => 'กลับไปหน้าเดิม',
    'registration.submit' => 'สมัครสมาชิก',
    'registration.flash.user_created' => 'สร้างผู้ใช้เรียบร้อยแล้ว',
    'registration.email.subject' => 'ยินดีต้อนรับ %username%!',
    'registration.email.message' => 'สวัสดี %username%!

เพื่อยืนยันการสมัครสมาชิกให้เสร็จสมบูรณ์ กรุณาไปที่ %confirmationUrl%

ด้วยความนับถือ,
ทีมงาน
',
    'resetting.request.username' => 'ชื่อผู้ใช้หรืออีเมล์',
    'resetting.request.submit' => 'เปลี่ยนรหัสผ่าน',
    'resetting.reset.submit' => 'บันทึกการเปลี่ยนแปลงรหัส',
    'resetting.flash.success' => 'เปลี่ยนรหัสผ่านเรียบร้อยแล้ว',
    'resetting.email.subject' => 'การเปลี่ยนรหัสผ่าน',
    'resetting.email.message' => 'สวัสดี %username%!

เพื่อดำเนินการเปลี่ยนรหัสผ่านของคุณ กรุณาไปที่ %confirmationUrl%

ด้วยความนับถือ,
ทีมงาน
',
    'layout.logout' => 'ออกจากระบบ',
    'layout.login' => 'เข้าระบบ',
    'layout.register' => 'สมัครสมาชิก',
    'layout.logged_in_as' => 'เข้าระบบด้วย %username%',
    'form.group_name' => 'ชื่อกลุ่ม',
    'form.username' => 'ชื่อเข้าระบบ',
    'form.email' => 'อีเมล์',
    'form.current_password' => 'รหัสผ่านปัจจุบัน',
    'form.password' => 'รหัสผ่าน',
    'form.password_confirmation' => 'ยืนยันรหัสผ่าน',
    'form.new_password' => 'รหัสผ่านใหม่',
    'form.new_password_confirmation' => 'ยืนยันรหัสผ่านใหม่',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
    'fos_message.recipient.blank' => 'Pas de destinataire spécifié',
    'fos_message.recipients.blank' => 'Pas de destinataires spécifié',
    'fos_message.subject.blank' => 'Vous devez entrer un sujet',
    'fos_message.subject.short' => 'Le sujet est trop court|Le sujet est trop court',
    'fos_message.subject.long' => 'Le sujet est trop long|Le sujet est trop long',
    'fos_message.body.blank' => 'Vous devez entrer un message',
    'fos_message.body.short' => 'Le message est trop court',
    'fos_message.body.spam' => 'Il semble que votre message soit un SPAM, il n\'a pas été envoyé',
    'fos_message.not_authorized' => 'Vous n\'avez pas le droit d\'envoyer ce message',
    'fos_message.reply_not_authorized' => 'Vous n\'avez pas de droit de répondre dans cette discussion',
    'fos_message.self_recipient' => 'Vous ne pouvez pas vous envoyer un message à vous-même',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Ce lien ne peut être utilisé qu\'une seule fois pour valider votre compte.

Cordialement,
L\'équipe
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
  ),
  'FOSMessageBundle' => 
  array (
    'messenger' => 'Messagerie',
    'inbox' => 'Boîte de réception',
    'sent' => 'Envoyés',
    'deleted' => 'Supprimés',
    'send_new' => 'Envoyer un nouveau message',
    'search' => 'Rechercher',
    'threads_found' => '%num% conversation trouvée avec | %num% conversations trouvées avec',
    'message_info' => 'De %sender%, le %date%',
    'reply' => 'Répondre',
    'subject' => 'Sujet',
    'starter' => 'Débuté par',
    'startdate' => 'Débuté le',
    'messages' => 'Messages',
    'last_message' => 'Dernier message',
    'actions' => 'Actions',
    'new' => 'Nouveau',
    'goto_last' => 'Aller au dernier message',
    'on' => 'Le %date%',
    'by' => 'De %sender%',
    'no_thread' => 'Aucune conversation',
    'delete' => 'Supprimer',
    'undelete' => 'Restaurer',
    'recipient' => 'Destinataire',
    'recipients' => 'Destinataires',
    'body' => 'Corps',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Précédent',
    'label_next' => 'Suivant',
  ),
  'messages' => 
  array (
    'edit' => 'Modifier',
    'add' => 'Ajouter',
    'admin' => 'Administrateur',
    'student' => 'Eleve',
    'teacher' => 'Enseignant',
    'parent' => 'Parent',
    'school' => 'Ecole',
    'admins' => 'Administrateurs',
    'students' => 'Elèves',
    'teachers' => 'Enseignants',
    'parents' => 'Parents',
    'schools' => 'Ecoles',
    'list' => 'Liste des',
    'delete' => 'supprimer',
    'profile' => 'Profil',
    'matiere' => 'Matiere',
    'matieres' => 'Matieres',
    'annee' => 'Année',
    'classe' => 'Classe',
    'classes' => 'Classes',
    'niveau' => 'Niveau',
    'note' => 'Note',
    'navbar.link.link1' => 'ajouter admin',
    'navbar.link.link2' => 'liste des admins',
    'navbar.link.link3' => 'ajouter enseignant',
    'navbar.link.link4' => 'liste des enseignants',
    'navbar.link.link5' => 'ajouter eleve',
    'navbar.link.link6' => 'liste des eleves',
    'navbar.link.link7' => 'ajouter parent',
    'navbar.link.link8' => 'liste des parents',
    'navbar.link.link9' => 'ajouter ecole',
    'navbar.link.link10' => 'liste des ecoles',
    'navbar.link.link11' => 'Mon profil',
    'navbar.link.link12' => 'Deconnexion',
    'navbar.link.link13' => 'Connexion',
    'navbar.link.link14' => 'ajouter matiere',
    'navbar.link.link15' => 'liste des matieres',
    'navbar.link.link16' => 'Mon ecole',
    'navbar.link.link17' => 'ajouter année',
    'navbar.link.link18' => 'liste des années',
    'navbar.dropdown.dropdown1' => 'Admins',
    'navbar.dropdown.dropdown2' => 'Enseignants',
    'navbar.dropdown.dropdown3' => 'Eleves',
    'navbar.dropdown.dropdown4' => 'Parents',
    'navbar.dropdown.dropdown5' => 'Ecoles',
    'navbar.dropdown.dropdown6' => 'Matieres',
    'navbar.dropdown.dropdown7' => 'Années',
    'form.name' => 'Nom',
    'form.lastName' => 'Prénom',
    'form.nameM' => 'Nom de la mere',
    'form.lastNameM' => 'Prenom de la mere',
    'form.cin' => 'CIN',
    'form.jobP' => 'Profession du père',
    'form.jobM' => 'Profession du mère',
    'form.adresse' => 'Adresse',
    'form.codePostal' => 'Code postal',
    'form.tel' => 'Telephone',
    'form.mobile' => 'Mobile',
    'form.genre' => 'Genre',
    'form.dateN' => 'Date de naissance',
    'form.lieuN' => 'Lieu de naissance',
    'form.dateE' => 'Date d\'entrée',
    'form.typeC' => 'Type du contrat',
    'form.comment' => 'Commentaire',
    'form.nationalite' => 'Nationalité',
    'form.ecoleID' => 'ID de l\'école',
    'form.groupeSanguin' => 'Groupe Sanguin',
    'form.photo' => 'photo',
    'eleve.title' => 'Elèves',
    'eleve.show' => 'Afficher les élèves',
    'eleve.nom' => 'Nom de l\'élève',
    'eleve.prenom' => 'Prénom de l\'élève',
    'eleve.nom_prenom' => 'Nom et prénom de l\'élève',
    'cours.title' => 'Cours',
    'cours.name' => 'Nom du cours',
    'cours.add' => 'Ajouter un cours',
    'cours.list' => 'Liste des cours',
    'cours.support.title' => 'Support de cours',
    'cours.support.add' => 'Ajouter un support',
    'cours.annexe.title' => 'Annexe',
    'cours.annexe.add' => 'Ajouter une annexe',
    'message.title' => 'message',
    'message.send' => 'Envoyer message',
    'devoir.maison.title' => 'Devoir maison',
    'devoir.maison.add' => 'Ajouter un devoir maison',
    'evaluation.title' => 'Evaluation',
    'evaluation.add' => 'Ajouter une evaluation',
    'global.update' => 'Mettre à jour',
    'global.program' => 'Emploi du temps',
    'global.add' => 'Ajouter',
    'global.delete' => 'supprimer',
    'global.edit' => 'Modifier',
    'global.show' => 'Afficher',
    'global.close' => 'Fermer',
    'global.title' => 'Titre',
    'global.search' => 'Rechercher',
    'global.parcourir' => 'Parcourir',
    'global.action' => 'Action',
    'global.remark' => 'Remarque',
    'global.date' => 'Date',
    'global.datelimite' => 'Date limite',
    'global.type' => 'Type',
    'global.ressource.title' => 'Ressource',
    'global.ressource.external' => 'Ressource externes',
    'global.ressource.my' => 'Mes ressources',
    'global.ressource.add' => 'Ajouter une ressource',
    'global.annual.program' => 'Programme Annuel',
    'absence.title' => 'Absence',
    'absence.add' => 'Ajouter une absence',
    'absence.manage' => 'Gérer les absences',
    'absence.date' => 'Date d\'absence',
    'retard.title' => 'Retard',
    'retard.add' => 'Ajouter un retard',
    'retard.manage' => 'Gérer les retards',
    'retard.date' => 'Date de retard',
    'travail.title' => 'Travail Réalisé',
    'travail.add' => 'Ajouter un travail',
    'travail.done' => 'Travail fait',
    'travail.todo' => 'Travail à faire',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
