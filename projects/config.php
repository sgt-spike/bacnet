<?php
/** NOTE **
 ** Make sure that <?php is the FIRST line of this file!
 ** IE: There should NOT be any blank lines or spaces BEFORE <?php
 **/

 /*********************************************
  * Useful important configuration overrides  *
  *********************************************/

 /* If you are asked to put PLA in debug mode, this is how you do it: */
 $config->custom->debug['level'] = 0;
 $config->custom->debug['syslog'] = true;
 #  $config->custom->debug['file'] = '/tmp/pla_debug.log';

/**
 * The phpLDAPadmin config file
 * See: http://phpldapadmin.sourceforge.net/wiki/index.php/Config.php
 */

/* The temporary storage directory where we will put jpegPhoto data
   This directory must be readable and writable by your web server. */
 $config->custom->jpeg['tmpdir'] = '/var/www/tmp';

 /* phpLDAPadmin can encrypt the content of sensitive cookies if you set this
   to a big random string. */

/*
 * Autogenerated value will be automatically added by phpldapadmin/startup.sh
 */
 $config->custom->session['blowfish'] = 'N1`v0{UoZlhkJJz@%JY39]5#Mg?YXFo5UN!=`j.cH*+LG:2cW>*h(3;3_gbNg:Ym';


/*********************************************
 * Appearance                                *
 *********************************************/
/* Hide the warnings for invalid objectClasses/attributes in templates. */
$config->custom->appearance['hide_template_warning'] = true;



/*********************************************
 * User-friendly attribute translation       *
 *********************************************/

/* Use this array to map attribute names to user friendly names. For example, if
   you don't want to see "facsimileTelephoneNumber" but rather "Fax". */
// $config->custom->appearance['friendly_attrs'] = array();
$config->custom->appearance['friendly_attrs'] = array(
        'facsimileTelephoneNumber' => 'Fax',
        'gid'                      => 'Group',
        'mail'                     => 'Email',
        'telephoneNumber'          => 'Telephone',
        'uid'                      => 'User Name',
        'userPassword'             => 'Password'
);


/*********************************************
 * Define your LDAP servers in this section  *
 *********************************************/

$servers = new Datastore();

/*
 * Autogenerated servers variables will come here
 */
$servers->newServer('ldap_pla');
$servers->setValue('server','host','ldap.example.org');
$servers->setValue('server','name','ldap.example.org');
$servers->setValue('server','tls',true);
$servers->setValue('login','bind_id','cn=admin,dc=example,dc=org');
$servers->newServer('ldap_pla');
$servers->setValue('server','name','ldap2.example.org');
$servers->setValue('server','host','ldap2.example.org');
$servers->newServer('ldap_pla');
$servers->setValue('server','name','ldap3.example.org');
$servers->setValue('server','host','ldap3.example.org');