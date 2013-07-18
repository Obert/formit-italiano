<?php
/**
 * FormIt
 *
 * Copyright 2009-2011 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Properties Lexicon Topic
 *
 * @package formit
 * @subpackge lexicon
 * @language en
 */
/* FormIt properties */
$_lang['prop_formit.hooks_desc'] = 'Quale programma da eseguire, se nessuno, dopo che il modulo ha passato la validazione. Questo può essere una lista di hooks separati con una virgola, e se il primo fallisce, quelli seguenti non saranno eseguiti. Un hook può essere anche un nome di Snippet che eseguirà quello Snippet.';
$_lang['prop_formit.prehooks_desc'] = 'Quale programma da eseguire, se nessuno, una volta che il modulo è caricato. Potete pre-impostare i campi del modulo via $scriptProperties[`hook`]->fields[`fieldname`]. Questo può essere una lista di hooks separati con una virgola, e se il primo fallisce, quelli seguenti non saranno eseguiti. Un hook può essere anche un nome di Snippet che eseguirà quello Snippet.';
$_lang['prop_formit.submitvar_desc'] = 'Se impostato, non inizierà il processamento del modulo se questa variabile POST non sia passata.';
$_lang['prop_formit.validate_desc'] = 'Una lista di campi da validare separati da una virgola, con ogni nome del campo come name:validator (es: nomeutente:obbligatorio,email:obbligatorio). I validatori possono anche essere concatenati, come email:email:obbligatorio. Questa proprietà può essere specificata su linee multiple.';
$_lang['prop_formit.errtpl_desc'] = 'Il template contenitore per i messaggi di errore.';
$_lang['prop_formit.validationerrormessage_desc'] = 'Un messaggio di errore generale da impostare in un placeholder se la validazione fallisce. Può contenere [[+errors]] se volete mostrare una lista di tutti gli errori all\'inizio.';
$_lang['prop_formit.validationerrorbulktpl_desc'] = 'Il tpl HTML che è utilizzato per ogni errore individuale come valore nella validazione dei messaggi generici di errore.';
$_lang['prop_formit.customvalidators_desc'] = 'Una lista di nomi personalizzati da validare separati da una virgola (snippets) da poter usare in questo modulo. Devono essere esplicitamente dichiarati qua, o non saranno lanciati.';
$_lang['prop_formit.clearfieldsonsuccess_desc'] = 'Se impostato a vero, pulirà i campi all\'invio corretto del modulo che non reindirizza.';
$_lang['prop_formit.successmessage_desc'] = 'Se impostato, imposterà questo come un placeholder con il nome di un valore della proprietà &successMessagePlaceholder, che è come predefinito `fi.successMessage`.';
$_lang['prop_formit.successmessageplaceholder_desc'] = 'Il placeholder da impostare per un messaggio di successo.';
$_lang['prop_formit.store_desc'] = 'Se impostato a vero, immaganizzerà i dati nella cache per il recupero tramite lo snippet FormItRetriever.';
$_lang['prop_formit.storetime_desc'] = 'Se `store` è impostato a vero, questo specifica il numero di secondi di immagazzinamento dei dati dall\'invio del modulo. Predefinito a cinque minuti.';
$_lang['prop_formit.placeholderprefix_desc'] = 'Il prefisso da utilizzare per tutti i placeholders impostati da FormIt per i campi. Predefinito a `fi.`';
$_lang['prop_formit.redirectto_desc'] = 'Se `redirect` è impostato come un hook, questo deve specificare l\'ID della Risorsa a cui reindirizzare.';
$_lang['prop_formit.redirectparams_desc'] = 'Un array JSON di paramentri da passare a l\'hook di reindirizzamento che sarà passato quando si effettua il reindirizzamento.';
$_lang['prop_formit.recaptchajs_desc'] = 'Se `recaptcha` è impostato come un hook, questo può essere un oggetto JSON che sarà impostato alla variabile JS RecaptchaOptions, che configura le opzioni per il reCaptcha.';
$_lang['prop_formit.recaptchaheight_desc'] = 'Se `recaptcha` è impostato come un hook, questo selezionerà l\'altezza del widget reCaptcha.';
$_lang['prop_formit.recaptchatheme_desc'] = 'Se `recaptcha` è impostato come un hook, questo selezionerà un tema per il widget reCaptcha.';
$_lang['prop_formit.recaptchawidth_desc'] = 'Se `recaptcha` è impostato come un hook, questo imposterà la larghezza del widget reCaptcha.';
$_lang['prop_formit.spamemailfields_desc'] = 'Se `spam` è impostato come un hook, una lista di campi separati da virgola contenenti le email da controllare per difendersi dallo spam.';
$_lang['prop_formit.spamcheckip_desc'] = 'Se `spam` è impostato come un hook, e questo è impostato a vero, controllerà anche l\'IP.';
$_lang['prop_formit.emailbcc_desc'] = 'Se `email` è impostato come un hook, allora questo specifica la/le email da spedire come un BCC. Può essere una lista di indirizzi email separati da una virgola.';
$_lang['prop_formit.emailbccname_desc'] = 'Opzionale. Se `email` è impostato come un hook, allora questo deve essere una lista parallela di nome separati da una virgola per gli indirizzi email specificati nella proprietà `emailBCC`.';
$_lang['prop_formit.emailcc_desc'] = 'Se `email` è impostato come un hook, allora questo specifica la/le email da spedire come un CC. Può essere una lista di indirizzi email separati da una virgola.';
$_lang['prop_formit.emailccname_desc'] = 'Opzionale. Se `email` è impostato come un hook, allora questo deve essere una lista parallela di nomi separati da una virgola per gli indirizzi email specificati nella proprietà `emailCC`.';
$_lang['prop_formit.emailto_desc'] = 'Se `email` è impostato come un hook, allora questo specifica la/le email da spedire alla email. Può essere una lista di indirizzi email separati da una virgola.';
$_lang['prop_formit.emailtoname_desc'] = 'Opzionale. Se `email` è impostato come un hook, allora questo deve essere una lista parallela di nomi separati da una virgola per gli indirizzi email specificati nella proprietà `emailTo`.';
$_lang['prop_formit.emailfrom_desc'] = 'Opzionale. Se `email` è impostato come un hook, e questo è impostato, specificherà l\'indirizzo Da: From: per l\'email. Se non è impostato, ricercherà prima un campo `email` del modulo. Se non ne viene trovato nessuno, sarà utilizzato il predefinito `emailsender` delle impostazioni di sistema.';
$_lang['prop_formit.emailfromname_desc'] = 'Opzionale. Se `email` è impostato come un hook, e questo è impostato, specificherà il nome Da: per l\'email.';
$_lang['prop_formit.emailreplyto_desc'] = 'Opzionale. Se `email` è impostato come un hook, e questo è impostato, specificherà l\'indirizzo Rispondi-A: per l\'email.';
$_lang['prop_formit.emailreplytoname_desc'] = 'Opzionale. Se `email` è impostato come un hook, e questo è impostato, specificherà il nome Rispondi-A: per l\'email.';
$_lang['prop_formit.emailsubject_desc'] = 'Se `email` è impostato come un hook, questo è obbligatorio come linea di oggetto per l\'email.';
$_lang['prop_formit.emailusefieldforsubject_desc'] = 'Se il campo `subject` è passato nel modulo, se è impostato a vero, sarà utilizzato il contenuto del campo come linea di oggetto della email.';
$_lang['prop_formit.emailhtml_desc'] = 'Opzionale. Se `email` è impostato come un hook, questo consente di passare le email in HTML o no. Predefinito impostato a vero.';
$_lang['prop_formit.emailconvertnewlines_desc'] = 'Se è vero e emailHtml è impostato a 1, convertirà le nuove linee con il tag BR nella email.';
$_lang['prop_formit.emailmulitseparator_desc'] = 'Il separatore predefinito per le collezioni di voci spedite attraverso checkboxes/multi-selects. Predefiniti impostati a nuovalinea.';
$_lang['prop_formit.emailmultiwrapper_desc'] = 'Conterrà ogni voce in una collezione di campi spediti attraverso checkboxes/multi-selects. Predefiniti a solo il valore.';

/* FormIt Auto-Responder properties */
$_lang['prop_fiar.fiartpl_desc'] = 'Se `FormItAutoResponder` è impostato come un hook, allora questo specifica il template per l\'auto-risposta da spedire come email.';
$_lang['prop_fiar.fiartofield_desc'] = 'Se `FormItAutoResponder` è impostato come un hook, allora questo specifica quale campo del modulo dovrà essere utilizzato per l\'indirizzo A: To: nella email di auto-risposta.';
$_lang['prop_fiar.fiarbcc_desc'] = 'Se `FormItAutoResponder` è impostato come un hook, allora questo specifica la/le email da spedire alla email come un BCC. Può essere una lista di indirizzi email separati da una virgola.';
$_lang['prop_fiar.fiarbccname_desc'] = 'Opzionale. Se `FormItAutoResponder` è impostato come un hook, allora questo deve essere una lista parallela di nomi separati da una virgola per gli indirizzi della email specificati nella propertà `emailBCC`.';
$_lang['prop_fiar.fiarcc_desc'] = 'Se `FormItAutoResponder` è impostato come un hook, allora questo specifica la/le email da spedire alla email come un CC. Può essere una lista di indirizzi email separati da una virgola.';
$_lang['prop_fiar.fiarccname_desc'] = 'Opzionale. Se `FormItAutoResponder` è impostato come un hook, allora questo deve essere una lista parallela di nomi separati da una virgola per gli indirizzi email specificati nella proprietà `emailCC`.';
$_lang['prop_fiar.fiarfrom_desc'] = 'Opzionale. Se `FormItAutoResponder` è impostato come un hook, e questo è impostato, specificherà l\'indirizzo Da: per l\'email. Se non è impostato, ricercherà per primo un campo `email` del modulo. Se nessuno viene trovato, sarà utilizzato come predefinito il `emailsender` delle impostazioni di sistema.';
$_lang['prop_fiar.fiarfromname_desc'] = 'Opzionale. Se `FormItAutoResponder` è impostato come un hook, e questo è impostato, specificherà il nome Da: per l\'email.';
$_lang['prop_fiar.fiarreplyto_desc'] = 'Opzionale. Se `FormItAutoResponder` è impostato come un hook, e questo è impostato, specificherà l\'indirizzo Rispondi-A: per l\'email.';
$_lang['prop_fiar.fiarreplytoname_desc'] = 'Opzionale. Se `FormItAutoResponder` è impostato come un hook, e questo è impostato, specificherà il nome Rispondi-A: per l\'email.';
$_lang['prop_fiar.fiarsubject_desc'] = 'Se `FormItAutoResponder` è impostato come un hook, questo è richiesto come linea di oggetto per le email.';
$_lang['prop_fiar.fiarhtml_desc'] = 'Opzionale. Se `FormItAutoResponder` è impostato come un hook, questo consente di passare le email in HTML o no. Predefinito impostato a vero.';

/* FormItRetriever properties */
$_lang['prop_fir.placeholderprefix_desc'] = 'Il prefisso da utilizzare con i placeholders dai dati del modulo.';
$_lang['prop_fir.redirecttoonnotfound_desc'] = 'Se i dati non sono stati trovati, se questo è impostato, reindirizza alla Risorsa con questo ID.';
$_lang['prop_fir.eraseonload_desc'] = 'Se è vero, cancellerà i dati salvati del modulo al caricamento. E\' fortemente raccomandato di lasciarlo impostato a falso a meno di non volere caricare una sola volta i dati.';

/* FormIt Math hook properties */
$_lang['prop_math.mathminrange_desc'] = 'Se `math` è impostato come un hook, l\'intervallo minimo per ogni numero nell\'equazione.';
$_lang['prop_math.mathmaxrange_desc'] = 'Se `math` è impostato come un hook, l\'intervallo massimo per ogni numero nell\'equazione.';
$_lang['prop_math.mathfield_desc'] = 'Se `math` è impostato come un hook, il nome del campo dell\'input per la risposta.';
$_lang['prop_math.mathop1field_desc'] = 'Se `math` è impostato come un hook, il nome del campo per il primo numero nell\'equazione.';
$_lang['prop_math.mathop2field_desc'] = 'Se `math` è impostato come un hook, il nome del campo per il secondo numero nell\'equazione.';
$_lang['prop_math.mathoperatorfield_desc'] = 'Se `math` è impostato come un hook, il nome del campo per l\'operatore nell\'equazione.';

/* FormIt Options */
$_lang['formit.opt_blackglass'] = 'Bicchiere nero';
$_lang['formit.opt_clean'] = 'Pulito';
$_lang['formit.opt_red'] = 'Rosso';
$_lang['formit.opt_white'] = 'Bianco';