<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ennek az értéknek hamisnak kell lennie.',
    'This value should be true.' => 'Ennek az értéknek igaznak kell lennie.',
    'This value should be of type {{ type }}.' => 'Ennek az értéknek {{ type }} típusúnak kell lennie.',
    'This value should be blank.' => 'Ennek az értéknek üresnek kell lennie.',
    'The value you selected is not a valid choice.' => 'A választott érték érvénytelen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Legalább {{ limit }} értéket kell kiválasztani.|Legalább {{ limit }} értéket kell kiválasztani.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Legfeljebb {{ limit }} értéket lehet kiválasztani.|Legfeljebb {{ limit }} értéket lehet kiválasztani.',
    'One or more of the given values is invalid.' => 'A megadott értékek közül legalább egy érvénytelen.',
    'This field was not expected.' => 'Nem várt mező.',
    'This field is missing.' => 'Ez a mező hiányzik.',
    'This value is not a valid date.' => 'Ez az érték nem egy érvényes dátum.',
    'This value is not a valid datetime.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid email address.' => 'Ez az érték nem egy érvényes e-mail cím.',
    'The file could not be found.' => 'A fájl nem található.',
    'The file is not readable.' => 'A fájl nem olvasható.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'A fájl túl nagy ({{ size }} {{ suffix }}). A legnagyobb megengedett méret {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'A fájl MIME típusa érvénytelen ({{ type }}). Az engedélyezett MIME típusok: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ez az érték legfeljebb {{ limit }} lehet.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ez az érték túl hosszú. Legfeljebb {{ limit }} karaktert tartalmazhat.|Ez az érték túl hosszú. Legfeljebb {{ limit }} karaktert tartalmazhat.',
    'This value should be {{ limit }} or more.' => 'Ez az érték legalább {{ limit }} kell, hogy legyen.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ez az érték túl rövid. Legalább {{ limit }} karaktert kell tartalmaznia.|Ez az érték túl rövid. Legalább {{ limit }} karaktert kell tartalmaznia.',
    'This value should not be blank.' => 'Ez az érték nem lehet üres.',
    'This value should not be null.' => 'Ez az érték nem lehet null.',
    'This value should be null.' => 'Ennek az értéknek nullnak kell lennie.',
    'This value is not valid.' => 'Ez az érték nem érvényes.',
    'This value is not a valid time.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid URL.' => 'Ez az érték nem egy érvényes URL.',
    'The two values should be equal.' => 'A két értéknek azonosnak kell lennie.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'A fájl túl nagy. A megengedett maximális méret: {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'A fájl túl nagy.',
    'The file could not be uploaded.' => 'A fájl nem tölthető fel.',
    'This value should be a valid number.' => 'Ennek az értéknek érvényes számnak kell lennie.',
    'This file is not a valid image.' => 'Ez a fájl nem egy érvényes kép.',
    'This is not a valid IP address.' => 'Ez az érték nem egy érvényes IP cím.',
    'This value is not a valid language.' => 'Ez az érték nem egy érvényes nyelv.',
    'This value is not a valid locale.' => 'Ez az érték nem egy érvényes területi beállítás.',
    'This value is not a valid country.' => 'Ez az érték nem egy érvényes ország.',
    'This value is already used.' => 'Ez az érték már használatban van.',
    'The size of the image could not be detected.' => 'A kép méretét nem lehet megállapítani.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A kép szélessége túl nagy ({{ width }}px). A megengedett legnagyobb szélesség {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A kép szélessége túl kicsi ({{ width }}px). Az elvárt legkisebb szélesség {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A kép magassága túl nagy ({{ height }}px). A megengedett legnagyobb magasság {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A kép magassága túl kicsi ({{ height }}px). Az elvárt legkisebb magasság {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ez az érték a felhasználó jelenlegi jelszavával kell megegyezzen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ennek az értéknek pontosan {{ limit }} karaktert kell tartalmaznia.|Ennek az értéknek pontosan {{ limit }} karaktert kell tartalmaznia.',
    'The file was only partially uploaded.' => 'A fájl csak részben lett feltöltve.',
    'No file was uploaded.' => 'Nem lett fájl feltöltve.',
    'No temporary folder was configured in php.ini.' => 'Nincs ideiglenes könyvtár beállítva a php.ini-ben.',
    'Cannot write temporary file to disk.' => 'Az ideiglenes fájl nem írható a lemezre.',
    'A PHP extension caused the upload to fail.' => 'Egy PHP bővítmény miatt a feltöltés nem sikerült.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ennek a gyűjteménynek legalább {{ limit }} elemet kell tartalmaznia.|Ennek a gyűjteménynek legalább {{ limit }} elemet kell tartalmaznia.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ez a gyűjtemény legfeljebb {{ limit }} elemet tartalmazhat.|Ez a gyűjtemény legfeljebb {{ limit }} elemet tartalmazhat.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ennek a gyűjteménynek pontosan {{ limit }} elemet kell tartalmaznia.|Ennek a gyűjteménynek pontosan {{ limit }} elemet kell tartalmaznia.',
    'Invalid card number.' => 'Érvénytelen kártyaszám.',
    'Unsupported card type or invalid card number.' => 'Nem támogatott kártyatípus vagy érvénytelen kártyaszám.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Érvénytelen nemzetközi bankszámlaszám (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ez az érték nem egy érvényes ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-10 vagy ISBN-13.',
    'This value is not a valid ISSN.' => 'Ez az érték nem egy érvényes ISSN.',
    'This value is not a valid currency.' => 'Ez az érték nem egy érvényes pénznem.',
    'This value should be equal to {{ compared_value }}.' => 'Ez az érték legyen {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ez az érték nagyobb legyen, mint {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ez az érték nagyobb vagy egyenlő legyen, mint {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ez az érték ugyanolyan legyen, mint {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ez az érték kisebb legyen, mint {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ez az érték kisebb vagy egyenlő legyen, mint {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ez az érték ne legyen {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ez az érték ne legyen ugyanolyan, mint {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'A képarány túl nagy ({{ ratio }}). A megengedett legnagyobb képarány {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'A képarány túl kicsi ({{ ratio }}). A megengedett legkisebb képarány {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A kép négyzet alakú ({{ width }}x{{ height }}px). A négyzet alakú képek nem engedélyezettek.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A kép fekvő tájolású ({{ width }}x{{ height }}px). A fekvő tájolású képek nem engedélyezettek.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A kép álló tájolású ({{ width }}x{{ height }}px). Az álló tájolású képek nem engedélyezettek.',
    'An empty file is not allowed.' => 'Üres fájl nem megengedett.',
    'The host could not be resolved.' => 'Az állomásnevet nem lehet feloldani.',
    'This value does not match the expected {{ charset }} charset.' => 'Ez az érték nem az elvárt {{ charset }} karakterkódolást használja.',
    'This is not a valid Business Identifier Code (BIC).' => 'Érvénytelen nemzetközi bankazonosító kód (BIC/SWIFT).',
    'This form should not contain extra fields.' => 'Ez a mezőcsoport nem tartalmazhat extra mezőket.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'A feltöltött fájl túl nagy. Kérem, próbáljon egy kisebb fájlt feltölteni.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Érvénytelen CSRF token. Kérem, próbálja újra elküldeni az űrlapot.',
    'fos_user.username.already_used' => 'A felhasználónév már foglalt.',
    'fos_user.username.blank' => 'A felhasználónév nem lehet üres.',
    'fos_user.username.short' => 'A felhasználónév túl rövid.',
    'fos_user.username.long' => 'A felhasználónév túl hosszú.',
    'fos_user.email.already_used' => 'Az e-mail cím már használatban van.',
    'fos_user.email.blank' => 'Az e-mail cím nem lehet üres.',
    'fos_user.email.short' => 'Az e-mail cím túl rövid.',
    'fos_user.email.long' => 'Az e-mail cím túl hosszú.',
    'fos_user.email.invalid' => 'A megadott e-mail cím helytelen.',
    'fos_user.password.blank' => 'A jelszó nem lehet üres.',
    'fos_user.password.short' => 'A jelszó túl rövid.',
    'fos_user.password.mismatch' => 'A megadott jelszavak nem egyeznek.',
    'fos_user.new_password.blank' => 'Az új jelszó nem lehet üres.',
    'fos_user.new_password.short' => 'Az új jelszó túl rövid.',
    'fos_user.current_password.invalid' => 'A megadott jelszó helytelen.',
    'fos_user.group.blank' => 'A név nem lehet üres.',
    'fos_user.group.short' => 'A név túl rövid.',
    'fos_user.group.long' => 'A név túl hosszú.',
    'fos_group.name.already_used' => 'A név már foglalt.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Hitelesítési hiba lépett fel.',
    'Authentication credentials could not be found.' => 'Nem találhatók hitelesítési információk.',
    'Authentication request could not be processed due to a system problem.' => 'A hitelesítési kérést rendszerhiba miatt nem lehet feldolgozni.',
    'Invalid credentials.' => 'Érvénytelen hitelesítési információk.',
    'Cookie has already been used by someone else.' => 'Ezt a sütit valaki más már felhasználta.',
    'Not privileged to request the resource.' => 'Nem rendelkezik az erőforrás eléréséhez szükséges jogosultsággal.',
    'Invalid CSRF token.' => 'Érvénytelen CSRF token.',
    'Digest nonce has expired.' => 'A kivonat bélyege (nonce) lejárt.',
    'No authentication provider found to support the authentication token.' => 'Nem található a hitelesítési tokent támogató hitelesítési szolgáltatás.',
    'No session available, it either timed out or cookies are not enabled.' => 'Munkamenet nem áll rendelkezésre, túllépte az időkeretet vagy a sütik le vannak tiltva.',
    'No token could be found.' => 'Nem található token.',
    'Username could not be found.' => 'A felhasználónév nem található.',
    'Account has expired.' => 'A fiók lejárt.',
    'Credentials have expired.' => 'A hitelesítési információk lejártak.',
    'Account is disabled.' => 'Felfüggesztett fiók.',
    'Account is locked.' => 'Zárolt fiók.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Csoport frissítése',
    'group.show.name' => 'Csoport név',
    'group.new.submit' => 'Csoport létrehozása',
    'group.flash.updated' => 'A csoport frissítve.',
    'group.flash.created' => 'A csoport létrehozva.',
    'group.flash.deleted' => 'A csoport törölve.',
    'security.login.username' => 'Felhasználónév',
    'security.login.password' => 'Jelszó',
    'security.login.remember_me' => 'Megjegyzés',
    'security.login.submit' => 'Belépés',
    'profile.show.username' => 'Felhasználónév',
    'profile.show.email' => 'E-mail',
    'profile.edit.submit' => 'Frissítés',
    'profile.flash.updated' => 'A profil frissítve.',
    'change_password.submit' => 'Jelszó megváltoztazása',
    'change_password.flash.success' => 'A jelszó megváltoztatva.',
    'registration.check_email' => 'A regisztrált fiók aktiválásához a megadott "%email%" címre küldött üzenetben lévő aktivációs linkre kell kattintani.',
    'registration.confirmed' => 'Gratulálunk %username%, a regisztrált fiók sikeresen aktiválásra került.',
    'registration.back' => 'Vissza az előző oldalra.',
    'registration.submit' => 'Regisztráció',
    'registration.flash.user_created' => 'A felhasználó sikeresen létrehozva.',
    'registration.email.subject' => 'Üdvözöljük %username%!',
    'registration.email.message' => 'Hello %username%!

A regisztrált fiók a következő linkre kattintva aktiválható: %confirmationUrl%

A link csak egyszer használható, rákattintás után ismételt felhasználása nem lehetséges.

Üdvözlettel,
a Csapat.
',
    'resetting.check_email' => 'Elfelejtett jelszava lecseréléséhez, kérjük, kattintson az e-mailben található linkre.
Felhívjuk figyelmát rá, hogy a link érvényessége %tokenLifetime% óra múlva lejár.

Amennyiben nem találja az e-mailt a postafiókjában, ellenőrizze a levélszemét mappát vagy kérje újra a kiküldést!
',
    'resetting.request.username' => 'Felhasználónév vagy e-mail cím',
    'resetting.request.submit' => 'Jelszó lecserélése',
    'resetting.reset.submit' => 'Jelszó megváltoztatása',
    'resetting.flash.success' => 'A jelszó sikeresen lecserélve.',
    'resetting.email.subject' => 'Jelszó lecserélése',
    'resetting.email.message' => 'Hello %username%!

A jelszó a következő oldalon cserélhető le: %confirmationUrl%

Üdvözlettel,
a Csapat.
',
    'layout.logout' => 'Kijelentkezés',
    'layout.login' => 'Bejelentkezés',
    'layout.register' => 'Regisztráció',
    'layout.logged_in_as' => 'Belépve mint %username%',
    'form.group_name' => 'Csoport név',
    'form.username' => 'Felhasználónév',
    'form.email' => 'E-mail',
    'form.current_password' => 'Jelenlegi jelszó',
    'form.password' => 'Jelszó',
    'form.password_confirmation' => 'Jelszó megerősítése',
    'form.new_password' => 'Új jelszó',
    'form.new_password_confirmation' => 'Új jelszó megerősítése',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Előző',
    'label_next' => 'Következő',
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
