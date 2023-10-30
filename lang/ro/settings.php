<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Setări',
    'settings_save' => 'Salvează setările',
    'system_version' => 'Versiune sistem',
    'categories' => 'Categorii',

    // App Settings
    'app_customization' => 'Personalizare',
    'app_features_security' => 'Caracteristici și securitate',
    'app_name' => 'Numele aplicației',
    'app_name_desc' => 'Acest nume este afișat în antet și în orice e-mail trimis de sistem.',
    'app_name_header' => 'Arată numele în antet',
    'app_public_access' => 'Acces public',
    'app_public_access_desc' => 'Activarea acestei opțiuni va permite vizitatorilor, care nu sunt autentificați, să acceseze conținutul în instanța de BookStack.',
    'app_public_access_desc_guest' => 'Accesul vizitatorilor publici poate fi controlat prin intermediul utilizatorului "Vizitator".',
    'app_public_access_toggle' => 'Permite accesul public',
    'app_public_viewing' => 'Permiți vizualizarea publică?',
    'app_secure_images' => 'Încărcare imagini cu securitate mai mare',
    'app_secure_images_toggle' => 'Activare încărcare imagini cu securitate mai mare',
    'app_secure_images_desc' => 'Din motive de performanță, toate imaginile sunt publice. Această opțiune adaugă un șir de caractere greu de ghicit în fața url-urilor de imagine. Asigură-te că indexul directorilor nu este activat pentru a preveni accesul ușor.',
    'app_default_editor' => 'Editor de pagină implicit',
    'app_default_editor_desc' => 'Selectează editorul care va fi folosit în mod implicit la editarea paginilor noi. Acest lucru poate fi înlocuit la un nivel de pagină unde permisiunile permit.',
    'app_custom_html' => 'Conținut header HTML personalizat',
    'app_custom_html_desc' => 'Orice conținut adăugat aici va fi inserat în partea de jos a secțiunii <head> a fiecărei pagini. Acest lucru este util pentru a suprascrie stilurile sau pentru a adăuga cod analitic.',
    'app_custom_html_disabled_notice' => 'Conținutul headerului HTML personalizat este dezactivat pe această pagină de setări pentru a asigura că modificările pot fi inversate.',
    'app_logo' => 'Logo aplicație',
    'app_logo_desc' => 'Acest lucru este folosit în bara de antet a aplicației, printre alte zone. Această imagine ar trebui să fie de 86px în înălțime. Imaginile mari vor fi scalate în jos.',
    'app_icon' => 'Iconiță aplicație',
    'app_icon_desc' => 'Această pictogramă este utilizată pentru tab-urile din browser și pictogramele de comenzi rapide. Aceasta ar trebui să fie o imagine PNG pătrată de 256px.',
    'app_homepage' => 'Pagina principală a aplicației',
    'app_homepage_desc' => 'Selectează o vizualizare pentru a afișa pe prima pagină în loc de vizualizarea implicită. Permisiunile paginii sunt ignorate pentru paginile selectate.',
    'app_homepage_select' => 'Selectează o pagină',
    'app_footer_links' => 'Link-uri de subsol',
    'app_footer_links_desc' => 'Adaugă link-uri de afișat în subsolul site-ului. Acestea vor fi afișate în partea de jos a majorității paginilor, inclusiv cele care nu necesită autentificare. Poți folosi o etichetă de "trans::<key>" pentru a folosi traduceri definite de sistem. De exemplu: Folosind "trans:common:common.privacy_policy" va oferi textul tradus "Politica de confidențialitate" și "trans:common.terms_of_service" va furniza textul tradus "Termenii serviciului".',
    'app_footer_links_label' => 'Etichetă link',
    'app_footer_links_url' => 'URL link',
    'app_footer_links_add' => 'Adăugare link subsol',
    'app_disable_comments' => 'Dezactivează comentariile',
    'app_disable_comments_toggle' => 'Dezactivează comentariile',
    'app_disable_comments_desc' => 'Dezactivează comentariile pentru toate paginile aplicației. <br> Comentariile existente nu sunt afișate.',

    // Color settings
    'color_scheme' => 'Schema de culori a aplicației',
    'color_scheme_desc' => 'Setați culorile pe care să le utilizați în interfață. Culorile pot fi configurate separat pentru modurile întuneric şi lumină pentru a se potrivi cel mai bine cu tema şi a asigura lizibilitatea.',
    'ui_colors_desc' => 'Setaţi culoarea primară a aplicaţiei şi culoarea implicită a link-ului. Culoarea primară este utilizată în principal pentru banner-ul antet, butoane şi decoraţiunile interfeţei. Culoarea implicită a link-ului este utilizată pentru link-uri și acțiuni bazate pe text, atât în conținutul scris, cât și în interfața aplicației.',
    'app_color' => 'Culoare primară',
    'link_color' => 'Culoare link implicită',
    'content_colors_desc' => 'Set colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Culoare raft',
    'book_color' => 'Culoare carte',
    'chapter_color' => 'Culoare capitol',
    'page_color' => 'Culoare pagină',
    'page_draft_color' => 'Culoare pagină ciornă',

    // Registration Settings
    'reg_settings' => 'Înregistrare',
    'reg_enable' => 'Permite înregistrarea',
    'reg_enable_toggle' => 'Permite înregistrarea',
    'reg_enable_desc' => 'Când înregistrarea este activată, utilizatorul va putea să se înregistreze ca utilizator al aplicației. La înregistrare, ei au un singur rol implicit de utilizator.',
    'reg_default_role' => 'Rol utilizator implicit după înregistrare',
    'reg_enable_external_warning' => 'Opțiunea de mai sus este ignorată în timp ce autentificarea externă LDAP sau SAML este activă. Conturile de utilizator pentru membrii neexistenți vor fi create automat dacă autentificarea, împotriva sistemului extern utilizat, este reușită.',
    'reg_email_confirmation' => 'Confirmare e-mail',
    'reg_email_confirmation_toggle' => 'Solicită confirmare e-mail',
    'reg_confirm_email_desc' => 'Dacă este folosită restricționarea domeniului, atunci va fi necesară confirmarea e-mailului și această opțiune va fi ignorată.',
    'reg_confirm_restrict_domain' => 'Restricționare domeniu',
    'reg_confirm_restrict_domain_desc' => 'Introduceți o listă de domenii de e-mail separate prin virgulă la care doriți să restricționați înregistrarea. Utilizatorilor le va fi trimis un e-mail pentru a-și confirma adresa înainte de a putea interacționa cu aplicația. <br> Rețineți că utilizatorii vor putea să își schimbe adresele de e-mail după o înregistrare reușită.',
    'reg_confirm_restrict_domain_placeholder' => 'Nicio restricție setată',

    // Maintenance settings
    'maint' => 'Mentenanţă',
    'maint_image_cleanup' => 'Curățare imagini',
    'maint_image_cleanup_desc' => 'Scanează pagina și conținutul revizuirii pentru a verifica ce imagini și desene sunt utilizate în prezent și care imagini sunt redundante. Asigurați-vă că ați creat o copie de rezervă a bazei de date și a imaginii complete înainte de a o rula.',
    'maint_delete_images_only_in_revisions' => 'De asemenea, șterge imagini care există numai în vechile revizuiri ale paginii',
    'maint_image_cleanup_run' => 'Rulează curățarea',
    'maint_image_cleanup_warning' => ':count potenţiale imagini nefolosite au fost găsite. Sunteţi sigur că doriţi să ştergeţi aceste imagini?',
    'maint_image_cleanup_success' => ':count potențiale imagini nefolosite găsite și șterse!',
    'maint_image_cleanup_nothing_found' => 'Nu au fost găsite imagini nefolosite, nimic șters!',
    'maint_send_test_email' => 'Trimite un e-mail de test',
    'maint_send_test_email_desc' => 'Aceasta trimite un e-mail de test la adresa ta de e-mail specificată în profilul tău.',
    'maint_send_test_email_run' => 'Trimite e-mail de test',
    'maint_send_test_email_success' => 'E-mail trimis la :address',
    'maint_send_test_email_mail_subject' => 'Email de test',
    'maint_send_test_email_mail_greeting' => 'Livrarea e-mailului pare să funcţioneze!',
    'maint_send_test_email_mail_text' => 'Felicitări! Deoarece ai primit această notificare prin e-mail, setările de e-mail par să fie configurate corespunzător.',
    'maint_recycle_bin_desc' => 'Rafturile, cărțile, capitole și paginile șterse se trimit la coșul de gunoi pentru a putea fi restaurate sau șterse definitiv. Elementele mai vechi din coșul de gunoi pot fi eliminate automat după o vreme, în funcție de configurația sistemului.',
    'maint_recycle_bin_open' => 'Deschide coșul de gunoi',
    'maint_regen_references' => 'Regenerează referințe',
    'maint_regen_references_desc' => 'Această acțiune va reconstrui indexul de referință al elementului încrucișat în baza de date. Acest lucru este de obicei manipulat automat, dar această acțiune poate fi utilă pentru a indexa conținutul vechi sau conținutul adăugat prin metode neoficiale.',
    'maint_regen_references_success' => 'Indicele de referință a fost regenerat!',
    'maint_timeout_command_note' => 'Notă: Această acțiune necesită timp pentru a funcționa, ceea ce poate duce la apariția unor probleme în unele medii web. Ca alternativă, această acțiune trebuie efectuată utilizând o comandă din terminal.',

    // Recycle Bin
    'recycle_bin' => 'Coș de gunoi',
    'recycle_bin_desc' => 'Aici poți restaura elementele care au fost șterse sau alege să le elimini definitiv din sistem. Această listă este nefiltrată spre deosebire de listele de activități similare din sistemul în care sunt aplicate filtrele de permisiuni.',
    'recycle_bin_deleted_item' => 'Element șters',
    'recycle_bin_deleted_parent' => 'Părinte',
    'recycle_bin_deleted_by' => 'Șters de',
    'recycle_bin_deleted_at' => 'Data ștergerii',
    'recycle_bin_permanently_delete' => 'Ștergere permanentă',
    'recycle_bin_restore' => 'Restaurează',
    'recycle_bin_contents_empty' => 'Coșul de gunoi este în prezent gol',
    'recycle_bin_empty' => 'Golește coșul de gunoi',
    'recycle_bin_empty_confirm' => 'Aceasta va distruge definitiv toate elementele din coșul de gunoi, inclusiv conținutul conținut din fiecare element. Ești sigur că vrei să golești coșul de gunoi?',
    'recycle_bin_destroy_confirm' => 'Această acțiune va șterge permanent acest element din sistem, împreună cu orice elemente copil enumerat mai jos, și nu vei putea restaura acest conținut. Ești sigur că vrei să ștergi definitiv acest element?',
    'recycle_bin_destroy_list' => 'Elemente de distrus',
    'recycle_bin_restore_list' => 'Elemente care vor fi restaurate',
    'recycle_bin_restore_confirm' => 'Această acțiune va restaura elementul șters, inclusiv orice elemente copii, la locația lor originală. În cazul în care locația originală a fost de atunci ștearsă și acum este în coșul de reciclare, elementul părinte va trebui, de asemenea, să fie restaurat.',
    'recycle_bin_restore_deleted_parent' => 'Părintele acestui element a fost de asemenea șters. Acestea vor rămâne șterse până când acel părinte este, de asemenea, restaurat.',
    'recycle_bin_restore_parent' => 'Restaurează părinte',
    'recycle_bin_destroy_notification' => ':count elemente șterse din coșul de gunoi.',
    'recycle_bin_restore_notification' => ':count elemente restaurate din coșul de gunoi.',

    // Audit Log
    'audit' => 'Jurnal de audit',
    'audit_desc' => 'Acest jurnal de audit afișează o listă de activități urmărite în sistem. Această listă este nefiltrată spre deosebire de listele de activități similare din sistemul în care sunt aplicate filtrele de permisiuni.',
    'audit_event_filter' => 'Filtru eveniment',
    'audit_event_filter_no_filter' => 'Niciun filtru',
    'audit_deleted_item' => 'Element șters',
    'audit_deleted_item_name' => 'Nume: :name',
    'audit_table_user' => 'Utilizator',
    'audit_table_event' => 'Eveniment',
    'audit_table_related' => 'Articol asociat sau detalii',
    'audit_table_ip' => 'Adresă IP',
    'audit_table_date' => 'Data activității',
    'audit_date_from' => 'Interval dată de la',
    'audit_date_to' => 'Interval dată până la',

    // Role Settings
    'roles' => 'Roluri',
    'role_user_roles' => 'Roluri utilizator',
    'roles_index_desc' => 'Roles are used to group users & provide system permission to their members. When a user is a member of multiple roles the privileges granted will stack and the user will inherit all abilities.',
    'roles_x_users_assigned' => ':count utilizator atribuibil:count utilizatori alocați',
    'roles_x_permissions_provided' => ':count permission|:count permissions',
    'roles_assigned_users' => 'Utilizator alocat',
    'roles_permissions_provided' => 'Permisiuni furnizate',
    'role_create' => 'Crează rol nou',
    'role_delete' => 'Șterge rolul',
    'role_delete_confirm' => 'Aceasta va șterge rolul cu numele \':roleName\'.',
    'role_delete_users_assigned' => 'Acest rol are :userCount utilizatori asociați. Dacă vrei să migrezi utilizatorii din acest rol, selectează un nou rol mai jos.',
    'role_delete_no_migration' => "Nu migra utilizatorii",
    'role_delete_sure' => 'Ești sigur că vrei să ștergi acest rol?',
    'role_edit' => 'Editează Rol',
    'role_details' => 'Detalii rol',
    'role_name' => 'Nume rol',
    'role_desc' => 'Scurtă descriere a rolului',
    'role_mfa_enforced' => 'Necesită autentificare multi-factor',
    'role_external_auth_id' => 'ID-uri externe de autentificare',
    'role_system' => 'Permisiuni de sistem',
    'role_manage_users' => 'Gestionare utilizatori',
    'role_manage_roles' => 'Gestionează roluri și permisiuni de rol',
    'role_manage_entity_permissions' => 'Gestionează permisiunile pentru toată cartea, capitolul și paginile',
    'role_manage_own_entity_permissions' => 'Gestionează permisiunile pe propria carte, capitol și pagini',
    'role_manage_page_templates' => 'Gestionează șabloanele de pagină',
    'role_access_api' => 'Accesează API sistem',
    'role_manage_settings' => 'Gestionează setările aplicației',
    'role_export_content' => 'Exportă conținut',
    'role_editor_change' => 'Schimbă editorul de pagină',
    'role_notifications' => 'Primire și gestionare notificări',
    'role_asset' => 'Permisiuni active',
    'roles_system_warning' => 'Fi conștient de faptul că accesul la oricare dintre cele trei permisiuni de mai sus poate permite unui utilizator să își modifice propriile privilegii sau privilegiile altor persoane din sistem. Atribuie doar roluri cu aceste permisiuni utilizatorilor de încredere.',
    'role_asset_desc' => 'Aceste permisiuni controlează accesul implicit la activele din sistem. Permisiunile pe Cărți, Capitole și Pagini vor suprascrie aceste permisiuni.',
    'role_asset_admins' => 'Administratorilor li se acordă automat acces la tot conținutul, dar aceste opțiuni pot afișa sau ascunde opțiunile UI.',
    'role_asset_image_view_note' => 'Acest lucru se referă la vizibilitatea în managerul de imagini. Accesul efectiv al fișierelor de imagine încărcate va depinde de opțiunea de stocare a imaginilor din sistem.',
    'role_all' => 'Tot',
    'role_own' => 'Propriu',
    'role_controlled_by_asset' => 'Controlat de activele pe care sunt încărcate',
    'role_save' => 'Salvare rol',
    'role_users' => 'Utilizatori cu acest rol',
    'role_users_none' => 'Nici un utilizator nu este asociat acestui rol',

    // Users
    'users' => 'Utilizatori',
    'users_index_desc' => 'Create & manage individual user accounts within the system. User accounts are used for login and attribution of content & activity. Access permissions are primarily role-based but user content ownership, among other factors, may also affect permissions & access.',
    'user_profile' => 'Profil utilizator',
    'users_add_new' => 'Adaugă utilizator nou',
    'users_search' => 'Căutare utilizatori',
    'users_latest_activity' => 'Ultima activitate',
    'users_details' => 'Detalii utilizator',
    'users_details_desc' => 'Setează un nume de afișat și o adresă de e-mail pentru acest utilizator. Adresa de e-mail va fi utilizată pentru autentificarea în aplicație.',
    'users_details_desc_no_email' => 'Setați un nume de afișat pentru acest utilizator, astfel încât alții să îl poată recunoaște.',
    'users_role' => 'Roluri utilizator',
    'users_role_desc' => 'Selectează rolurile cărora le va fi atribuit acest utilizator. Dacă un utilizator este atribuit mai multor roluri, permisiunile de la aceste roluri se vor stivui și vor primi toate abilitățile rolurilor atribuite.',
    'users_password' => 'Parolă utilizator',
    'users_password_desc' => 'Setează o parolă utilizată pentru autentificarea în aplicație. Aceasta trebuie să fie de cel puțin 8 caractere.',
    'users_send_invite_text' => 'Poți alege să trimiți acestui utilizator un e-mail de invitație care să îi permită să își seteze propria parolă, altfel îi poți seta tu parola.',
    'users_send_invite_option' => 'Trimite e-mail cu invitație utilizatorului',
    'users_external_auth_id' => 'ID autentificare externă',
    'users_external_auth_id_desc' => 'When an external authentication system is in use (such as SAML2, OIDC or LDAP) this is the ID which links this BookStack user to the authentication system account. You can ignore this field if using the default email-based authentication.',
    'users_password_warning' => 'Only fill the below if you would like to change the password for this user.',
    'users_system_public' => 'Acest utilizator reprezintă orice utilizator invitat care vizitează instanța dvs. Nu poate fi folosit pentru a vă autentifica, dar este atribuit automat.',
    'users_delete' => 'Șterge utilizator',
    'users_delete_named' => 'Șterge utilizatorul :userName',
    'users_delete_warning' => 'Aceasta va șterge complet acest utilizator cu numele \':userName\' din sistem.',
    'users_delete_confirm' => 'Ești sigur că vrei să ștergi acest utilizator?',
    'users_migrate_ownership' => 'Migrare proprietate',
    'users_migrate_ownership_desc' => 'Selectează un utilizator aici dacă vrei ca un alt utilizator să devină proprietarul tuturor articolelor deținute în prezent de acest utilizator.',
    'users_none_selected' => 'Niciun utilizator selectat',
    'users_edit' => 'Editare utilizator',
    'users_edit_profile' => 'Editare profil',
    'users_avatar' => 'Avatar utilizator',
    'users_avatar_desc' => 'Selectează o imagine pentru a reprezenta acest utilizator. Aceasta ar trebui să fie un pătrat de aproximativ 256px.',
    'users_preferred_language' => 'Limba preferată',
    'users_preferred_language_desc' => 'Această opțiune va schimba limba utilizată pentru interfața de utilizare a aplicației. Acest lucru nu va afecta conținutul creat de utilizatori.',
    'users_social_accounts' => 'Conturi sociale',
    'users_social_accounts_desc' => 'View the status of the connected social accounts for this user. Social accounts can be used in addition to the primary authentication system for system access.',
    'users_social_accounts_info' => 'Aici poți conecta celelalte conturi pentru o autentificare mai rapidă și mai ușoară. Deconectarea unui cont aici nu revocă accesul autorizat anterior. Revocă accesul din setările profilului tău de pe contul social conectat.',
    'users_social_connect' => 'Conectare cont',
    'users_social_disconnect' => 'Deconectare cont',
    'users_social_status_connected' => 'Connected',
    'users_social_status_disconnected' => 'Disconnected',
    'users_social_connected' => ':socialAccount a fost atașat cu succes la profilul tău.',
    'users_social_disconnected' => 'Contul :socialAccount a fost deconectat cu succes de la profilul tău.',
    'users_api_tokens' => 'Token API',
    'users_api_tokens_desc' => 'Create and manage the access tokens used to authenticate with the BookStack REST API. Permissions for the API are managed via the user that the token belongs to.',
    'users_api_tokens_none' => 'Nu au fost create token-uri API pentru acest utilizator',
    'users_api_tokens_create' => 'Creare token',
    'users_api_tokens_expires' => 'Expiră',
    'users_api_tokens_docs' => 'Documentație API',
    'users_mfa' => 'Autentificare multi-factor',
    'users_mfa_desc' => 'Configurare autentificarea multi-factor ca un nivel suplimentar de securitate pentru contul tău de utilizator.',
    'users_mfa_x_methods' => ':count metodă configurată|:count metode configurate',
    'users_mfa_configure' => 'Configurare metode',

    // API Tokens
    'user_api_token_create' => 'Creare token API',
    'user_api_token_name' => 'Nume',
    'user_api_token_name_desc' => 'Dă-i tokenului un nume lizibil ca un memento viitor al scopului propus.',
    'user_api_token_expiry' => 'Data expirării',
    'user_api_token_expiry_desc' => 'Setează o dată la care acest token expiră. După această dată, cererile făcute folosind acest token nu vor mai funcționa. Lăsând acest câmp necompletat se va stabili un termen de expirare de 100 de ani în viitor.',
    'user_api_token_create_secret_message' => 'Imediat după crearea acestui token, va fi generat și afișat un "ID" și "Secret". Secretul va fi afișat o singură dată, așa că fiți siguri să copiați valoarea într-un loc sigur și sigur înainte de a continua.',
    'user_api_token' => 'Token API',
    'user_api_token_id' => 'ID Token',
    'user_api_token_id_desc' => 'Acesta este un identificator de sistem needitabil generat pentru acest token, care va trebui furnizat în cereri API.',
    'user_api_token_secret' => 'Secret token',
    'user_api_token_secret_desc' => 'Acesta este un secret generat de sistem pentru acest token, care va trebui furnizat în cereri API. Acest lucru va fi afișat doar o singură dată, așa că copiază această valoare undeva în siguranță și securizat.',
    'user_api_token_created' => 'Token creat :timeAgo',
    'user_api_token_updated' => 'Token actualizat :timeAgo',
    'user_api_token_delete' => 'Șterge token',
    'user_api_token_delete_warning' => 'Acest lucru va șterge complet acest token API cu numele \':tokenName\' din sistem.',
    'user_api_token_delete_confirm' => 'Sigur dorești să ștergi acest token API?',

    // Webhooks
    'webhooks' => 'Webhook-uri',
    'webhooks_index_desc' => 'Webhooks are a way to send data to external URLs when certain actions and events occur within the system which allows event-based integration with external platforms such as messaging or notification systems.',
    'webhooks_x_trigger_events' => ':count declanșator eveniment:count evenimente de declanșare',
    'webhooks_create' => 'Creează un nou Webhook',
    'webhooks_none_created' => 'Nu au fost create webhook-uri.',
    'webhooks_edit' => 'Editare Webhook',
    'webhooks_save' => 'Salvează Webhook-ul',
    'webhooks_details' => 'Detalii Webhook',
    'webhooks_details_desc' => 'Furnizează un nume prietenos de utilizator și un punct de reper POST ca locație pentru datele webhook-ului care vor fi trimise.',
    'webhooks_events' => 'Evenimente Webhook',
    'webhooks_events_desc' => 'Selectează toate evenimentele care vor declanșa acest webhook pentru a fi apelate.',
    'webhooks_events_warning' => 'Ține cont că aceste evenimente vor fi declanșate pentru toate evenimentele selectate, chiar dacă sunt aplicate permisiuni personalizate. Asigură-te că utilizarea acestui webhook nu va expune conținut confidențial.',
    'webhooks_events_all' => 'Toate evenimentele de sistem',
    'webhooks_name' => 'Numele Webhook-ului',
    'webhooks_timeout' => 'Timeout cerere Webhook (secunde)',
    'webhooks_endpoint' => 'Endpoint Webhook',
    'webhooks_active' => 'Webhook activ',
    'webhook_events_table_header' => 'Evenimente',
    'webhooks_delete' => 'Șterge Webhook-ul',
    'webhooks_delete_warning' => 'Aceasta va șterge complet acest webhook, cu numele \':webhookName\', din sistem.',
    'webhooks_delete_confirm' => 'Ești sigur că vrei să ștergi acest webhook?',
    'webhooks_format_example' => 'Exemplu format Webhook',
    'webhooks_format_example_desc' => 'Datele Webhook sunt trimise sub forma unei cereri POST pentru endpointul configurat ca JSON conform formatului de mai jos. Proprietățile "elemente asociate" și "url" sunt opționale și vor depinde de tipul de eveniment declanșat.',
    'webhooks_status' => 'Starea Webhook-ului',
    'webhooks_last_called' => 'Ultima apelare:',
    'webhooks_last_errored' => 'Ultima eroare:',
    'webhooks_last_error_message' => 'Ultimul mesaj de eroare:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'uz' => 'O‘zbekcha',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
